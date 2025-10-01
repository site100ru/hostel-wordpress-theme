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
                                    <div class="nav-link d-flex align-items-center gap-3 gap-md-2 gap-xl-3 lh-1 nav-link-text" style="cursor: pointer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
                                        гор. Рязань,
                                        <br />
                                        ул. Березовая,
                                        <br />
                                        д. 1Д-К
                                    </div>
                                </li>
                                <li class="nav-item me-3 me-md-1 me-xl-5">
                                    <div class="nav-link d-flex align-items-center gap-3 gap-md-2 gap-xl-3 lh-1 nav-link-text" style="cursor: pointer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
                                        Пн-Вс,
                                        <br />
                                        круглосуточно
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
                                    <a class="top-menu-tel nav-link" href="tel:+78008808088">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" />
                                        8 (800) 880-80-88
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link ico-button" href="https://t.me/+79265930177">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" />
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link ico-button" href="https://wa.me/79265930177?web=1&amp;app_absent=1">
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
                            <a class="top-menu-tel nav-link" href="tel:+74994082271"> +7 499 408 22 71 </a>

                            <p class="nav-link d-flex align-items-center gap-3 lh-1 mb-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
                                Ежедневно
                                <br />с 9:00 до 21:00
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
                            <ul class="navbar-nav align-items-start align-items-lg-center ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>" href="<?php echo home_url('/'); ?>">Главная</a>
                                </li>
                                <li class="nav-item d-none d-lg-inline">
                                    <img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_post_type_archive('apartments') || is_singular('apartments') ? 'active' : ''; ?>" href="<?php echo get_post_type_archive_link('apartments'); ?>">Номера и цены</a>
                                </li>

                                <li class="nav-item d-none d-lg-inline">
                                    <img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_page('about'); ?>" href="<?php echo get_permalink(get_page_by_path('about')); ?>">О хостеле</a>
                                </li>

                                <li class="nav-item d-none d-lg-inline">
                                    <img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_page('contacts'); ?>" href="<?php echo get_permalink(get_page_by_path('contacts')); ?>">Контакты</a>
                                </li>
                            </ul>
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
                                <a class="top-menu-tel nav-link" href="tel:+78008808088"> 8 (800) 880-80-88 </a>

                                <p class="nav-link d-flex align-items-center gap-3 lh-1 mb-0" style="font-size: 14px">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
                                    Пн-Вс,
                                    <br />
                                    круглосуточно
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
                            <ul class="navbar-nav align-items-start align-items-lg-center ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>" href="<?php echo home_url('/'); ?>">Главная</a>
                                </li>
                                <li class="nav-item d-none d-lg-inline">
                                    <img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_post_type_archive('apartments') || is_singular('apartments') ? 'active' : ''; ?>" href="<?php echo get_post_type_archive_link('apartments'); ?>">Номера и цены</a>
                                </li>

                                <li class="nav-item d-none d-lg-inline">
                                    <img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_page('about'); ?>" href="<?php echo get_permalink(get_page_by_path('about')); ?>">О хостеле</a>
                                </li>

                                <li class="nav-item d-none d-lg-inline">
                                    <img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-decoration-point.svg" />
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo is_page('contacts'); ?>" href="<?php echo get_permalink(get_page_by_path('contacts')); ?>">Контакты</a>
                                </li>
                            </ul>
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
                        <a class="top-menu-tel pt-1 pb-0" style="font-size: 14px" href="tel:+78008808088">8 (800) 880-80-88</a>
                        <div style="font-size: 10px; font-family: Gilroy; font-weight: 300; text-transform: none">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
                                style="width: 12px; position: relative; top: -1px"
                                class="me-1" />Пн-Вс, круглосуточно
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

                    <div class="navbar-collapse collapse" id="sliding-header-collapse">
                        <ul id="menu-main-menu" class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="<?php echo home_url('/'); ?>" class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo get_post_type_archive_link('apartments'); ?>" class="nav-link <?php echo is_post_type_archive('apartments') || is_singular('apartments') ? 'active' : ''; ?>">Номера и цены</a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="nav-link <?php echo is_page('about') ? 'active' : ''; ?>">О хостеле</a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo get_permalink(get_page_by_path('contacts')); ?>" class="nav-link <?php echo is_page('contacts') ? 'active' : ''; ?>">Контакты</a>
                            </li>

                            <li class="nav-item d-lg-none">
                                <button class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</button>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#callbackModal">Забронировать</button>
                            </li>

                            <li class="nav-item d-lg-none">
                                <div style="font-size: 12px; font-family: HelveticaNeueCyr; text-transform: none; font-weight: 300">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" style="width: 13px" class="me-1" />
                                    <span>гор. Рязань, ул. Березовая, д. 1Д-К</span>
                                </div>
                                <a class="nav-link top-menu-tel pt-1 pb-1" href="tel:+78008808088">8 (800) 880-80-88</a>
                                <div class="mb-2" style="font-size: 12px; font-family: HelveticaNeueCyr; text-transform: none; font-weight: 300">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 2px" class="me-1 mb-2" />
                                    Пн-Вс, круглосуточно
                                </div>
                            </li>
                            <li class="nav-item d-lg-none pb-4">
                                <a class="ico-button pe-0" href="https://t.me/+79265930177">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" />
                                </a>

                                <a class="ico-button pe-2" href="https://wa.me/79265930177?web=1&amp;app_absent=1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
                                </a>
                            </li>
                            <!-- End mobile menu -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /Header nav bottom -->
        </header>
        <div class="container">
            <div class="row align-items-center home-section-height">
                <div class="col">
                    <h1 class="home-title home-title-main mb-0 pb-0">
                        <?php
                        if (is_singular()) {
                            the_title();
                        } elseif (is_post_type_archive('apartments')) {
                            echo 'Номера и цены';
                        } elseif (is_archive()) {
                            the_archive_title();
                        } elseif (is_search()) {
                            echo 'Результаты поиска: ' . get_search_query();
                        } elseif (is_404()) {
                            echo 'Страница не найдена';
                        } else {
                            bloginfo('name');
                        }
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home section -->