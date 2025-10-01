<?php

/**
 * Template Name: Одиночный номер
 * Template Post Type: apartments
 */

get_header();

// Получаем ACF поля
$price = get_field('apartment_price');
$gallery = get_field('apartment_gallery');
$prices_repeater = get_field('apartment_prices_repeater');

// ID поста для уникальных ID элементов
$post_id = get_the_ID();
?>

<!-- Single Product Section -->
<section class="section text-dark section-about service-page section-grid">
    <div class="container single-product">
        <div class="row" style="margin: -30px 0 30px 0">
            <div class="col breadcrumbs_box ps-0">
                <div class="breadcrumbs">
                    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                        <a href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg">
                        </a> /
                        <a href="<?php echo get_post_type_archive_link('apartments'); ?>">Номера и цены</a> /
                        <?php the_title(); ?>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Галерея изображений -->
            <div class="col-12 col-md-6 mb-4 mb-md-0 section-image">
                <?php if ($gallery && !empty($gallery)): ?>
                    <div id="carousel-<?php echo $post_id; ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                        <div class="carousel-inner rounded">
                            <?php foreach ($gallery as $index => $image): ?>
                                <div class="carousel-item gallery-2691-wrapper gallery-<?php echo $post_id; ?>-wrapper <?php echo $index === 0 ? 'active' : ''; ?>">
                                    <button class="gallery-2691 gallery-<?php echo $post_id; ?> button-gallery" onClick="galleryOn('gallery-<?php echo $post_id; ?>');">
                                        <div class="single-product-img approximation img-wrapper position-relative">
                                            <img src="<?php echo esc_url($image['url']); ?>"
                                                class="d-block w-100"
                                                loading="lazy"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <div class="overlay">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg"
                                                    alt="Zoom"
                                                    class="zoom-icon" />
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if (count($gallery) > 1): ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php echo $post_id; ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php echo $post_id; ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php elseif (has_post_thumbnail()): ?>
                    <div class="single-product-img">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded')); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Пустая колонка -->
            <div class="d-none d-xl-block col-xl-1"></div>

            <!-- Описание номера -->
            <div class="col text-dark text-start" style="padding-right: 0">
                <div class="woocommerce-product-details__short-description">
                    <?php the_content(); ?>
                </div>

                <?php if ($price): ?>
                    <p><strong><?php echo esc_html($price); ?>/сутки</strong></p>
                <?php endif; ?>

                <button class="btn btn-corporate-color-1 mt-2 text-light"
                    data-bs-toggle="modal"
                    data-bs-target="#callbackModal">
                    Забронировать
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Wrapper -->
<?php if ($gallery && !empty($gallery)): ?>
    <div id="galleryWrapper" style="background: rgba(0, 0, 0, 0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999">
        <div id="gallery-<?php echo $post_id; ?>"
            class="carousel slide"
            data-bs-ride="false"
            data-bs-interval="false"
            style="display: none; position: fixed; top: 0; height: 100%; width: 100%">
            <div class="carousel-inner h-100">
                <?php foreach ($gallery as $index => $image): ?>
                    <div class="carousel-item carousel-item-2 h-100 <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="row align-items-center h-100">
                            <div class="col text-center">
                                <img src="<?php echo esc_url($image['url']); ?>"
                                    class="img-fluid"
                                    loading="lazy"
                                    style="max-width: 75vw; max-height: 75vh"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (count($gallery) > 1): ?>
                <button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post_id; ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post_id; ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            <?php endif; ?>
        </div>

        <!-- Кнопка закрытия галереи -->
        <button type="button"
            onClick="closeGallery();"
            class="btn-close btn-close-white"
            style="position: fixed; top: 25px; right: 25px; z-index: 99999"
            aria-label="Close"></button>
    </div>
<?php endif; ?>

<!-- Цены на дополнительные услуги -->
<?php if ($prices_repeater && !empty($prices_repeater)): ?>
    <section class="section prices-section bg-light">
        <div class="container">
            <div class="section-title text-md-center">
                <h3 class="text-dark fw-semibold">Цены на дополнительные услуги</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg"
                    alt="Декоративный элемент"
                    class="img-fluid" />
            </div>

            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <?php foreach ($prices_repeater as $price_item): ?>
                                    <tr>
                                        <td>
                                            <span><?php echo esc_html($price_item['service_name']); ?></span>
                                        </td>
                                        <td class="text-end">
                                            <span class="price-discount"><?php echo esc_html($price_item['service_price']); ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<script>
    /* Функция открытия галереи */
    function galleryOn(gal) {
        var gallery = gal;
        document.getElementById('galleryWrapper').style.display = 'block';
        document.getElementById(gallery).style.display = 'block';
    }

    /* Кнопка закрытия галереи */
    function closeGallery() {
        document.getElementById('galleryWrapper').style.display = 'none';
        document.getElementById('gallery-<?php echo $post_id; ?>').style.display = 'none';
    }
</script>

<?php get_footer(); ?>