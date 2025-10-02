<?php

/**
 * Template Name: О хостеле
 */

get_header();
?>

<section class="section text-dark section-about service-page section-grid">
    <div class="container">
        <div class="row" style="margin: -30px 0 30px 0">
            <div class="col breadcrumbs_box ps-0">
                <div class="breadcrumbs">
                    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                        <a href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg" />
                        </a>
                        / О хостеле
                    </nav>
                </div>
            </div>
        </div>

        <div class="section-title text-md-center">
            <h3 class="text-dark fw-semibold">Мини - отель «Городской»</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Описание изображения" class="img-fluid" />
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-xl-6 mb-4 mb-md-0 section-image">
                <div id="carousel-2691" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                    <div class="carousel-inner rounded">
                        <!-- Слайд 1 -->
                        <div class="carousel-item gallery-2691-wrapper active">
                            <button class="gallery-2691 button-gallery" onClick="galleryOn('gallery-2691');">
                                <div class="single-product-img approximation img-wrapper position-relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-1.jpg" class="d-block w-100" loading="lazy" alt="..." />
                                    <div class="overlay">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Zoom" class="zoom-icon" />
                                    </div>
                                </div>
                            </button>
                        </div>
                        <!-- Слайд 2 -->
                        <div class="carousel-item gallery-2691-wrapper">
                            <button class="gallery-2691 button-gallery" onClick="galleryOn('gallery-2691');">
                                <div class="single-product-img approximation img-wrapper position-relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-2.jpg" class="d-block w-100" loading="lazy" alt="..." />
                                    <div class="overlay">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Zoom" class="zoom-icon" />
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Кнопки навигации слайдера -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-2691" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-2691" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="d-none d-xl-block col-xl-1"></div>

            <div class="col-12 col-md-6 col-xl-5 text-dark">
                <p class="fw-light">
                    Концепция мини - отеля предполагает недорогое размещение в номерах, в которых есть все самое необходимое. Небольшой, но очень уютный
                    мини - отель располагается в самом зеленом районе города Рязани, рядом Центральный парк культуры и Отдыха, в 3 минутах пешком
                    остановка общественного транспорта, на автомобиле 15 минут до центра города, 5 минут до Северной окружной дороги. Вы легко
                    доберетесь до любого уголка города, будь то пешком, на общественном транспорте или такси. В шаговой доступности находятся магазины
                    «Магнит» и «Пятерочка» (с горячей выпечкой и зерновым кофе). Каждая комната мини – отеля оснащена удобной кроватью, тумбочками,
                    розетками для зарядки ваших устройств, электрическими чайниками, а также предусмотрены шкафы для хранения вещей. Для
                    самостоятельного приготовления еды имеется общая кухня, где есть необходимый набор бытовой техники, посуды и обеденные места. Мини-
                    отель прекрасно подойдет для тех, кто ценит комфорт за бюджетную стоимость.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="section bg-light text-dark section-about service-page section-grid">
    <div class="container">
        <div class="section-title text-md-center">
            <h3 class="text-dark fw-semibold">Оснащение</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Описание изображения" class="img-fluid" />
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-xl-5 text-dark">
                <h3 class="list-title">Что предлагается гостям в хостеле:</h3>
                <ul class="ul-list">
                    <li>Круглосуточная стойка регистрации</li>
                    <li>Ежедневная уборка номеров и зон общего пользования</li>
                    <li>Комфортные спальные места в общих номерах</li>
                    <li>Семейные номера до 4 человек</li>
                    <li>номера «Люкс» с двуспальной кроватью</li>
                    <li>Душевая комната и с/у в каждом номере (всегда горячая вода в душе)</li>
                    <li>Фен во всех с/узлах</li>
                    <li>Утюг и гладильная доска</li>
                    <li>Кухня с бытовой техникой и посудой</li>
                    <li>Завтраки (за дополнительную плату)</li>
                </ul>
            </div>

            <div class="d-none d-xl-block col-xl-1"></div>

            <div class="col-12 col-md-6 col-xl-6 mb-4 mb-md-0 section-image">
                <div id="carousel-equipment" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item gallery-2691-wrapper active">
                            <button class="gallery-2691 button-gallery" onClick="galleryOn('gallery-equipment');">
                                <div class="single-product-img approximation img-wrapper position-relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-1.jpg" class="d-block w-100" loading="lazy" alt="..." />
                                    <div class="overlay">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Zoom" class="zoom-icon" />
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="carousel-item gallery-2691-wrapper">
                            <button class="gallery-2691 button-gallery" onClick="galleryOn('gallery-equipment');">
                                <div class="single-product-img approximation img-wrapper position-relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-2.jpg" class="d-block w-100" loading="lazy" alt="..." />
                                    <div class="overlay">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Zoom" class="zoom-icon" />
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-equipment" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-equipment" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Общая обертка для всех модальных окон галерей -->
<div id="galleryWrapper" style="background: rgba(0, 0, 0, 0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999">
    
    <!-- Модальное окно для слайдера equipment -->
    <div id="gallery-equipment" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%">
        <div class="carousel-inner h-100">
            <div class="carousel-item carousel-item-2 h-100 active">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-1.jpg" class="img-fluid" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item-2 h-100">
                <div class="row align-items-center h-100">
                    <div class="col text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-2.jpg" class="img-fluid" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#gallery-equipment" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#gallery-equipment" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Кнопка закрытия (одна для всех галерей) -->
    <button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>

