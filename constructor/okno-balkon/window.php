<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/windows.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script defer type="text/javascript" src="js/allPlugs.js"></script>
    <script defer type="text/javascript" src="js/jquery.main.min.js"></script>
    <script defer type="text/javascript" src="js/jquery.main.plugins.min.js"></script>
    <script type="text/javascript" src="js/windows.js"></script>
</head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(69275725, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/69275725" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<body>
<div id="wrapper">
    <div id="main">
        <div class="screen">
            <div class="inner">

                <h1 class="ttl">
                    Калькулятор пластиковых окон – размеры и цены
                </h1>

                <span id="scode_calcSubTtl"></span>
                <form action="send.php" id="calc-form" method="post"
                      name="calc-form" class="size-form2">

                    <div class="sub">
                        1. Выберите тип окна
                    </div>

                    <div class="type">
                        <label>
                            <div>
                                <img src="./images/windows/one.png"
                                     alt="Одностворчатое окно">
                            </div>
                            <input type="radio" name="tx_tdb_pi1[windowType]"
                                   value="one"
                            >
                            <span>
        Одностворчатое<br>
        окно
        </span>
                        </label>
                        <label>
                            <div>
                                <img src="./images/windows/two.png"
                                     alt="Двустворчатое окно">
                            </div>
                            <input type="radio" name="tx_tdb_pi1[windowType]"
                                   value="two"
                                   checked="checked"
                            >
                            <span>
        Двустворчатое<br>
        окно
        </span>
                        </label>
                        <label>
                            <div>
                                <img src="./images/windows/three.png"
                                     alt="Трехстворчатое окно">
                            </div>
                            <input type="radio" name="tx_tdb_pi1[windowType]"
                                   value="three"
                            >
                            <span>
        Трехстворчатое<br>
        окно
        </span>
                        </label>
                        <label>
                            <div>
                                <img src="./images/windows/door.png"
                                     alt="Балконная дверь">
                            </div>
                            <input type="radio" name="tx_tdb_pi1[windowType]"
                                   value="door"
                            >
                            <span>
        Балконная<br>
        дверь
        </span>
                        </label>
                        <label>
                            <div>
                                <img src="./images/windows/bb1.png"
                                     alt="Одностворчатое окно с балконной дверью">
                            </div>
                            <input type="radio" name="tx_tdb_pi1[windowType]"
                                   value="bb1"
                            >
                            <span>
        Одностворчатое окно<br>
        с балконной дверью
        </span>
                        </label>
                        <label>
                            <div>
                                <img src="./images/windows/bb2.png"
                                     alt="Двустворчатое окно с балконной дверью">
                            </div>
                            <input type="radio" name="tx_tdb_pi1[windowType]"
                                   value="bb2"
                            >
                            <span>
        Двустворчатое окно<br>
        с балконной дверью
        </span>
                        </label>
                    </div>


                    <div class="left">
                        <div class="sub">
                            2. Укажите ширину и высоту окон
                        </div>


                        <div class="block">
                            <div class="img">
                                <input class="sizes" type="text" for='width'
                                       name="tx_tdb_pi1[width]" placeholder="в мм"
                                      >
                                <span class="ei width">мм</span>
                                <input class="sizes" type="text" for='height'
                                       name="tx_tdb_pi1[height]" placeholder="в мм"
                                      >
                                <span class="ei height">мм</span>


                                <input class="sizes" type="text" for='width2'
                                       name="tx_tdb_pi1[door_width]" placeholder="в мм"
                                      >
                                <span class="ei width2">мм</span>
                                <input class="sizes" type="text" for='height2'
                                       name="tx_tdb_pi1[door_height]" placeholder="в мм"
                                      >
                                <span class="ei height2">мм</span>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <ul>
                            <li>Выберите тип окна:
                                <div class="row-holder">
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[typeWindow]" id="where_0"
                                               value="Простое окно"/>
                                        <label for="where_0" class="radio_caption"
                                              >
                                            Простое окно
                                        </label>
                                    </div>
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[typeWindow]" id="where_1"
                                               value='"Погода в доме" Окна повышенной теплоизоляции'
                                               checked="checked"/>
                                        <label for="where_1" class="radio_caption"
                                              >
                                            "Погода в доме" Окна повышенной теплоизоляции
                                        </label>
                                    </div>
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[typeWindow]" id="where_2"
                                               value='"Безопасность" Окна повышенной противовломности'/>
                                        <label for="where_2" class="radio_caption"
                                              >
                                            "Безопасность" Окна повышенной противовзломности
                                        </label>
                                    </div>
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[typeWindow]" id="where_3"
                                               value='"Мегаполис" Окна повышенной шумоизояции'/>
                                        <label for="where_3" class="radio_caption"
                                              >
                                            "Мегаполис" Окна повышенной шумоизоляции
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>Выберите <br>
                                цвет окон:
                                <div class="row-holder">
                                    <div class="row">

                                        <input type="radio"
                                               name="tx_tdb_pi1[color]" id="color_0"
                                               value="Белые окна"
                                               checked="checked"/><label
                                                for="color_0" class="radio_caption"
                                               >Белые
                                            окна</label>
                                    </div>
                                    <div class="row">

                                        <input type="radio"
                                               name="tx_tdb_pi1[color]" id="color_1"
                                               value="Цветные окна"/><label
                                                for="color_1" class="radio_caption"
                                               >Цветные
                                            окна</label>

                                    </div>
                                </div>
                            </li>
                            <li>Выберите <br>
                                тип стеклопакета:
                                <div class="row-holder">
                                    <div class="row">
                                        <input type="checkbox"
                                               name="tx_tdb_pi1[steklopaket]"
                                               id="steklopaket_0"
                                               checked="checked"
                                               value="Однокамерный стеклопакет"/><label
                                                for="steklopaket_0"
                                                class="radio_caption"

                                        >Однокамерный</label>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox"
                                               name="tx_tdb_pi1[steklopaket]"
                                               id="steklopaket_1"
                                               value="Двухкамерный стеклопакет"/><label
                                                for="steklopaket_1"
                                                class="radio_caption"
                                        >Двухкамерный</label>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox"
                                               name="tx_tdb_pi1[steklopaket]"
                                               id="steklopaket_2"
                                               value="Теплоизоляционный стеклопакет"/><label
                                                for="steklopaket_2"
                                                class="radio_caption"

                                        >Теплоизоляционный</label>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox"
                                               name="tx_tdb_pi1[steklopaket]"
                                               id="steklopaket_3"
                                               value="Противоударный стеклопакет"/><label
                                                for="steklopaket_3"
                                                class="radio_caption"

                                        >Противоударный</label>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox"
                                               name="tx_tdb_pi1[steklopaket]"
                                               id="steklopaket_4"
                                               value="Шумоизоляционный стеклопакет"/><label
                                                for="steklopaket_4"
                                                class="radio_caption"

                                        >Шумоизоляционный</label>
                                    </div>
                                </div>
                            </li>
                            <li>Требуются ли монтажные работы?
                                <div class="row-holder">
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[montaj]" id="montaj_0"
                                               value="Требуется монтаж и демонтаж"
                                               checked="checked"/><label
                                                for="montaj_0" class="radio_caption"
                                               
                                        >Требуется монтаж и демонтаж</label>
                                    </div>
                                    <div class="row">
                                        <input type="radio"
                                               name="tx_tdb_pi1[montaj]" id="montaj_1"
                                               value="Требуется монтаж"/><label
                                                for="montaj_1" class="radio_caption"
                                               
                                        >Требуется монтаж</label>
                                    </div>
                                </div>
                            </li>

                            <li>Телефон, на который вам перезвонить
                                <div class="input-holder">
                                    <input
                                           size="50" name="tx_tdb_pi1[phone]" type="tel"
                                           value="" class="text phone"/>
                                </div>
                            </li>
                        </ul>

                        <input
                                type="button"
                                value="Рассчитать со скидкой 65%"
                                id="sub" class="submit"
                               
                        >

                        <div class="confidence calcConfidence">Согласен на обработку
                            персональных данных <br>и ознакомлен с <a
                                    href="/confidence.pdf" target="_blank">политикой
                                конфиденциальности</a></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>