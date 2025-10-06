<?php
/**
 * Template Name: Главная страница
 * The main template file
 */

get_header();
?>

<!-- Наиболее популярные номера и цены -->
<section class="about-section section">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>Наиболее популярные номера и цены</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5" />
            </div>
        </div>

        <div class="row">
            <?php
            // Получаем термин "Популярные"
            $popular_term = get_term_by('slug', 'populyarnye', 'apartment_category');

            // Если категория не найдена по slug, пробуем по имени
            if (!$popular_term) {
                $popular_term = get_term_by('name', 'Популярные', 'apartment_category');
            }

            // Запрос записей
            $args = array(
                'post_type' => 'apartments',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            // Если найдена категория "Популярные", фильтруем по ней
            if ($popular_term) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'apartment_category',
                        'field' => 'term_id',
                        'terms' => $popular_term->term_id,
                    ),
                );
            }

            $popular_apartments = new WP_Query($args);

            if ($popular_apartments->have_posts()) :
                while ($popular_apartments->have_posts()) : $popular_apartments->the_post();
                    $price = get_field('apartment_price');
                    $gallery = get_field('apartment_gallery');

                    // Определяем изображение для карточки
                    if (has_post_thumbnail()) {
                        $card_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    } elseif ($gallery && !empty($gallery)) {
                        $card_image = $gallery[0]['url'];
                    } else {
                        $card_image = get_template_directory_uri() . '/img/card-image-1.jpg';
                    }
            ?>
                    <div class="col col-md-6 col-xl-4 pb-3 mb-3 mb-md-5">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                            <div class="card h-100">
                                <img src="<?php echo esc_url($card_image); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>" />
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if (has_excerpt()) : ?>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <?php endif; ?>
                                    <?php if ($price) : ?>
                                        <p class="card-text"><strong><?php echo esc_html($price); ?></strong></p>
                                    <?php endif; ?>
                                    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-start align-items-md-center mt-auto">
                                        <button
                                            type="button"
                                            class="btn btn-corporate-color-1 mt-0 me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#bookingModal"
                                            onclick="event.stopPropagation(); event.preventDefault();">
                                            Забронировать
                                        </button>
                                        <span class="text-muted mt-2 mt-md-0 mx-md-auto"><strong>Узнать подробнее</strong></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-12">
                    <p class="text-center">Популярные номера не найдены.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="row text-center">
            <div class="col">
                <a href="<?php echo get_post_type_archive_link('apartments'); ?>" type="button" class="btn btn-corporate-color-1 mt-3">Показать все номера</a>
            </div>
        </div>
    </div>
</section>
<!-- /Наиболее популярные номера и цены -->

<!-- ABOUT SECTION -->
<section class="about-section section bg-light">
    <div class="container">
        <div class="row">
            <div class="col text-md-center">
                <h2>О хостеле</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5" />
            </div>
        </div>
        <!-- Слайдер Bootstrap -->
        <div class="row justify-content-between about_box">
            <div class="col-12 col-lg-6 order-2 order-lg-first text-center">
                <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-1');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-1.jpg" class="d-block w-100" loading="lazy" alt="..." />
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a onclick="aboutSectionGalleryOn('aboutSectionGallery','imgAboutSectionGallery-2');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-2.jpg" class="d-block w-100" loading="lazy" alt="..." />
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Кнопки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
            <!-- Описание -->
            <div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-3 mb-lg-0 description_about">
                <p class="text-start">
                    Наш Хостел является одним из комфортных и уютных по проживанию мини-гостиниц города, расположенный в районе Городской Рощи.
                </p>
                <p class="text-start">
                    Его удачное расположение позволяет за короткий отрезок времени добраться до достопримечательностей и центра города, до деловых и
                    торговых центров. Рядом с хостелом небольшая парковка для автотранспорта, недалеко остановка общественного транспорта.
                </p>
                <p class="text-start">
                    Наш хостел в Рязани всегда рад гостям города. Мы предоставляем номера для проживания различной комфортности. Если вы приехали
                    большой компанией, то есть условия размещения в номерах для 4-х, 6-ти человек.
                </p>

                <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" type="button" class="btn btn-corporate-color-1">
                    Узнать подробнее
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT SECTION -->

