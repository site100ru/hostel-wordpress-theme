<!-- CONTACTS SECTION 4 -->
<section class="contacts-section-4">
    <?php
    // Получаем все контакты из настроек темы
    $country_code = get_theme_mod('mytheme_main_phone_country_code', '8');
    $region_code = get_theme_mod('mytheme_main_phone_region_code', '800');
    $phone_number = get_theme_mod('mytheme_main_phone_number', '880-80-88');
    $phone_display = $country_code . ' (' . $region_code . ') ' . $phone_number;
    $phone_link = preg_replace('/[^0-9+]/', '', $country_code . $region_code . $phone_number);
    $address = get_theme_mod('mytheme_address', 'гор. Рязань, ул. Березовая, д. 1Д-К');
    $job_time = get_theme_mod('mytheme_job_time', 'Пн-Вс, круглосуточно');
    $telegram = get_theme_mod('mytheme_telegram', 'https://t.me/+79265930177');
    $whatsapp = get_theme_mod('mytheme_whatsapp', 'https://wa.me/79265930177?web=1&app_absent=1');
    ?>

    <!-- Desktop version -->
    <div class="container py-5 d-none d-xl-block">
        <div class="row align-items-center">
            <div class="col-xl-2">
                <a href="<?php echo home_url('/'); ?>">
                    <img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid" />
                </a>
            </div>
            <div class="col-xl-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu-1',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul class="nav justify-content-center">%3$s</ul>',
                    'depth' => 1,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
            <div class="col-xl-2 text-end">
                <a href="tel:<?php echo esc_attr($phone_link); ?>" class="contacts-phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-2" style="position: relative; bottom: 1px" />
                    <?php echo esc_html($phone_display); ?>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col py-4">
                <ul class="nav justify-content-center align-items-center">
                    <li class="nav-item me-1 me-lg-2">
                        <div class="nav-link" style="cursor: pointer;">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
                                </div>
                                <div class="nav-li-float-right tel">
                                    <span><?php echo nl2br(esc_html($address)); ?></span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <div class="nav-link" style="cursor: pointer;">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1" />
                                </div>
                                <div class="nav-li-float-right time">
                                    <span><?php echo nl2br(esc_html($job_time)); ?></span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span>Обратный звонок</span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#bookingModal">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico-blue.svg" class="pt-1" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span class="bron">Забронировать</span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($whatsapp); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($telegram); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-ico.svg" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.svg" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Desktop version -->

    <!-- Mobile version -->
    <div class="container d-xl-none">
        <div class="row">
            <div class="col py-5">
                <a href="<?php echo home_url('/'); ?>">
                    <img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid" />
                </a>
                <ul class="ps-0 pt-3 pb-2">
                    <li class="nav-item">
                        <a href="#" class="nav-link ps-0 pb-2">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span><?php echo esc_html($address); ?></span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ps-0 py-2">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span><?php echo esc_html($job_time); ?></span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ps-0 py-2" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span>Обратный звонок</span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ps-0 pt-2" data-bs-toggle="modal" data-bs-target="#bookingModal">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico-blue.svg" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span class="bron">Забронировать</span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <a href="tel:<?php echo esc_attr($phone_link); ?>" class="contacts-phone">
                    <div style="display: flex" class="align-items-center">
                        <div class="nav-li-float-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" style="position: relative; bottom: 1px" />
                        </div>
                        <div class="nav-li-float-right"><?php echo esc_html($phone_display); ?></div>
                        <div style="clear: both"></div>
                    </div>
                </a>
                <ul class="nav pt-4 pb-3">
                    <li class="nav-item">
                        <a class="nav-link ico-button ps-0 pe-2" href="<?php echo esc_url($whatsapp); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="<?php echo esc_url($telegram); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-ico.svg" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.svg" />
                        </a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-8 pt-4 pt-lg-2">
                        <div class="row d-xl-none justify-content-center">
                            <div class="col-6 left-col-footer-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu-left',
                                    'container' => false,
                                    'menu_class' => 'navbar-nav ms-auto mb-lg-0',
                                    'fallback_cb' => '__return_false',
                                    'depth' => 1,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
                            </div>
                            <div class="col-6 right-col-footer-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu-right',
                                    'container' => false,
                                    'menu_class' => 'navbar-nav ms-auto mb-lg-0',
                                    'fallback_cb' => '__return_false',
                                    'depth' => 1,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Mobile version -->

    <!-- Footer -->
    <footer style="padding: 29px 0">
        <div class="container">
            <div class="row">
                <div class="col text-start text-md-center">
                    <div id="im-in-footer">
                        Создание и продвижение сайтов:
                        <a href="https://site100.ru" class="text-light">site100.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
