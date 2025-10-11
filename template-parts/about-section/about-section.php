<?php
/**
 * About Section - Секция О хостеле
 * Используется на главной странице
 */

// Получаем данные из настроек
$section_title = get_field('about_section_title', 'option');
$gallery_images = get_field('about_section_gallery', 'option');
$description = get_field('about_section_description', 'option');
$button_text = get_field('about_section_button_text', 'option');
$button_link = get_field('about_section_button_link', 'option');

// Генерируем уникальный ID
$unique_id = 'aboutSection-' . uniqid();
$carousel_id = 'aboutCarousel-' . $unique_id;
$gallery_id = 'aboutGallery-' . $unique_id;
?>

<section class="about-section section bg-light">
    <div class="container">
        <?php if ($section_title): ?>
        <div class="row">
            <div class="col text-md-center">
                <h2><?php echo esc_html($section_title); ?></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5" alt="Decoration" />
            </div>
        </div>
        <?php endif; ?>

        <div class="row justify-content-between about_box">
            <!-- Слайдер Bootstrap -->
            <div class="col-12 col-lg-6 order-2 order-lg-first text-center">
                <?php if ($gallery_images && is_array($gallery_images)): ?>
                <div id="<?php echo esc_attr($carousel_id); ?>" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <?php foreach ($gallery_images as $index => $image): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <a onclick="aboutSectionGalleryOn('<?php echo esc_js($gallery_id); ?>', 'img-<?php echo esc_js($gallery_id); ?>-<?php echo $index; ?>');">
                                <div class="single-product-img approximation">
                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                         class="d-block w-100" 
                                         loading="lazy" 
                                         alt="<?php echo esc_attr($image['alt'] ?: $image['title']); ?>" />
                                    <div class="magnifier"></div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if (count($gallery_images) > 1): ?>
                    <!-- Кнопки навигации -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Описание -->
            <div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-3 mb-lg-0 description_about">
                <?php if ($description): ?>
                    <?php echo wp_kses_post($description); ?>
                <?php endif; ?>

                <?php if ($button_text && $button_link): ?>
                <a href="<?php echo esc_url($button_link); ?>" type="button" class="btn btn-corporate-color-1">
                    <?php echo esc_html($button_text); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if ($gallery_images && is_array($gallery_images)): ?>
<!-- ABOUT SECTION GALLERY -->
<div id="galleryWrapper-<?php echo esc_attr($gallery_id); ?>" style="background: rgba(0, 0, 0, 0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999">
    <div id="<?php echo esc_attr($gallery_id); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="position: fixed; top: 0; height: 100%; width: 100%">
        
        <?php if (count($gallery_images) > 1): ?>
        <div class="carousel-indicators">
            <?php foreach ($gallery_images as $index => $image): ?>
            <button id="ind-<?php echo esc_attr($gallery_id); ?>-<?php echo $index; ?>" 
                    type="button" 
                    data-bs-target="#<?php echo esc_attr($gallery_id); ?>" 
                    data-bs-slide-to="<?php echo $index; ?>" 
                    aria-label="Slide <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="carousel-inner h-100">
            <?php foreach ($gallery_images as $index => $image): ?>
            <div id="img-<?php echo esc_attr($gallery_id); ?>-<?php echo $index; ?>" class="carousel-item h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo esc_url($image['url']); ?>" 
                             class="img-fluid lazyload" 
                             loading="lazy" 
                             style="max-width: 90vw; max-height: 90vh" 
                             alt="<?php echo esc_attr($image['alt'] ?: $image['title']); ?>" />
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if (count($gallery_images) > 1): ?>
        <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo esc_attr($gallery_id); ?>" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#<?php echo esc_attr($gallery_id); ?>" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <?php endif; ?>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" 
            onclick="aboutSectionGalleryClose('<?php echo esc_js($gallery_id); ?>');" 
            class="btn-close btn-close-white" 
            style="position: fixed; top: 25px; right: 25px; z-index: 99999" 
            aria-label="Close"></button>
</div>

<script>
    function aboutSectionGalleryOn(galleryId, imageId) {
        var wrapper = document.getElementById('galleryWrapper-' + galleryId);
        var gallery = document.getElementById(galleryId);
        var image = document.getElementById(imageId);
        var indicators = document.querySelectorAll('#' + galleryId + ' .carousel-indicators button');
        
        if (wrapper && gallery) {
            wrapper.style.display = 'block';
            document.body.style.overflow = 'hidden';
            
            if (image) {
                // Убираем active со всех слайдов и индикаторов
                var allItems = document.querySelectorAll('#' + galleryId + ' .carousel-item');
                allItems.forEach(function(item) {
                    item.classList.remove('active');
                });
                indicators.forEach(function(ind) {
                    ind.classList.remove('active');
                });
                
                // Добавляем active к выбранному слайду
                image.classList.add('active');
                
                // Находим и активируем соответствующий индикатор
                var imageIndex = imageId.split('-').pop();
                var indicator = document.getElementById('ind-' + galleryId + '-' + imageIndex);
                if (indicator) {
                    indicator.classList.add('active');
                }
            }
        }
    }

    function aboutSectionGalleryClose(galleryId) {
        var wrapper = document.getElementById('galleryWrapper-' + galleryId);
        var gallery = document.getElementById(galleryId);
        
        if (wrapper) {
            wrapper.style.display = 'none';
            document.body.style.overflow = '';
            
            // Убираем active со всех элементов
            var allItems = document.querySelectorAll('#' + galleryId + ' .carousel-item');
            var indicators = document.querySelectorAll('#' + galleryId + ' .carousel-indicators button');
            
            allItems.forEach(function(item) {
                item.classList.remove('active');
            });
            indicators.forEach(function(ind) {
                ind.classList.remove('active');
            });
        }
    }
</script>
<?php endif; ?>