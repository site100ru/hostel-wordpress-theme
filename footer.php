<!-- CONTACTS SECTION 4 -->
<section class="contacts-section-4">
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
                    'theme_location' => 'footer-menu',
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
                <a href="tel:+78008808088" class="contacts-phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-2" style="position: relative; bottom: 1px" />
                    8 800 880-80-88
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col py-4">
                <ul class="nav justify-content-center align-items-center">
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link" href="#">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span>
                                        гор. Рязань,
                                        <br />
                                        ул. Березовая,
                                        <br />
                                        д. 1Д-К
                                    </span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1 me-lg-2">
                        <a class="nav-link" href="#">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span>
                                        Пн-Вс,
                                        <br />
                                        круглосуточно
                                    </span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
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
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" class="pt-1" />
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
                        <a class="nav-link ico-button px-2" href="https://wa.me/79265930177?web=1&amp;app_absent=1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://t.me/+79265930177">
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
                                    <span>гор. Рязань, ул. Березовая, д. 1Д-К</span>
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
                                    <span>Пн-Вс, круглосуточно</span>
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
                        <a href="#" class="nav-link ps-0 pt-2" data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div style="display: flex" class="align-items-center">
                                <div class="nav-li-float-left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
                                </div>
                                <div class="nav-li-float-right">
                                    <span class="bron">Забронировать</span>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <a href="tel:+78008808088" class="contacts-phone">
                    <div style="display: flex" class="align-items-center">
                        <div class="nav-li-float-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" style="position: relative; bottom: 1px" />
                        </div>
                        <div class="nav-li-float-right">8 (800) 880-80-88</div>
                        <div style="clear: both"></div>
                    </div>
                </a>
                <ul class="nav pt-4 pb-3">
                    <li class="nav-item">
                        <a class="nav-link ico-button ps-0 pe-2" href="https://wa.me/79265930177?web=1&amp;app_absent=1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button px-2" href="https://t.me/+79265930177">
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

<!-- Показываем сообщение об успешной отправки -->
<div style="display: none" onclick="modalClose();">
    <div id="background-msg" style="display: none"></div>
    <button
        id="btn-close"
        type="button"
        class="btn-close btn-close-white"
        onclick="modalClose();"
        style="position: absolute; z-index: 9999; top: 15px; right: 15px"></button>
    <div id="message"></div>
</div>

<!-- Callback Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="#callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="mails/callback-mail.php" class="modal-content">
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

<!-- Bootstrap Bundle with Popper -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>

<!-- Theme JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>

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

<?php wp_footer(); ?>
</body>

</html>