<script>
    function galleryOn(gal) {
        document.getElementById('galleryWrapper').style.display = 'block';
        document.getElementById(gal).style.display = 'block';
    }

    function closeGallery() {
        document.getElementById('galleryWrapper').style.display = 'none';
        // Закрываем все галереи
        var galleries = document.querySelectorAll('#galleryWrapper .carousel');
        galleries.forEach(function(gallery) {
            gallery.style.display = 'none';
        });
    }
</script>

<section class="section bg-light text-dark section-about service-page section-grid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-xl-6 mb-4 mb-md-0 section-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-image-1.jpg" class="img-fluid rounded" alt="..." />
            </div>

            <div class="d-none d-xl-block col-xl-1"></div>

            <div class="col-12 col-md-6 col-xl-5 text-dark">
                <h3 class="list-title">В стоимость проживания включены:</h3>
                <ul class="ul-list">
                    <li>Wi-Fi</li>
                    <li>Фен</li>
                    <li>Электрический чайник</li>
                    <li>Полотенца (набор 2 шт.)</li>
                    <li>Смена постельного белья</li>
                    <li>Уборка</li>
                    <li>Общая кухня с бытовой техникой и посудой</li>
                    <li>Регистрация/визовая поддержка</li>
                </ul>
                <h3 class="list-title">Дополнительные услуги:</h3>
                <ul class="ul-list">
                    <li>Прачка (стиральные и сушильные машины)</li>
                    <li>Тапочки</li>
                    <li>Ксерокс (печать)</li>
                    <li>Банные принадлежности</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Заголовок и текст  -->
<section class="section text-dark">
    <div class="container">
        <div class="section-title text-md-center">
            <!-- Заголовок -->
            <h3 class="text-dark fw-semibold">Документы</h3>

            <!-- Изображение по центру -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Описание изображения" class="img-fluid" />
        </div>

        <div class="row">
            <div class="col-12">
                <p>
                    Заселение проводится только при наличии ОРИГИНАЛА паспорта, а лицам, не достигшим 14-летнего возраста — свидетельство о рождении.
                    Для лиц, не достигших 18-ти лет, необходима доверенность на сопровождающее лицо от родителей, в случае если лицо не достигшее 18-ти
                    лет путешествует самостоятельно, нужно письменное согласие родителей на заселение в наш мини-отель. Для граждан не РФ необходимо
                    иметь паспорт, действующую миграционную карту (кроме граждан Белоруссии), дактокарту, действующее уведомление о месте
                    пребывания(регистрацию), в случае наличия патента - чеки об оплате патента, в случае превышения срока действия миграционной карты,
                    необходимы документы, дающие Иностранному гражданину право находиться на территории РФ.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Заголовок и текст  -->
