<?php

/**
 * Block Name: Секция с текстом
 * Description: Простая секция с заголовком и текстовым содержимым
 */

// Получаем данные из полей ACF
$section_title = get_field('section_title');
$background_color = get_field('background_color') ?: 'none';
$content = get_field('content');
$show_title_decoration = get_field('show_title_decoration');

// Определяем класс фона
$bg_class = $background_color === 'light' ? 'bg-light' : '';
?>

<section class="section text-dark <?php echo esc_attr($bg_class); ?>">
    <div class="container">

        <?php if ($section_title): ?>
            <div class="section-title text-md-center">
                <!-- Заголовок -->
                <h3 class="text-dark fw-semibold"><?php echo esc_html($section_title); ?></h3>

                <?php if ($show_title_decoration): ?>
                    <!-- Изображение по центру -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Decoration" class="img-fluid" />
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <?php if ($content): ?>
                    <?php echo wp_kses_post($content); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>