<!-- /ABOUT SECTION GALLERY -->
<div id="aboutSectionGalleryWrapper">
    <div id="aboutSectionGallery" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%">
        <div class="carousel-indicators">
            <button id="indAboutSectionGallery-1" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button id="indAboutSectionGallery-2" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner h-100">
            <div id="imgAboutSectionGallery-1" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-1.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh" alt="..." />
                    </div>
                </div>
            </div>
            <div id="imgAboutSectionGallery-2" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-2.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh" alt="..." />
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSectionGallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onclick="aboutSectionGalleryClose();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>
<!-- /ABOUT SECTION GALLERY -->

<!-- /ABOUT SECTION GALLERY SCRIPT -->
<script>
    /* Gallery opening function */
    function aboutSectionGalleryOn(gal, img) {
        var gallery = gal;
        var image = img;
        document.getElementById('aboutSectionGalleryWrapper').style.display = 'block';
        if (gallery == 'aboutSectionGallery') {
            document.getElementById('aboutSectionGallery').style.display = 'block';
        }
        if (image == 'imgAboutSectionGallery-1') {
            document.getElementById('imgAboutSectionGallery-1').classList.add('active');
            document.getElementById('indAboutSectionGallery-1').classList.add('active');
        }
        if (image == 'imgAboutSectionGallery-2') {
            document.getElementById('imgAboutSectionGallery-2').classList.add('active');
            document.getElementById('indAboutSectionGallery-2').classList.add('active');
        }
    }

    function aboutSectionGalleryClose() {
        document.getElementById('aboutSectionGalleryWrapper').style.display = 'none';
        document.getElementById('aboutSectionGallery').style.display = 'none';
        document.getElementById('imgAboutSectionGallery-1').classList.remove('active');
        document.getElementById('indAboutSectionGallery-1').classList.remove('active');
        document.getElementById('imgAboutSectionGallery-2').classList.remove('active');
        document.getElementById('indAboutSectionGallery-2').classList.remove('active');
    }
</script>
<!-- /ABOUT SECTION GALLERY SCRIPT -->



<!-- Advantage section -->
<section class="advantage section">
    <div class="container">
        <div class="row">
            <div class="col align-items-center text-md-center">
                <h2>Преимущества хостела</h2>
                <p class="advantages">Почему стоит выбрать хостел «Городской»</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5" />

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-1.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Круглосуточная стойка регистрации.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-2.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Ежедневная уборка номеров и зон общего пользования.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-3.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Комфортные спальные места в общих номерах.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-4.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Семейные номера до 4 человек.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-5.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Номера «Люкс» с двуспальной кроватью.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-6.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Душевая комната и с/у в каждом номере (всегда горячая вода в душе).</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-7.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Фен во всех с/узлах.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-8.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Утюг и гладильная доска.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-9.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Кухня с бытовой техникой и посудой.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-10.svg" class="img-fluid" />
                            </div>
                            <div class="col-9 col-md-10">
                                <h3 class="advantage-title text-start">Завтраки (за дополнительную плату).</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Advantage section -->


<?php
// Получаем отзывы из WordPress
$reviews_query = new WP_Query([
    'post_type' => 'reviews',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
]);
?>

