<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Home section -->
    <div id="sp-home" class="scroll-points"></div>
    <section class="main-home-section min-home single-home">
        <div class="parallax-home-section"></div>
        <section class="d-none d-lg-block">
            <!-- Header nav top -->
            <header class="d-block header-top py-0">
                <nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block py-1 py-lg-0">
                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav ms-auto align-items-center">
                                <li class="nav-item me-3 me-md-1 me-xl-5">
                                    <div class="nav-link d-flex align-items-center gap-3 gap-md-2 gap-xl-3 lh-1 nav-link-text map" style="cursor: pointer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
                                        <?php 
                                        $address = get_theme_mod('mytheme_address', 'гор. Рязань, ул. Березовая, д. 1Д-К');
                                        echo nl2br(esc_html($address));
                                        ?>
                                    </div>
                                </li>
                                <li class="nav-item me-3 me-md-1 me-xl-5">
                                    <div class="nav-link d-flex align-items-center gap-3 gap-md-2 gap-xl-3 lh-1 nav-link-text time" style="cursor: pointer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
                                        <?php 
                                        $job_time = get_theme_mod('mytheme_job_time', 'Пн-Вс, круглосуточно');
                                        echo nl2br(esc_html($job_time));
                                        ?>
                                    </div>
                                </li>

                                <li class="nav-item me-3 me-md-1 me-xl-5">
                                    <button
                                        class="nav-link d-flex align-items-center gap-3 gap-md-2 gap-xl-3 lh-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#callbackModal">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" />
                                        Обратный звонок
                                    </button>
                                </li>

                                <li class="nav-item me-3 me-md-1 me-xl-5">
                                    <button
                                        class="top-menu-tel nav-link d-flex align-items-center gap-3 gap-md-2 gap-xl-3 lh-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#callbackModal">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
                                        Забронировать
                                    </button>
                                </li>

                                <li class="nav-item me-3 me-md-1 me-xl-5">
                                    <?php 
                                    $country_code = get_theme_mod('mytheme_main_phone_country_code', '8');
                                    $region_code = get_theme_mod('mytheme_main_phone_region_code', '800');
                                    $phone_number = get_theme_mod('mytheme_main_phone_number', '880-80-88');
                                    $phone_display = $country_code . ' (' . $region_code . ') ' . $phone_number;
                                    $phone_link = preg_replace('/[^0-9+]/', '', $country_code . $region_code . $phone_number);
                                    ?>
                                    <a class="top-menu-tel nav-link" href="tel:<?php echo esc_attr($phone_link); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" />
                                        <?php echo esc_html($phone_display); ?>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <?php 
                                    $telegram = get_theme_mod('mytheme_telegram', 'https://t.me/+79265930177');
                                    ?>
                                    <a class="nav-link ico-button" href="<?php echo esc_url($telegram); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" />
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <?php 
                                    $whatsapp = get_theme_mod('mytheme_whatsapp', 'https://wa.me/79265930177?web=1&app_absent=1');
                                    ?>
                                    <a class="nav-link ico-button" href="<?php echo esc_url($whatsapp); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <hr class="hr-top" />
                <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg" />
                        </a>

                        <div class="d-none d-sm-block d-lg-none flex-column top-menu-tel-wrapper gap-1 my-2">
                            <?php 
                            $country_code = get_theme_mod('mytheme_main_phone_country_code', '8');
                            $region_code = get_theme_mod('mytheme_main_phone_region_code', '800');
                            $phone_number = get_theme_mod('mytheme_main_phone_number', '880-80-88');
                            $phone_display = $country_code . ' (' . $region_code . ') ' . $phone_number;
                            $phone_link = preg_replace('/[^0-9+]/', '', $country_code . $region_code . $phone_number);
                            ?>
                            <a class="top-menu-tel nav-link" href="tel:<?php echo esc_attr($phone_link); ?>"> <?php echo esc_html($phone_display); ?> </a>

                            <p class="nav-link d-flex align-items-center gap-3 lh-1 mb-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
                                <?php 
                                $job_time = get_theme_mod('mytheme_job_time', 'Пн-Вс, круглосуточно');
                                echo nl2br(esc_html($job_time));
                                ?>
                            </p>
                        </div>

                        <button
                            class="navbar-toggler mx-3 me-0 mx-lg-auto"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#mobail-header-collapse"
                            aria-controls="mobail-header-collapse"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mobail-header-collapse">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'mobail-header-collapse',
                                'container' => false,
                                'menu_class' => 'navbar-nav align-items-start align-items-lg-center ms-auto mb-2 mb-lg-0',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- /Header nav top -->

            <!-- Header nav bottom -->
            <header id="sliding-header" class="shadow">
                <!-- Header nav bottom -->
                <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-lg-0">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark.svg" />
                        </a>

                        <div class="d-lg-none">
                            <div class="d-none d-sm-block d-lg-none flex-column top-menu-tel-wrapper gap-1 my-2">
                                <?php 
                                $country_code = get_theme_mod('mytheme_main_phone_country_code', '8');
                                $region_code = get_theme_mod('mytheme_main_phone_region_code', '800');
                                $phone_number = get_theme_mod('mytheme_main_phone_number', '880-80-88');
                                $phone_display = $country_code . ' (' . $region_code . ') ' . $phone_number;
                                $phone_link = preg_replace('/[^0-9+]/', '', $country_code . $region_code . $phone_number);
                                ?>
                                <a class="top-menu-tel nav-link" href="tel:<?php echo esc_attr($phone_link); ?>"> <?php echo esc_html($phone_display); ?> </a>

                                <p class="nav-link d-flex align-items-center gap-3 lh-1 mb-0" style="font-size: 14px">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
                                    <?php 
                                    $job_time = get_theme_mod('mytheme_job_time', 'Пн-Вс, круглосуточно');
                                    echo nl2br(esc_html($job_time));
                                    ?>
                                </p>
                            </div>
                        </div>

                        <button
                            class="navbar-toggler mx-3 me-0 mx-lg-auto"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#sliding-header-collapse"
                            aria-controls="sliding-header-collapse"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="sliding-header-collapse">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'sliding-header-collapse',
                                'container' => false,
                                'menu_class' => 'navbar-nav align-items-start align-items-lg-center ms-auto mb-2 mb-lg-0',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
                        </div>
                    </div>
                </nav>
                <!-- /Header nav bottom -->
            </header>
            <!-- /Header nav bottom -->
        </section>

        <header id="sliding-header" class="shadow">
            <!-- Header nav bottom -->
            <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark.svg" />
                    </a>

                    <div class="d-lg-none">
                        <?php 
                        $country_code = get_theme_mod('mytheme_main_phone_country_code', '8');
                        $region_code = get_theme_mod('mytheme_main_phone_region_code', '800');
                        $phone_number = get_theme_mod('mytheme_main_phone_number', '880-80-88');
                        $phone_display = $country_code . ' (' . $region_code . ') ' . $phone_number;
                        $phone_link = preg_replace('/[^0-9+]/', '', $country_code . $region_code . $phone_number);
                        $job_time = get_theme_mod('mytheme_job_time', 'Пн-Вс, круглосуточно');
                        ?>
                        <a class="top-menu-tel pt-1 pb-0" style="font-size: 14px" href="tel:<?php echo esc_attr($phone_link); ?>"><?php echo esc_html($phone_display); ?></a>
                        <div style="font-size: 10px; font-family: Gilroy; font-weight: 300; text-transform: none">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
                                style="width: 12px; position: relative; top: -1px"
                                class="me-1" /><?php echo esc_html($job_time); ?>
                        </div>
                    </div>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#sliding-header-collapse"
                        aria-controls="sliding-header-collapse"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="sliding-header-collapse-mobile">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>
                </div>
            </nav>
            <!-- /Header nav bottom -->
        </header>
        <div class="container">
            <div class="row align-items-center home-section-height">
                <div class="col">
                    <?php if (is_front_page() || is_home()): ?>
                        <h1 class="home-title home-title-main mb-3 mb-xl-4 pb-0 pb-xl-3">Хостел «ГОРОДСКОЙ»</h1>
                        <h2 class="home-subtitle home-title-main mb-3 mb-xl-4 pb-0 pb-xl-3">Новый и современный хостел в Рязани</h2>
                        <a href="#" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModal">Забронировать</a>
                    <?php else: ?>
                        <h1 class="home-title home-title-main mb-0 pb-0">
                            <?php
                            if (is_singular()) {
                                the_title();
                            } elseif (is_post_type_archive('apartments')) {
                                echo 'Номера и цены';
                            } elseif (is_archive()) {
                                the_archive_title();
                            } elseif (is_404()) {
                                echo 'Страница не найдена';
                            } else {
                                bloginfo('name');
                            }
                            ?>
                        </h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home section -->