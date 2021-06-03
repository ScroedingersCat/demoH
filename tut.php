<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<main role="main">

    <div id="market" style="padding-top: 0px; padding-bottom: 200px">
        <div id="kroshki">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"><a>Главная</a> - <a>Акции</a></div>
                </div>
            </div>
        </div>
        <div id="title_nomer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Акции</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- новый вид акции конец -->
        <style>
            .img-cont {
                z-index: 2;
            }

            .img-cont-t {
                z-index: 2;
            }

            .img-cont img {
                border-radius: 50%;
                border: 10px solid #fff;
                box-shadow: 7px 0 11px 0px rgba(0, 0, 0, 0.5);
                position: inherit;
                width: 321px;
                height: 321px;
            }

            .img-cont-t img {
                border-radius: 50%;
                border: 10px solid #20BEC6;
                box-shadow: 7px 0 11px 0px rgba(0, 0, 0, 0.5);
                position: inherit;
                width: 321px;
                height: 321px;
            }

            .cont-akc-new {
                max-width: 990px;
                display: flex;
                justify-content: space-evenly;
                margin: 4% auto;
                align-items: center;
                position: relative
            }

            .cont-akc-new-t {
                max-width: 990px;
                display: flex;
                justify-content: space-evenly;
                margin: 4% auto;
                align-items: center;
                position: relative
            }

            .abouth-akc {
                background-color: #fff;
                border-radius: 0 8px 8px 0;
                padding: 0 15px 0 115px;
                z-index: 1;
                margin-left: -90px;
                box-shadow: 6px 6px 15px rgba(0, 0, 0, 0.5);
            }

            .title-cat {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .title-cat-h2-p {
                margin-block-start: .7em;
                margin-block-end: .7em;
            }

            .title-cat-h2 {
                line-height: 26px;
                color: #000000;
                font-family: open-sans, sans-serif;
                font-weight: bold !important;
                text-transform: uppercase;
            }

            .title-cat-p {
                font-size: 20px;
                color: #000000;
                font-family: open-sans, sans-serif;
                font-weight: 400;
                background-color: transparent;
                line-height: 24px;
            }

            .ops-akc p {
                line-height: 19px;
                font-size: 16px;
                color: #484848;
                font-family: open-sans, sans-serif;
                font-weight: 400;
                padding: 0 30px 0 0;
                margin: 0;
            }

            .btn-akc-new {

                text-decoration: none;
                height: auto;
            }

            .btn-akc-new p {
                width: 100%;
                border-style: solid;
                border-width: 1px;
                border-radius: 25px;
                line-height: 24px;
                text-align: center;
                font-size: 20px;
                font-family: montserrat, sans-serif;
                font-weight: 400;
                padding: 10px 20px;
                transition: .5s;
                background-color: #4d4182;
                color: #fff;
                transition: .5s;
            }

            .btn-akc-new_pre p {
                border-style: solid;
                border-width: 1px;
                border-color: #20BEC6;
                background-color: transparent;
                border-radius: 25px;
                line-height: 24px;
                text-align: center;
                font-size: 20px;
                color: #20BEC6;
                font-family: montserrat, sans-serif;
                font-weight: 400;
                padding: 10px 15px;
                font-weight: bold;
                transition: .5s;
            }

            .btn-akc-new_pre p:hover {
                background-color: #20BEC6;
                color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, .4);
                transition: .5s;
            }

            .btn-akc-new p:hover {
                /*  background-color: #4d4182;
            color: #fff;*/
                box-shadow: 0 0 10px rgba(0, 0, 0, .4);
                transition: .5s;
            }

            .footer-title-akc {
                display: flex;
                justify-content: space-between;
                font-size: 16px;
                align-items: center;
                padding: 15px 5px;
                flex-wrap: wrap;
            }

            .footer-title-akc-t {
                display: flex;
                justify-content: space-between;
                font-size: 16px;
                align-items: center;
                padding: 10px 5px 0 5px;
                flex-wrap: wrap;
            }

            .div-footer-title-akc {
                font-weight: bold;
                font-size: 16px !important;

            }

            .p-footer-akc {
                text-transform: uppercase;
            }

            @media (max-width:820px) {
                .img-cont img {
                    max-width: 134px;
                    min-width: 134px;
                    height: 134px;
                    border: 3px solid #4d4182;
                    box-shadow: 5px 0 7px 0px rgb(0 0 0 / 20%);
                    position: relative;
                    top: 0;
                    left: 0;
                }

                .img-cont-t img {
                    max-width: 134px;
                    min-width: 134px;
                    height: 134px;
                    border: 3px solid #4d4182;
                    box-shadow: 5px 0 7px 0px rgb(0 0 0 / 20%);
                    position: relative;
                    top: 0;
                    left: 0;
                }

                .cont-akc-new {
                    max-width: 370px;
                    display: flex;
                    justify-content: space-evenly;
                    margin: auto;
                    align-items: flex-start;
                    position: relative;
                }

                .abouth-akc {
                    border-radius: 80px 0 0 0;
                    padding: 0 0 0 0;
                    z-index: 1;
                    margin: 5px 0 0 -134px;
                    max-width: 330px;

                }

                .abouth-akc h2 {
                    font-size: 18px
                }

                .abouth-akc p {
                    font-size: 16px
                }

                .ops-akc {
                    position: relative;
                    top: -15px;
                }

                .ops-akc p {
                    padding: 0 15px 0 20px;
                    color: #94979A;
                    font-size: 14px;
                    font-family: 'Open Sans', sans-serif;

                }

                .title-cat {
                    display: block;
                    justify-content: space-between;
                    align-items: center;

                    height: 135px;
                }

                .btn-akc-new p {
                    margin: 0px auto 20px;
                    background-color: #4d4182;
                    color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, .4);
                }

                .title-cat-h2-p {
                    margin-block-start: 1em;
                    margin-block-end: .8em;
                    padding-left: 146px;
                }

                .p-footer-akc {
                    padding: 0 15px !important;
                    text-transform: uppercase;
                    font-size: 13px !important;
                }

                .footer-title-akc {
                    justify-content: space-evenly;
                    align-items: baseline;
                }

                .footer-title-akc-t {
                    justify-content: space-evenly;
                    align-items: baseline;
                }
            }

            @media (max-width:321px) {

                .div-footer-title-akc {
                    font-size: 13px !important;

                }

                .p-footer-akc {
                    padding: 0 10px !important;
                }

                .abouth-akc h2 {
                    font-size: 13px;
                }

                .abouth-akc {

                    max-width: 270px;
                }
            }
        </style>
        <!-- <h2 class="container">СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ:</h2> -->
        <!--<div class="cont-akc-new">
            <div class="img-cont-t">
                <a href="/booking/"><img alt="акция: Дамам подарки" src="/images/8-marta.jpg"></a>
            </div>
            <div class="abouth-akc">
                <div class="title-cat">
                    <h2 class="title-cat-h2-p title-cat-h2">ДАМАМ ПОДАРКИ</h2>
                    <p class="title-cat-h2-p title-cat-p">
 <b>СКИДКА 8%</b>
					</p>
                </div>
                <div class="ops-akc">
                    <p>
                        Милые дамы!
                    </p>
                    <p>
                        Примите самые искренние поздравления от Парк-Отеля Лазурный берег!
                    </p>
                    <p>
                        Пусть сбываются все ваши надежды и мечты, пусть каждый ваш день будет озарён счастливой улыбкой, а вместе с ароматом весенних цветов в вашу жизнь войдут радость и благополучие.
                    </p>
                    <p>
                        А мы хотим подарить Вам <b>скидку 8% при бронировании с 3.03 по 8.03.</b>
                    </p>
                </div>
                <div class="footer-title-akc">
                    <div class="div-footer-title-akc">
                        <!--<p class="p-footer-akc">
                                Подробнее по телефону
                            </p>-->
        <!--<p class="p-footer-akc">
                                123
                            </p>-->
        <!--<a class="btn-akc-new_pre" href="/aktsii/8-marta/" target="_blank" style=" text-decoration: none;">
                            <p>
                                Подробнее
                            </p>
                        </a>
                    </div>
                    <a class="btn-akc-new" href="tel:+78003509772" style=" text-decoration: none;">
                        <p>
                            8 (800) 350-97-72
                        </p>
                    </a>
                </div>
            </div>
        </div>-->
        <!-- <div class="cont-akc-new">
            <div class="img-cont">
                <a href="/booking/"><img alt="акция: Welcome to A.MORE FEST" src="/images/amoreFest.png"></a>
            </div>
            <div class="abouth-akc">
                <div class="title-cat">
                    <h2 class="title-cat-h2-p title-cat-h2"> A.MORE FEST</h2>
                    <p class="title-cat-h2-p title-cat-p">
                        <b>с 14.05 по 23.05.2021</b>
                    </p>
                </div>
                <div class="ops-akc">
                    <p>
                        Винный фестиваль в Анапе
                    </p>
                    <p>
                        Для всех гостей фестиваля скидка 20% <span style="opacity:0; user-select: none; -ms-user-select: none; -moz-user-select: none; -khtml-user-select: none; -webkit-user-select: none; -webkit-touch-callout: none;">Для всех гостей выставки скидка 20%</span>
                    </p> -->
                    <!--<p>
                            <b>-15% на номера</b> Стандарт, Стандарт улучшенный, Люкс и Люкс улучшенный
                        </p>
                        <p>
                            <b>-25% на номера</b> Стандарт трехместный без балкона, Джуниор, Студия, Студия Сюит
                        </p>-->
                <!-- </div>
                <div class="footer-title-akc">
                    <div class="div-footer-title-akc"> -->
                        <!--<p class="p-footer-akc">
							 Подробнее по телефону
						</p>-->
                        <!--<p class="p-footer-akc">
                                123
 </p>--> 
 <!-- <a class="btn-akc-new_pre" href="/aktsii/amorefest/" style=" text-decoration: none;">
                            <p>
                                Подробнее
                            </p>
                        </a>
                    </div>
                    <a class="btn-akc-new" href="tel:+78003509772" style=" text-decoration: none;">
                        <p>
                            8 (800) 350-97-72
                        </p>
                    </a>
                </div>
            </div>
        </div> --> 
        <!--<div class="cont-akc-new">
            <div class="img-cont">
                <a href="/booking/"><img alt="акция: Мир тур май" src="/images/mir-tur-may.jpg"></a>
            </div>
            <div class="abouth-akc">
                <div class="title-cat">
                    <h2 class="title-cat-h2-p title-cat-h2">РАЙСКИЕ МАЙСКИЕ</h2>
                    <p class="title-cat-h2-p title-cat-p">
                        <b>С 30.04 по 31.05.2021</b>
                    </p>
                </div>
                <div class="ops-akc">
                    <p>
                        В эти дни гости смогут совершить увлекательное путешествие по парку развлечений отеля Лазурный берег, а так же насладиться сказочной атмосферой расцветающего лета.
                    </p>
                    <p>
                        Насыщенная программа, незабываемые ощущения и вкусные угощения ждут гостей Парк-Отеля Лазурный берег!
                    </p>
                    <!--<p>
                            <b>-15% на номера</b> Стандарт, Стандарт улучшенный, Люкс и Люкс улучшенный
                        </p>
                        <p>
                            <b>-25% на номера</b> Стандарт трехместный без балкона, Джуниор, Студия, Студия Сюит
                        </p>-->
        <!--</div>
                <div class="footer-title-akc">
                    <div class="div-footer-title-akc">
                        <!--<p class="p-footer-akc">
							 123
						</p>
						<p class="p-footer-akc">
							 123
						</p>-->
        <!-- <a class="btn-akc-new_pre" href="/aktsii/rayskie-mayskie" target="_blank" style=" text-decoration: none;">
						<p>
							 Подробнее
						</p>
 </a>
                    </div>
                    <a class="btn-akc-new" href="/booking/" target="_blank" style=" text-decoration: none;">
                        <p>
                            Забронировать
                        </p>
                    </a>
                </div>
            </div>
        </div>
       <!-- <div class="cont-akc-new">
            <div class="img-cont-t">
                <a href="/booking/"><img alt="Туры выходного дня" src="/images/ran-bron.jpg"></a>
            </div>
            <div class="abouth-akc">
                <div class="title-cat">
                    <h2 class="title-cat-h2-p title-cat-h2">РАННЕЕ БРОНИРОВАНИЕ</h2>
                    <p class="title-cat-h2-p title-cat-p">
                        <b>ДО -25%</b>
                    </p>
                </div>
                <div class="ops-akc">
                    <p>
                        Хоть на улице и зима, Мы уже думаем о солнечном лете. Забронируйте отдых на сезон 2021 со скидкой.
                    </p>
                    <p>
                        <b>До 10% на номера</b> Стандарт 1-й категории
                    </p>
                    <p>
                        <b>До 15% на номера</b> Стандарт, Стандарт улучшенный, Люкс и Люкс улучшенный
                    </p>
                    <p>
                        <b>До 25% на номера</b> Стандарт трехместный без балкона, Джуниор, Студия, Студия Сюит
                    </p>
                </div>
                <div class="footer-title-akc">
                    <div class="div-footer-title-akc">
                        <!--<p class="p-footer-akc">
							 123
						</p>
						<p class="p-footer-akc">
							 123
						</p>-->
        <!-- <a class="btn-akc-new_pre" href="/aktsii/rannee-bronirovanie/" target="_blank" style=" text-decoration: none;">
                            <p>
                                Подробнее
                            </p>
                        </a>
                    </div>
                    <a class="btn-akc-new" href="/booking/" target="_blank" style=" text-decoration: none;">
                        <p>
                            Забронировать
                        </p>
                    </a>
                </div>
            </div>
        </div>-->

        <!-- Акция с новым дизайном конец -->
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <? foreach ($arResult["ITEMS"] as $arItem) : ?>

                    <div class="col-lg-3">
                        <div class="block_img">
                            <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"><img class="rounded-circle lazy" data-src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" src="/bitrix/templates/.default/img/763.gif" alt="Generic placeholder image" width="140" height="140"></a>
                        </div>
                        <div class="block_text" <? if ($arItem['PROPERTIES']['MAIN']['VALUE'] == "Y") : ?> style="background-color: #23D6BE;" <? endif; ?>>
                            <p> <b><?= $arItem['PROPERTIES']['TITLE']['VALUE'] ?></b> <br> <?= $arItem['NAME']; ?></p>
                            <p class="detail" <? if ($arItem['PROPERTIES']['MAIN']['VALUE'] == "Y") : ?> style="color:#fff;" <? endif; ?>><?= $arItem['PREVIEW_TEXT']; ?>
                            </p>
                            <p><a class="btn btn-secondary" href="<?= $arItem['DETAIL_PAGE_URL']; ?>" role="button">Подробнее</a></p>
                        </div>
                    </div>

                <? endforeach; ?>
            </div>
        </div>

    </div>
</main>