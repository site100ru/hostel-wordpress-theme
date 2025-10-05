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
                        <?php
                        // Получаем все данные из настроек темы
                        $address = get_theme_mod('mytheme_address', 'гор. Рязань, ул. Березовая, д. 1Д-К');
                        $gps = get_theme_mod('mytheme_gps', '54.600854, 39.721651');
                        $job_time = get_theme_mod('mytheme_job_time', 'Пн-Вс, круглосуточно');
                        $email = get_theme_mod('mytheme_email', 'mail@mail.ru');
                        
                        // Основной телефон
                        $country_code = get_theme_mod('mytheme_main_phone_country_code', '8');
                        $region_code = get_theme_mod('mytheme_main_phone_region_code', '800');
                        $phone_number = get_theme_mod('mytheme_main_phone_number', '880-80-88');
                        $main_phone_display = $country_code . ' (' . $region_code . ') ' . $phone_number;
                        $main_phone_link = preg_replace('/[^0-9+]/', '', $country_code . $region_code . $phone_number);
                        
                        // Дополнительные телефоны
                        $additional_phone_1 = get_theme_mod('mytheme_additional_phone_1', '8 (4912) 80-88-88');
                        $additional_phone_1_link = preg_replace('/[^0-9+]/', '', $additional_phone_1);
                        
                        $additional_phone_2 = get_theme_mod('mytheme_additional_phone_2', '8 (800) 880-80-88');
                        $additional_phone_2_link = preg_replace('/[^0-9+]/', '', $additional_phone_2);
                        
                        // Социальные сети
                        $telegram = get_theme_mod('mytheme_telegram', 'https://t.me/+79265930177');
                        $whatsapp = get_theme_mod('mytheme_whatsapp', 'https://wa.me/79265930177?web=1&app_absent=1');
                        ?>
                        
                        <div class="row section-contacts contacts">
                            <!-- 1 блок -->
                            <div class="col-12 col-md-6 col-xl-3 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg"
                                        alt="Адрес" class="me-3 img-fluid" />
                                    <p class="mb-0 text-min-text">
                                        <?php echo esc_html($address); ?>
                                    </p>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg"
                                        alt="GPS" class="me-3 img-fluid" />
                                    <p class="mb-0 text-min-text">GPS: <?php echo esc_html($gps); ?></p>
                                </div>
                            </div>

                            <!-- 2 блок -->
                            <div class="col-12 col-md-6 col-xl-3 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg"
                                        alt="Время работы" class="me-3 img-fluid" />
                                    <p class="mb-0 text-min-text"><?php echo esc_html($job_time); ?></p>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico-blue.svg"
                                        alt="Телефон" class="me-3 img-fluid" />
                                    <a href="tel:<?php echo esc_attr($main_phone_link); ?>" class="text-decoration-none"><?php echo esc_html($main_phone_display); ?></a>
                                </div>
                            </div>

                            <!-- 3 блок -->
                            <div class="col-12 col-md-6 col-xl-3 mb-0 mb-md-4">
                                <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg"
                                        alt="Телефон" class="me-3 img-fluid" />
                                    <a href="tel:<?php echo esc_attr($additional_phone_1_link); ?>" class="text-decoration-none"><?php echo esc_html($additional_phone_1); ?></a>
                                </div>

                                <div class="d-flex align-items-center mb-4 flex-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico-blue.svg"
                                        alt="Телефон" class="me-3 img-fluid" />
                                    <a href="tel:<?php echo esc_attr($additional_phone_2_link); ?>" class="text-decoration-none"><?php echo esc_html($additional_phone_2); ?></a>
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
                                    <a href="mailto:<?php echo esc_attr($email); ?>" class="text-decoration-none"><?php echo esc_html($email); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-md-center" style="margin-top: 60px;">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2" href="<?php echo esc_url($whatsapp); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ico-button px-2" href="<?php echo esc_url($telegram); ?>">
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