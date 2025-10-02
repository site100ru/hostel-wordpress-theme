<?php

/**
 * Template Name: Контакты
 * Template Post Type: page
 **/

include 'header.php';

?>

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
            iconImageOffset: [-110, -230]
        });

        myMap.behaviors.disable('scrollZoom');
        myMap.geoObjects.add(myPlacemark);
    }
</script>



<?php include 'footer.php'; ?>