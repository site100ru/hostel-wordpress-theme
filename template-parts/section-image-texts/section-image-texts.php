<?php
/**
 * Block Name: Секция с галереей и текстом (с модальным окном)
 * Description: Секция с каруселью изображений, текстом и модальным окном для просмотра
 */

// Получаем данные из полей ACF
$section_title = get_field('section_title');
$image_position = get_field('image_position') ?: 'left';
$background_color = get_field('background_color') ?: 'light';
$gallery_images = get_field('gallery_images');
$content = get_field('content');
$show_breadcrumbs = get_field('show_breadcrumbs');
$breadcrumb_text = get_field('breadcrumb_text');
$show_title_decoration = get_field('show_title_decoration');

// Генерируем уникальные ID для карусели и модального окна
$unique_id = 'gallery-' . uniqid();
$carousel_id = 'carousel-' . $unique_id;
$modal_id = 'modal-' . $unique_id;

// Определяем классы фона
$bg_class = '';
$text_class = 'text-dark';
switch ($background_color) {
    case 'light':
        $bg_class = 'bg-light';
        $text_class = 'text-dark';
        break;
    case 'dark':
        $bg_class = 'bg-dark';
        $text_class = 'text-light';
        break;
    case 'white':
        $bg_class = 'bg-white';
        $text_class = 'text-dark';
        break;
}
?>

<section class="section <?php echo esc_attr($bg_class); ?> <?php echo esc_attr($text_class); ?> section-about service-page section-grid">
    <div class="container">
        
        <?php if ($show_breadcrumbs && $breadcrumb_text): ?>
        <div class="row" style="margin: -30px 0 30px 0">
            <div class="col breadcrumbs_box ps-0">
                <div class="breadcrumbs">
                    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                        <a href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg" alt="Home" />
                        </a>
                        / <?php echo esc_html($breadcrumb_text); ?>
                    </nav>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($section_title): ?>
        <div class="section-title text-md-center">
            <h3 class="<?php echo esc_attr($text_class); ?> fw-semibold"><?php echo esc_html($section_title); ?></h3>
            <?php if ($show_title_decoration): ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Decoration" class="img-fluid" />
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="row justify-content-center">
            
            <?php if ($image_position === 'right'): ?>
            <!-- Текстовый блок слева -->
            <div class="col-12 col-md-6 col-xl-5 <?php echo esc_attr($text_class); ?> order-1 order-md-1">
                <?php if ($content): ?>
                <div class="content-wrapper">
                    <?php echo wp_kses_post($content); ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="d-none d-xl-block col-xl-1 order-2 order-md-2"></div>

            <!-- Галерея справа -->
            <div class="col-12 col-md-6 col-xl-6 mb-4 mb-md-0 section-image order-3 order-md-3">
            <?php else: ?>
            <!-- Галерея слева -->
            <div class="col-12 col-md-6 col-xl-6 mb-4 mb-md-0 section-image order-1 order-md-1">
            <?php endif; ?>
            
                <?php if ($gallery_images && is_array($gallery_images)): ?>
                <div id="<?php echo esc_attr($carousel_id); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                    <div class="carousel-inner rounded">
                        <?php foreach ($gallery_images as $index => $image): ?>
                        <!-- Слайд <?php echo $index + 1; ?> -->
                        <div class="carousel-item gallery-2691-wrapper <?php echo $index === 0 ? 'active' : ''; ?>">
                            <button class="gallery-2691 button-gallery" onClick="galleryOn('<?php echo esc_js($modal_id); ?>', <?php echo $index; ?>);">
                                <div class="single-product-img approximation img-wrapper position-relative">
                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                         class="d-block w-100" 
                                         loading="lazy" 
                                         alt="<?php echo esc_attr($image['alt'] ?: $image['title']); ?>" />
                                    <div class="overlay">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Zoom" class="zoom-icon" />
                                    </div>
                                </div>
                            </button>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <?php if (count($gallery_images) > 1): ?>
                    <!-- Кнопки навигации слайдера -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                
            </div>

            <?php if ($image_position === 'left'): ?>
            <div class="d-none d-xl-block col-xl-1 order-2 order-md-2"></div>

            <!-- Текстовый блок справа -->
            <div class="col-12 col-md-6 col-xl-5 <?php echo esc_attr($text_class); ?> order-3 order-md-3">
                <?php if ($content): ?>
                <div class="content-wrapper">
                    <?php echo wp_kses_post($content); ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>

<?php if ($gallery_images && is_array($gallery_images)): ?>
<!-- Модальное окно для галереи -->
<div id="galleryWrapper-<?php echo esc_attr($modal_id); ?>" class="gallery-modal-wrapper" style="background: rgba(0, 0, 0, 0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999">
    
    <!-- Модальное окно для слайдера -->
    <div id="<?php echo esc_attr($modal_id); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="position: fixed; top: 0; height: 100%; width: 100%">
        <div class="carousel-inner h-100">
            <?php foreach ($gallery_images as $index => $image): ?>
            <div class="carousel-item carousel-item-2 h-100 <?php echo $index === 0 ? 'active' : ''; ?>">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             class="img-fluid" 
                             loading="lazy" 
                             style="max-width: 75vw; max-height: 75vh" 
                             alt="<?php echo esc_attr($image['alt'] ?: $image['title']); ?>" />
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php if (count($gallery_images) > 1): ?>
        <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo esc_attr($modal_id); ?>" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#<?php echo esc_attr($modal_id); ?>" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <?php endif; ?>
    </div>

    <!-- Кнопка закрытия -->
    <button type="button" onClick="closeGallery('<?php echo esc_js($modal_id); ?>');" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>
<?php endif; ?>