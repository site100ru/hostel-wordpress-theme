<?php

/**
 * Archive template for Apartments
 */

get_header();
?>

<!-- Archive portfolio section -->
<section class="archive-portfolio-section-2 section" style="margin-bottom: 60px">
    <div class="container">
        <div class="row" style="margin: -30px 0 30px 0">
            <div class="col breadcrumbs_box ps-0">
                <div class="breadcrumbs">
                    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                        <a href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg" />
                        </a>
                        / Номера и цены
                    </nav>
                </div>
            </div>
        </div>

        <div class="section-title text-md-center mb-5">
            <h3 class="text-dark">Номера и цены на проживание в хостеле</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Описание изображения" class="img-fluid" />
        </div>

        <!-- Фильтры по категориям -->
        <div class="row text-md-center">
            <div class="col mb-5">
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'apartment_category',
                    'hide_empty' => true,
                ));

                if ($terms && !is_wp_error($terms)) :
                    foreach ($terms as $term) :
                ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input filter-checkbox" type="checkbox" id="filter-<?php echo $term->term_id; ?>" value="<?php echo esc_attr($term->slug); ?>" />
                            <label class="form-check-label" for="filter-<?php echo $term->term_id; ?>"><?php echo esc_html($term->name); ?></label>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>

        <div class="row text-start">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
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

                    // Получаем категории для data-атрибута
                    $terms = get_the_terms(get_the_ID(), 'apartment_category');
                    $category_slugs = array();
                    if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            $category_slugs[] = $term->slug;
                        }
                    }
                    $data_category = !empty($category_slugs) ? implode(' ', $category_slugs) : '';
                ?>
                    <div class="col col-md-6 col-xl-4 pb-3 mb-3 mb-md-5 portfolio-item" data-category="<?php echo esc_attr($data_category); ?>">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                            <div class="card h-100">
                                <img src="<?php echo esc_url($card_image); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>" />
                                <div class="card-body">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if (has_excerpt()) : ?>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <?php endif; ?>
                                    <?php if ($price) : ?>
                                        <p class="card-text"><strong><?php echo esc_html($price); ?></strong></p>
                                    <?php endif; ?>
                                    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-start align-items-md-center">
                                        <button
                                            type="button"
                                            class="btn btn-corporate-color-1 mt-0 me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#callbackModal"
                                            onclick="event.stopPropagation(); event.preventDefault();">
                                            Забронировать
                                        </button>
                                        <span class="text-muted mt-2 mt-md-0 mx-md-auto"><strong>Узнать подробнее</strong></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-12">
                    <p class="text-center">Номера не найдены.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php
        $pagination = paginate_links(array(
            'mid_size' => 2,
            'prev_text' => '←',
            'next_text' => '→',
            'type' => 'array'
        ));

        if ($pagination) :
        ?>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center text-corporate-1">
                    <?php foreach ($pagination as $page) : ?>
                        <li class="page-item"><?php echo str_replace('page-numbers', 'page-link', $page); ?></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        <?php endif; ?>
    </div>
</section>
<!-- /Archive-portfolio section -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.filter-checkbox');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', filterPortfolio);
        });

        function filterPortfolio() {
            const selectedFilters = Array.from(checkboxes)
                .filter((cb) => cb.checked)
                .map((cb) => cb.value);

            portfolioItems.forEach((item) => {
                if (selectedFilters.length === 0) {
                    item.classList.remove('hidden');
                } else {
                    const itemCategories = item.dataset.category.split(' ');
                    const hasMatch = selectedFilters.some((filter) => itemCategories.includes(filter));

                    if (hasMatch) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                }
            });
        }
    });
</script>

<?php get_footer(); ?>