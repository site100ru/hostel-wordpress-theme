<?php

/**
 * Template Name: Контакты
 * Template Post Type: page
 **/

include 'header.php';

?>


<div class="site-wrap min-home" style="height: auto; z-index: auto;">
    <!-- Header -->
    <div class="site-navbar-wrap">
        <div class="parallax-home-section" style="min-height: 640px;"></div>
        <div id="sp-home" class="scroll-points"></div>
        <header class="d-none d-lg-block">
            <!-- Header nav top -->
            <nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block py-0">
                <div class="container">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto align-items-center">
                            <li class="nav-item me-1 me-xxl-3">
                                <a class="nav-link" href="#">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right">
                                            гор. Рязань,<br>ул. Березовая,<br>д. 1Д-К
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-3">
                                <a class="nav-link" href="#">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right">
                                            Пн-Вс,<br>круглосуточно
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-3">
                                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right max-width-1400">
                                            Обратный звонок
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-4">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right max-width-1400">
                                            Забронировать
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item me-1 me-xxl-4">
                                <a class="top-menu-tel nav-link" href="tel:88008808088">
                                    <div style="display: flex;">
                                        <div class="nav-li-float-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg">
                                        </div>
                                        <div class="nav-li-float-right" style="min-width: 128px;">
                                            8 (800) 880-80-88
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://t.me/+79265930177">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button" href="https://wa.me/79265930177?web=1&app_absent=1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /Header nav top -->

            <!-- Header nav bottom -->
            <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-0">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mobail-header-collapse">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'mobail-header-collapse',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '
									<ul id="%1$s" class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0 %2$s">%3$s
										<!-- Mobile menu -->
										<li class="nav-item d-lg-none">
											<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</a>
										</li>
										<li class="nav-item d-lg-none">
											<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">Забронировать</a>
										</li>
										<li class="nav-item d-lg-none">
											<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
												<img src="' . get_template_directory_uri() . '/img/ico/location-ico.svg" style="width: 10px;" class="me-1">
													<span>гор. Рязань, ул. Березовая, д. 1Д-К</span>
											</div>
											<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:88008808088">8 (800) 880-80-88</a>
											<div class="mb-2" style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
												<img src="' . get_template_directory_uri() . '/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 2px;" class="me-1 mb-2">Пн-Вс, круглосуточно
											</div>
										</li>
										<li class="nav-item d-lg-none pb-4">
											<a class="ico-button pe-2" href="https://wa.me/79265930177?web=1&app_absent=1">
												<img src="' . get_template_directory_uri() . '/img/ico/whatsapp-ico.svg">
											</a>
											<a class="ico-button pe-0" href="https://t.me/+79265930177">
												<img src="' . get_template_directory_uri() . '/img/ico/telegram-ico.svg">
											</a>
										</li>	
										<!-- End mobile menu -->
									</ul>
								',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>
                </div>
            </nav>
            <!-- /Header nav bottom -->
        </header>


        <header id="sliding-header" class="shadow">
            <!-- Header nav bottom -->
            <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark.svg">
                    </a>

                    <div class="d-lg-none">
                        <a class="top-menu-tel pt-1 pb-0" style="font-size: 14px;" href="tel:88008808088">
                            8 (800) 880-80-88</a>
                        <div style="font-size: 10px; font-family: Gilroy-Light; text-transform: none;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
                                style="width: 12px; position: relative; top: -1px;" class="me-1">Пн-Вс, круглосуточно
                        </div>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#sliding-header-collapse" aria-controls="sliding-header-collapse"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="sliding-header-collapse">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'sliding-header-collapse',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '
									<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s
										<!-- Mobile menu -->
										<li class="nav-item d-lg-none">
											<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</a>
										</li>
										<li class="nav-item d-lg-none">
											<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">Забронировать</a>
										</li>
										<li class="nav-item d-lg-none">
											<div style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
												<img src="' . get_template_directory_uri() . '/img/ico/location-ico.svg" style="width: 10px; position: relative; top: -2px;" class="me-1">
												<span>гор. Рязань, ул. Березовая, д. 1Д-К</span>
											</div>
											<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:88008808088">8 (800) 880-80-88</a>
											<div class="mb-2" style="font-size: 12px; font-family: Gilroy-Light; text-transform: none;">
												<img src="' . get_template_directory_uri() . '/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 3px;" class="me-1 mb-2">Пн-Вс, круглосуточно
											</div>
										</li>
										<li class="nav-item d-lg-none pb-2">
											<a class="ico-button pe-2" href="https://wa.me/79265930177?web=1&app_absent=1">
												<img src="' . get_template_directory_uri() . '/img/ico/whatsapp-ico.svg">
											</a>
											<a class="ico-button pe-0" href="https://t.me/+79265930177">
												<img src="' . get_template_directory_uri() . '/img/ico/telegram-ico.svg">
											</a>
										</li>	
										<!-- End mobile menu -->
									</ul>
								',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>

                </div>
            </nav>
            <!-- /Header nav bottom -->
        </header><!-- site-navbar -->
        <div class="container">
            <div class="row align-items-center home-section-height">
                <div class="col-xl-10 col-xxl-9">
                    <h1 class="home-title text-light">Контакты</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="archive-products-section site-section bg-white"
    style="padding-bottom: 60px; padding-top: 0; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs pt-4">
                    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg">
                        </a> /
                        Контакты
                    </nav>
                </div>
            </div>
        </div>
        <div class="container" style="padding: 0;">
            <div class="row">
                <div class="col text-dark text-md-center">
                    <h2 class="mb-3">Контакты</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg"
                        class="mb-5 mx-md-auto d-block">
                    <div class="container" style="margin-top: 60px;">
                        <div class="row section-contacts contacts">
                            <!-- 1 блок -->
                            <div class="col-12 col-md-6 col-xl-3 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg"
                                        alt="Адрес" class="me-3 img-fluid" />
                                    <p class="mb-0 text-min-text">
                                        гор. Рязань, ул. Березовая, д. 1Д-К
                                    </p>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg"
                                        alt="GPS" class="me-3 img-fluid" />
                                    <p class="mb-0 text-min-text">GPS: 54.600854, 39.721651</p>
                                </div>
                            </div>

                            <!-- 2 блок -->
                            <div class="col-12 col-md-6 col-xl-3 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
                                        alt="Время работы" class="me-3 img-fluid" />
                                    <p class="mb-0 text-min-text">Пн-Вс, круглосуточно</p>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico-blue.svg"
                                        alt="Телефон" class="me-3 img-fluid" />
                                    <a href="tel:+74912808888" class="text-decoration-none">8 (4912) 80-88-88</a>
                                </div>
                            </div>

                            <!-- 3 блок -->
                            <div class="col-12 col-md-6 col-xl-3 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg"
                                        alt="Телефон" class="me-3 img-fluid" />
                                    <a href="tel:+74912808888" class="text-decoration-none">8 (4912) 80-88-88</a>
                                </div>

                                <div class="d-flex align-items-center mb-4 flex-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico-blue.svg"
                                        alt="Телефон" class="me-3 img-fluid" />
                                    <a href="tel:+78008808088" class="text-decoration-none">8 (800) 880-80-88</a>
                                </div>
                            </div>

                            <!-- 4 блок -->
                            <div class="col-12 col-md-12 col-xl-3 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg"
                                        alt="Обратный звонок" class="me-3 img-fluid" />
                                    <button class="nav-link d-flex align-items-center gap-3 gap-md-2 gap-xl-3 lh-1"
                                        data-bs-toggle="modal" data-bs-target="#callbackModal">
                                        Обратный звонок
                                    </button>
                                </div>

                                <div class="d-flex align-items-center mb-4 flex-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg"
                                        alt="Email" class="me-3 img-fluid" />
                                    <a href="mailto:mail@mail.ru" class="text-decoration-none">mail@mail.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-md-center" style="margin-top: 60px;">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2"
                                    href="https://wa.me/79265930177?web=1&amp;app_absent=1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2" href="https://t.me/+79265930177">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2" href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2" href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Yandex Map -->
<section class="archive-products-section site-section bg-white"
    style="padding-bottom: 60px; z-index: 10; position: relative;">
    <div class="container">
        <div class="row">
            <section id="map" style="height: 650px; border-radius: 10px;"></section>
        </div>
    </div>
</section>

<!-- API Yandex map -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=7a322092-0e89-4de6-8bff-0a1795b5548e&lang=ru_RU"
    type="text/javascript"></script>

<script type="text/javascript">
    ymaps.ready(init);
    
    var screenWidth = document.documentElement.clientWidth;
    if (screenWidth > 1000) {
        var center = [54.600561, 39.721627];
        var zoom = 17;
    } else {
        var center = [54.600561, 39.721627];
        var zoom = 15;
    }
    
    function init() {
        var myMap = new ymaps.Map("map", {
            center: center,
            zoom: zoom
        });

        var myPlacemark = new ymaps.Placemark([54.600561, 39.721627], {}, {
            iconLayout: 'default#image',
            iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/placemark.png',
            iconImageSize: [240, 240],
            iconImageOffset: [-143, -230]
        });

        myMap.behaviors.disable('scrollZoom');
        myMap.geoObjects.add(myPlacemark);
    }
</script>



<?php include 'footer.php'; ?>