<section class="section text-dark">
    <div class="container">
        <div class="section-title text-md-center">
            <!-- Заголовок -->
            <h3 class="text-dark fw-semibold">Оплата</h3>

            <!-- Изображение по центру -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Описание изображения" class="img-fluid" />
        </div>

        <div class="row">
            <div class="col-12">
                <p>
                    Вы можете произвести оплату непосредственно на сайте, при бронировании через сайт. К оплате в Хостеле принимаются наличные денежные
                    средства и банковские карты, так же вы можете провести оплату по QR коду. Для представителей Юридических лиц, мы выставляем счета и
                    предоставляем закрывающие документы.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Заголовок и текст и список -->
<section class="section text-dark">
    <div class="container">
        <div class="section-title text-md-center">
            <!-- Заголовок -->
            <h3 class="text-dark fw-semibold">Заселение</h3>

            <!-- Изображение по центру -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Описание изображения" class="img-fluid" />
        </div>

        <div class="row">
            <div class="col-12">
                <p>
                    Оформление гостей производится круглосуточно, но с 24:00 до 07:00 в Хостеле режим тишины - двери закрываются. Если Вы планируете
                    прибытие после 24:00 обязательно укажите это при бронировании.
                </p>
                <ul class="mb-0">
                    <li>Ранний заезд: 00:00—23:59, возможна доплата</li>
                    <li>Поздний выезд: 00:00—23:59, возможна доплата</li>
                    <li>Заезд с: 14:00</li>
                    <li>Выезд до: 12:00</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Заголовок и списки  -->
