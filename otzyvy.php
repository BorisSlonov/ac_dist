﻿<!doctype html>
<!--[if lt IE 7 ]>
<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Отзывы | «АС»</title>
    <meta name="author" content="" />

    <meta name="Copyright" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox-themes.css" />
    <link rel="stylesheet" href="css/jquery.jscrollpane.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animationcall.css?ver=1.3">
    <link rel="stylesheet" href="constructor/008/app/comment.css?8" />
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.js"></script>
    <script type='text/javascript' src='js/slick.min.js'></script>
    <script type='text/javascript' src='js/fancySelect.js'></script>
    <script type='text/javascript' src='js/misc.js'></script>
    <script type='text/javascript' src='./js/offscreen.js'></script>

    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:url" content="">
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <link href="css/custom.css" rel="stylesheet">
    <style>
        .owl-carousel .owl-item img.owl-lazy {
            opacity: 1 !important;
        }

        .lazy {
            -webkit-transition: all 0.3s ease-in-out !important;
            -moz-transition: all 0.3s ease-in-out !important;
            -o-transition: all 0.3s ease-in-out !important;
            -ms-transition: all 0.3s ease-in-out !important;
            transition: all 0.3s ease-in-out !important;

            -webkit-filter: blur(3px);
            -moz-filter: blur(3px);
            -o-filter: blur(3px);
            -ms-filter: blur(3px);
            filter: blur(3px);

        }

        .lazy.loaded {
            -webkit-filter: blur(0);
            -moz-filter: blur(0);
            -o-filter: blur(0);
            -ms-filter: blur(0);
            filter: blur(0);
        }

        #loading {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 9999999;
            /* background: #ddd; */
            background-color: rgba(255, 255, 255, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #loading img {
            width: 80px;
        }
    </style>




    <style>
        .menuHolder .menuPort {
            position: relative;
            z-index: 5;
            width: 100%;
            margin: 0 auto;
            background: #fff;
            margin-left: 110px;
        }

        .addphoneotz {
            color: #4169E1;
            float: left;
            font-weight: bold;
            padding-top: 10px;
            font-size: 17px;
            margin-left: -2px;
        }
    </style>
    <script>
        setTimeout(function() {
            $('#loading').fadeOut();
        }, 1500);
    </script>
    <script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Marquiz.init({
                host: '//quiz.marquiz.ru',
                id: '5f6dab731128100044ec688a',
                autoOpen: 10,
                autoOpenFreq: 'once',
                openOnExit: true
            });
        });
    </script>


    <link rel="stylesheet" href="new-assets/css/style.css" media="all">
    <link rel="stylesheet" href="new-assets/css/slick.css" media="all">

</head>