<section class="reviews-section section bg-light">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Отзывы о нас в независимых источниках</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="" class="img-fluid section-decor mb-5" />
            </div>
        </div>

        <div class="row">
            <div class="col text-center mb-3 pb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/yandex-logo.svg" class="mb-3" />
                <div class="review-rating mb-3 d-flex align-items-md-end justify-content-center gap-4">
                    <div>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars" /></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars" /></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars" /></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars" /></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars" /></i>
                    </div>
                    <p class="mb-0" style="font-size: 18px; line-height: 1">4,9 из 5</p>
                </div>
            </div>
        </div>

        <?php if ($reviews_query->have_posts()): ?>
            <div class="row">
                <?php
                $counter = 0;
                while ($reviews_query->have_posts()):
                    $reviews_query->the_post();
                    $counter++;

                    // Получаем данные отзыва
                    $company = get_the_title();
                    $review_date = get_post_meta(get_the_ID(), 'review_date', true);
                    $rating = get_post_meta(get_the_ID(), 'review_rating', true) ?: 5;
                    $full_text = get_the_content();

                    // Обрезаем текст (примерно 30 слов = 6 строк)
                    $words = explode(' ', $full_text);
                    $preview_words = 30;

                    if (count($words) > $preview_words) {
                        $preview = implode(' ', array_slice($words, 0, $preview_words));
                        $remaining = implode(' ', array_slice($words, $preview_words));
                        $need_more = true;
                    } else {
                        $preview = $full_text;
                        $remaining = '';
                        $need_more = false;
                    }

                    $review_id = 'review-' . get_the_ID();
                ?>

                    <div class="col-lg-4 col-md-6 <?php echo $counter > 1 ? 'mt-4' : ''; ?> <?php echo $counter > 2 ? 'mt-lg-0' : ''; ?> <?php echo $counter == 2 ? 'mt-md-0' : ''; ?>">
                        <div class="review-card rounded h-100">
                            <div class="review-header d-flex align-items-center mb-3 justify-content-center justify-content-md-start">
                                <div class="review-photo me-3">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('thumbnail', ['class' => 'rounded-circle', 'width' => 50, 'height' => 50, 'alt' => esc_attr($company)]); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/avatar.svg" alt="<?php echo esc_attr($company); ?>" class="rounded-circle" width="50" height="50" />
                                    <?php endif; ?>
                                </div>
                                <div class="review-info">
                                    <p class="review-title mb-0"><?php echo esc_html($company); ?></p>
                                    <p class="review-date text-muted small mb-0"><?php echo esc_html($review_date); ?></p>
                                </div>
                            </div>

                            <div class="review-rating mb-3 text-center text-md-start">
                                <?php for ($i = 0; $i < $rating; $i++): ?>
                                    <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars" /></i>
                                <?php endfor; ?>
                            </div>

                            <div class="review-text">
                                <p class="mb-0">
                                    <span class="review-preview">
                                        <?php echo esc_html($preview); ?></span>
                                    <?php if ($need_more): ?>
                                        <span class="review-dots">...</span>
                                    <?php endif; ?>
                                </p>

                                <?php if ($need_more): ?>
                                    <div class="collapse" id="<?php echo $review_id; ?>">
                                        <p class="mb-0">
                                            <?php echo esc_html($remaining); ?>
                                        </p>
                                    </div>
                                    <a class="btn btn-link btn-link-review p-0 text-decoration-none review-toggle" style="text-decoration: none; color: #323232; font-weight: 400; font-family: 'Roboto'" data-bs-toggle="collapse" href="#<?php echo $review_id; ?>">
                                        Читать далее
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>

            <!-- Кнопка "Показать все отзывы" -->
            <div class="row text-center mt-4">
                <div class="col">
                    <a href="https://yandex.ru/" target="_blank" class="btn btn-corporate-color-1">Все отзывы</a>
                </div>
            </div>

        <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Для каждой кнопки "Читать далее"
        document.querySelectorAll('.review-toggle').forEach(function(button) {
            const collapseId = button.getAttribute('href').substring(1);
            const collapseElement = document.getElementById(collapseId);
            const reviewText = button.closest('.review-text');
            const dots = reviewText.querySelector('.review-dots');

            // Слушаем события Bootstrap Collapse
            collapseElement.addEventListener('shown.bs.collapse', function() {
                if (dots) dots.style.display = 'none';
                button.textContent = 'Скрыть';
            });

            collapseElement.addEventListener('hidden.bs.collapse', function() {
                if (dots) dots.style.display = 'inline';
                button.textContent = 'Читать далее';
            });
        });
    });
</script>

<!-- Остальные секции: Преимущества и Отзывы -->
<!-- Вставьте сюда HTML код секций Advantage и Reviews из документа -->

<!-- FOOTER -->
<?php get_footer(); ?>
</body>

</html>