<section class="section bg-light text-dark">
    <div class="container">
        <div class="section-title text-md-center">
            <!-- Заголовок -->
            <h3 class="text-dark fw-semibold">Правила проживания в мини – отеле «Городской»</h3>

            <!-- Изображение по центру -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" alt="Описание изображения" class="img-fluid" />
        </div>

        <div class="row">
            <div class="col-12">
                <h3 class="list-title">Оплачивая проживание, вы соглашаетесь с нашими правилами:</h3>
                <ol>
                    <li>Регистрация заезда: 14-00 ч., при наличии свободных мест возможно более раннее заселение.</li>
                    <li>
                        Заселение в мини- отель «Городской» (далее мини-отель) производится только при наличии оригинала паспорта, а также при полной
                        оплате суммы проживания.
                    </li>
                    <li>
                        Время выезда: до 12-00 ч. По договоренности с администратором некоторое время после выселения Вы можете провести в гостиной
                        нашего хостела.
                    </li>
                    <li>Продление проживания возможно только при наличии свободных мест на желаемый период продления.</li>
                    <li>Администрация мини-отеля не несёт ответственность за сохранность ваших вещей, оставленных без присмотра.</li>
                    <li>Во время пребывания в мини - отеле необходимо соблюдать тишину с 22-00 ч. до 8-00 ч.</li>
                    <li>В мини - отеле разрешается слушать музыку в наушниках, чтобы не доставлять неудобства другим гостям.</li>
                    <li>Руководители, сопровождающие школьные или иные группы, несут полную ответственность за поведение группы в мини - отеле.</li>
                    <li>
                        В случае утраты или порчи имущества мини - отеля с проживающего взыскивается денежная сумма согласно рыночной стоимости данного
                        имущества.
                    </li>
                </ol>

                <h3 class="list-title">В мини - отеле категорически ЗАПРЕЩЕНО:</h3>
                <ol>
                    <li>
                        Употреблять спиртные напитки и наркотические вещества (неустойка 3000 рублей или выселение без возврата оплаченных денег за
                        проживание).
                    </li>
                    <li>
                        Курить на территории мини - отеля категорически запрещено (неустойка 3000 рублей). Курение возможно в строго отведённых местах,
                        указанных администратором.
                    </li>
                    <li>Приводить посторонних лиц, передавать им ключи.</li>
                    <li>Нарушать покой остальных гостей.</li>
                    <li>Хранить в общих номерах любые открытые продукты питания.</li>
                    <li>Употреблять пищу вне специально отведённых мест (кухни), а именно в номере.</li>
                    <li>Проживание в мини - отеле с домашними животными не допускается!</li>
                </ol>

                <h3 class="list-title">В обязанности проживающего входят следующие правила:</h3>
                <ol>
                    <li>При выходе из номера мини - отеля выключать принадлежащие ему электроприборы и свет в комнате.</li>
                    <li>Соблюдать правила пожарной безопасности.</li>
                    <li>Вернуть перед отъездом полученные ключи, за утерю – неустойка 1000 рублей.</li>
                    <li>Возместить ущерб в случае утраты, повреждения или порчи имущества мини - отеля.</li>
                </ol>

                <h3 class="list-title">Уважайте тех, кто живёт с Вами рядом!:</h3>
                <ol>
                    <li>Просим Вас не задерживаться в ванной комнате без необходимости.</li>
                    <li>Просим Вас при использовании Wi-Fi сети мини - отеля не пользоваться услугами файлообменных ресурсов (в т.ч. торрентами).</li>
                    <li>
                        После приготовления пищи необходимо оставить за собой чистыми посуду и другие кухонные принадлежности. Просим Вас убирать за
                        собой продукты питания.
                    </li>
                    <li>При необходимости, воспользоваться стиральной машиной можно обратившись к администратору мини - отеля.</li>
                    <li>Приём пищи возможен только в специально отведённых местах, то есть на кухне.</li>
                </ol>

                <h3 class="list-title">Уважайте тех, кто живёт с Вами рядом!:</h3>
                <ol>
                    <li>Ванной комнатой и туалетом.</li>
                    <li>Общей кухней со всем кухонным оборудованием и инвентарём.</li>
                    <li>Зонами общего пользования.</li>
                    <li>Wi-fi.</li>
                    <li>Чистым постельным бельём и полотенцем.</li>
                </ol>

                <h3 class="list-title">Мы оставляем за собой право отказать в проживании гостям:</h3>
                <ol>
                    <li>Не имеющим при себе паспорта или заменяющего его документа.</li>
                    <li>Моложе 18 лет без соответствующего разрешения родителей, либо сопровождения взрослых.</li>
                    <li>Находящимся в нетрезвом или любом другом неадекватном состоянии.</li>
                    <li>Нарушающих комфортное пребывание в хостеле других гостей.</li>
                    <li>Категорически не согласным с правилами нашего заведения.</li>
                </ol>

                <p>
                    <strong>
                        При первичном заезде в мини - отель в состоянии сильного алкогольного опьянения клиенту может быть отказано в заселении, даже в
                        случае, если ранее им была внесена предоплата.
                    </strong>
                </p>

                <p>
                    <strong>
                        Руководство мини - отеля вправе расторгнуть договор на проживание и потребовать незамедлительного отъезда проживающего из мини -
                        отеля в случае нарушения постояльцем правил проживания.
                    </strong>
                </p>

                <p>
                    <strong> Мы заботимся о том, чтобы ваше пребывание в нашем мини - отеле было приятным и комфортным! </strong>
                </p>
            </div>
        </div>
    </div>
</section>



<script>
    function galleryOn(gal) {
        var gallery = gal;
        document.getElementById('galleryWrapper').style.display = 'block';
        document.getElementById(gallery).style.display = 'block';
    }

    function closeGallery() {
        document.getElementById('galleryWrapper').style.display = 'none';
        document.getElementById('gallery-about-1').style.display = 'none';
    }
</script>

<?php get_footer(); ?>