<body>

    <div id="loading">
        <img src="loader.gif" alt="">
    </div>



    <div id="gal-block-top"></div>

    <div id="popup_container"></div>

    <div class="l-wrapper">

        <div id="popup-ask" class="popup-ask popup">
            <form id="ask-form" action="mailer/config.php" method="post" name="submit-bid-form" type="question">
                <h2 class="first-title section-title">Задать вопрос</h2>
                <input form="ask-form" name="name" type="text" value="" placeholder="Имя" />
                <input form="ask-form" name="email" type="email" value="" placeholder="E-mail" />
                <textarea form="ask-form" name="text_comment" placeholder="Вопрос"></textarea>
                <input name="btn" form="ask-form" class="btn" type="submit" value="Спросить" />
            </form>
        </div>

        <div class="pp pp_req cost-block" id="request2">
            <div class="pp_req_wrapper">
                <div class="pp_req_close"></div>
                <div class="pp_req_wrap">
                    <div class="bid-cost">
                        <h2 class="first-title section-title">Записаться на просмотр объекта</h2>
                        <form id="cost-form" type="question" action="mailer/config.php" method="post" enctype="multipart/form-data">
                            <input name="zap" value="Заявка с записи" type="hidden">
                            <div class="cost-form-inner">
                                <div class="cost-form-inner-l">
                                    <input name="name" type="text" value="" placeholder="Имя">
                                    <input name="email" type="text" value="" placeholder="Телефон или e-mail" required>
                                    <textarea name="text_comment" placeholder="Описание проекта"></textarea>
                                    <div class="inputfile"></div>
                                    <!--<label>
                                        <input name="attachment" id="inputfile" class="inputfile" multiple="multiple" accept="image/*,image/jpeg" data-multiple-caption="Выбрано файлов: {count}" type="file"><span>Прикрепить файл</span>
                                        <div>Обзор...</div>
                                    </label>-->
                                </div>
                                <div class="cost-form-inner-r">
                                    <div class="cost-form-inner-text">
                                        <br>
                                        <p>Заполните <b>форму</b>&nbsp;обратной связи</p>
                                        <p><br></p>
                                        <p> </p>
                                        <p>Позвоните нам по телефону <b>+7 (495) 414-26-92</b></p>
                                        <p><br></p>
                                        <p>Напишите письмо&nbsp; <b>info@rem-ac.ru</b></p>
                                        <p><br></p>
                                    </div>
                                    <div class="bid-cost_button align-submit">
                                        <input name="btn" class="btn" type="submit" value="Отправить" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="pp pp_req cost-block" data-pp="request">
            <div class="pp_req_wrapper">
                <div class="pp_req_close"></div>
                <div class="pp_req_wrap">
                    <div class="bid-cost">
                        <h2 class="first-title section-title">Форма связи</h2>
                        <form id="cost-form" type="question" action="mailer/config.php" method="post" enctype="multipart/form-data">
                            <input name="zap" value="Заявка из формы обратной связи" type="hidden">
                            <div class="cost-form-inner">
                                <div class="cost-form-inner-l">
                                    <input name="name" type="text" value="" placeholder="Имя">
                                    <input name="email" type="text" value="" placeholder="Телефон или e-mail" required>
                                    <textarea name="text_comment" placeholder="Описание проекта"></textarea>
                                    <div class="inputfile"></div>
                                    <!--<label>
                                        <input name="attachment" id="inputfile" class="inputfile" multiple="multiple" accept="image/*,image/jpeg" data-multiple-caption="Выбрано файлов: {count}" type="file"><span>Прикрепить файл</span>
                                        <div>Обзор...</div>
                                    </label>-->
                                </div>
                                <div class="cost-form-inner-r">
                                    <div class="cost-form-inner-text">
                                        <br>
                                        <p>Заполните <b>форму</b>&nbsp;обратной связи</p>
                                        <p><br></p>
                                        <p> </p>
                                        <p>Позвоните нам по телефону <b>+7 (495) 414-26-92</b></p>
                                        <p><br></p>
                                        <p>Напишите письмо&nbsp; <b>info@rem-ac.ru</b></p>
                                        <p><br></p>
                                    </div>
                                    <div class="bid-cost_button align-submit">
                                        <input name="btn" class="btn" type="submit" value="Отправить" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

       

          <!-- header-new -->

    <div class="contact-panel-wrapper">
        <div class="box big contact-panel">
            <a href="tel:+7 (495) 414-26-92" class="contact-panel-link">
                <span class="icon">
                    <svg class="svg-red" version="1.1" width="18" viewBox="0 0 384 384" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594 c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448 c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813 C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                            </g>
                        </g>
                    </svg>
                </span>
                +7 (495) 414-26-92
            </a>
            <a href="mailto:info@rem-ac.ru" class="contact-panel-link">
                <span class="icon">
                    <svg class="svg-green" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        xml:space="preserve">
                        <g>
                            <g>
                                <polygon points="339.392,258.624 512,367.744 512,144.896" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon points="0,144.896 0,367.744 172.608,258.624" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M480,80H32C16.032,80,3.36,91.904,0.96,107.232L256,275.264l255.04-168.032C508.64,91.904,495.968,80,480,80z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M310.08,277.952l-45.28,29.824c-2.688,1.76-5.728,2.624-8.8,2.624c-3.072,0-6.112-0.864-8.8-2.624l-45.28-29.856 L1.024,404.992C3.488,420.192,16.096,432,32,432h448c15.904,0,28.512-11.808,30.976-27.008L310.08,277.952z" />
                            </g>
                        </g>
                    </svg>
                </span>
                info@rem-ac.ru
            </a>

            <a data-fancybox href="#forma-svyaz" class="contact-panel-link">
                <span class="icon">
                    <svg class="svg-red" width="18" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 459.668 459.668"
                        xml:space="preserve">
                        <g id="XMLID_2_">
                            <g>
                                <g>
                                    <path
                                        d="M359.574,297.043c-18.204,25.002-47.692,41.286-80.916,41.286h-46.618c-16.104,0-29.818-10.224-35.011-24.534 c-6.41-1.912-12.696-4.394-18.83-7.442c-12.99-6.454-24.785-15.198-35.168-26.03c-67.35,14.796-117.757,74.808-117.757,146.603 v9.384c0,12.9,10.458,23.358,23.358,23.358h362.403c12.9,0,23.358-10.458,23.358-23.358v-9.384 C434.392,371.464,404.309,323.032,359.574,297.043z" />
                                    <path
                                        d="M118.205,232.178c10.039,0,18.777-5.564,23.304-13.775c0.119,0.325,0.24,0.648,0.362,0.971 c0.036,0.097,0.072,0.194,0.108,0.291c10.62,27.954,31.284,51.388,58.532,61.627c6.59-10.471,18.243-17.435,31.53-17.435h46.618 c4.65,0,8.978-1.312,12.772-3.433c6.372-3.563,12.102-12.602,15.061-17.393c4.735-7.667,8.404-15.788,11.657-24.642 c1.828,3.32,4.342,6.208,7.354,8.471v11.431c0,25.83-21.014,46.845-46.845,46.845H232.04c-8.813,0-15.958,7.145-15.958,15.958 c0,8.814,7.145,15.958,15.958,15.958h46.618c43.429,0,78.761-35.332,78.761-78.761V226.86 c6.46-4.853,10.639-12.577,10.639-21.278v-48.119v-18.452c0-8.88-4.355-16.737-11.042-21.568C351.83,51.816,296.77,0,229.833,0 C162.895,0,107.836,51.816,102.65,117.442c-6.687,4.831-11.042,12.689-11.042,21.568v66.57 C91.608,220.311,103.575,232.178,118.205,232.178z M229.833,31.917c49.552,0,90.423,37.868,95.2,86.185 c-3.136,2.467-5.705,5.62-7.475,9.238c-15.058-39.286-48.672-66.638-87.726-66.638c-39.896,0-72.971,28.292-87.667,66.481 c-0.02,0.052-0.039,0.105-0.059,0.158c-1.77-3.618-4.339-6.771-7.475-9.238C139.411,69.785,180.281,31.917,229.833,31.917z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
                Заказать обратный звонок
            </a>
            <a href="#" class="mobile-menu-button">
                Меню
                <span class="icon">
                    <svg width="30" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384.97 384.97"
                        style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve">
                        <g>
                            <g id="Menu_1_">
                                <path
                                    d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03 c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z" />
                                <path
                                    d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03 S379.58,180.455,372.939,180.455z" />
                                <path
                                    d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606 c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z" />
                            </g>
                        </g>

                    </svg>
                </span>
            </a>
        </div>
    </div>
    <div class="header-wrapper">
        <header class="box big header">
            <a href="/" class="logo">
                <picture>
                    <source media="(max-width: 840px)" srcset="images/header-logo-white-min.png">
                    <img src="new-assets/images/header-logo-min.png" alt="">
                </picture>
                <span>
                    АС - Качественный ремонт квартир и
                    коттеджей в Москве и подмосковье
                </span>
            </a>

            <nav class="header-nav">
                <ul class="header-nav-list">
                    <li class="header-nav-list-item">
                        <a href="http://rem-ac.ru/constructor/008/"><span class="icon">
                                <svg width="18" enable-background="new 0 0 512.254 512.254"
                                    viewBox="0 0 512.254 512.254" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g id="XMLID_1034_">
                                        <g id="XMLID_2047_">
                                            <path id="XMLID_2053_"
                                                d="m512.127 256.127c0-3.729-2.075-7.149-5.384-8.871l-96.463-50.192 96.463-50.192c3.309-1.722 5.384-5.142 5.384-8.871s-2.075-7.149-5.384-8.871l-83.086-43.232c-4.903-2.549-10.938-.644-13.487 4.255s-.645 10.938 4.255 13.487l66.037 34.36-224.335 116.727-224.335-116.727 224.335-116.727 78.467 40.828c4.903 2.549 10.938.643 13.487-4.255 2.549-4.899.644-10.938-4.255-13.487l-83.083-43.23c-2.895-1.505-6.338-1.505-9.232 0l-246 128c-3.309 1.721-5.384 5.141-5.384 8.871s2.075 7.149 5.384 8.871l96.463 50.192-96.463 50.193c-3.309 1.722-5.384 5.142-5.384 8.871s2.075 7.149 5.384 8.871l96.463 50.192-96.463 50.193c-3.309 1.722-5.384 5.142-5.384 8.871s2.075 7.149 5.384 8.871l246 128c1.447.752 3.031 1.129 4.616 1.129s3.169-.376 4.616-1.129l246-128c3.309-1.722 5.384-5.142 5.384-8.871s-2.075-7.149-5.384-8.871l-96.463-50.193 96.463-50.192c3.309-1.722 5.384-5.142 5.384-8.871zm-251.384 18.744 127.871-66.535 29.814 15.513-223.978 116.913-39.902-20.762 91.847-47.79 5.115 2.661c1.447.752 3.031 1.129 4.616 1.129s3.17-.377 4.617-1.129zm-36.013-13.935-91.848 47.79-39.712-20.663 91.848-47.79zm-101.09-52.6 39.712 20.664-91.848 47.79-39.713-20.664zm356.822 165.918-224.335 116.727-224.335-116.727 91.848-47.79 127.871 66.535c1.447.752 3.031 1.129 4.616 1.129s3.169-.376 4.616-1.129l127.871-66.535zm-224.335-1.4-40.033-20.83 223.979-116.912 40.389 21.015z" />
                                            <path id="XMLID_2078_"
                                                d="m379.127 84c2.63 0 5.21-1.07 7.069-2.93 1.86-1.86 2.931-4.44 2.931-7.07s-1.07-5.21-2.931-7.07c-1.859-1.86-4.439-2.93-7.069-2.93s-5.21 1.07-7.07 2.93-2.93 4.44-2.93 7.07 1.069 5.21 2.93 7.07 4.44 2.93 7.07 2.93z" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            Конструктор натяжного потолка</a>
                    </li>
                    <li class="header-nav-list-item">
                        <a href="http://rem-ac.ru/constructor/okna_1/okno/"><span class="icon">
                                <svg height="18" width="18" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M234.717,60.141H107.418c-7.72,0-14.001,6.281-14.001,14.001V233.13c0,7.72,6.281,14.001,14.001,14.001h127.299 c7.72,0,14.001-6.281,14.001-14.001V74.142C248.718,66.422,242.437,60.141,234.717,60.141z M234.145,232.557H107.99V74.714 h126.155V232.557z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M234.717,263.639H107.418c-7.72,0-14.001,6.281-14.001,14.001v158.987c0,7.721,6.281,14.001,14.001,14.001h127.299 c7.72,0,14.001-6.281,14.001-14.001V277.64C248.718,269.92,242.437,263.639,234.717,263.639z M234.145,436.056H107.99V278.213 h126.155V436.056z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M404.582,60.141H277.284c-7.721,0-14.002,6.281-14.002,14.001V233.13c0,7.72,6.281,14.001,14.002,14.001h127.298 c7.721,0,14.002-6.281,14.002-14.001V74.142C418.583,66.422,412.303,60.141,404.582,60.141z M404.01,232.557H277.855V74.714 H404.01V232.557z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M404.582,263.639H277.284c-7.721,0-14.002,6.281-14.002,14.001v158.987c0,7.721,6.281,14.001,14.002,14.001h127.298 c7.721,0,14.002-6.281,14.002-14.001V277.64C418.583,269.92,412.303,263.639,404.582,263.639z M404.01,436.056H277.855V278.213 H404.01V436.056z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M493.522,459.598h-14.797v-349.51c0-4.024-3.262-7.287-7.287-7.287c-4.025,0-7.287,3.262-7.287,7.287v349.51h-17.39 V47.671c0-8.662-7.047-15.709-15.709-15.709H80.947c-8.662,0-15.709,7.047-15.709,15.709v411.927h-17.39v-71.842 c0-4.024-3.262-7.287-7.287-7.287c-4.025,0-7.287,3.262-7.287,7.287v71.842H18.478c-8.053,0-14.604,6.552-14.604,14.604v23.194 c0,8.053,6.552,14.604,14.604,14.604h475.044c8.053,0,14.604-6.552,14.604-14.604v-23.194 C508.126,466.149,501.575,459.598,493.522,459.598z M79.811,47.671c0-0.626,0.509-1.136,1.136-1.136h350.106 c0.626,0,1.136,0.509,1.136,1.136v411.927H79.811V47.671z M493.536,497.426c0,0-0.004,0.001-0.014,0.001l-475.075-0.031 l0.031-23.225l475.075,0.031L493.536,497.426z" />
                                        </g>
                                    </g>
                                    <g></g>
                                    <path
                                        d="M464.976,0H47.024c-7.581,0-13.749,6.167-13.749,13.749v339.416c0,4.023,3.262,7.286,7.287,7.286 c4.024,0,7.287-3.262,7.287-7.287V14.573h416.304v60.842c0,4.024,3.262,7.287,7.287,7.287c4.025,0,7.287-3.262,7.287-7.287V13.749 C478.725,6.167,472.557,0,464.976,0z" />
                                    </g>

                                </svg>
                            </span>
                            Калькулятор окон</a>
                    </li>
                    <li class="header-nav-list-item">
                        <a href="http://rem-ac.ru/constructor/lodjiya/"><span class="icon">
                                <svg height="18" width="18" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M392.17,0H119.83c-4.512,0-8.17,3.658-8.17,8.17v185.191c0,4.512,3.658,8.17,8.17,8.17c4.512,0,8.17-3.658,8.17-8.17 V16.34h256v177.021c0,4.512,3.658,8.17,8.17,8.17s8.17-3.658,8.17-8.17V8.17C400.34,3.658,396.682,0,392.17,0z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M359.489,32.681H152.511c-4.512,0-8.17,3.658-8.17,8.17v152.511c0,4.512,3.658,8.17,8.17,8.17 c4.512,0,8.17-3.658,8.17-8.17v-68.085h87.149v68.085c0,4.512,3.658,8.17,8.17,8.17c4.512,0,8.17-3.658,8.17-8.17v-68.085h87.149 v68.085c0,4.512,3.658,8.17,8.17,8.17s8.17-3.658,8.17-8.17V40.851C367.66,36.339,364.002,32.681,359.489,32.681z M247.83,108.936 h-87.149V49.021h87.149V108.936z M351.319,108.936H264.17V49.021h87.149V108.936z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M503.83,452.085h-2.723v-247.83c0-4.512-3.658-8.17-8.17-8.17s-8.17,3.658-8.17,8.17v13.617H27.234v-13.617 c0-4.512-3.658-8.17-8.17-8.17s-8.17,3.658-8.17,8.17v247.83H8.17c-4.512,0-8.17,3.658-8.17,8.17v43.574 c0,4.512,3.658,8.17,8.17,8.17h495.66c4.512,0,8.17-3.658,8.17-8.17v-43.574C512,455.743,508.342,452.085,503.83,452.085z  M484.766,234.213v185.191H343.149v-39.327c51.392-29.191,86.822-83.349,89.677-145.864H484.766z M350.965,234.213 c-4.158,48.749-45.158,87.149-94.965,87.149s-90.807-38.4-94.965-87.149H350.965z M144.64,234.213 c4.198,57.769,52.539,103.489,111.36,103.489s107.162-45.721,111.359-103.489h49.115C412.206,319.03,341.859,386.723,256,386.723 S99.794,319.03,95.525,234.213H144.64z M326.809,388.267v31.137H185.192v-31.137c21.696,9.507,45.644,14.797,70.808,14.797 S305.113,397.774,326.809,388.267z M27.234,234.213h51.94c2.855,62.515,38.286,116.674,89.677,145.864v39.327H27.234V234.213z  M27.234,435.745h457.532v16.34H27.234V435.745z M495.66,495.66H16.34v-27.234H495.66V495.66z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M155.322,304.986c-11.302-14.38-19.241-30.604-23.597-48.223c-1.083-4.38-5.513-7.052-9.893-5.97 c-4.38,1.083-7.054,5.512-5.971,9.893c4.916,19.882,13.869,38.183,26.612,54.397c1.612,2.051,4.009,3.122,6.429,3.122 c1.767,0,3.547-0.571,5.043-1.747C157.494,313.67,158.11,308.533,155.322,304.986z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M390.167,250.795c-4.378-1.082-8.81,1.589-9.893,5.97C366.112,314.04,315.009,354.043,256,354.043 c-28.906,0-56.205-9.447-78.945-27.321c-3.549-2.789-8.684-2.174-11.472,1.375c-2.789,3.548-2.173,8.684,1.374,11.472 c25.649,20.16,56.44,30.815,89.043,30.815c32.871,0,63.86-10.809,89.613-31.258c24.978-19.833,42.921-47.689,50.523-78.437 C397.219,256.307,394.547,251.878,390.167,250.795z" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            Калькулятор лоджий</a>
                    </li>
                    <li class="header-nav-list-item">
                        <a href="http://rem-ac.ru/3D-tur/stoletova-9/"><span class="icon">
                                <svg height="18" width="18" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M75.051,0H15.068C6.787,0,0.073,6.714,0.073,14.996v60.983c0,8.282,6.713,14.996,14.996,14.996 c8.282,0,14.996-6.714,14.996-14.996V29.992h44.987c8.282,0,14.996-6.714,14.996-14.996C90.047,6.714,83.333,0,75.051,0z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M496.932,0h-59.983c-8.282,0-14.996,6.714-14.996,14.996c0,8.282,6.713,14.996,14.996,14.996h44.987v45.987 c0,8.282,6.714,14.996,14.996,14.996c8.282,0,14.996-6.714,14.996-14.996V14.996C511.928,6.714,505.214,0,496.932,0z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M75.051,481.864H30.064v-45.987c0-8.282-6.714-14.996-14.996-14.996s-14.996,6.714-14.996,14.996v60.983 c0,8.282,6.713,14.996,14.996,14.996h59.983c8.282,0,14.996-6.714,14.996-14.996C90.047,488.578,83.333,481.864,75.051,481.864z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M496.932,420.881c-8.282,0-14.996,6.714-14.996,14.996v45.987h-44.987c-8.282,0-14.996,6.714-14.996,14.996 c0,8.282,6.714,14.996,14.996,14.996h59.983c8.282,0,14.996-6.714,14.996-14.996v-60.983 C511.928,427.595,505.214,420.881,496.932,420.881z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M472.37,123.023L263.517,2.021c-4.649-2.694-10.386-2.694-15.035,0L39.544,123.022c-4.606,2.669-7.481,7.638-7.481,12.966 c0,0.03,0.003,0.06,0.003,0.089v239.924c0,5.379,2.923,10.413,7.63,13.063L248.483,509.98c2.249,1.303,4.925,2.02,7.518,2.02 c2.707,0,5.352-0.766,7.518-2.02l208.702-120.917c0.035-0.02,0.069-0.04,0.104-0.06c4.837-3.49,7.444-6.423,7.517-12.821 c0.001-0.06,0.006-0.119,0.006-0.179V136.079c0-0.03,0.003-0.06,0.003-0.089C479.851,130.657,476.974,125.687,472.37,123.023z  M241.004,470.986L77.178,376.069l126.299-72.429c7.185-4.12,9.669-13.284,5.548-20.468c-4.119-7.185-13.283-9.668-20.468-5.548 L62.055,350.116V161.909l178.949,102.77V470.986z M256,238.706L77.156,135.945L256,32.327l178.844,103.618L256,238.706z  M449.954,350.116l-126.511-72.493c-7.184-4.119-16.348-1.637-20.468,5.548c-4.121,7.185-1.637,16.348,5.548,20.468 l126.299,72.428l-163.827,94.917V264.679l178.958-102.77V350.116z" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            3D-тур помещений</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="nav-wrapper">
        <nav class="box big nav">
            <ul class="nav-list">
                <li class="nav-list-item">
                    <a href="/remont_kvartir_portfolio.html" title="">Ремонт</a>
                    <div class="nav-sub-list-icon">
                        <svg height="18" width="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612.02px"
                            height="612.02px" viewBox="0 0 612.02 612.02"
                            style="enable-background:new 0 0 612.02 612.02;" xml:space="preserve">
                            <g>
                                <g id="_x35__11_">
                                    <g>
                                        <path
                                            d="M596.96,269.674L342.381,15.094c-20.079-20.079-52.644-20.079-72.723,0c-20.079,20.079-20.079,52.644,0,72.723 L487.852,306.01L269.658,524.202c-20.079,20.079-20.079,52.644,0,72.723s52.644,20.079,72.723,0L596.96,342.346 C617.039,322.317,617.039,289.753,596.96,269.674z M290.858,254.258L88.744,41.238c-20.309-21.378-53.204-21.378-73.513,0 s-20.309,56.058,0,77.462l165.371,174.289L15.231,467.278c-20.309,21.379-20.309,56.083,0,77.462s53.204,21.379,73.513,0 L290.858,331.72C311.167,310.342,311.167,275.662,290.858,254.258z" />
                                    </g>
                                </g>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </div>
                    <ul class="nav-sub-list">
                        <li class="nav-sub-list-item">
                            <a href="/remont_kvartir_etapy_rabot.html" title="">Ремонт квартир</a>
                            <div class="nav-sub-list-icon">
                                <svg height="18" width="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612.02px"
                                    height="612.02px" viewBox="0 0 612.02 612.02"
                                    style="enable-background:new 0 0 612.02 612.02;" xml:space="preserve">
                                    <g>
                                        <g id="_x35__11_">
                                            <g>
                                                <path
                                                    d="M596.96,269.674L342.381,15.094c-20.079-20.079-52.644-20.079-72.723,0c-20.079,20.079-20.079,52.644,0,72.723 L487.852,306.01L269.658,524.202c-20.079,20.079-20.079,52.644,0,72.723s52.644,20.079,72.723,0L596.96,342.346 C617.039,322.317,617.039,289.753,596.96,269.674z M290.858,254.258L88.744,41.238c-20.309-21.378-53.204-21.378-73.513,0 s-20.309,56.058,0,77.462l165.371,174.289L15.231,467.278c-20.309,21.379-20.309,56.083,0,77.462s53.204,21.379,73.513,0 L290.858,331.72C311.167,310.342,311.167,275.662,290.858,254.258z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <ul class="nav-sub-list">
                                <li class="nav-sub-list-item">
                                    <a href="remont_kvartir_portfolio.html">Ремонт квартир портфолио</a>
                                </li>
                                <li class="nav-sub-list-item">
                                    <a href="remont_kvartir_price.html">Ремонт квартир цены</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-sub-list-item"><a href="/otdelka_etap.html" title="">Ремонт коттеджей</a>
                        </li>
                        <li class="nav-sub-list-item"><a href="/remont_i_otdelka_taunhausov.html" title="">Ремонт
                                таунхаусов</a></li>
                        <li class="nav-sub-list-item">
                            <a href="/remont-derevyannogo-doma.html" title="">Ремонт деревянного дома</a>
                            <div class="nav-sub-list-icon">
                                <svg height="18" width="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612.02px"
                                    height="612.02px" viewBox="0 0 612.02 612.02"
                                    style="enable-background:new 0 0 612.02 612.02;" xml:space="preserve">
                                    <g>
                                        <g id="_x35__11_">
                                            <g>
                                                <path
                                                    d="M596.96,269.674L342.381,15.094c-20.079-20.079-52.644-20.079-72.723,0c-20.079,20.079-20.079,52.644,0,72.723 L487.852,306.01L269.658,524.202c-20.079,20.079-20.079,52.644,0,72.723s52.644,20.079,72.723,0L596.96,342.346 C617.039,322.317,617.039,289.753,596.96,269.674z M290.858,254.258L88.744,41.238c-20.309-21.378-53.204-21.378-73.513,0 s-20.309,56.058,0,77.462l165.371,174.289L15.231,467.278c-20.309,21.379-20.309,56.083,0,77.462s53.204,21.379,73.513,0 L290.858,331.72C311.167,310.342,311.167,275.662,290.858,254.258z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <ul class="nav-sub-list">
                                <li class="nav-sub-list-item">
                                    <a href="vneshnyaya-otdelka-derevyannogo-doma.html">Внешняя отделка деревянного
                                        дома</a>
                                </li>
                                <li class="nav-sub-list-item">
                                    <a href="vnutrennyaya-otdelka-sten-derevyannogo-doma.html">Внутренняя отделка
                                        деревянного дома</a>
                                </li>
                                <li class="nav-sub-list-item">
                                    <a href="otdelka-doma-iz-brevna.html">Отделка дома из бревна</a>
                                </li>
                                <li class="nav-sub-list-item">
                                    <a href="rascenki-na-otdelku-derevyannogo-doma.html">Расценки на внутреннюю
                                        отделку</a>
                                </li>
                                <li class="nav-sub-list-item">
                                    <a href="foto-vnutrennej-otdelki-derevyannogo-doma.html">Фото внутренней отделки
                                        деревянного дома</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-sub-list-item"><a href="/remont_commercheskogo_pomeshenya.html" title="">Ремонт
                                коммерческих помещений</a></li>
                    </ul>
                </li>

                <a href="tel:+74954142692" class="nav-phone">
                    <span class="icon">
                        <svg width="18" class="svg-green" version="1.1" width="18" viewBox="0 0 384 384" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594 c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448 c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813 C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </span>+7 (495) 414-26-92
                </a>
                <li class="nav-list-item">
                    <a href="/portfolio_dizajn_proektov.html" title="">Портфолио</a>
                    <div class="nav-sub-list-icon">
                        <svg height="18" width="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612.02px"
                            height="612.02px" viewBox="0 0 612.02 612.02"
                            style="enable-background:new 0 0 612.02 612.02;" xml:space="preserve">
                            <g>
                                <g id="_x35__11_">
                                    <g>
                                        <path
                                            d="M596.96,269.674L342.381,15.094c-20.079-20.079-52.644-20.079-72.723,0c-20.079,20.079-20.079,52.644,0,72.723 L487.852,306.01L269.658,524.202c-20.079,20.079-20.079,52.644,0,72.723s52.644,20.079,72.723,0L596.96,342.346 C617.039,322.317,617.039,289.753,596.96,269.674z M290.858,254.258L88.744,41.238c-20.309-21.378-53.204-21.378-73.513,0 s-20.309,56.058,0,77.462l165.371,174.289L15.231,467.278c-20.309,21.379-20.309,56.083,0,77.462s53.204,21.379,73.513,0 L290.858,331.72C311.167,310.342,311.167,275.662,290.858,254.258z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <ul class="nav-sub-list">
                        <li class="nav-sub-list-item"><a href="/remont_kvartir_portfolio.html" title="">Портфолио
                                ремонта квартир</a></li>
                        <li class="nav-sub-list-item"><a href="/otdelka_portfolio.html" title="">Портфолио
                                ремонта коттеджей</a></li>
                        <li class="nav-sub-list-item"><a href="/portfolio-kommercheskih-pomeschenij.html"
                                title="">Портфолио коммерческих помещений</a></li>
                    </ul>
                </li>
                <li class="nav-list-item">
                    <a href="/remont_kvartir_etapy_rabot.html" title="">Этапы ремонта</a>
                    <div class="nav-sub-list-icon">
                        <svg height="18" width="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612.02px"
                            height="612.02px" viewBox="0 0 612.02 612.02"
                            style="enable-background:new 0 0 612.02 612.02;" xml:space="preserve">
                            <g>
                                <g id="_x35__11_">
                                    <g>
                                        <path
                                            d="M596.96,269.674L342.381,15.094c-20.079-20.079-52.644-20.079-72.723,0c-20.079,20.079-20.079,52.644,0,72.723 L487.852,306.01L269.658,524.202c-20.079,20.079-20.079,52.644,0,72.723s52.644,20.079,72.723,0L596.96,342.346 C617.039,322.317,617.039,289.753,596.96,269.674z M290.858,254.258L88.744,41.238c-20.309-21.378-53.204-21.378-73.513,0 s-20.309,56.058,0,77.462l165.371,174.289L15.231,467.278c-20.309,21.379-20.309,56.083,0,77.462s53.204,21.379,73.513,0 L290.858,331.72C311.167,310.342,311.167,275.662,290.858,254.258z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <ul class="nav-sub-list">
                        <li class="nav-sub-list-item">
                            <a href="demontazhnye_raboty.html">Демонтажные работы</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="etapy_rabot_vozvedenie_peregorodok.html">Устройство перегородок</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="shtukaturnye_raboty.html">Штукатурные работы</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="styazhka_pola.html">Устройство цементной стяжки</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="gipsokartonnye_raboty.html">Гипсокартонные работы</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="etapy_rabot_plitochnyie_rabotyi.html">Плиточные работы</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="montazh_plastikovyh_okon.html">Монтаж пластиковых окон</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="shumoizolyaciya_kvartiry.html">Шумоизоляция квартиры</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="ukladka_napolnyh_pokryti.html">Укладка напольных покрытий</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="malyarnye_raboty.html">Малярные работы</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="dekorativnaya_shtukaturka_i_pokraska.html">Декоративная штукатурка и
                                покраска</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="uteplenie_balkonov_i_lodzhij.html">Утепление балконов и лоджий</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="ustrojstvo_monolitnoi_lestnicy.html">Устройство монолитной лестницы</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="montazh_natyazhnyh_potolkov.html">Монтаж натяжных потолков</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-list-item"><a href="/price.html" title="">Прайс</a></li>
                <li class="nav-list-item">
                    <a href="/portfolio_dizajn_proektov.html" title="">Дизайн интерьера</a>
                    <div class="nav-sub-list-icon">
                        <svg height="18" width="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612.02px"
                            height="612.02px" viewBox="0 0 612.02 612.02"
                            style="enable-background:new 0 0 612.02 612.02;" xml:space="preserve">
                            <g>
                                <g id="_x35__11_">
                                    <g>
                                        <path
                                            d="M596.96,269.674L342.381,15.094c-20.079-20.079-52.644-20.079-72.723,0c-20.079,20.079-20.079,52.644,0,72.723 L487.852,306.01L269.658,524.202c-20.079,20.079-20.079,52.644,0,72.723s52.644,20.079,72.723,0L596.96,342.346 C617.039,322.317,617.039,289.753,596.96,269.674z M290.858,254.258L88.744,41.238c-20.309-21.378-53.204-21.378-73.513,0 s-20.309,56.058,0,77.462l165.371,174.289L15.231,467.278c-20.309,21.379-20.309,56.083,0,77.462s53.204,21.379,73.513,0 L290.858,331.72C311.167,310.342,311.167,275.662,290.858,254.258z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <ul class="nav-sub-list">
                        <li class="nav-sub-list-item">
                            <a href="/portfolio_dizajn_proektov.html">Портфолио</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-list-item">
                    <a title="">Инженерные системы</a>
                    <div class="nav-sub-list-icon">
                        <svg height="18" width="18" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612.02px"
                            height="612.02px" viewBox="0 0 612.02 612.02"
                            style="enable-background:new 0 0 612.02 612.02;" xml:space="preserve">
                            <g>
                                <g id="_x35__11_">
                                    <g>
                                        <path
                                            d="M596.96,269.674L342.381,15.094c-20.079-20.079-52.644-20.079-72.723,0c-20.079,20.079-20.079,52.644,0,72.723 L487.852,306.01L269.658,524.202c-20.079,20.079-20.079,52.644,0,72.723s52.644,20.079,72.723,0L596.96,342.346 C617.039,322.317,617.039,289.753,596.96,269.674z M290.858,254.258L88.744,41.238c-20.309-21.378-53.204-21.378-73.513,0 s-20.309,56.058,0,77.462l165.371,174.289L15.231,467.278c-20.309,21.379-20.309,56.083,0,77.462s53.204,21.379,73.513,0 L290.858,331.72C311.167,310.342,311.167,275.662,290.858,254.258z" />
                                    </g>
                                </g>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </div>
                    <ul class="nav-sub-list">
                        <li class="nav-sub-list-item">
                            <a href="inzhenernyie_sistemyi_portfolio.html">Портфолио</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="electromontag.html">Электромонтаж</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="vodosnabzhenie.html">Водоснабжение</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="otoplenie.html">Отопление</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="ustanovka_kondicionerov.html">Кондиционирование</a>
                        </li>
                        <li class="nav-sub-list-item">
                            <a href="proektirovanie.html">Проектирование</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-list-item"><a href="/kachestvo_rabot.html" title="">Компания</a></li>
                <li class="nav-list-item"><a href="/otzyvy.php" title="">Отзывы</a></li>

                <li class="nav-list-item hide mshow"><a href="http://rem-ac.ru/constructor/008/" title="">Конструктор натяжного потолка</a></li>
                <li class="nav-list-item hide mshow"><a href="http://rem-ac.ru/constructor/okna_1/okno/" title="">Калькулятор окон</a></li>
                <li class="nav-list-item hide mshow"><a href="http://rem-ac.ru/constructor/lodjiya/" title="">Калькулятор лоджий</a></li>
                <li class="nav-list-item hide mshow"><a href="http://rem-ac.ru/3D-tur/stoletova-9/" title="">3D-тур помещений</a></li>
            </ul>
        </nav>
    </div>



    <div class="forma-svyaz" id="forma-svyaz">
        <div class="forma-svyaz__container">
            <h2 class="forma-svyaz__h2">Форма связи</h2>
            <form id="form-svyaz" onsubmit="send(event, 'mailer/config.php')" method="post"
                enctype="multipart/form-data">
                <input name="zap" value="Заявка из формы обратной связи" type="hidden">
                <div class="">
                    <div class="">
                        <input name="name" class="cost-form-input" type="text" value="" placeholder="Имя">
                        <input name="email" class="cost-form-input" type="text" value=""
                            placeholder="Телефон или e-mail" required>
                        <textarea name="text_comment" class="cost-form-input cost-form-input_textarea"
                            placeholder="Описание проекта"></textarea>
                        <div class="inputfile"></div>
                        <!--<label>
                                        <input name="attachment" id="inputfile" class="inputfile" multiple="multiple" accept="image/*,image/jpeg" data-multiple-caption="Выбрано файлов: {count}" type="file"><span>Прикрепить файл</span>
                                        <div>Обзор...</div>
                                    </label>-->
                    </div>
                    <div class="">
                        <br>
                        <p>Заполните <b>форму</b>&nbsp;обратной связи</p>
                        <p><br></p>
                        <p> </p>
                        <p>Позвоните нам по телефону <b>+7 (495) 414-26-92</b></p>
                        <p><br></p>
                        <p>Напишите письмо&nbsp; <b>info@rem-ac.ru</b></p>
                        <p><br></p>
                    </div>
                    <div class="bid-cost_button">
                        <input name="btn" class="btn" type="submit" value="Отправить" />
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- header-new -->
  
      

        <div class="page_wrapper">

            <section class="block106 info-block">
                <div class="l-container">
                    <h1 class="text-center pt-4">ОТЗЫВЫ О НAC</h1>
                </div>
            </section>

            <section class="block106 info-block" style="background: #a59b9b14;">
                <div class="l-container">
                    <div>
                        <?php require 'comment/commen1t.txt' ?>
                    </div>
                </div>
            </section>







            <style>
                .steps-block .owl-carousel {
                    overflow: hidden;
                }

                /*.gallery-inner-item {*/
                /*    -webkit-filter: blur(5px);*/
                /*    -moz-filter: blur(5px);*/
                /*    -o-filter: blur(5px);*/
                /*    -ms-filter: blur(5px);*/
                /*    filter: blur(5px);*/
                /*}*/
            </style>
            <section class="">
                <div class="l-container">
                    <center>
                        <h2 class="first-title section-title">Дипломы и сертификаты</h2>
                    </center>
                    <div class="images">
                        <img loading="lazy" data-lazy data-src="new-assets/images/dip-1-min.jpg" alt="">
                        <img loading="lazy" data-lazy data-src="new-assets/images/dip-2-min.jpg" alt="">
                        <img loading="lazy" data-lazy data-src="new-assets/images/dip-3-min.jpg" alt="">
                        <img loading="lazy" data-lazy data-src="new-assets/images/dip-4-min.jpg" alt="">
                        <img loading="lazy" data-lazy data-src="new-assets/images/dip-5-min.jpg" alt="">
                        <img loading="lazy" data-lazy data-src="new-assets/images/dip-6-min.jpg" alt="">
                        <img loading="lazy" data-lazy data-src="new-assets/images/dip-7-min.png" alt="">
                        <img loading="lazy" data-lazy data-src="new-assets/images/dip-8-min.png" alt="">
                    </div>
                </div>
            </section>

            <section class="references-block" style="display: block;">
                <div class="container">
                    <div class="row">
                        <div class="wrap_inner">
                            <div class="footer_blk_title">Рекомендуем поcмотреть</div>
                            <div class="footer_obj_links cf">
                                <div class="footer_obj_links_item ">
                                    <a href="electromontag.html">
                                        <div class="footer_obj_links_item_image">
                                            <img src="./img/ss2.jpg" alt="">

                                            <div class="footer_obj_links_item_image_text">
                                                <span class="footer_obj_links_item_image_text_">Электромонтажный
                                                    комплекс</span>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div class="footer_obj_links_item ">
                                    <a href="vodosnabzhenie.html">
                                        <div class="footer_obj_links_item_image">
                                            <img src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImQwYjNjYTA0MWQyZGMyOTgxYmZkOTcyOWIzOGFhNjkyNWZiZDM1ODguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=" alt="">
                                        </div>
                                        <div class="footer_obj_links_item_image_text">
                                            <span class="footer_obj_links_item_image_text_">Монтаж систем
                                                водоснабжения</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="footer_obj_links_item">
                                    <a href="otoplenie.html">
                                        <div class="footer_obj_links_item_image">
                                            <img src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjA5NTZjNjA5ZmNkNzlhNTFiNWQ0YzkyZTkzNmQ1Njc3ZTFlZGJhMmQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=" alt="">
                                        </div>
                                        <div class="footer_obj_links_item_image_text">
                                            <span class="footer_obj_links_item_image_text_">Монтаж систем
                                                отопления</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <div style="display: none;" id="edit-block-modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="block6 advantages-block">
            <div class="l-container">
            <a href="/" class="logo logo_footer">
                    <picture>
                        <img src="new-assets/images/header-logo-min.png" alt="">
                    </picture>
                    <span>
                        АС - Качественный ремонт квартир и
                        коттеджей в Москве и подмосковье
                    </span>
                </a>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="l-container">
                        <div class="footer-inner">
                            <div class="footer-item footer-contacts col-md-6 col-sm-6">
                                <p>г. Москва, Ленинский проспект 109 6-й этаж офис 24</p>

                                <p>Телефон: +7 (495) 414-26-92</p>
                                <p>e-mail: info@rem-ac.ru</p>
                                <p><a href="index.html#">Не является публичной офертой</a></p>
                                <p>2007 - 2021</p>
                            </div>
                            <div class="footer-item footer-moskov col-md-6 col-sm-6">
                                <img src="img/kollaj.jpg" />
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </footer>
        <wrapper>
            <div class="dws">
                <div class="pulse"><a href="#popup:marquiz_5f6dab731128100044ec688a">
                        <div class="bloc"></div>
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">Узнать стоимость</div>
                </div></a>
            </div>
        </wrapper>
        <wrapper>
            <div class="dws2">
                <div class="pulse2">
                    <div class="bloc2"></div>
                    <div class="phone2"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text2">Заключить договор</div>
                </div>
            </div>
        </wrapper>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
        <script src="js/owl.carousel2.thumbs.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
        <script src="js/jquery.inputmask.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sly/1.6.1/sly.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.2.1/script/jquery.jscrollpane.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <script src="js/forms.js"></script>
        <script src="js/custom-file-input.js"></script>
        <script src="js/main.js"></script>
        <script src="js/main2.js"></script>
        <p><br></p>
        <p><br></p>

        <script type="application/javascript">
            var lazyLoadInstance = new LazyLoad({
                elements_selector: ".lazy"
            });
            $(window).load(function() {
                $('#loading').fadeOut();
            });
            $(window).bind('beforeunload', function() {
                $('#loading').fadeIn();

            });
        </script>

        <script src="js/theme.js"></script>
        <script>
            (function(w, d, u) {
                var s = d.createElement('script');
                s.async = true;
                s.src = u + '?' + (Date.now() / 60000 | 0);
                var h = d.getElementsByTagName('script')[0];
                h.parentNode.insertBefore(s, h);
            })(window, document, 'https://cdn-ru.bitrix24.ru/b2128711/crm/tag/call.tracker.js');
        </script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(m, e, t, r, i, k, a) {
                m[i] = m[i] || function() {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(67615048, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true
            });
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/67615048" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
        <!--<div class="marquiz-pops marquiz-pops_position_bottom-right marquiz-pops_rounded marquiz-pops_shadowed marquiz-pops_blicked marquiz-pops_position" ><a class="marquiz-pops__body" href="#popup:marquiz_5f6dab731128100044ec688a" data-marquiz-pop-text-color="#ffffff" data-marquiz-pop-background-color="#3034e2" data-marquiz-pop-svg-color="#fff" data-marquiz-pop-close-color="#fff" data-marquiz-pop-color-pulse="rgba(48, 52, 226, 0.4)" data-marquiz-pop-color-pulse-alpha="rgba(48, 52, 226, 0)" data-marquiz-pop-bonuses="2" data-marquiz-pop-delay="20s" data-marquiz-pop="true">
		    <span class="marquiz-pops__icon"></span>
		    <span class="marquiz-pops__content">
		        <span class="marquiz-pops__content-title">Скидки до 12%</span>
		        <span class="marquiz-pops__content-text">&laquo;Пройдите тест и получите скидку&raquo;</span></span><span class="marquiz-pops__bonus">Вам доступны бонусы и скидка</span></a></div>
		  </div>   -->

        <script src="new-assets/js/slick.min.js"></script>
        <script src="new-assets/js/jquery.fancybox.min.js"></script>
        <script src="new-assets/js/jquery.lazy.min.js"></script>
        <script src="new-assets/js/scripts.js"></script>



</body>

</html>
