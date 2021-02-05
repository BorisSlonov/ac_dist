<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/balcony.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script defer type="text/javascript" src="js/allPlugs.js"></script>
    <script defer type="text/javascript" src="js/jquery.main.min.js"></script>
    <script defer type="text/javascript" src="js/jquery.main.plugins.min.js"></script>
    <script type="text/javascript" src="js/balcony.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="main">
        <div class="screen">
            <div class="inner">
                <h1 class="ttl">
                    Калькулятор остекления балконов
                </h1>
                <div class="subTtl">
                    Рассчитайте стоимость остекления со скидкой до <span class="disc">70</span>%
                </div>
                <form action="send.php" id="calc-form" method="post" name="calc-form" class="size-form2">

                    <div class="sub">
                        1. Выберите тип остекления
                    </div>

                    <div class="type">
                        <label>
                            <img src="./images/balcony/cold.jpg" alt="Холодное остекление">
                            <input type="radio" name="tx_tdb_pi1[type_ostekl]" value="cold"
                                   checked="checked"
                            >
                            <span>
                        Холодное остекление
                    </span>
                        </label>
                        <label>
                            <img src="./images/balcony/warm.jpg" alt="Теплое остекление">
                            <input type="radio" name="tx_tdb_pi1[type_ostekl]" value="warm"
                            >
                            <span>
                        Теплое остекление
                    </span>
                        </label>
                        <label>
                            <img src="./images/balcony/france.jpg" alt="Французское остекление">
                            <input type="radio" name="tx_tdb_pi1[type_ostekl]" value="france"
                            >
                            <span>
                        Французское остекление
                    </span>
                        </label>
                        <label>
                            <img src="./images/balcony/removal.jpg" alt="Остекление с выносом">
                            <input type="radio" name="tx_tdb_pi1[type_ostekl]" value="removal"
                            >
                            <span>
                        Остекление с выносом
                    </span>
                        </label>
                    </div>


                    <div class="left">
                        <div class="sub">
                            2. Укажите ширину и высоту окон на балконе
                        </div>


                        <div class="block">
                            <div class="img">
                                <input class="sizes" type="text" for='width' name="tx_tdb_pi1[width]"
                                       placeholder="в мм">
                                <span class="ei width">мм</span>
                                <input class="sizes" type="text" for='height' name="tx_tdb_pi1[height]"
                                       placeholder="в мм">
                                <span class="ei height">мм</span>
                            </div>
                        </div>
                    </div>

                    <div class="right">
                        <div class="sub">
                            3. Выберите опции
                        </div>
                        <ul>

                            <li>Укажите количество створок в окне
                                <div class="row-holder">
                                    <div class="row">

                                        <input type="radio"
                                               name="tx_tdb_pi1[stvorki]" id="stvorki_0" value="2 створки"/><label
                                                for="stvorki_0" class="radio_caption">2
                                            створки</label></div>
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[stvorki]" id="stvorki_1" value="3 створки"
                                               checked="checked"/>
                                        <label for="stvorki_1" class="radio_caption">3
                                            створки</label></div>
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[stvorki]" id="stvorki_2" value="4 створки"/>
                                        <label for="stvorki_2" class="radio_caption">4
                                            створки</label></div>
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[stvorki]" id="stvorki_3"
                                               value="5 створок или более"/><label for="stvorki_3"
                                                                                   class="radio_caption">5
                                            створок или более</label>

                                    </div>
                                </div>
                            </li>
                            <li>Планируете ли использовать балкон, <br>
                                как продолжение квартиры?
                                <div class="row-holder">
                                    <div class="row">

                                        <input type="radio"
                                               name="tx_tdb_pi1[prodoljenie]" id="prodoljenie_0" value="Да"/><label
                                                for="prodoljenie_0" class="radio_caption">Да</label>
                                    </div>
                                    <div class="row">

                                        <input type="radio"
                                               name="tx_tdb_pi1[prodoljenie]" id="prodoljenie_1" value="Нет"
                                               checked="checked"/><label
                                                for="prodoljenie_1" class="radio_caption">Нет</label>

                                    </div>
                                </div>
                            </li>
                            <li>Требуется ли обшивка и утепление?
                                <div class="row-holder">
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[utepobsh]" id="uteplenie_0" value="Да"/><label
                                                for="uteplenie_0" class="radio_caption"

                                        >Да</label>
                                    </div>
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[utepobsh]" id="uteplenie_1" value="Нет"
                                               checked="checked"/><label
                                                for="uteplenie_1" class="radio_caption"

                                        >Нет</label>
                                    </div>
                                </div>
                            </li>

                            <li>Телефон, на который вам перезвонить
                                <div class="input-holder">
                                    <input size="50" name="tx_tdb_pi1[phone]" type="tel" value="" class="text phone"/>
                                </div>
                            </li>
                        </ul>

                        <input
                                type="button"
                                value="Рассчитать со скидкой 70%"
                                id="sub" class="submit"

                        >

                        <div class="confidence calcConfidence">Согласен на обработку персональных данных <br>и
                            ознакомлен с <a href="/confidence.pdf" target="_blank">политикой конфиденциальности</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>