</section>
<!-- /CONTACTS SECTION 4 -->

<?php wp_footer(); ?>

<!-- Callback Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="#callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="#callbackModalLabel">Обратный звонок</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p><small>Мы свяжемся с Вами в теченее 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required="" inputmode="text" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button
                    type="submit"
                    style="border-radius: 0.5rem; background-color: var(--corporate-color-1); border-color: var(--corporate-color-1)"
                    class="btn-lg btn btn-corporate-color-1 mx-auto">
                    Жду звонка
                </button>
            </div>
        </form>
    </div>
</div>
<!-- /Callback Modal -->

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/booking-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Оставить заявку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3 mb-lg-4">
                    <div class="col-lg-4 col-12 mb-3 mb-lg-0">
                        <label for="surname-input" class="form-label">Фамилия *</label>
                        <input type="text" class="form-control" name="surname" id="surname-input" required>
                    </div>
                    <div class="col-lg-4 col-12 mb-3 mb-lg-0">
                        <label for="name-input" class="form-label">Имя *</label>
                        <input type="text" class="form-control" name="name" id="name-input" required>
                    </div>
                    <div class="col-lg-4 col-12">
                        <label for="patronymic-input" class="form-label">Отчество *</label>
                        <input type="text" class="form-control" name="patronymic" id="patronymic-input" required>
                    </div>
                </div>

                <div class="row mb-3 mb-lg-4">
                    <div class="col-lg-4 col-12 mb-3 mb-lg-0">
                        <label for="phone-input" class="form-label">Телефон *</label>
                        <input type="tel" class="form-control telMask" name="tel" id="phone-input" required>
                    </div>
                    <div class="col-lg-4 col-12 mb-md-0">
                        <label for="email-input" class="form-label">Email *</label>
                        <input type="email" class="form-control" name="email" id="email-input" required>
                    </div>
                </div>

                <div class="row mb-3 mb-lg-4">
                    <div class="col-lg-4 col-12 mb-3 mb-lg-0">
                        <label for="checkin-input" class="form-label">Дата приезда *</label>
                        <input type="date" class="form-control" name="checkin" id="checkin-input" required>
                    </div>
                    <div class="col-lg-4 col-12 mb-3 mb-lg-0">
                        <label for="checkout-input" class="form-label">Дата отъезда *</label>
                        <input type="date" class="form-control" name="checkout" id="checkout-input" required>
                    </div>
                    <div class="col-lg-4 col-12">
                        <label for="guests-input" class="form-label">Количество гостей *</label>
                        <input type="number" class="form-control" name="guests" id="guests-input" min="1" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="apartment-select" class="form-label">Название номера *</label>
                        <select class="form-select form-control" name="apartment" id="apartment-select" required>
                            <option value=""></option>
                            <?php
                            $apartments = get_posts(array(
                                'post_type' => 'apartments',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC'
                            ));
                            foreach ($apartments as $apartment) {
                                echo '<option value="' . esc_attr($apartment->post_title) . '">' . esc_html($apartment->post_title) . '</option>';
                            }
                            ?>
                        </select>

                        <p class="form-label mb-0 pt-4 mt-2">Поля отмеченные * обязательны для заполнения.</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer" style="width: 100%;">
                <div class="col-lg-4 col-12 mb-3 mb-lg-0" style="margin: 0; padding-right: 16px;">
                    <button type="submit" class="btn btn-corporate-color-1 w-100">
                        Забронировать
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Booking Modal -->

<!-- Bootstrap Bundle with Popper -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>

<!-- Theme JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>

<!-- Показываем сообщение об успешной отправки -->
<div style="display: <?php echo $_SESSION['display'] ?>;" onclick="modalClose();">
    <div id="background-msg" style="display: <?php echo $_SESSION['display'] ?>;"></div>
    <button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();"
        style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
    <div id="message">
        <?php echo $_SESSION['recaptcha'];
        unset($_SESSION['recaptcha']); ?>
    </div>
</div>

<script>
    vyezjalo();
</script>

<!-- Telephone number mask -->
<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
    var telMask = document.getElementsByClassName('telMask');
    var im = new Inputmask('+7(999)999-99-99');
    im.mask(telMask);
</script>

<?php if ($counter_body = get_theme_mod('mytheme_counter_body')): ?>
    <!-- Код счетчика (body) -->
    <?php echo $counter_body; ?>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>