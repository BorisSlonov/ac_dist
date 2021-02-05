<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://docs.modx.com/current/en/building-sites/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://docs.modx.com/current/en/building-sites/elements/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://docs.modx.com/current/en/building-sites/elements/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://docs.modx.com/current/en/building-sites/elements/snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://docs.modx.com/current/en/extending-modx/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://docs.modx.com/current/en/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1609156847,
    'editedby' => 1,
    'editedon' => 1609158000,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '{extends \'template:base\'}
{block \'main\'}
{set $img1 = \'assets/template/img/medal/1.png\'}
{set $img2 = \'assets/template/img/medal/2.png\'}
{set $img3 = \'assets/template/img/medal/3.png\'}
{set $img4 = \'assets/template/img/medal/4.png\'}
            <section class="block1 info-block pb-none">
                <div class="kacagainsuvod">
                    <div class="kedaunbaes-ugasonug">
                        <div class="ganvesem-atekacuvos">
                            <div class="kasted-kuvam">
                                <img src="{$img1 | pThumb : "&q=95&bg=ffffff&"}">
                            </div>
                        </div>
                        <div class="ganvesem-atekacuvos">
                            <div class="kasted-kuvam">
                                <img src="{$img2 | pThumb : "&q=95&bg=ffffff&"}">
                            </div>
                        </div>
                        <div class="ganvesem-atekacuvos">
                            <div class="kasted-kuvam">
                                <img src="{$img3 | pThumb : "&q=95&bg=ffffff&"}">
                            </div>
                        </div>
                        <div class="ganvesem-atekacuvos">
                            <div class="kasted-kuvam">
                                <img src="{$img4 | pThumb : "&q=95&bg=ffffff&"}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame frame-c info-carousel" id="basics" idd="id782">
                    <ul class="clearfix">
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/1.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/2.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/3.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/4.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/5.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/6.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/7.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/8.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="" src="assets/template/img/glavnay/1/9.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/glavnay/1/10.jpg">
                            </div>
                        </li>
                    </ul>
                    <div class="info-carousel-prev"></div>
                    <div class="info-carousel-next"></div>
                    <div class="page-bar"></div>
                </div>
                <div class="carousel-scroll-wrap">
                    <div class="scrollbar">
                        <div class="handle">
                            <div class="mousearea"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block4 benefits-block">
                <div class="l-container">
                    <h2 class="mob-hide">Наши преимущества</h2>
                    <div class="masonry-cont ben-masonry mob-hide ">
                        <div class="masonry-item-wr ben-item-wr">
                            <div class="masonry-item ben-item">
                                <span class="ben-item_ico">
                                    <img src="assets/template/img/blocks2/benefits/ico1.svg" alt="">
                                </span>
                                <h3>Идеология компании</h3>
                                <p>В основу нашей деятельности заложена японская система непрерывных улучшений
                                    «Кайдзен». Эту стратегию небольших шагов, ведущих к постоянному совершенствованию,
                                    мы внедрили в 2016 году. Благодаря регулярному следованию циклу PDCA/PDSA (с англ.
                                    «Plan-Do-Check-Act» - планирование - действие - проверка - корректировка) мы
                                    мгновенно реагируем на изменения и корректируем ошибки. А система Управления
                                    бизнес-процессами (англ. Business Process Management) позволила нам существенно
                                    повысить качество управления и контроля.<br></p>
                            </div>
                            <div class="masonry-item ben-item" style="margin-top: 111px;">
                                <span class="ben-item_ico">
                                    <img class="lazy" data-src="assets/template/img/blocks2/benefits/ico2.svg" alt="">
                                </span>
                                <h3>Комплексный ремонт по этапам</h3>
                                <p>Клиентам, которые не готовы заказать реализацию всего комплекса отделочных работ
                                    единовременно, мы предлагаем комплексный ремонт квартиры с перерывами между этапами.
                                    Как правило, в подобных ситуациях нанимаются отдельные бригады, а рабочий процесс
                                    приходится контролировать самостоятельно. Однако в таком случае практически всегда
                                    снижается качество работ и уровень ответственности их&nbsp;исполнителей.<br></p>
                                <span class="ben-item-links">
                                    <a target="_blank" href="kachestvo_rabot.html">Наше качество</a>
                                </span>
                            </div>
                            <div class="masonry-item ben-item" style="margin-top: -14px;">
                                <span class="ben-item_ico">
                                    <img class="lazy" data-src="assets/template/img/blocks2/benefits/ico3.svg" alt="">
                                </span>
                                <h3>Договор и гарантии</h3>
                                <p>Мы предоставим Вам гарантию на выполненный ремонт сроком на 7 лет. Перед началом
                                    ремонтно-отделочных работ будет заключен подробный юридический договор с прозрачной
                                    сметой и точными сроками. Договор позволяет избежать недоразумений в процессе работы
                                    и гарантирует отсутствие скрытых платежей.<br></p>
                            </div>
                        </div>
                        <div class="masonry-item-wr ben-item-wr">
                            <div class="masonry-item ben-item fill-corner">
                                <h3>Время и сервис</h3>
                                <p>Мы не просто делаем капитальный ремонт, а берем на себя организацию всех видов работ
                                    и ключевых процессов: дизайн интерьера, монтаж инженерных систем, снабжение объекта
                                    строительными и отделочными материалами, комплектация мебелью и предметами
                                    интерьера. Мы также берем на себя организацию и контроль всех субподрядных работ.
                                    Монтаж окон, кондиционеров, систем вентиляции, сигнализации, сантехники, установка
                                    дверей - все эти работы будут находиться под контролем одного управляющего, ведущего
                                    Ваш проект.<br></p>
                            </div>
                            <div class="masonry-item ben-item">
                                <span class="ben-item_ico">
                                    <img class="lazy" data-src="assets/template/img/blocks2/benefits/ico4.svg" alt="">
                                </span>
                                <h3>Технологическое качество</h3>
                                <p>Мы обеспечиваем высокое качество работ на всех этапах ремонта благодаря штату
                                    профессиональных сотрудников, наличию и соблюдению внутренних нормативных
                                    документов, а также четкому следованию СНиП (Строительным Нормам и Правилам). На
                                    объектах всегда поддерживаются чистота и порядок: материалы аккуратно складируются,
                                    не загромождая рабочее пространство. Мастера компании работают профессиональным
                                    инструментом в специализированной одежде.<br></p>

                            </div>
                            <div class="masonry-item ben-item">
                                <span class="ben-item_ico">
                                    <img class="lazy" data-src="assets/template/img/blocks2/benefits/ico5.svg" alt="">
                                </span>
                                <h3>Современные программы
                                </h3>
                                <p>Мы предусмотрели удобную схему взаимодействия с клиентами, у которых нет возможности
                                    посещать и контролировать работы лично. Удаленный контроль процесса отделки квартиры
                                    предполагает использование современных программ: Skype, WhatsApp’s, telegram, и
                                    CRM-системы. Еженедельно мы
                                    предоставляем фотоотчеты с описанием работ, онлайн-видео с объекта.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-cont masonry-cont-mobile ben-masonry mob-show owl-carousel">
                        <div class="masonry-item ben-item">
                            <h3>Комплексный подход</h3>
                            <p>Мы не просто штукатурим стены и клеим обои,
                                мы предлагаем комплексный сервис который включает
                                в себя: разработку дизайн проекта,
                                выполнение отделочных работ, монтаж инженерных систем,
                                организацию всех субподрядных работ, снабжение
                                строительными и отделочными материалами,
                                комплектация мебелью и предметами интерьера</p>
                            <span class="ben-item-links">
                                <a href="index.html#">Проектирование</a>
                                <a href="index.html#">строительство</a>
                                <a href="index.html#">черновые работы</a>
                                <a href="index.html#">инженерные работы</a>
                                <a href="index.html#">отделочные работы</a>
                            </span>
                        </div>
                        <div class="masonry-item ben-item ">
                            <h3>Стандарты качества</h3>
                            <p>Высокое качество работ на всех этапах ремонта обеспечивается
                                управленческими компетенциями руководителей проектов, опытными
                                профессиональными мастерами, наличием и соблюдением
                                внутренних нормативных документов, а также четким
                                следованием немецким стандартам качества DIN.</p>
                            <span class="ben-item-links">
                                <a href="index.html#">Наше качество</a>
                            </span>
                        </div>
                        <div class="masonry-item ben-item">
                            <h3>Инженерные работы</h3>
                            <p>
                                Все инженерные работы выполняются силами собственных
                                специализированных бригад по строгим европейским и внутренним
                                нормативам. Благодаря постоянному составу бригад, процессу обучения и аттестации,
                                мы добиваемся максимального уровня качества и аккуратности выполняемых работ.
                            </p>
                            <span class="ben-item-links">
                                <a href="index.html#">Электромонтажные работы</a>
                                <a href="index.html#">монтаж систем отопления</a>
                                <a href="index.html#">монтаж систем водоснабжения</a>
                                <a href="index.html#">монтаж пластиковых окон</a>
                                <a href="index.html#">установка кондиционеров</a>
                            </span>
                        </div>
                        <div class="masonry-item ben-item fill-corner">
                            <h3>Кайдзен</h3>
                            <p>Главным принципом нашей деятельности является японская
                                система непрерывных улучшений «Кайдзен».
                                Эта ключевая концепция менеджмента внедрена
                                нами в 2009 году. Постоянное следование
                                циклу Деминга («Plan-Do-Check-Act»:
                                планирование — действие —
                                проверка — корректировка) позволяет доводить
                                технологии и организационные процессы
                                до максимального уровня эффективности</p>
                        </div>
                        <div class="masonry-item ben-item">
                            <h3>Удаленный контроль</h3>
                            <p>Мы предлагаем уникальную услугу клиентам,
                                у которых нет возможности посещать и контролировать
                                работы лично. Для удаленного контроля процесса отделки вашего дома
                                мы используем Skype и CRM-систему. Вам предоставляются
                                еженедельные фотоотчеты с описанием работ, онлайн-видео
                                с объекта.</p>
                            <span class="ben-item-links">
                                <a href="index.html#">13 объектов в процессе</a>
                            </span>
                        </div>
                        <div class="masonry-item ben-item">
                            <h3>Договор и 5 лет гарантии</h3>
                            <p>
                                Гарантия на все виды работ 5 лет.
                                Заключаем подробный юридический договор с точной прозрачной
                                сметой и сроками. Это позволит избежать недопонимания
                                во время ремонта и гарантирует вам отсутствие
                                скрытых платежей в процессе.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block86 process-block">
                <div class="l-container">
                    <h2>Портфолио завершенных ремонтов</h2>
                    <p class="steps-block_text">Предлагаем ознакомиться с фотографиями интерьеров квартир, комплексная
                        отделка которых выполнена нашей компанией.
                        Более подробно наше портфолио с фотографиями процесса работ можно посмотреть в разделе Портфолио
                        ремонтов квартир.</p>
                    <div class="obj-gallery-wr">
                        <div class="obj-gallery-wr_galls portf">
                            <div class="obj-gallery-wr_container active">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/1.jpg"
                                                data-src="assets/template/img/new/2.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/3.jpg"
                                                data-src="assets/template/img/new/4.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img class="lazy" data-src="assets/template/img/new/5.jpg"
                                                data-src="assets/template/img/new/6.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img class="lazy" data-src="assets/template/img/new/7.jpg"
                                                data-src="assets/template/img/new/8.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img class="lazy" data-src="assets/template/img/new/9.jpg"
                                                data-src="assets/template/img/new/10.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img class="lazy" data-src="assets/template/img/new/11.jpg"
                                                data-src="assets/template/img/new/12.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/13.jpg"
                                                data-src="assets/template/img/new/14.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/15.jpg"
                                                data-src="assets/template/img/new/16.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/17.jpg"
                                                data-src="assets/template/img/new/18.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/19.jpg"
                                                data-src="assets/template/img/new/20.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/21.jpg"
                                                data-src="assets/template/img/new/22.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/23.jpg"
                                                data-src="assets/template/img/new/24.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/25.jpg"
                                                data-src="assets/template/img/new/26.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/27.jpg"
                                                data-src="assets/template/img/new/28.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/29.jpg"
                                                data-src="assets/template/img/new/30.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/31.jpg"
                                                data-src="assets/template/img/new/32.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/33.jpg"
                                                data-src="assets/template/img/new/34.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/35.jpg"
                                                data-src="assets/template/img/new/36.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/37.jpg"
                                                data-src="assets/template/img/new/38.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/39.jpg"
                                                data-src="assets/template/img/new/40.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/41.jpg"
                                                data-src="assets/template/img/new/42.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/43.jpg"
                                                data-src="assets/template/img/new/44.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/45.jpg"
                                                data-src="assets/template/img/new/46.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/47.jpg"
                                                data-src="assets/template/img/new/48.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/49.jpg"
                                                data-src="assets/template/img/new/50.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/51.jpg"
                                                data-src="assets/template/img/new/52.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/53.jpg"
                                                data-src="assets/template/img/new/54.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/55.jpg"
                                                data-src="assets/template/img/new/56.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/57.jpg"
                                                data-src="assets/template/img/new/58.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/59.jpg"
                                                data-src="assets/template/img/new/60.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/61.jpg"
                                                data-src="assets/template/img/new/62.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/63.jpg"
                                                data-src="assets/template/img/new/64.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/65.jpg"
                                                data-src="assets/template/img/new/66.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/67.jpg"
                                                data-src="assets/template/img/new/68.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/69.jpg"
                                                data-src="assets/template/img/new/70.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/71.jpg"
                                                data-src="assets/template/img/new/72.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/73.jpg"
                                                data-src="assets/template/img/new/74.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/75.jpg"
                                                data-src="assets/template/img/new/76.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/77.jpg"
                                                data-src="assets/template/img/new/78.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/79.jpg"
                                                data-src="assets/template/img/new/80.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/81.jpg"
                                                data-src="assets/template/img/new/82.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/83.jpg"
                                                data-src="assets/template/img/new/84.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/85.jpg"
                                                data-src="assets/template/img/new/86.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/87.jpg"
                                                data-src="assets/template/img/new/88.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/89.jpg"
                                                data-src="assets/template/img/new/90.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/91.jpg"
                                                data-src="assets/template/img/new/92.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/93.jpg"
                                                data-src="assets/template/img/new/94.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/95.jpg"
                                                data-src="assets/template/img/new/96.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/97.jpg"
                                                data-src="assets/template/img/new/98.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/99.jpg"
                                                data-src="assets/template/img/new/100.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/101.jpg"
                                                data-src="assets/template/img/new/102.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/103.jpg"
                                                data-src="assets/template/img/new/104.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/105.jpg"
                                                data-src="assets/template/img/new/106.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/107.jpg"
                                                data-src="assets/template/img/new/108.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/109.jpg"
                                                data-src="assets/template/img/new/110.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/111.jpg"
                                                data-src="assets/template/img/new/112.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/113.jpg"
                                                data-src="assets/template/img/new/114.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/115.jpg"
                                                data-src="assets/template/img/new/116.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/117.jpg"
                                                data-src="assets/template/img/new/118.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/119.jpg"
                                                data-src="assets/template/img/new/120.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/121.jpg"
                                                data-src="assets/template/img/new/122.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/123.jpg"
                                                data-src="assets/template/img/new/124.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/125.jpg"
                                                data-src="assets/template/img/new/126.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="obj-gallery-wr_container ">
                                <div class="obj-gallery-gal_stage owl-carousel">
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/127.jpg"
                                                data-src="assets/template/img/new/128.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/129.jpg"
                                                data-src="assets/template/img/new/130.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/131.jpg"
                                                data-src="assets/template/img/new/132.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/133.jpg"
                                                data-src="assets/template/img/new/134.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/135.jpg"
                                                data-src="assets/template/img/new/136.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/137.jpg"
                                                data-src="assets/template/img/new/138.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/139.jpg"
                                                data-src="assets/template/img/new/140.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/141.jpg"
                                                data-src="assets/template/img/new/142.jpg">
                                        </div>
                                    </div>
                                    <div class="proc_item">
                                        <div class="proc_item_img">
                                            <img alt="" class="lazy" data-src="assets/template/img/new/143.jpg"
                                                data-src="assets/template/img/new/144.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="obj-gallery-gal_thumbs">
                            <div class="obj-gallery-gal_thumbs_wrapper scroll-pane" style="width: 100%">
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/145.jpg"
                                            data-src="assets/template/img/new/146.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">Мытищи ЖК Ньютон | Квартира 100 м.кв. </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/147.jpg"
                                            data-src="assets/template/img/new/148.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">ЖК Доминион 180 м.кв. </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/149.jpg"
                                            data-src="assets/template/img/new/150.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">Итальянский квартал | Квартира 100 м.кв </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/151.jpg"
                                            data-src="assets/template/img/new/152.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">ЖК Скайфорт, 1-й Нагатинский проезд | Квартира 140 м.кв
                                    </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/153.jpg"
                                            data-src="assets/template/img/new/154.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">ЖК Скайфорт, 1-й Нагатинский проезд | Квартира 120 м.кв
                                    </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/155.jpg"
                                            data-src="assets/template/img/new/156.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">Химки, ул.Юбилейный проспект 25 | Квартира 140 м.кв 140
                                    </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/157.jpg"
                                            data-src="assets/template/img/new/158.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">Красногорск, Подмосковный бульвар | Квартира 100 м.кв.
                                    </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/159.jpg"
                                            data-src="assets/template/img/new/160.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">Академика Волгина квартира 100 м.кв </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/161.jpg"
                                            data-src="assets/template/img/new/162.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">Куркино, ул.Родионовская 10 | Квартира 120 м.кв </div>
                                </div>
                                <div class="th_item">
                                    <div class="th_item_img">
                                        <img alt="" class="lazy" data-src="assets/template/img/new/163.jpg"
                                            data-src="assets/template/img/new/164.jpg"
                                            style="width: 200px; height: 115px;">
                                    </div>
                                    <div class="th_item_title">Апрелевка, ул. Парковая д 11 | Квартира 120 м.кв </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="application/javascript">
                        $(function () {
                            var el = $(\'.obj-gallery-gal_thumbs_wrapper\').find(\'.th_item\');
                            if (el.length > 0) {
                                el.first().addClass(\'active\')
                            }
                        })
                    </script>
                    <style>
                    </style>
                </div>
            </section>
            <section class="block69 steps-block">
                <div class="l-container">
                    <h2 class="steps-block_title">Этапы ремонта</h2>
                    <p class="steps-block_text">Капитальный ремонт квартиры начинается с
                        разработки дизайн-проекта, который включает в себя: замер помещений, выявление потребностей
                        владельца, визуализацию, рабочие чертежи, спецификации
                        на отделочные материалы и мебель. Без дизайн-проекта качественный ремонт выполнить просто не
                        получится.</p>
                </div>
            </section>
            <section class="steps-block">
                <div class="l-container">
                    <div class="gallery-wr gallery-step5ecb88151a503">
                        <div class="gallery-descr">
                            <h3>Черновые работы</h3>
                            <div class="owl-thumbs owl-thumbs-step" data-slider-id="5ecb88151a503">
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage active" data-id="78">
                                    <span class="owl-thumb_text">Штукатурка стен</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="76">
                                    <span class="owl-thumb_text">Демонтажные работы</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="77">
                                    <span class="owl-thumb_text">Устройство перегородок</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="79">
                                    <span class="owl-thumb_text">Утепление балкона и лоджии</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="80">
                                    <span class="owl-thumb_text">Шумоизоляция квартиры</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="81">
                                    <span class="owl-thumb_text">Стяжка пола</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="3343">
                                    <span class="owl-thumb_text">Установка пластиковых окон</span>

                                </p>
                            </div>
                        </div>
                        <div class="owl-carousel js-step mob-hide" data-slider-id="5ecb88151a503">
                            <div class="gallery-item step-gallery-item gallery-id-78">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Штукатурка стен </div>

                                        <img alt="Штукатурка стен" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU2MTAxY2I3ZWRjMmQwOWJhMzAyYTYwYzBjOWMzODkwMWZhZDQ0NWYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU2MTAxY2I3ZWRjMmQwOWJhMzAyYTYwYzBjOWMzODkwMWZhZDQ0NWYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Штукатурка стен </div>

                                        <img alt="Штукатурка стен" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjcwMGY2ZmQxMTU2NjVkYjBmYjAxYWQwZGFiZGQ4NWYyZDI1YzE5NDQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjcwMGY2ZmQxMTU2NjVkYjBmYjAxYWQwZGFiZGQ4NWYyZDI1YzE5NDQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Штукатурка стен </div>

                                        <img alt="Штукатурка стен" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjRlOTc4YjRmMzIwOGNkNDA3ODhkZWU2ZTAzZGNlMjYxZDViMWRlZmMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjRlOTc4YjRmMzIwOGNkNDA3ODhkZWU2ZTAzZGNlMjYxZDViMWRlZmMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Штукатурка стен </div>

                                        <img alt="Штукатурка стен" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImQ4YzliNThhODg0OGI4YWQ1MGNkYzQzODE3MjgwMjMwNWRhODg2MDMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImQ4YzliNThhODg0OGI4YWQ1MGNkYzQzODE3MjgwMjMwNWRhODg2MDMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-76">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Демонтажные работы </div>

                                        <img alt="Демонтажные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjA3YTc1ZmVhMzJlNjViMGJhY2IyM2E2MThhZGEyN2E1YWJlNDhmYTguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjA3YTc1ZmVhMzJlNjViMGJhY2IyM2E2MThhZGEyN2E1YWJlNDhmYTguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Демонтажные работы </div>

                                        <img alt="Демонтажные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjdiNmJiYTVlNmE5YWYwM2RmMzU5OGI5ZGU0MzFjZGI0ODA0NzdiNmMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjdiNmJiYTVlNmE5YWYwM2RmMzU5OGI5ZGU0MzFjZGI0ODA0NzdiNmMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Демонтажные работы </div>

                                        <img alt="Демонтажные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjZiNzFlNGM1MGNjYjMxMWExNmFlNTMwNzA3Y2M0YTQyZDY1MDFiNTIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjZiNzFlNGM1MGNjYjMxMWExNmFlNTMwNzA3Y2M0YTQyZDY1MDFiNTIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-77">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Устройство перегородок </div>

                                        <img alt="Устройство перегородок" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImM3MWNiOTQ4NGIwZmI4ZjkzZjczYzdkYWVkYzJiMmJlNTI5OWQ0MDUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImM3MWNiOTQ4NGIwZmI4ZjkzZjczYzdkYWVkYzJiMmJlNTI5OWQ0MDUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Устройство перегородок </div>

                                        <img alt="Устройство перегородок" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRjODM2NjEzMmIwZWExZDA3ZWVhY2NhYmJlNzBjYmZkMzljMWU1YjEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRjODM2NjEzMmIwZWExZDA3ZWVhY2NhYmJlNzBjYmZkMzljMWU1YjEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Устройство перегородок </div>

                                        <img alt="Устройство перегородок" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRmYmFjYTc0OGM4MDU4MzFkYTVmMjFjNTM4ZGYyODMyOWZiZWRhNjguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRmYmFjYTc0OGM4MDU4MzFkYTVmMjFjNTM4ZGYyODMyOWZiZWRhNjguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Устройство перегородок </div>

                                        <img alt="Устройство перегородок" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjM0NWNlM2NiNWNkMzRmMmY5NzhmOTMyZjY1NTQ2M2Q3MDAyYTg2ZDEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjM0NWNlM2NiNWNkMzRmMmY5NzhmOTMyZjY1NTQ2M2Q3MDAyYTg2ZDEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-79">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Утепление балкона и лоджии </div>

                                        <img alt="Утепление балкона и лоджии" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjE4ZGZhZTMwNmNjOWJmNjczZDU0ZDVlNzk5NGNkNmViMDUxZTVmMTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjE4ZGZhZTMwNmNjOWJmNjczZDU0ZDVlNzk5NGNkNmViMDUxZTVmMTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Утепление балкона и лоджии </div>

                                        <img alt="Утепление балкона и лоджии" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVkMmQ2ZWIzMGEzMGUxM2U0ZGNiMGVmZTYwZmVjNTk2NDg1YTM1MzEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVkMmQ2ZWIzMGEzMGUxM2U0ZGNiMGVmZTYwZmVjNTk2NDg1YTM1MzEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Утепление балкона и лоджии </div>

                                        <img alt="Утепление балкона и лоджии" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjUwYzhhYjhhNDI3ZWE0YmRhMDhkNDExZGYyYzZjYjY0MmFmNWE2MGQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjUwYzhhYjhhNDI3ZWE0YmRhMDhkNDExZGYyYzZjYjY0MmFmNWE2MGQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-80">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Шумоизоляция квартиры </div>

                                        <img alt="Шумоизоляция квартиры" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjRmOGFiNWM5NzdhMDE1ZTM4Yjg2MGY1ZTNlZTI0Yzk3NGY3MmNiNmQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjRmOGFiNWM5NzdhMDE1ZTM4Yjg2MGY1ZTNlZTI0Yzk3NGY3MmNiNmQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Шумоизоляция квартиры </div>

                                        <img alt="Шумоизоляция квартиры" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijk1NTcyNzM0Y2M1NTgyMjRiMDFlOTA4YTk1OWRmZTY0Yjk1ZTQ1NDkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijk1NTcyNzM0Y2M1NTgyMjRiMDFlOTA4YTk1OWRmZTY0Yjk1ZTQ1NDkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Шумоизоляция квартиры </div>

                                        <img alt="Шумоизоляция квартиры" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImUxNGY4YzYyMWFiYmUxNDY5YzdjNTJhMTE0ZGYzYTIxNWJiYWQxZGUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImUxNGY4YzYyMWFiYmUxNDY5YzdjNTJhMTE0ZGYzYTIxNWJiYWQxZGUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-81">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Стяжка пола </div>

                                        <img alt="Стяжка пола" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjUzYjI3MDEwYmE1N2E4YmQ0MzEwNTRlZTk0ZTJhZmU4ODE0MTFiZmQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjUzYjI3MDEwYmE1N2E4YmQ0MzEwNTRlZTk0ZTJhZmU4ODE0MTFiZmQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Стяжка пола </div>

                                        <img alt="Стяжка пола" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVlNjFkNTNkMTQxYjk4MjRhMmMxMjYzYzM3NjEzYzYyMzQyMTE2ZDMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVlNjFkNTNkMTQxYjk4MjRhMmMxMjYzYzM3NjEzYzYyMzQyMTE2ZDMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Стяжка пола </div>

                                        <img alt="Стяжка пола" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImYzNmI3Y2FlYjUwNDc1OWI3M2I1ODg0NjEyMGJhNjc1NWQ1MDRiNzEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImYzNmI3Y2FlYjUwNDc1OWI3M2I1ODg0NjEyMGJhNjc1NWQ1MDRiNzEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-3343">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Установка пластиковых окон </div>

                                        <img alt="Установка пластиковых окон" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijk3Y2UyMzI3NjU5MWIxZDZkZTdhZmZjOTgwNmNkMmM3ZDk3NDE3YmEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijk3Y2UyMzI3NjU5MWIxZDZkZTdhZmZjOTgwNmNkMmM3ZDk3NDE3YmEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Установка пластиковых окон </div>

                                        <img alt="Установка пластиковых окон" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImFhMmVhZWY5NDM4N2RlMjQ0OWNlMzE0YzZmNGNjMmNjMjI3YWQ1M2MuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImFhMmVhZWY5NDM4N2RlMjQ0OWNlMzE0YzZmNGNjMmNjMjI3YWQ1M2MuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Установка пластиковых окон </div>

                                        <img alt="Установка пластиковых окон" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImI3MzA5OTIyOTNhN2M2ZjkzZmZhZjMzMmNkMTVkYmQ2OTU4ZDdlYWMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImI3MzA5OTIyOTNhN2M2ZjkzZmZhZjMzMmNkMTVkYmQ2OTU4ZDdlYWMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <style>
                .steps-block .owl-carousel {
                    overflow: hidden;
                }
            </style>
            <section class="steps-block">
                <div class="l-container">
                    <div class="gallery-wr gallery-step5ecb88151aee8">
                        <div class="gallery-descr">
                            <h3>Инженерные работы</h3>
                            <div class="owl-thumbs owl-thumbs-step" data-slider-id="5ecb88151aee8">
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage active" data-id="85">
                                    <span class="owl-thumb_text">Монтаж систем отопления</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="86">
                                    <span class="owl-thumb_text">Монтаж систем водоснабжения</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="83">
                                    <span class="owl-thumb_text">Электромонтажные работы</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="84">
                                    <span class="owl-thumb_text">Установка кондиционеров</span>

                                </p>
                            </div>
                        </div>

                        <div class="owl-carousel js-step mob-hide" data-slider-id="5ecb88151aee8">
                            <div class="gallery-item step-gallery-item gallery-id-85">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж систем отопления </div>

                                        <img alt="Монтаж систем отопления" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijc0NDUzYjRhNmZjNWIyNThiZTUxNTdkNjYwMDI0OWNkYTU5OGFmMjQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijc0NDUzYjRhNmZjNWIyNThiZTUxNTdkNjYwMDI0OWNkYTU5OGFmMjQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж систем отопления </div>

                                        <img alt="Монтаж систем отопления" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNiMmViMzNhODNjZjA4ZTBlMzMyNmZjZDVlZjE4NzRhNTliZGYzNTYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNiMmViMzNhODNjZjA4ZTBlMzMyNmZjZDVlZjE4NzRhNTliZGYzNTYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж систем отопления </div>

                                        <img alt="Монтаж систем отопления" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjE1NzJkOGRhNDk2MjA2ODdhMjdhZWQ3OTQwMWI4MDc5MmQzM2YwMjcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjE1NzJkOGRhNDk2MjA2ODdhMjdhZWQ3OTQwMWI4MDc5MmQzM2YwMjcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж систем отопления </div>

                                        <img alt="Монтаж систем отопления" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImVkYTZlNTUyNTUxMGUzZDU2MjE4OGEwZGI0YmU0MDliMjMxYTgyY2MuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImVkYTZlNTUyNTUxMGUzZDU2MjE4OGEwZGI0YmU0MDliMjMxYTgyY2MuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-86">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж систем водоснабжения </div>

                                        <img alt="Монтаж систем водоснабжения" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRjMzY1MTZiMWJjOWI3Yzk4OWI3YTRlZDc5Y2M1MTgwOWZjNmZhNGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRjMzY1MTZiMWJjOWI3Yzk4OWI3YTRlZDc5Y2M1MTgwOWZjNmZhNGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                        </div>

                                        <img alt="" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjdmMTRlNjE3ODBkZTM1YjBiYTEzOGMzYjUzNTI2MTk3NTgwZjIzZGMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjdmMTRlNjE3ODBkZTM1YjBiYTEzOGMzYjUzNTI2MTk3NTgwZjIzZGMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                        </div>

                                        <img alt="" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijc3YTAwNDU5ODY1ZjMxZDI3YzQ5MGExYzhlMzAyM2I0NjlmMjI0MTIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijc3YTAwNDU5ODY1ZjMxZDI3YzQ5MGExYzhlMzAyM2I0NjlmMjI0MTIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж систем водоснабжения </div>

                                        <img alt="Монтаж систем водоснабжения" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVjZjA2MGQ3YmQzNmU4MjJhOGNiNGVlNDhlMmMyYWNjODBmN2ZkYTAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVjZjA2MGQ3YmQzNmU4MjJhOGNiNGVlNDhlMmMyYWNjODBmN2ZkYTAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-83">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Электромонтажные работы </div>

                                        <img alt="Электромонтажные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjJiOTM3NTRiYjRjOTIyOTVlYzcyNjFjMWUxMTAxZjg1ZWY3ZDQxOGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjJiOTM3NTRiYjRjOTIyOTVlYzcyNjFjMWUxMTAxZjg1ZWY3ZDQxOGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Электромонтажные работы </div>

                                        <img alt="Электромонтажные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImE1MGE5ZDY1MzNmMTcxMWRmZTkyZmExOTMxZGEzMWFjYjhkM2I2ODIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImE1MGE5ZDY1MzNmMTcxMWRmZTkyZmExOTMxZGEzMWFjYjhkM2I2ODIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Электромонтажные работы </div>

                                        <img alt="Электромонтажные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNmMWY0YzQ3NmU4NWYxNWNjY2U5MTMxNzk3NWQzYjQ5YTZiMDg5MTkucG5nIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNmMWY0YzQ3NmU4NWYxNWNjY2U5MTMxNzk3NWQzYjQ5YTZiMDg5MTkucG5nIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Электромонтажные работы </div>

                                        <img alt="Электромонтажные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjFkZWMzZGI0ZmFiYjYzNzAyNzhjMjdmNmZjY2VjNzE0MDk2NWUwNzAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjFkZWMzZGI0ZmFiYjYzNzAyNzhjMjdmNmZjY2VjNzE0MDk2NWUwNzAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Электромонтажные работы </div>

                                        <img alt="Электромонтажные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImQ4NGI0ODIzMDBiMmI0ZmIzZGNmZjgyNzBmMTNhMTQ3YWUxNTczOGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImQ4NGI0ODIzMDBiMmI0ZmIzZGNmZjgyNzBmMTNhMTQ3YWUxNTczOGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-84">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Установка кондиционеров </div>

                                        <img alt="Установка кондиционеров" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImNhODFhNWUyODg5NjlkYWZhMGFmOTM1Y2M4MzFiZTQ3YWNmYTk1ZmUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImNhODFhNWUyODg5NjlkYWZhMGFmOTM1Y2M4MzFiZTQ3YWNmYTk1ZmUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Установка кондиционеров </div>

                                        <img alt="Установка кондиционеров" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjgyMDcyMWEyNzQ1Y2U4Y2UxODgyMjYzNjVjMzY1MjVhN2Q0Y2UyMWMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjgyMDcyMWEyNzQ1Y2U4Y2UxODgyMjYzNjVjMzY1MjVhN2Q0Y2UyMWMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Установка кондиционеров </div>

                                        <img alt="Установка кондиционеров" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjhjMjRhODkzNGU3YmUyYjhlZjJiYWExNThiYmM0M2ExYWQwMjhkMTcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjhjMjRhODkzNGU3YmUyYjhlZjJiYWExNThiYmM0M2ExYWQwMjhkMTcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <style>
                .steps-block .owl-carousel {
                    overflow: hidden;
                }
            </style>
            <section class="steps-block">
                <div class="l-container">
                    <div class="gallery-wr gallery-step5ecb88151b5eb">
                        <div class="gallery-descr">
                            <h3>Отделочные работы</h3>
                            <div class="owl-thumbs owl-thumbs-step" data-slider-id="5ecb88151b5eb">
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage active" data-id="89">
                                    <span class="owl-thumb_text">Монтаж гипсокартона</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="90">
                                    <span class="owl-thumb_text">Плиточные работы</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="91">
                                    <span class="owl-thumb_text">Малярные работы</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="92">
                                    <span class="owl-thumb_text">Декоративная штукатурка</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="93">
                                    <span class="owl-thumb_text">Укладка напольных покрытий</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="94">
                                    <span class="owl-thumb_text">Монтаж натяжных потолков</span>

                                </p>
                                <p class="owl-thumb-item owl-thumb-item_ii change-stage " data-id="95">
                                    <span class="owl-thumb_text">Финишная отделка</span>
                                </p>
                            </div>
                        </div>

                        <div class="owl-carousel js-step mob-hide" data-slider-id="5ecb88151b5eb">
                            <div class="gallery-item step-gallery-item gallery-id-89">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж гипсокартона </div>

                                        <img alt="Монтаж гипсокартона" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjA3YTIzZWM5NGMxNzk2MDAzYWNjZjVjYWJlMTEwNGNiZjgzNDQ4NmYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjA3YTIzZWM5NGMxNzk2MDAzYWNjZjVjYWJlMTEwNGNiZjgzNDQ4NmYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж гипсокартона </div>

                                        <img alt="Монтаж гипсокартона" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijg3NzZhZWEwNWVmOWEzY2U1YjVhZmQzNGZiNzc0MDdjZWRmYjg4ZGQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijg3NzZhZWEwNWVmOWEzY2U1YjVhZmQzNGZiNzc0MDdjZWRmYjg4ZGQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж гипсокартона </div>

                                        <img alt="Монтаж гипсокартона" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRiNjdiMGU2YWRiMjJiODU3YmVlZTI1M2IzNzU3ZmVhMDc3ZWFhZGYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRiNjdiMGU2YWRiMjJiODU3YmVlZTI1M2IzNzU3ZmVhMDc3ZWFhZGYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж гипсокартона </div>

                                        <img alt="Монтаж гипсокартона" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjQ3NjI0Y2U0ZGU3N2JjZmE5ZTI2M2JjM2I5MTE5NWUxY2EyNTJiZTguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjQ3NjI0Y2U0ZGU3N2JjZmE5ZTI2M2JjM2I5MTE5NWUxY2EyNTJiZTguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-90">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Плиточные работы </div>

                                        <img alt="Плиточные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijk0MGRiODExNWU3MTM5NGQ5NGNjYzBiODg4YzI0NWYwZmNiNGU0NzguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijk0MGRiODExNWU3MTM5NGQ5NGNjYzBiODg4YzI0NWYwZmNiNGU0NzguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Плиточные работы </div>

                                        <img alt="Плиточные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjBkYTVkNzg1Y2UxN2E4NGZkN2E4OTNhYTU2YzRlNDMwOWZmNGVmYTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjBkYTVkNzg1Y2UxN2E4NGZkN2E4OTNhYTU2YzRlNDMwOWZmNGVmYTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Плиточные работы </div>

                                        <img alt="Плиточные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjdjN2ViYmVjZTRkZjE1YjlmYWQ5NWY0OGZlMGYyOTY1NmQwMDYyNjEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjdjN2ViYmVjZTRkZjE1YjlmYWQ5NWY0OGZlMGYyOTY1NmQwMDYyNjEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Плиточные работы </div>

                                        <img alt="Плиточные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjAwOThmNDMzNDQ4Y2RlYzg4OGE3Y2IyZWQ1ODM4OTI0YzBiNWY5ZGUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjAwOThmNDMzNDQ4Y2RlYzg4OGE3Y2IyZWQ1ODM4OTI0YzBiNWY5ZGUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-91">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Малярные работы </div>

                                        <img alt="Малярные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVhOTUwOGE4YTBmZmM5YzY2NzFmYmI3NzlmNTI2OTQyMzIzNTk2MTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVhOTUwOGE4YTBmZmM5YzY2NzFmYmI3NzlmNTI2OTQyMzIzNTk2MTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Малярные работы </div>

                                        <img alt="Малярные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVmNTBkN2I5NjMyYTM5NTY4MWI1MGJkNGY2Y2IzOGE4MzQ1NGFkODQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVmNTBkN2I5NjMyYTM5NTY4MWI1MGJkNGY2Y2IzOGE4MzQ1NGFkODQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Малярные работы </div>

                                        <img alt="Малярные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjgzOWQ0NTUxN2MxMDg0MjNkZTA4MDQzYzNmMjU1ZDgxZTRlMDAxZWUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjgzOWQ0NTUxN2MxMDg0MjNkZTA4MDQzYzNmMjU1ZDgxZTRlMDAxZWUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Малярные работы </div>

                                        <img alt="Малярные работы" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU4NjAxZDQ5ZGMyY2MxNjE5YzQzYTlkOGZiOTcwNjcxMTVkMzM1NjQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU4NjAxZDQ5ZGMyY2MxNjE5YzQzYTlkOGZiOTcwNjcxMTVkMzM1NjQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-92">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Декоративная штукатурка </div>

                                        <img alt="Декоративная штукатурка" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjM4Yzc2MTViZTA4OTgyMmE4MTY5MDQxNjk1NzI1NDQxN2FmODZmZTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjM4Yzc2MTViZTA4OTgyMmE4MTY5MDQxNjk1NzI1NDQxN2FmODZmZTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Декоративная штукатурка </div>

                                        <img alt="Декоративная штукатурка" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU0OWVkNDAzMTQ5ZWRhZTBjMjdkMjJjZGEyZmIyNTQ2MTA3ZGZlMjYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU0OWVkNDAzMTQ5ZWRhZTBjMjdkMjJjZGEyZmIyNTQ2MTA3ZGZlMjYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Декоративная штукатурка </div>

                                        <img alt="Декоративная штукатурка" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImVmYmViMGFlODAwMDY1YjkxMGJjYmI2MWIyYjgwZTVmZmI1ZmUyNTIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImVmYmViMGFlODAwMDY1YjkxMGJjYmI2MWIyYjgwZTVmZmI1ZmUyNTIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Декоративная штукатурка </div>

                                        <img alt="Декоративная штукатурка" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImJhZmRiYTJmOTU2MDg2NTYzZmUxYzk1MjNmZWMxZjczMTZiN2E0ZjYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImJhZmRiYTJmOTU2MDg2NTYzZmUxYzk1MjNmZWMxZjczMTZiN2E0ZjYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-93">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Укладка напольных покрытий </div>

                                        <img alt="Укладка напольных покрытий" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImE1MzEyNTE1ODhjYjE4OGVlYzNiY2E0MTg3Nzg0YWNhN2UzZGFjOTQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImE1MzEyNTE1ODhjYjE4OGVlYzNiY2E0MTg3Nzg0YWNhN2UzZGFjOTQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Укладка напольных покрытий </div>

                                        <img alt="Укладка напольных покрытий" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImY3MWQ4NGUxNWU2Njg1Mjk1N2IxYTc0MDliZTgyYWE5ODg2ZWQ2MTEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImY3MWQ4NGUxNWU2Njg1Mjk1N2IxYTc0MDliZTgyYWE5ODg2ZWQ2MTEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Укладка напольных покрытий </div>

                                        <img alt="Укладка напольных покрытий" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImZkY2FjOTBiNzRmMmJjYjkxYzViMmFiYjg4NDhhYzIyYTBkNGJjZDUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImZkY2FjOTBiNzRmMmJjYjkxYzViMmFiYjg4NDhhYzIyYTBkNGJjZDUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Укладка напольных покрытий </div>

                                        <img alt="Укладка напольных покрытий" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjllNzk1ZmY0YzBhMDAxNjI3ZTBkNTY0Y2UyNDY3ZmJkZGNkZTFmMmMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjllNzk1ZmY0YzBhMDAxNjI3ZTBkNTY0Y2UyNDY3ZmJkZGNkZTFmMmMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-94">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж натяжных потолков </div>

                                        <img alt="Монтаж натяжных потолков" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU2MDkzODllYmMxMTVkOTFkOGM0YmNlYjk4NTAzMzUwYTVhM2Q2NzUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU2MDkzODllYmMxMTVkOTFkOGM0YmNlYjk4NTAzMzUwYTVhM2Q2NzUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж натяжных потолков </div>

                                        <img alt="Монтаж натяжных потолков" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImY1YjBmMTQ1YWMxNzg1MzhkODI4YmJkMzM2ZGMwMTNmY2E3OWZiNDYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImY1YjBmMTQ1YWMxNzg1MzhkODI4YmJkMzM2ZGMwMTNmY2E3OWZiNDYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Монтаж натяжных потолков </div>

                                        <img alt="Монтаж натяжных потолков" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjAxYjViMTYyYjlkNGQ4NGZiYTlhZDA3ZWRlYTQwYzNmYTlmNWVkZTUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjAxYjViMTYyYjlkNGQ4NGZiYTlhZDA3ZWRlYTQwYzNmYTlmNWVkZTUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item step-gallery-item gallery-id-95">
                                <div class="owl-carousel js-gallery-inner_i owl-gallery-float">
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Финишная отделка </div>

                                        <img alt="Финишная отделка" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjIzNDNhNWRlYjkxOTkxMDhiYzQzNmIwNWJiYTkwYTlhOWU5Yjg2ZjAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjIzNDNhNWRlYjkxOTkxMDhiYzQzNmIwNWJiYTkwYTlhOWU5Yjg2ZjAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Финишная отделка </div>

                                        <img alt="Финишная отделка" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjI4MzFmNTNjYjBmNjVmNGY4M2M5ZmNiMzk5ZDJhNTE5MzkwODMyOGMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjI4MzFmNTNjYjBmNjVmNGY4M2M5ZmNiMzk5ZDJhNTE5MzkwODMyOGMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Финишная отделка </div>

                                        <img alt="Финишная отделка" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRjMGI2Zjc2MTRkZmE3YWNkNzE4Y2Q0ZjlkMzYyM2Q0MDJmYTZhMjYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRjMGI2Zjc2MTRkZmE3YWNkNzE4Y2Q0ZjlkMzYyM2Q0MDJmYTZhMjYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                    <div class="gallery-inner-item">
                                        <div class="gallery-inner-item-caption">
                                            Финишная отделка </div>

                                        <img alt="Финишная отделка" class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjZmMjY1NDMxNmI2N2Y0Y2ViZjE1ZDRjNmM2NDllOTAyZjU5NWRjNjkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjM2MCwiaGVpZ2h0IjoyMjV9fX0="
                                            data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjZmMjY1NDMxNmI2N2Y0Y2ViZjE1ZDRjNmM2NDllOTAyZjU5NWRjNjkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <style>
                .steps-block .owl-carousel {
                    overflow: hidden;
                    width: 600px;
                }
            </style>
            <section class="block85 simple-block">
                <div class="l-container">
                    <h2>Ремонт выполняется специализированными бригадами</h2>
                    <p>Капитальный ремонт и отделка вашей квартиры выполняется бригадами с узкой специализацией на
                        конкретном виде работ. Благодаря этому мы всегда обеспечиваем высокий уровень на всех этапах и
                        качественный результат. Все специалисты нашей компании являются гражданами РФ и РБ. Ниже
                        представлены фото наших мастеров в процессе работы:</p>
                </div>
                <div class="container">
                    <div class="f_scr_gallagy_wrapper_">
                        <div class="f_scr_gallagy_wrapper">
                            <div class="f_scr_gallagy_wrap owl-carousel">
                                <div class="f_scr_item cf" style="width:1080px; height: 630px;">
                                    <div class="f_scr_item_leftside">
                                        <div class="f_scr_item_leftside_top">
                                            <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjgzM2JkNmY2YWI5YjYxMTU2ODlkYWFiOTkxN2Q2NjAyMDZiN2U2YTcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                        </div>
                                        <div class="f_scr_item_leftside_bottom">
                                            <img class="lazy" data-src="assets/template/img/chitok.jpg">
                                        </div>
                                    </div>
                                    <div class="f_scr_item_rightside">
                                        <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNkMTE0ZmRiNDg0ZmU4NGYxMjU3ZTM3MDYxY2FmZTUzZWM1OWIyZjYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                    </div>
                                </div>
                                <div class="f_scr_item cf" style="width:1080px; height: 630px;">
                                    <div class="f_scr_item_leftside">
                                        <div class="f_scr_item_leftside_top">
                                            <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjgzM2JkNmY2YWI5YjYxMTU2ODlkYWFiOTkxN2Q2NjAyMDZiN2U2YTcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                        </div>
                                        <div class="f_scr_item_leftside_bottom">
                                            <img class="lazy" data-src="assets/template/img/chitok.jpg">
                                        </div>
                                    </div>
                                    <div class="f_scr_item_rightside">
                                        <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNkMTE0ZmRiNDg0ZmU4NGYxMjU3ZTM3MDYxY2FmZTUzZWM1OWIyZjYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                    </div>
                                </div>
                                <div class="f_scr_item cf" style="width:1080px; height: 630px;">
                                    <div class="f_scr_item_leftside">
                                        <div class="f_scr_item_leftside_top">
                                            <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImExM2NiMjI3MGExZDczZjVmZjA0MDIzY2M4ZTcxZTY0MTM0ZjJkMDAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                        </div>
                                        <div class="f_scr_item_leftside_bottom">
                                            <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImZmNWZiZjNmNTNjOGViM2U4NGZjYWVlZTdmYzU5NzQyNTE5ODAxZWIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                        </div>
                                    </div>
                                    <div class="f_scr_item_rightside">
                                        <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjY5YmVlMTM5MGYyODBiMDA4N2RhZjE3YjI0NjRhYTIwYjUxY2JkYjMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                    </div>
                                </div>
                                <div class="f_scr_item cf" style="width:1080px; height: 630px;">
                                    <div class="f_scr_item_leftside">
                                        <div class="f_scr_item_leftside_top">
                                            <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImQ1MWE4MWI3MzU5YTc0YTZiMjQwZWMxMjZlODlmMWEyYjhhOTJjYjUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                        </div>
                                        <div class="f_scr_item_leftside_bottom">
                                            <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImQ4NTQ0YmM1M2IyYTkxZmUyMTlkODgwZGI0NjkwMGZkNGNiZmM1YjQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                        </div>
                                    </div>
                                    <div class="f_scr_item_rightside">
                                        <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNhMGIzYzEzY2UzZjU1ZDc1MTFjYmM4OTNmMzM1MDhkYzQ0YTE4MzkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                    </div>
                                </div>
                                <div class="f_scr_item cf" style="width:1080px; height: 630px;">
                                    <div class="f_scr_item_leftside">
                                        <div class="f_scr_item_leftside_top">
                                            <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImY2YjAzZWZmY2IwOTFjM2VmOWIzMWQyNDVlZDk1ZGNhYjVjNTc4NTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                        </div>
                                        <div class="f_scr_item_leftside_bottom">
                                            <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImVmMDMwYWI5MTAwODIyMzg3NTcxOWI3Mzg2MzQzMjc2OGFiNjY5MTguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                        </div>
                                    </div>
                                    <div class="f_scr_item_rightside">
                                        <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImViNWI2YjRiMWRhZWY0YTJiZTM0NGI1ZjgzNTZjZjk1NjUzMTUwZWQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgzNSwiaGVpZ2h0Ijo2MTB9fX0=">
                                    </div>
                                </div>
                            </div>
                            <div class="f_scr_gallagy_wrap_nav">
                                <div class="f_scr_gallagy_wrap_left"></div>
                                <div class="f_scr_gallagy_wrap_right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block6 advantages-block">
                <div class="l-container">
                    <h2>Преимущества работы с генеральным подрядчиком</h2>
                    <p>Ключевым аргументом Заказчика в пользу найма отдельных бригад для каждого вида работ обычно
                        становится "экономия". Но если Вы внимательно просчитаете все затраты времени и ресурсов, то
                        обнаружите, что при обращении к разным исполнителям суммарная экономия составит не более 3-5%.
                        Взамен этой скромной суммы Вам придется самостоятельно подобрать бригады для каждого этапа
                        евроремонта, проконтролировать выполнение требований дизайн-проекта, заняться вопросами
                        снабжения объекта материалами - то есть стать фактически прорабом. Работая с нами, как с одним
                        подрядчиком, вы платите лишь немного больше, но при этом мы берем на себя все задачи управления
                        и осуществления контроля за производственным процессом.</p>
                    <div class="masonry-cont adv-masonry">
                        <div class="masonry-item-stt adv-item-stt">
                            <div class="masonry-item adv-item">
                                <h3><span class="advantages-block-lightparttitle">1. — </span>Ответственность</h3>
                                <p>Вы получите гарантии и ответственность за ВСЕ выполненные в процессе евроремонта
                                    работы в одном лице и сможете избежать рисков, связанных со скрытыми техническими
                                    дефектами.</p>
                            </div>
                            <div class="masonry-item adv-item">
                                <h3><span class="advantages-block-lightparttitle">2. — </span>Управление</h3>
                                <p>Мы эффективно управляем ВСЕМ производственным процессом, учитываем все влияющие друг
                                    на друга нюансы проведения различных работ - это положительно влияет на качество и
                                    сроки.</p>
                            </div>
                        </div>
                        <div class="masonry-item-stt adv-item-stt">
                            <div class="masonry-item adv-item">
                                <h3><span class="advantages-block-lightparttitle">3. — </span>Обратная связь</h3>
                                <p>По всем вопросам, связанным с ремонтными работами, отделочными и черновыми
                                    материалами, дизайнерскими решениями Вас будет консультировать ответственный
                                    руководитель проекта.</p>
                            </div>
                            <div class="masonry-item adv-item">
                                <h3><span class="advantages-block-lightparttitle">4. — </span>Полная картина</h3>
                                <p>Как генеральный подрядчик мы имеем глобальное представление о предстоящих и текущих
                                    процессах, этапах отделки, и конечном результате. У исполнителя конкретных работ
                                    такого понимания нет.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block89 simple-block">
                <div class="l-container">
                    <h2>Визуальное и технологическое качество</h2>
                    <p><span
                            style="font-family: ProbaPro_light, Arial, Helvetica, sans-serif; font-size: 19px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; background-color: rgb(255, 255, 255);">Единые
                            технологические стандарты компании и СНиПы, позволяют добиваться единого качества на всех
                            объектах компании, не зависимо, от состава поставленной бригады.</span><br></p>

                </div>
                <div class="frame frame-c info-carousel" id="basics" idd="id843">
                    <ul class="clearfix">

                        <li>
                            <div class="item">
                                <img class="lazy" data-src="assets/template/img/chitok.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjViNDM3ZGU2ODhjNGYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImRlMjQzNjdiYTNhZmE1YTEzZDdjZDBkNDA4Yzc5ZDc2NDNhY2NmMTUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjViNDM3ZGU3MzcyY2UuSlBHIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjViNDM3ZGU2YTRjYzEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjViNDM3ZGU2YzViOTguSlBHIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjViNDM3ZGU2ZWI3NWYuSlBHIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjViNDM3ZGU3MTkxOWEuSlBHIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjdhNTExNDI1ZDQzMDNiODJhMjgxYzc1N2NkOGU2ZDU5YTdlYWJmZWMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNkYzNjYjExM2RlYWM2MzdlMTMyOTllNTRjNGIzM2QzNzBkYmY5MTYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img class="lazy" data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjFlOTliNzlmYTc5MWMzY2I2MzBhZTk4ZjczZWFjNjY4NTg2ODc0MDQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjcyMCwiaGVpZ2h0Ijo0NTB9fX0=">
                            </div>
                        </li>
                    </ul>
                    <div class="info-carousel-prev"></div>
                    <div class="info-carousel-next"></div>

                    <div class="page-bar"></div>
                </div>
                <div class="carousel-scroll-wrap">
                    <div class="scrollbar">
                        <div class="handle">
                            <div class="mousearea"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block48 team-video-block portfolio-text-block" id="ceny">
                <div class="l-container team-container">
                    <h2>Наши цены</h2>
                    <p>Стоимость отделочных и инженерных работ, а также, черновых материалов, указана исходя из
                        статистики
                        завершенных проектов, погрешность этих цифр, минимальна. Более подробно расценки описаны на
                        странице цены.
                    </p>
                    <div class="prices_blocks cf">
                        <div class="prices_block prices_block_v2">
                            <div class="prices_block_image prices_block_image_v2">
                                <div class="prices_block_image_">
                                    <img class="lazy" data-src="/assets/template/img/rem_kv.jpg" alt="" style="" width="" height="" title="" class=""
                                        role="">
                                </div>
                                <div class="prices_block_image_overlay prices_block_image_overlay_v2">
                                    <div class="prices_block_title">Ремонт квартир</div>
                                    <div class="prices_block_price">
                                        от 2000&nbsp;<span class="prices_block_price_s">руб. за м<sup>2</sup></span>
                                    </div>
                                    <div class="prices_block_text">
                                        <p>Наша компания, предоставляет полный спектр услуг по ремонту квартир и
                                            отдельных помещений. Выполняем любые виды ремонта, от бюджетного до
                                            элитного!</p>
                                    </div>
                                    <div class="prices_block_subtext">
                                        Работа 2000 руб. за м<sup>2</sup>
                                    </div>
                                    <div class="prices_block_subtext forms1">
                                        Черновые материалы: Рассчитываются индивидуально для каждого проекта
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prices_block prices_block_v2">
                            <div class="prices_block_image prices_block_image_v2">
                                <div class="prices_block_image_">
                                    <img class="lazy" data-src="/assets/template/img/rem_kot.jpg" alt="" style="" width="" height="" title="" class=""
                                        role="">
                                </div>
                                <div class="prices_block_image_overlay prices_block_image_overlay_v2">
                                    <div class="prices_block_title">Ремонт коттеджа</div>
                                    <div class="prices_block_price">
                                        от 2500&nbsp;<span class="prices_block_price_s">руб. за м<sup>2</sup></span>
                                    </div>
                                    <div class="prices_block_text">
                                        <p>
                                            Качественный ремонт коттеджей под ключ в Московской области - основное
                                            направление деятельности компании “AC” Специализированные бригады мастеров,
                                            выполняют абсолютно все работы, включая инженерные!
                                        </p>
                                    </div>
                                    <div class="prices_block_subtext">
                                        Работа 2500 руб. за м<sup>2</sup>
                                    </div>
                                    <div class="prices_block_subtext forms2">
                                        Черновые материалы: рассчитываются индивидуально для каждого проекта
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prices_block prices_block_v2">
                            <div class="prices_block_image prices_block_image_v2">
                                <div class="prices_block_image_">
                                    <img class="lazy" data-src="/assets/template/img/rem_kom_ned.jpg" alt="" style="" width="" height="" title="" class=""
                                        role="">
                                </div>
                                <div class="prices_block_image_overlay prices_block_image_overlay_v2">
                                    <div class="prices_block_title">Ремонт коммерческой недвижимости</div>
                                    <div class="prices_block_price">
                                        от 1500&nbsp;<span class="prices_block_price_s">руб. за м<sup>2</sup></span>
                                    </div>
                                    <div class="prices_block_text">
                                        <p>
                                            Любое помещение, будь то магазин, офисное помещение или склад. Наша команда
                                            готова прийти Вам на помощь и сделать ремонт в любом коммерческом помещении,
                                            качественно и с соблюдением всех требований СНиП.
                                        </p>
                                    </div>

                                    <div class="prices_block_subtext">
                                        Работы от 1500 руб. за м<sup>2</sup>
                                    </div>
                                    <div class="prices_block_subtext forms3">
                                        Черновые материалы: рассчитываются индивидуально для каждого проекта
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prices_block prices_block_v2">
                            <div class="prices_block_image prices_block_image_v2">
                                <div class="prices_block_image_">
                                    <img class="lazy" data-src="/assets/template/img/dizain_proekt.jpg" alt="" style="" width="" height="" title=""
                                        class="" role="">
                                </div>
                                <div class="prices_block_image_overlay prices_block_image_overlay_v2">
                                    <div class="prices_block_title">Дизайн-проект</div>
                                    <div class="prices_block_price">
                                        от 980&nbsp;<span class="prices_block_price_s">руб. за м<sup>2</sup></span>
                                    </div>
                                    <div class="prices_block_text">
                                        <p>
                                            Дизайн-проект интерьера – это пакет документов (эскизов, фотореалистичных
                                            изображений, чертежей и ведомостей), по которым выполняются
                                            ремонтно-отделочные работы, интерьер наполняется декорами, мебелью и
                                            техникой.
                                        </p>
                                    </div>

                                    <div class="prices_block_subtext">
                                        Разработка от 980 руб. за м<sup>2</sup>
                                    </div>
                                    <div class="prices_block_subtext forms3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block104 team-video-block portfolio-text-block pt-none">
                <div class="l-container team-container ver2">
                    <div class="bl_2_form">
                        <form id="calc-form" name="btn" type="question" action="https://rem-ac.ru/assets/template/mailer/config.php" method="post"
                            enctype="multipart/form-data">
                            <input name="user_email" value="заявка из калькулятора" type="hidden">
                            <div class="bid-cost bid-cost_grey cost-block">
                                <h2>Заявка на расчет стоимости ремонта</h2>
                                <div class="cost-form-inner">
                                    <div class="cost-form-inner-l">
                                        <input name="user_name" value="" placeholder="Имя" type="text" required>
                                        <textarea name="tex_comment" placeholder="Описание проекта" required></textarea>
                                    </div>
                                    <div class="cost-form-inner-r">
                                        <input name="contact" value="" placeholder="Телефон или e-mail" type="text"
                                            required>
                                        <div class="inputfile"></div>
                                        <div class="bid-cost_button align-submit">
                                            <input name="btn" form="calc-form" class="btn" type="submit"
                                                value="Отправить" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <a name="calculator"></a>
            <section id="calculator" class="block80 team-video-block portfolio-text-block">
                <div class="l-container team-container">
                    <h2>Калькулятор расчета стоимости</h2>
                    <p>
                        Общая стоимость комплексного ремонта квартиры за метр квадратный, зависит от площади
                        помещения и дизайнерско-технической сложности. Следует отметить, наш калькулятор считает
                        достаточно точно, но, при этом, нужно понимать, что цены, указанные ниже,
                        являются среднестатистическими и могут не подходить для оценки сложных или нестандартных
                        ситуаций. В случае, если вы хотите точно знать стоимость вашего ремонта, отправьте нам
                        дизайн-проект или просто свяжитесь с нами.</p>
                    <section class="block80 ">
                        <div class="1page_wrapper">
                            <div class="calcul_wrapper">
                                <div class="calc_head">
                                    <div class="calc_h_left">
                                        <div class="calc_h_subtitle">Тип ремонта</div>
                                        <div class="calc_h_trigs">
                                            <div class="ch_trigger active" data-id="3127" data-price_work="6840"
                                                data-price_material="3200">Стандартный</div>
                                            <div class="ch_trigger" data-id="3135" data-price_work="9999"
                                                data-price_material="5800">Бизнес</div>
                                            <div class="ch_trigger" data-id="3145" data-price_work="14210"
                                                data-price_material="7900">Элитный</div>
                                        </div>
                                        <div>
                                            <div class="repair_texts repair_text_3127" style="" block="hide">
                                                <div class="ch_text">
                                                    Капитальный ремонт без дизайнерских решений. Ровные стены, натяжные
                                                    потолки, недорогие отделочные материалы. </div>
                                            </div>
                                            <div class="repair_texts repair_text_3135" style="display:none;"
                                                block="hide">
                                                <div class="ch_text">
                                                    Дизайнерские решения среднего уровня, стены под покраску, потолки
                                                    гкл. Включает в себя весь отделочный и инженерный комплекс.&nbsp;
                                                </div>
                                            </div>
                                            <div class="repair_texts repair_text_3145" style="display:none;"
                                                block="hide">
                                                <div class="ch_text">
                                                    Отличается насыщенными дизайнерскими решениями, дорогими отделочными
                                                    материалами и сложными инженерными системами. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="calc_h_right">
                                        <div class="calc_h_subtitle">Площадь помещения</div>
                                        <div class="ch_input">
                                            <span class="ch_input_it">м²</span>
                                            <input type="number" class="calc_input" name="square" value="100" step="10"
                                                min="10" data-coef0="60;80;1" data-coef1="80;150;0.95"
                                                data-coef2="150;1000;0.9">
                                        </div>
                                    </div>
                                </div>
                                <div class="calc_table">
                                    <div class="calc_table_head">
                                        <div class="calc_table_col1 calc_table_col_head">Вид работ</div>
                                        <div class="calc_table_col2 calc_table_col_head">Работы</div>
                                        <div class="calc_table_col3 calc_table_col_head">Черновые материалы</div>
                                    </div>
                                    <div class="repairs repair_3127" repair_id="3127" style="display:block">
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Общестроительные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3128" data-perc="20"></div>
                                                <div class="calc_table_col3" data-id="3128" data-perc="24"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка объекта к
                                                                проведению строительных работ </span>
                                                            <span class="calc_sp_item_text">(уборка, обустройство быта,
                                                                монтаж временного электроснабжения и освещения,
                                                                водоснабжения, установка унитаза, душевого
                                                                поддона)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пеноблоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кирпичная кладка в 1/2
                                                                кирпича из полнотелых кирпичей</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                влагостойких пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство горизонтальных
                                                                дверных откосов</span>
                                                            <span class="calc_sp_item_text">(устройство опалубки,
                                                                армирование и залитие пескоцементной смесью)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство гидроизодяции
                                                                под кладку в один слой из рулонного материала</span>
                                                            <span class="calc_sp_item_text">(ширина 300мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пескоцементного
                                                                основания под кладку в уровень</span>
                                                            <span class="calc_sp_item_text">(толщина 50мм)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Завышение дверного
                                                                проема</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Занижение дверного проема
                                                                больше 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Увеличение/уменьшение
                                                                дверного проема до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обработка стен/оконных
                                                                откосов бетоконтактом Khauf</span>
                                                            <span class="calc_sp_item_text">(используется на бетонных
                                                                основаниях) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен/оконных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text">(используется на пеноблоках,
                                                                кирпиче и других впитывающих поверхностях)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                пластиковой сеткой под штукатурку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя пластиковой сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов)</span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов при слоях свыше
                                                                45мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка углового
                                                                штукатурного профиля</span>
                                                            <span class="calc_sp_item_text">(используется при
                                                                необходимости, на внешних углах)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                профиля для примыкания штукатурного слоя к окну</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка поверхности
                                                                оконного проема под установку подоконника</span>
                                                            <span class="calc_sp_item_text">(заливка теплоизоляционной
                                                                смеси в уровень и под толщину подоконника, устройство
                                                                штроб)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка подоконников из
                                                                искусственного камня</span>
                                                            <span class="calc_sp_item_text">(без шлифования/полировки
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка горизонтальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на горизонтальной плоскости
                                                                используется гипсовая смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка вертикальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на вертикальной плоскости
                                                                используется пескоцементная смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка дверных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукартурка стен под
                                                                правило</span>
                                                            <span class="calc_sp_item_text">(исправление незначительных
                                                                дефектов стен без установки маяков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка потолка гипсовой смесью в уровень</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение раствора,
                                                                выравнивание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка стен гипсовой смесью в углы</span>
                                                            <span class="calc_sp_item_text">(санузлы, угол под кухонную
                                                                мебель)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка стен
                                                                пескоцементной смесью</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение смеси, выравнивание,
                                                                перетирание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Утепление балконов</span>
                                                            <span class="calc_sp_item_text">(заполнение отверстий и
                                                                трещин монтажной пеной, устройство в один слой
                                                                утеплителя высокой плотности с пропениванием всех
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка ниши под карниз
                                                                на потолке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Электромонтажные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3835" data-perc="11"></div>
                                                <div class="calc_table_col3" data-id="3835" data-perc="14"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки под ключ" </span>
                                                            <span class="calc_sp_item_text">(устройство электрической и
                                                                слаботочной проводки без установки розеток, выключателей
                                                                и осветительных приборов, устройство штроб, установка
                                                                подрозетников, сборка распаечных коробок)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки для системы отопления" </span>
                                                            <span class="calc_sp_item_text">(устройство слаботочной
                                                                проводки, устройство штроб, установка подрозетников,
                                                                сборка распаечных коробок, установка термостатов,
                                                                датчиков температуры воздуха и пола)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                электрического щита</span>
                                                            <span class="calc_sp_item_text">(распределение потребителей
                                                                на группы,распределение нагрузок на фазы, устройство
                                                                шин, крос-модулей,установка автоматов, узо,
                                                                диф-автоматов, монтаж электросчетчика и вводного
                                                                автомата) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка временных розеток
                                                                и светильников<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в монолите</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в кирпиче, блоке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                слаботочного щита или вывод из подрозетников в одном
                                                                месте 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                слаботочный щит 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пробитие отверстий в
                                                                монолитном перекрытии диаметр до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по полу</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из кирпича, блоков стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из бетона стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сверление кирпичных,
                                                                блочных стен диаметром до 3см и глубиной до 60см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство выводов на улицу
                                                                электрических и слаботочных кабелей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка стабилизатора
                                                                напряжения</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка ИБП</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка проточного насоса
                                                                для канализации</span>
                                                            <span class="calc_sp_item_text">(Сололифт)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Водоснабжение</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3837" data-perc="15"></div>
                                                <div class="calc_table_col3" data-id="3837" data-perc="27"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                полипропиленом </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                трубой из сшитого полиэтилена </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство коллекторов с
                                                                подключением к системе водоснабжения</span>
                                                            <span class="calc_sp_item_text">(монтаж водосчетчиков,
                                                                запорной арматуры, фильтров грубой очистки, фильтров
                                                                средней механической очистки, установка и регулировка
                                                                редуктора) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж автоматической
                                                                системы контроля протечки воды</span>
                                                            <span class="calc_sp_item_text">(установка запорной
                                                                арматуры, распределительной коробки, монтаж проводки,
                                                                проверка системы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутристенного
                                                                смесителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка инсталляции
                                                                подвесного унитаза</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж
                                                                накопительного/проточного водонагревателя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фильтров средней
                                                                очистки воды </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж счетчиков
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж редукторов давления
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шумовиброизоляция
                                                                канализационной трубы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Простое отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту,теплый пол не более 20% от площади дома,2
                                                                сан.узла,
                                                                котельная простая по нашему проекту, регулировка
                                                                температурой приборов и т.п. из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><span
                                                                    class="calc_sp_item_title">"Среднее
                                                                    отопление"</span></span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту, конвектора не более 30% от всех приборов,
                                                                теплый пол не более
                                                                30% от площади дома, 3 сан.узла, котельная простая по
                                                                нашему проекту, решулировака температурой одним
                                                                регулятором в доме и
                                                                теплыми полами из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Сложное отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по стороннему
                                                                проекту, конвектора более 30% от всех приборов, теплый
                                                                пол не более 50% от площади дома, 4 сан.узла, котельная
                                                                сложная с автоматизацией и интеллектуальным
                                                                регулированием)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><br></span>
                                                        </div>

                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж отопления:
                                                                двухтрубная система с параллельным подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрас,
                                                                установка радиаторов, устройство штроб, прокладка линий
                                                                холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов, прокладка лини теплых полов до
                                                                колеккторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж системы
                                                                отопления: двухтрубная система с лучевым
                                                                подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрасс,
                                                                монтаж сантехнических шкафов и установка коллекторов,
                                                                установка радиаторов,
                                                                устройство штроб, прокладка линий холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов(гребенок),
                                                                прокладка линии теплых полов до коллекторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пусконаладочные работы
                                                                простой системы отопления<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Демонтаж радиаторов и
                                                                монтаж на готовое место</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж модулей
                                                                интеллектуального регулирования системы отопления в
                                                                котельной</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж радиатора с нижним
                                                                подключением</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка теплотрасс в
                                                                теплоизоляции</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией и
                                                                интеллектуальной системой регулирования</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж датчиков теплого
                                                                пола в стяжку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Разработка проекта
                                                                теплопотерь и подбор оборудования<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Устройство стяжки</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3840" data-perc="5"></div>
                                                <div class="calc_table_col3" data-id="3840" data-perc="7"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола битумной
                                                                гидроизоляцией </span>
                                                            <span class="calc_sp_item_text">(подготовка поверхности,
                                                                уборка пылесосом, устройство выкрошки, нанесение
                                                                битумного праймера, укладка рулонной гидроизоляции с
                                                                нагревом)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство шумоизоляции
                                                                пола с использованием материала шумопласт или шумостоп
                                                            </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство песко-цементной
                                                                стяжки слой до 7 см</span>
                                                            <span class="calc_sp_item_text">(установка маяков,
                                                                добавление фиброволокна, пластификатора, залитие и
                                                                выравнивание смеси)</span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство уплотнительной
                                                                ленты</span>
                                                            <span class="calc_sp_item_text">(очистка поверхности,
                                                                проклеивание периметра стяжки и устройство диф-швов с
                                                                помощью дихтузбанда)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство подложки из
                                                                пленки под стяжку</span>
                                                            <span class="calc_sp_item_text">(уборка помещения, укладка
                                                                пленки внахлест и с заводом на стены выше уровня
                                                                стяжки)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка пленки поверх
                                                                стяжки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Гипсокартонные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3841" data-perc="8"></div>
                                                <div class="calc_table_col3" data-id="3841" data-perc="6"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Потолки:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровневого ГКЛ
                                                                потолка на жестком каркасе в один слой</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                монтаж направляющего профиля к стене через демпферную
                                                                ленту,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой 40х40см в два уровня на двухуровневых
                                                                подвесах, обшитие
                                                                металлокаркаса гкл в два слоя в перехлест, усиление мест
                                                                под люстры, расшивка и обработка швов)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровнего ГКЛ
                                                                потолка плавающим способом</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой
                                                                40х40см в один уровень, без привязки к стенам, обшитие
                                                                металлокаркаса гкл в один слой, усиление мест под
                                                                люстры, расшивка и обработка швов) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж коробов с подсветкой
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50мм (один слой)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж выносного карниза из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж двухторцевых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши под карниз из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text">(высота ниши не более 10см,
                                                                ширина не менее 15 см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство отверстий под
                                                                точечный светильник</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Стены:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен гипсокартоном
                                                                по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие внешних стен с
                                                                устройством ниш под радиаторы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсокартона в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен
                                                                гипсоволкнистыми листами по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсоволкнистых листов в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство откосов их
                                                                ГВЛ(теплые откосы)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50 мм в один слой на стену</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Плиточные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3842" data-perc="14"></div>
                                                <div class="calc_table_col3" data-id="3842" data-perc="4"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола, стен
                                                                обмазочной гидроизоляцией </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гидроизоляционной
                                                                ленты на стыках пола и стен</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж электрического
                                                                теплого пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика
                                                                автоматической системы протечки воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство стяжки
                                                                самовыравнивающейся смесью по маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж экрана под ванну из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж сантехнического
                                                                короба из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка металлического</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка под плитку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство столешницы
                                                                примыкающей к стене</span>
                                                            <span class="calc_sp_item_text">(устройство каркаса,
                                                                выставление опалубки, заливка бетоном(замес вручную),
                                                                устройство отверстия под раковину)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж изделий из камня без
                                                                шлифовки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем с обработкой швов вручную</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем, без швов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен керамической
                                                                плиткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен/полов
                                                                керамической плиткой мозаика</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка полов
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка лестницы
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка бордюра, карандаша,
                                                                углового элемента</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка керамического
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка угловой
                                                                раскладки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Резка плитки,
                                                                керамогранита</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил лицевых внутренних
                                                                углов плитки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил торца плитки под 45
                                                                градусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство круглого
                                                                отверстия в плитке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                стандартной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                эпоксидной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка мозаики стандартной
                                                                затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Малярные подготовительные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3843" data-perc="14"></div>
                                                <div class="calc_table_col3" data-id="3843" data-perc="11"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж карниза из
                                                                полиуретана</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(нанесение насечек на стены,
                                                                потолок и карниз, обработка поверхностей грутовкой,
                                                                монтаж распорных дюпелей в стены и дюпелей-бабочка в
                                                                потолок, ненсение гипсового клея на карниз и монтаж его
                                                                на оцинкованные саморезы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(установка изделия на
                                                                оцинкованные саморезы и клей на основе гипса,
                                                                шпатлевание и шлифование стыков и
                                                                примыканий, доработка изделий под основание)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из гипса
                                                                на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из
                                                                полиуретана на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка потолка и
                                                                торцевых частей (весь цикл работ)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание гипсокартонных
                                                                стыков и проклейка бумагой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание ГКЛ
                                                                конструкций по уголкам/маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text">(нанесение клея, поклейка
                                                                стеклохолста, нанесение клея поверх стеклохолста)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1 слой Ветонит, 2 слоя
                                                                Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2 слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4 слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                торцевых частей ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолочного плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен и торцевых
                                                                частей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка молдингов к
                                                                покраске</span>
                                                            <span class="calc_sp_item_text">(заделка стыков, шпатлевание
                                                                и шлифование)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 2 слоя Ветонит,
                                                                2 слоя Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под обои</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под обои</span>
                                                            <span class="calc_sp_item_text">(первый слой шпатлевки
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под декоративные покрытия</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску/обои в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Малярные финишные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3844" data-perc="5"></div>
                                                <div class="calc_table_col3" data-id="3844" data-perc="4"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска потолка</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска торцевых частей
                                                                ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска молдингов,
                                                                карнизов, плинтусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">покраска стен</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска стен</span>
                                                            <span class="calc_sp_item_text">(с помощью
                                                                краскопульта)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев шириной 106
                                                                см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка виниловых обоев
                                                                шириной менее 70 см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев с
                                                                бордюром</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка текстильных обоев
                                                                (шелкография)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Финишные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3845" data-perc="8"></div>
                                                <div class="calc_table_col3" data-id="3845" data-perc="3"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс
                                                                "Подключение"</span>
                                                            <span class="calc_sp_item_text">(установка розеток,
                                                                выключателей)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Установка"</span>
                                                            <span class="calc_sp_item_text">(монтаж люстр, точечных
                                                                светильников, бра)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка и подключение
                                                                люстры с креплением к потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка люстр стоимость
                                                                зависит от количества деталей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка точечного,
                                                                галогенового светильника</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка электрического
                                                                полотенцесушителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж LED ленты</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнических
                                                                приборов "под ключ" </span>
                                                            <span class="calc_sp_item_text">(установка ванн, туалетов,
                                                                бидэ, раковин, смесителей, душевых штанг)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка линолеума</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка ковролина</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ламината</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной
                                                                доски</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фанеры на
                                                                двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж инженерной доски на
                                                                стяжку через двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной доски,
                                                                массива (на фанеру)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пластикового
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство деревянного
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж стыковых
                                                                порожков</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="repairs repair_3135" repair_id="3135" style="display:none">
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Общестроительные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3136" data-perc="18"></div>
                                                <div class="calc_table_col3" data-id="3136" data-perc="24"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка объекта к
                                                                проведению строительных работ </span>
                                                            <span class="calc_sp_item_text">(уборка, обустройство быта,
                                                                монтаж временного электроснабжения и освещения,
                                                                водоснабжения, установка унитаза, душевого
                                                                поддона)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пеноблоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кирпичная кладка в 1/2
                                                                кирпича из полнотелых кирпичей</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                влагостойких пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство горизонтальных
                                                                дверных откосов</span>
                                                            <span class="calc_sp_item_text">(устройство опалубки,
                                                                армирование и залитие пескоцементной смесью)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство гидроизодяции
                                                                под кладку в один слой из рулонного материала</span>
                                                            <span class="calc_sp_item_text">(ширина 300мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пескоцементного
                                                                основания под кладку в уровень</span>
                                                            <span class="calc_sp_item_text">(толщина 50мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Завышение дверного
                                                                проема</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Занижение дверного проема
                                                                больше 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Увеличение/уменьшение
                                                                дверного проема до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обработка стен/оконных
                                                                откосов бетоконтактом Khauf</span>
                                                            <span class="calc_sp_item_text">(используется на бетонных
                                                                основаниях) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен/оконных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text">(используется на пеноблоках,
                                                                кирпиче и других впитывающих поверхностях)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                пластиковой сеткой под штукатурку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя пластиковой сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов)</span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов при слоях свыше
                                                                45мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка углового
                                                                штукатурного профиля</span>
                                                            <span class="calc_sp_item_text">(используется при
                                                                необходимости, на внешних углах)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                профиля для примыкания штукатурного слоя к окну</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка поверхности
                                                                оконного проема под установку подоконника</span>
                                                            <span class="calc_sp_item_text">(заливка теплоизоляционной
                                                                смеси в уровень и под толщину подоконника, устройство
                                                                штроб)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка подоконников из
                                                                искусственного камня</span>
                                                            <span class="calc_sp_item_text">(без шлифования/полировки
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка горизонтальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на горизонтальной плоскости
                                                                используется гипсовая смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка вертикальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на вертикальной плоскости
                                                                используется пескоцементная смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка дверных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукартурка стен под
                                                                правило</span>
                                                            <span class="calc_sp_item_text">(исправление незначительных
                                                                дефектов стен без установки маяков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка потолка гипсовой смесью в уровень</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение раствора,
                                                                выравнивание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка стен гипсовой смесью в углы</span>
                                                            <span class="calc_sp_item_text">(санузлы, угол под кухонную
                                                                мебель)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка стен
                                                                пескоцементной смесью</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение смеси, выравнивание,
                                                                перетирание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Утепление балконов</span>
                                                            <span class="calc_sp_item_text">(заполнение отверстий и
                                                                трещин монтажной пеной, устройство в один слой
                                                                утеплителя высокой плотности с пропениванием всех
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка ниши под карниз
                                                                на потолке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Электромонтажные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3137" data-perc="12"></div>
                                                <div class="calc_table_col3" data-id="3137" data-perc="14"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки под ключ" </span>
                                                            <span class="calc_sp_item_text">(устройство электрической и
                                                                слаботочной проводки без установки розеток, выключателей
                                                                и осветительных приборов, устройство штроб, установка
                                                                подрозетников, сборка распаечных коробок)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки для системы отопления" </span>
                                                            <span class="calc_sp_item_text">(устройство слаботочной
                                                                проводки, устройство штроб, установка подрозетников,
                                                                сборка распаечных коробок, установка термостатов,
                                                                датчиков температуры воздуха и пола)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                электрического щита</span>
                                                            <span class="calc_sp_item_text">(распределение потребителей
                                                                на группы,распределение нагрузок на фазы, устройство
                                                                шин, крос-модулей,установка автоматов, узо,
                                                                диф-автоматов, монтаж электросчетчика и вводного
                                                                автомата) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка временных розеток
                                                                и светильников<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в монолите</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в кирпиче, блоке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                слаботочного щита или вывод из подрозетников в одном
                                                                месте 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                слаботочный щит 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пробитие отверстий в
                                                                монолитном перекрытии диаметр до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по полу</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из кирпича, блоков стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из бетона стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сверление кирпичных,
                                                                блочных стен диаметром до 3см и глубиной до 60см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство выводов на улицу
                                                                электрических и слаботочных кабелей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка стабилизатора
                                                                напряжения</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка ИБП</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка проточного насоса
                                                                для канализации</span>
                                                            <span class="calc_sp_item_text">(Сололифт)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Водоснабжение</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3138" data-perc="15"></div>
                                                <div class="calc_table_col3" data-id="3138" data-perc="27"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                полипропиленом </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                трубой из сшитого полиэтилена </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство коллекторов с
                                                                подключением к системе водоснабжения</span>
                                                            <span class="calc_sp_item_text">(монтаж водосчетчиков,
                                                                запорной арматуры, фильтров грубой очистки, фильтров
                                                                средней механической очистки, установка и регулировка
                                                                редуктора) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж автоматической
                                                                системы контроля протечки воды</span>
                                                            <span class="calc_sp_item_text">(установка запорной
                                                                арматуры, распределительной коробки, монтаж проводки,
                                                                проверка системы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутристенного
                                                                смесителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка инсталляции
                                                                подвесного унитаза</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж
                                                                накопительного/проточного водонагревателя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фильтров средней
                                                                очистки воды </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж счетчиков
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж редукторов давления
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шумовиброизоляция
                                                                канализационной трубы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Простое отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту,теплый пол не более 20% от площади дома,2
                                                                сан.узла,
                                                                котельная простая по нашему проекту, регулировка
                                                                температурой приборов и т.п. из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><span
                                                                    class="calc_sp_item_title">"Среднее
                                                                    отопление"</span></span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту, конвектора не более 30% от всех приборов,
                                                                теплый пол не более
                                                                30% от площади дома, 3 сан.узла, котельная простая по
                                                                нашему проекту, решулировака температурой одним
                                                                регулятором в доме и
                                                                теплыми полами из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Сложное отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по стороннему
                                                                проекту, конвектора более 30% от всех приборов, теплый
                                                                пол не более 50% от площади дома, 4 сан.узла, котельная
                                                                сложная с автоматизацией и интеллектуальным
                                                                регулированием)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><br></span>
                                                        </div>

                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж отопления:
                                                                двухтрубная система с параллельным подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрас,
                                                                установка радиаторов, устройство штроб, прокладка линий
                                                                холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов, прокладка лини теплых полов до
                                                                колеккторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж системы
                                                                отопления: двухтрубная система с лучевым
                                                                подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрасс,
                                                                монтаж сантехнических шкафов и установка коллекторов,
                                                                установка радиаторов,
                                                                устройство штроб, прокладка линий холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов(гребенок),
                                                                прокладка линии теплых полов до коллекторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пусконаладочные работы
                                                                простой системы отопления<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Демонтаж радиаторов и
                                                                монтаж на готовое место</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж модулей
                                                                интеллектуального регулирования системы отопления в
                                                                котельной</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж радиатора с нижним
                                                                подключением</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка теплотрасс в
                                                                теплоизоляции</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией и
                                                                интеллектуальной системой регулирования</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж датчиков теплого
                                                                пола в стяжку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Разработка проекта
                                                                теплопотерь и подбор оборудования<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Устройство стяжки</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3139" data-perc="6"></div>
                                                <div class="calc_table_col3" data-id="3139" data-perc="7"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола битумной
                                                                гидроизоляцией </span>
                                                            <span class="calc_sp_item_text">(подготовка поверхности,
                                                                уборка пылесосом, устройство выкрошки, нанесение
                                                                битумного праймера, укладка рулонной гидроизоляции с
                                                                нагревом)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство шумоизоляции
                                                                пола с использованием материала шумопласт или шумостоп
                                                            </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство песко-цементной
                                                                стяжки слой до 7 см</span>
                                                            <span class="calc_sp_item_text">(установка маяков,
                                                                добавление фиброволокна, пластификатора, залитие и
                                                                выравнивание смеси)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство уплотнительной
                                                                ленты</span>
                                                            <span class="calc_sp_item_text">(очистка поверхности,
                                                                проклеивание периметра стяжки и устройство диф-швов с
                                                                помощью дихтузбанда)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство подложки из
                                                                пленки под стяжку</span>
                                                            <span class="calc_sp_item_text">(уборка помещения, укладка
                                                                пленки внахлест и с заводом на стены выше уровня
                                                                стяжки)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка пленки поверх
                                                                стяжки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Гипсокартонные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3140" data-perc="8"></div>
                                                <div class="calc_table_col3" data-id="3140" data-perc="6"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Потолки:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровневого ГКЛ
                                                                потолка на жестком каркасе в один слой</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                монтаж направляющего профиля к стене через демпферную
                                                                ленту,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой 40х40см в два уровня на двухуровневых
                                                                подвесах, обшитие
                                                                металлокаркаса гкл в два слоя в перехлест, усиление мест
                                                                под люстры, расшивка и обработка швов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровнего ГКЛ
                                                                потолка плавающим способом</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой
                                                                40х40см в один уровень, без привязки к стенам, обшитие
                                                                металлокаркаса гкл в один слой, усиление мест под
                                                                люстры, расшивка и обработка швов) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж коробов с подсветкой
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50мм (один слой)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж выносного карниза из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж двухторцевых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши под карниз из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text">(высота ниши не более 10см,
                                                                ширина не менее 15 см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство отверстий под
                                                                точечный светильник</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Стены:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен гипсокартоном
                                                                по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие внешних стен с
                                                                устройством ниш под радиаторы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсокартона в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен
                                                                гипсоволкнистыми листами по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсоволкнистых листов в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство откосов их
                                                                ГВЛ(теплые откосы)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50 мм в один слой на стену</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Плиточные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3141" data-perc="14"></div>
                                                <div class="calc_table_col3" data-id="3141" data-perc="4"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола, стен
                                                                обмазочной гидроизоляцией </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гидроизоляционной
                                                                ленты на стыках пола и стен</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж электрического
                                                                теплого пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика
                                                                автоматической системы протечки воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство стяжки
                                                                самовыравнивающейся смесью по маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж экрана под ванну из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж сантехнического
                                                                короба из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка металлического</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка под плитку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство столешницы
                                                                примыкающей к стене</span>
                                                            <span class="calc_sp_item_text">(устройство каркаса,
                                                                выставление опалубки, заливка бетоном(замес вручную),
                                                                устройство отверстия под раковину)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж изделий из камня без
                                                                шлифовки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем с обработкой швов вручную</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем, без швов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен керамической
                                                                плиткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен/полов
                                                                керамической плиткой мозаика</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка полов
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка лестницы
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка бордюра, карандаша,
                                                                углового элемента</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка керамического
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка угловой
                                                                раскладки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Резка плитки,
                                                                керамогранита</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил лицевых внутренних
                                                                углов плитки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил торца плитки под 45
                                                                градусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство круглого
                                                                отверстия в плитке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                стандартной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                эпоксидной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка мозаики стандартной
                                                                затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Малярные подготовительные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3142" data-perc="14"></div>
                                                <div class="calc_table_col3" data-id="3142" data-perc="11"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж карниза из
                                                                полиуретана</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(нанесение насечек на стены,
                                                                потолок и карниз, обработка поверхностей грутовкой,
                                                                монтаж распорных дюпелей в стены и дюпелей-бабочка в
                                                                потолок, ненсение гипсового клея на карниз и монтаж его
                                                                на оцинкованные саморезы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(установка изделия на
                                                                оцинкованные саморезы и клей на основе гипса,
                                                                шпатлевание и шлифование стыков и
                                                                примыканий, доработка изделий под основание)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из гипса
                                                                на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из
                                                                полиуретана на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка потолка и
                                                                торцевых частей (весь цикл работ)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание гипсокартонных
                                                                стыков и проклейка бумагой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание ГКЛ
                                                                конструкций по уголкам/маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text">(нанесение клея, поклейка
                                                                стеклохолста, нанесение клея поверх стеклохолста)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1 слой Ветонит, 2 слоя
                                                                Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2 слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4 слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                торцевых частей ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолочного плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен и торцевых
                                                                частей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка молдингов к
                                                                покраске</span>
                                                            <span class="calc_sp_item_text">(заделка стыков, шпатлевание
                                                                и шлифование)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 2 слоя Ветонит,
                                                                2 слоя Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под обои</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под обои</span>
                                                            <span class="calc_sp_item_text">(первый слой шпатлевки
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под декоративные покрытия</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску/обои в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Малярные финишные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3143" data-perc="5"></div>
                                                <div class="calc_table_col3" data-id="3143" data-perc="4"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска потолка</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска торцевых частей
                                                                ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска молдингов,
                                                                карнизов, плинтусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">покраска стен</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска стен</span>
                                                            <span class="calc_sp_item_text">(с помощью
                                                                краскопульта)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев шириной 106
                                                                см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка виниловых обоев
                                                                шириной менее 70 см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев с
                                                                бордюром</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка текстильных обоев
                                                                (шелкография)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Финишные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3144" data-perc="8"></div>
                                                <div class="calc_table_col3" data-id="3144" data-perc="3"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс
                                                                "Подключение"</span>
                                                            <span class="calc_sp_item_text">(установка розеток,
                                                                выключателей)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Установка"</span>
                                                            <span class="calc_sp_item_text">(монтаж люстр, точечных
                                                                светильников, бра)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка и подключение
                                                                люстры с креплением к потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка люстр стоимость
                                                                зависит от количества деталей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка точечного,
                                                                галогенового светильника</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка электрического
                                                                полотенцесушителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж LED ленты</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнических
                                                                приборов "под ключ" </span>
                                                            <span class="calc_sp_item_text">(установка ванн, туалетов,
                                                                бидэ, раковин, смесителей, душевых штанг)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка линолеума</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">



                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка ковролина</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ламината</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной
                                                                доски</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фанеры на
                                                                двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж инженерной доски на
                                                                стяжку через двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной доски,
                                                                массива (на фанеру)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пластикового
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство деревянного
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж стыковых
                                                                порожков</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="repairs repair_3145" repair_id="3145" style="display:none">
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Общестроительные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3146" data-perc="18"></div>
                                                <div class="calc_table_col3" data-id="3146" data-perc="24"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка объекта к
                                                                проведению строительных работ </span>
                                                            <span class="calc_sp_item_text">(уборка, обустройство быта,
                                                                монтаж временного электроснабжения и освещения,
                                                                водоснабжения, установка унитаза, душевого
                                                                поддона)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пеноблоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кирпичная кладка в 1/2
                                                                кирпича из полнотелых кирпичей</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                влагостойких пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство горизонтальных
                                                                дверных откосов</span>
                                                            <span class="calc_sp_item_text">(устройство опалубки,
                                                                армирование и залитие пескоцементной смесью)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство гидроизодяции
                                                                под кладку в один слой из рулонного материала</span>
                                                            <span class="calc_sp_item_text">(ширина 300мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пескоцементного
                                                                основания под кладку в уровень</span>
                                                            <span class="calc_sp_item_text">(толщина 50мм)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Завышение дверного
                                                                проема</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Занижение дверного проема
                                                                больше 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Увеличение/уменьшение
                                                                дверного проема до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обработка стен/оконных
                                                                откосов бетоконтактом Khauf</span>
                                                            <span class="calc_sp_item_text">(используется на бетонных
                                                                основаниях) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен/оконных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text">(используется на пеноблоках,
                                                                кирпиче и других впитывающих поверхностях)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                пластиковой сеткой под штукатурку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя пластиковой сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов)</span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">




                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов при слоях свыше
                                                                45мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка углового
                                                                штукатурного профиля</span>
                                                            <span class="calc_sp_item_text">(используется при
                                                                необходимости, на внешних углах)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                профиля для примыкания штукатурного слоя к окну</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка поверхности
                                                                оконного проема под установку подоконника</span>
                                                            <span class="calc_sp_item_text">(заливка теплоизоляционной
                                                                смеси в уровень и под толщину подоконника, устройство
                                                                штроб)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка подоконников из
                                                                искусственного камня</span>
                                                            <span class="calc_sp_item_text">(без шлифования/полировки
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка горизонтальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на горизонтальной плоскости
                                                                используется гипсовая смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка вертикальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на вертикальной плоскости
                                                                используется пескоцементная смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка дверных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукартурка стен под
                                                                правило</span>
                                                            <span class="calc_sp_item_text">(исправление незначительных
                                                                дефектов стен без установки маяков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка потолка гипсовой смесью в уровень</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение раствора,
                                                                выравнивание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка стен гипсовой смесью в углы</span>
                                                            <span class="calc_sp_item_text">(санузлы, угол под кухонную
                                                                мебель)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка стен
                                                                пескоцементной смесью</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение смеси, выравнивание,
                                                                перетирание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Утепление балконов</span>
                                                            <span class="calc_sp_item_text">(заполнение отверстий и
                                                                трещин монтажной пеной, устройство в один слой
                                                                утеплителя высокой плотности с пропениванием всех
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка ниши под карниз
                                                                на потолке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Электромонтажные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3147" data-perc="12"></div>
                                                <div class="calc_table_col3" data-id="3147" data-perc="14"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки под ключ" </span>
                                                            <span class="calc_sp_item_text">(устройство электрической и
                                                                слаботочной проводки без установки розеток, выключателей
                                                                и осветительных приборов, устройство штроб, установка
                                                                подрозетников, сборка распаечных коробок)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки для системы отопления" </span>
                                                            <span class="calc_sp_item_text">(устройство слаботочной
                                                                проводки, устройство штроб, установка подрозетников,
                                                                сборка распаечных коробок, установка термостатов,
                                                                датчиков температуры воздуха и пола)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                электрического щита</span>
                                                            <span class="calc_sp_item_text">(распределение потребителей
                                                                на группы,распределение нагрузок на фазы, устройство
                                                                шин, крос-модулей,установка автоматов, узо,
                                                                диф-автоматов, монтаж электросчетчика и вводного
                                                                автомата) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка временных розеток
                                                                и светильников<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в монолите</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в кирпиче, блоке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                слаботочного щита или вывод из подрозетников в одном
                                                                месте 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                слаботочный щит 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пробитие отверстий в
                                                                монолитном перекрытии диаметр до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по полу</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из кирпича, блоков стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из бетона стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сверление кирпичных,
                                                                блочных стен диаметром до 3см и глубиной до 60см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство выводов на улицу
                                                                электрических и слаботочных кабелей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка стабилизатора
                                                                напряжения</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка ИБП</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка проточного насоса
                                                                для канализации</span>
                                                            <span class="calc_sp_item_text">(Сололифт)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Водоснабжение</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3148" data-perc="15"></div>
                                                <div class="calc_table_col3" data-id="3148" data-perc="27"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                полипропиленом </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                трубой из сшитого полиэтилена </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство коллекторов с
                                                                подключением к системе водоснабжения</span>
                                                            <span class="calc_sp_item_text">(монтаж водосчетчиков,
                                                                запорной арматуры, фильтров грубой очистки, фильтров
                                                                средней механической очистки, установка и регулировка
                                                                редуктора) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж автоматической
                                                                системы контроля протечки воды</span>
                                                            <span class="calc_sp_item_text">(установка запорной
                                                                арматуры, распределительной коробки, монтаж проводки,
                                                                проверка системы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутристенного
                                                                смесителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка инсталляции
                                                                подвесного унитаза</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж
                                                                накопительного/проточного водонагревателя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фильтров средней
                                                                очистки воды </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж счетчиков
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж редукторов давления
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шумовиброизоляция
                                                                канализационной трубы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Простое отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту,теплый пол не более 20% от площади дома,2
                                                                сан.узла,
                                                                котельная простая по нашему проекту, регулировка
                                                                температурой приборов и т.п. из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><span
                                                                    class="calc_sp_item_title">"Среднее
                                                                    отопление"</span></span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту, конвектора не более 30% от всех приборов,
                                                                теплый пол не более
                                                                30% от площади дома, 3 сан.узла, котельная простая по
                                                                нашему проекту, решулировака температурой одним
                                                                регулятором в доме и
                                                                теплыми полами из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Сложное отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по стороннему
                                                                проекту, конвектора более 30% от всех приборов, теплый
                                                                пол не более 50% от площади дома, 4 сан.узла, котельная
                                                                сложная с автоматизацией и интеллектуальным
                                                                регулированием)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><br></span>
                                                        </div>

                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж отопления:
                                                                двухтрубная система с параллельным подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрас,
                                                                установка радиаторов, устройство штроб, прокладка линий
                                                                холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов, прокладка лини теплых полов до
                                                                колеккторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж системы
                                                                отопления: двухтрубная система с лучевым
                                                                подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрасс,
                                                                монтаж сантехнических шкафов и установка коллекторов,
                                                                установка радиаторов,
                                                                устройство штроб, прокладка линий холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов(гребенок),
                                                                прокладка линии теплых полов до коллекторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пусконаладочные работы
                                                                простой системы отопления<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Демонтаж радиаторов и
                                                                монтаж на готовое место</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж модулей
                                                                интеллектуального регулирования системы отопления в
                                                                котельной</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж радиатора с нижним
                                                                подключением</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка теплотрасс в
                                                                теплоизоляции</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией и
                                                                интеллектуальной системой регулирования</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж датчиков теплого
                                                                пола в стяжку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Разработка проекта
                                                                теплопотерь и подбор оборудования<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Устройство стяжки</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3149" data-perc="6"></div>
                                                <div class="calc_table_col3" data-id="3149" data-perc="7"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола битумной
                                                                гидроизоляцией </span>
                                                            <span class="calc_sp_item_text">(подготовка поверхности,
                                                                уборка пылесосом, устройство выкрошки, нанесение
                                                                битумного праймера, укладка рулонной гидроизоляции с
                                                                нагревом)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство шумоизоляции
                                                                пола с использованием материала шумопласт или шумостоп
                                                            </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство песко-цементной
                                                                стяжки слой до 7 см</span>
                                                            <span class="calc_sp_item_text">(установка маяков,
                                                                добавление фиброволокна, пластификатора, залитие и
                                                                выравнивание смеси)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство уплотнительной
                                                                ленты</span>
                                                            <span class="calc_sp_item_text">(очистка поверхности,
                                                                проклеивание периметра стяжки и устройство диф-швов с
                                                                помощью дихтузбанда)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство подложки из
                                                                пленки под стяжку</span>
                                                            <span class="calc_sp_item_text">(уборка помещения, укладка
                                                                пленки внахлест и с заводом на стены выше уровня
                                                                стяжки)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка пленки поверх
                                                                стяжки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Гипсокартонные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3150" data-perc="8"></div>
                                                <div class="calc_table_col3" data-id="3150" data-perc="6"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Потолки:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровневого ГКЛ
                                                                потолка на жестком каркасе в один слой</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                монтаж направляющего профиля к стене через демпферную
                                                                ленту,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой 40х40см в два уровня на двухуровневых
                                                                подвесах, обшитие
                                                                металлокаркаса гкл в два слоя в перехлест, усиление мест
                                                                под люстры, расшивка и обработка швов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровнего ГКЛ
                                                                потолка плавающим способом</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой
                                                                40х40см в один уровень, без привязки к стенам, обшитие
                                                                металлокаркаса гкл в один слой, усиление мест под
                                                                люстры, расшивка и обработка швов) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж коробов с подсветкой
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50мм (один слой)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж выносного карниза из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж двухторцевых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши под карниз из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text">(высота ниши не более 10см,
                                                                ширина не менее 15 см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство отверстий под
                                                                точечный светильник</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Стены:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен гипсокартоном
                                                                по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие внешних стен с
                                                                устройством ниш под радиаторы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсокартона в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен
                                                                гипсоволкнистыми листами по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсоволкнистых листов в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство откосов их
                                                                ГВЛ(теплые откосы)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50 мм в один слой на стену</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Плиточные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3151" data-perc="14"></div>
                                                <div class="calc_table_col3" data-id="3151" data-perc="4"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола, стен
                                                                обмазочной гидроизоляцией </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гидроизоляционной
                                                                ленты на стыках пола и стен</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж электрического
                                                                теплого пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика
                                                                автоматической системы протечки воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство стяжки
                                                                самовыравнивающейся смесью по маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж экрана под ванну из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж сантехнического
                                                                короба из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка металлического</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка под плитку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство столешницы
                                                                примыкающей к стене</span>
                                                            <span class="calc_sp_item_text">(устройство каркаса,
                                                                выставление опалубки, заливка бетоном(замес вручную),
                                                                устройство отверстия под раковину)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж изделий из камня без
                                                                шлифовки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем с обработкой швов вручную</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем, без швов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен керамической
                                                                плиткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен/полов
                                                                керамической плиткой мозаика</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка полов
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка лестницы
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка бордюра, карандаша,
                                                                углового элемента</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка керамического
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка угловой
                                                                раскладки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Резка плитки,
                                                                керамогранита</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил лицевых внутренних
                                                                углов плитки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил торца плитки под 45
                                                                градусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство круглого
                                                                отверстия в плитке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                стандартной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                эпоксидной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка мозаики стандартной
                                                                затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Малярные подготовительные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3152" data-perc="14"></div>
                                                <div class="calc_table_col3" data-id="3152" data-perc="11"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж карниза из
                                                                полиуретана</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(нанесение насечек на стены,
                                                                потолок и карниз, обработка поверхностей грутовкой,
                                                                монтаж распорных дюпелей в стены и дюпелей-бабочка в
                                                                потолок, ненсение гипсового клея на карниз и монтаж его
                                                                на оцинкованные саморезы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(установка изделия на
                                                                оцинкованные саморезы и клей на основе гипса,
                                                                шпатлевание и шлифование стыков и
                                                                примыканий, доработка изделий под основание)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из гипса
                                                                на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из
                                                                полиуретана на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка потолка и
                                                                торцевых частей (весь цикл работ)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание гипсокартонных
                                                                стыков и проклейка бумагой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание ГКЛ
                                                                конструкций по уголкам/маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text">(нанесение клея, поклейка
                                                                стеклохолста, нанесение клея поверх стеклохолста)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1 слой Ветонит, 2 слоя
                                                                Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2 слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4 слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                торцевых частей ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолочного плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен и торцевых
                                                                частей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка молдингов к
                                                                покраске</span>
                                                            <span class="calc_sp_item_text">(заделка стыков, шпатлевание
                                                                и шлифование)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 2 слоя Ветонит,
                                                                2 слоя Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под обои</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под обои</span>
                                                            <span class="calc_sp_item_text">(первый слой шпатлевки
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под декоративные покрытия</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску/обои в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Малярные финишные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3153" data-perc="5"></div>
                                                <div class="calc_table_col3" data-id="3153" data-perc="4"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска потолка</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска торцевых частей
                                                                ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска молдингов,
                                                                карнизов, плинтусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">покраска стен</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска стен</span>
                                                            <span class="calc_sp_item_text">(с помощью
                                                                краскопульта)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев шириной 106
                                                                см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка виниловых обоев
                                                                шириной менее 70 см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев с
                                                                бордюром</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка текстильных обоев
                                                                (шелкография)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calc_table_row calc_table_row_i">
                                            <div class="calc_table_row_h">
                                                <div class="calc_table_col1">
                                                    <span>Финишные работы</span>
                                                </div>
                                                <div class="calc_table_col2" data-id="3154" data-perc="8"></div>
                                                <div class="calc_table_col3" data-id="3154" data-perc="3"></div>
                                            </div>
                                            <div class="calc_table_row_spoiler cf">
                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс
                                                                "Подключение"</span>
                                                            <span class="calc_sp_item_text">(установка розеток,
                                                                выключателей)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Установка"</span>
                                                            <span class="calc_sp_item_text">(монтаж люстр, точечных
                                                                светильников, бра)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка и подключение
                                                                люстры с креплением к потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка люстр стоимость
                                                                зависит от количества деталей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка точечного,
                                                                галогенового светильника</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка электрического
                                                                полотенцесушителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж LED ленты</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнических
                                                                приборов "под ключ" </span>
                                                            <span class="calc_sp_item_text">(установка ванн, туалетов,
                                                                бидэ, раковин, смесителей, душевых штанг)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка линолеума</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">



                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка ковролина</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ламината</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной
                                                                доски</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фанеры на
                                                                двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж инженерной доски на
                                                                стяжку через двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной доски,
                                                                массива (на фанеру)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пластикового
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство деревянного
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж стыковых
                                                                порожков</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="calc_footer">
                                        <div class="calc_f_l">
                                            <div class="calc_f_title">Работы</div>
                                            <div class="calc_f_val calc_f_val_work"> р</div>
                                            <div class="calc_f_link pps_" data-pp="calc_works">
                                                <a class="open-calc" href="javascript:;">
                                                    Подробный перечень работ
                                                </a>
                                            </div>
                                        </div>

                                        <div class="calc_f_l_i">
                                            <div class="calc_f_title">Черновые материалы</div>
                                            <div class="calc_f_val calc_f_val_mat"> р</div>
                                            <div class="calc_f_link pps_" data-pp="calc_mats">
                                                <a href="index.html#">Список закупаемых материалов</a>
                                            </div>
                                        </div>

                                        <div class="calc_f_l_iii">
                                            <a href="index.html#" class="btn btn_big pp_" data-pp="request">Отправить
                                                заявку</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="display: none;" id="calc-modal">
                                <div class="pp_calc_works_list">
                                    <div class="calc_table">
                                        <div class="calc_table_head">
                                            <div class="calc_table_col1 calc_table_col_head">Вид работ</div>
                                            <div class="calc_table_col2 calc_table_col_head">Работы</div>
                                            <div class="calc_table_col3 calc_table_col_head">Черновые материалы</div>
                                        </div>

                                        <div class="calc-modal-blocks" id="calc-modal-block-3127">
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Общестроительные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3128-1" data-perc="20"></div>
                                                    <div class="calc_table_col3 w-3128-2" data-perc="24"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка объекта к
                                                                проведению строительных работ </span>
                                                            <span class="calc_sp_item_text">(уборка, обустройство быта,
                                                                монтаж временного электроснабжения и освещения,
                                                                водоснабжения, установка унитаза, душевого
                                                                поддона)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пеноблоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кирпичная кладка в 1/2
                                                                кирпича из полнотелых кирпичей</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                влагостойких пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство горизонтальных
                                                                дверных откосов</span>
                                                            <span class="calc_sp_item_text">(устройство опалубки,
                                                                армирование и залитие пескоцементной смесью)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство гидроизодяции
                                                                под кладку в один слой из рулонного материала</span>
                                                            <span class="calc_sp_item_text">(ширина 300мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пескоцементного
                                                                основания под кладку в уровень</span>
                                                            <span class="calc_sp_item_text">(толщина 50мм)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Завышение дверного
                                                                проема</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Занижение дверного проема
                                                                больше 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Увеличение/уменьшение
                                                                дверного проема до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обработка стен/оконных
                                                                откосов бетоконтактом Khauf</span>
                                                            <span class="calc_sp_item_text">(используется на бетонных
                                                                основаниях) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен/оконных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text">(используется на пеноблоках,
                                                                кирпиче и других впитывающих поверхностях)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                пластиковой сеткой под штукатурку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя пластиковой сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов)</span>
                                                        </div>
                                                    </div>
                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов при слоях свыше
                                                                45мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка углового
                                                                штукатурного профиля</span>
                                                            <span class="calc_sp_item_text">(используется при
                                                                необходимости, на внешних углах)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                профиля для примыкания штукатурного слоя к окну</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка поверхности
                                                                оконного проема под установку подоконника</span>
                                                            <span class="calc_sp_item_text">(заливка теплоизоляционной
                                                                смеси в уровень и под толщину подоконника, устройство
                                                                штроб)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка подоконников из
                                                                искусственного камня</span>
                                                            <span class="calc_sp_item_text">(без шлифования/полировки
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка горизонтальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на горизонтальной плоскости
                                                                используется гипсовая смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка вертикальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на вертикальной плоскости
                                                                используется пескоцементная смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка дверных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукартурка стен под
                                                                правило</span>
                                                            <span class="calc_sp_item_text">(исправление незначительных
                                                                дефектов стен без установки маяков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка потолка гипсовой смесью в уровень</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение раствора,
                                                                выравнивание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка стен гипсовой смесью в углы</span>
                                                            <span class="calc_sp_item_text">(санузлы, угол под кухонную
                                                                мебель)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка стен
                                                                пескоцементной смесью</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение смеси, выравнивание,
                                                                перетирание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Утепление балконов</span>
                                                            <span class="calc_sp_item_text">(заполнение отверстий и
                                                                трещин монтажной пеной, устройство в один слой
                                                                утеплителя высокой плотности с пропениванием всех
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка ниши под карниз
                                                                на потолке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Электромонтажные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3835-1" data-perc="11"></div>
                                                    <div class="calc_table_col3 w-3835-2" data-perc="14"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки под ключ" </span>
                                                            <span class="calc_sp_item_text">(устройство электрической и
                                                                слаботочной проводки без установки розеток, выключателей
                                                                и осветительных приборов, устройство штроб, установка
                                                                подрозетников, сборка распаечных коробок)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки для системы отопления" </span>
                                                            <span class="calc_sp_item_text">(устройство слаботочной
                                                                проводки, устройство штроб, установка подрозетников,
                                                                сборка распаечных коробок, установка термостатов,
                                                                датчиков температуры воздуха и пола)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                электрического щита</span>
                                                            <span class="calc_sp_item_text">(распределение потребителей
                                                                на группы,распределение нагрузок на фазы, устройство
                                                                шин, крос-модулей,установка автоматов, узо,
                                                                диф-автоматов, монтаж электросчетчика и вводного
                                                                автомата) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка временных розеток
                                                                и светильников<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в монолите</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в кирпиче, блоке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                слаботочного щита или вывод из подрозетников в одном
                                                                месте 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                слаботочный щит 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пробитие отверстий в
                                                                монолитном перекрытии диаметр до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по полу</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из кирпича, блоков стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из бетона стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сверление кирпичных,
                                                                блочных стен диаметром до 3см и глубиной до 60см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство выводов на улицу
                                                                электрических и слаботочных кабелей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка стабилизатора
                                                                напряжения</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка ИБП</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка проточного насоса
                                                                для канализации</span>
                                                            <span class="calc_sp_item_text">(Сололифт)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span
                                                            class="active">Водоснабжение</span></div>
                                                    <div class="calc_table_col2 w-3837-1" data-perc="15"></div>
                                                    <div class="calc_table_col3 w-3837-2" data-perc="27"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                полипропиленом </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                трубой из сшитого полиэтилена </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство коллекторов с
                                                                подключением к системе водоснабжения</span>
                                                            <span class="calc_sp_item_text">(монтаж водосчетчиков,
                                                                запорной арматуры, фильтров грубой очистки, фильтров
                                                                средней механической очистки, установка и регулировка
                                                                редуктора) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж автоматической
                                                                системы контроля протечки воды</span>
                                                            <span class="calc_sp_item_text">(установка запорной
                                                                арматуры, распределительной коробки, монтаж проводки,
                                                                проверка системы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутристенного
                                                                смесителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка инсталляции
                                                                подвесного унитаза</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж
                                                                накопительного/проточного водонагревателя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фильтров средней
                                                                очистки воды </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж счетчиков
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж редукторов давления
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шумовиброизоляция
                                                                канализационной трубы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Простое отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту,теплый пол не более 20% от площади дома,2
                                                                сан.узла,
                                                                котельная простая по нашему проекту, регулировка
                                                                температурой приборов и т.п. из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><span
                                                                    class="calc_sp_item_title">"Среднее
                                                                    отопление"</span></span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту, конвектора не более 30% от всех приборов,
                                                                теплый пол не более
                                                                30% от площади дома, 3 сан.узла, котельная простая по
                                                                нашему проекту, решулировака температурой одним
                                                                регулятором в доме и
                                                                теплыми полами из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Сложное отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по стороннему
                                                                проекту, конвектора более 30% от всех приборов, теплый
                                                                пол не более 50% от площади дома, 4 сан.узла, котельная
                                                                сложная с автоматизацией и интеллектуальным
                                                                регулированием)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><br></span>
                                                        </div>

                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж отопления:
                                                                двухтрубная система с параллельным подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрас,
                                                                установка радиаторов, устройство штроб, прокладка линий
                                                                холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов, прокладка лини теплых полов до
                                                                колеккторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж системы
                                                                отопления: двухтрубная система с лучевым
                                                                подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрасс,
                                                                монтаж сантехнических шкафов и установка коллекторов,
                                                                установка радиаторов,
                                                                устройство штроб, прокладка линий холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов(гребенок),
                                                                прокладка линии теплых полов до коллекторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пусконаладочные работы
                                                                простой системы отопления<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Демонтаж радиаторов и
                                                                монтаж на готовое место</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж модулей
                                                                интеллектуального регулирования системы отопления в
                                                                котельной</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж радиатора с нижним
                                                                подключением</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка теплотрасс в
                                                                теплоизоляции</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией и
                                                                интеллектуальной системой регулирования</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж датчиков теплого
                                                                пола в стяжку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Разработка проекта
                                                                теплопотерь и подбор оборудования<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Устройство
                                                            стяжки</span></div>
                                                    <div class="calc_table_col2 w-3840-1" data-perc="5"></div>
                                                    <div class="calc_table_col3 w-3840-2" data-perc="7"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола битумной
                                                                гидроизоляцией </span>
                                                            <span class="calc_sp_item_text">(подготовка поверхности,
                                                                уборка пылесосом, устройство выкрошки, нанесение
                                                                битумного праймера, укладка рулонной гидроизоляции с
                                                                нагревом)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство шумоизоляции
                                                                пола с использованием материала шумопласт или шумостоп
                                                            </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство песко-цементной
                                                                стяжки слой до 7 см</span>
                                                            <span class="calc_sp_item_text">(установка маяков,
                                                                добавление фиброволокна, пластификатора, залитие и
                                                                выравнивание смеси)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство уплотнительной
                                                                ленты</span>
                                                            <span class="calc_sp_item_text">(очистка поверхности,
                                                                проклеивание периметра стяжки и устройство диф-швов с
                                                                помощью дихтузбанда)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство подложки из
                                                                пленки под стяжку</span>
                                                            <span class="calc_sp_item_text">(уборка помещения, укладка
                                                                пленки внахлест и с заводом на стены выше уровня
                                                                стяжки)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка пленки поверх
                                                                стяжки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Гипсокартонные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3841-1" data-perc="8"></div>
                                                    <div class="calc_table_col3 w-3841-2" data-perc="6"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Потолки:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровневого ГКЛ
                                                                потолка на жестком каркасе в один слой</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                монтаж направляющего профиля к стене через демпферную
                                                                ленту,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой 40х40см в два уровня на двухуровневых
                                                                подвесах, обшитие
                                                                металлокаркаса гкл в два слоя в перехлест, усиление мест
                                                                под люстры, расшивка и обработка швов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровнего ГКЛ
                                                                потолка плавающим способом</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой
                                                                40х40см в один уровень, без привязки к стенам, обшитие
                                                                металлокаркаса гкл в один слой, усиление мест под
                                                                люстры, расшивка и обработка швов) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж коробов с подсветкой
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50мм (один слой)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж выносного карниза из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж двухторцевых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши под карниз из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text">(высота ниши не более 10см,
                                                                ширина не менее 15 см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство отверстий под
                                                                точечный светильник</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Стены:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен гипсокартоном
                                                                по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие внешних стен с
                                                                устройством ниш под радиаторы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсокартона в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен
                                                                гипсоволкнистыми листами по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсоволкнистых листов в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство откосов их
                                                                ГВЛ(теплые откосы)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50 мм в один слой на стену</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Плиточные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3842-1" data-perc="14"></div>
                                                    <div class="calc_table_col3 w-3842-2" data-perc="4"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола, стен
                                                                обмазочной гидроизоляцией </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гидроизоляционной
                                                                ленты на стыках пола и стен</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж электрического
                                                                теплого пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика
                                                                автоматической системы протечки воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство стяжки
                                                                самовыравнивающейся смесью по маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж экрана под ванну из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж сантехнического
                                                                короба из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка металлического</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка под плитку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство столешницы
                                                                примыкающей к стене</span>
                                                            <span class="calc_sp_item_text">(устройство каркаса,
                                                                выставление опалубки, заливка бетоном(замес вручную),
                                                                устройство отверстия под раковину)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж изделий из камня без
                                                                шлифовки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем с обработкой швов вручную</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем, без швов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен керамической
                                                                плиткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен/полов
                                                                керамической плиткой мозаика</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка полов
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка лестницы
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка бордюра, карандаша,
                                                                углового элемента</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка керамического
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка угловой
                                                                раскладки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Резка плитки,
                                                                керамогранита</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил лицевых внутренних
                                                                углов плитки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил торца плитки под 45
                                                                градусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство круглого
                                                                отверстия в плитке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                стандартной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                эпоксидной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка мозаики стандартной
                                                                затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Малярные
                                                            подготовительные работы</span></div>
                                                    <div class="calc_table_col2 w-3843-1" data-perc="14"></div>
                                                    <div class="calc_table_col3 w-3843-2" data-perc="11"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж карниза из
                                                                полиуретана</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(нанесение насечек на стены,
                                                                потолок и карниз, обработка поверхностей грутовкой,
                                                                монтаж распорных дюпелей в стены и дюпелей-бабочка в
                                                                потолок, ненсение гипсового клея на карниз и монтаж его
                                                                на оцинкованные саморезы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(установка изделия на
                                                                оцинкованные саморезы и клей на основе гипса,
                                                                шпатлевание и шлифование стыков и
                                                                примыканий, доработка изделий под основание)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из гипса
                                                                на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из
                                                                полиуретана на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка потолка и
                                                                торцевых частей (весь цикл работ)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание гипсокартонных
                                                                стыков и проклейка бумагой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание ГКЛ
                                                                конструкций по уголкам/маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text">(нанесение клея, поклейка
                                                                стеклохолста, нанесение клея поверх стеклохолста)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1 слой Ветонит, 2 слоя
                                                                Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2 слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4 слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                торцевых частей ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолочного плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен и торцевых
                                                                частей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка молдингов к
                                                                покраске</span>
                                                            <span class="calc_sp_item_text">(заделка стыков, шпатлевание
                                                                и шлифование)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 2 слоя Ветонит,
                                                                2 слоя Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под обои</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под обои</span>
                                                            <span class="calc_sp_item_text">(первый слой шпатлевки
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под декоративные покрытия</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску/обои в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Малярные финишные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3844-1" data-perc="5"></div>
                                                    <div class="calc_table_col3 w-3844-2" data-perc="4"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска потолка</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска торцевых частей
                                                                ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска молдингов,
                                                                карнизов, плинтусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">покраска стен</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска стен</span>
                                                            <span class="calc_sp_item_text">(с помощью
                                                                краскопульта)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев шириной 106
                                                                см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка виниловых обоев
                                                                шириной менее 70 см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев с
                                                                бордюром</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка текстильных обоев
                                                                (шелкография)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Финишные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3845-1" data-perc="8"></div>
                                                    <div class="calc_table_col3 w-3845-2" data-perc="3"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс
                                                                "Подключение"</span>
                                                            <span class="calc_sp_item_text">(установка розеток,
                                                                выключателей)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Установка"</span>
                                                            <span class="calc_sp_item_text">(монтаж люстр, точечных
                                                                светильников, бра)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка и подключение
                                                                люстры с креплением к потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка люстр стоимость
                                                                зависит от количества деталей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка точечного,
                                                                галогенового светильника</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка электрического
                                                                полотенцесушителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж LED ленты</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнических
                                                                приборов "под ключ" </span>
                                                            <span class="calc_sp_item_text">(установка ванн, туалетов,
                                                                бидэ, раковин, смесителей, душевых штанг)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка линолеума</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">



                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка ковролина</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ламината</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной
                                                                доски</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фанеры на
                                                                двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж инженерной доски на
                                                                стяжку через двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной доски,
                                                                массива (на фанеру)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пластикового
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство деревянного
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж стыковых
                                                                порожков</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="calc-modal-blocks" id="calc-modal-block-3135">
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Общестроительные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3136-1" data-perc="18"></div>
                                                    <div class="calc_table_col3 w-3136-2" data-perc="24"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка объекта к
                                                                проведению строительных работ </span>
                                                            <span class="calc_sp_item_text">(уборка, обустройство быта,
                                                                монтаж временного электроснабжения и освещения,
                                                                водоснабжения, установка унитаза, душевого
                                                                поддона)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пеноблоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кирпичная кладка в 1/2
                                                                кирпича из полнотелых кирпичей</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                влагостойких пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство горизонтальных
                                                                дверных откосов</span>
                                                            <span class="calc_sp_item_text">(устройство опалубки,
                                                                армирование и залитие пескоцементной смесью)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство гидроизодяции
                                                                под кладку в один слой из рулонного материала</span>
                                                            <span class="calc_sp_item_text">(ширина 300мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пескоцементного
                                                                основания под кладку в уровень</span>
                                                            <span class="calc_sp_item_text">(толщина 50мм)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Завышение дверного
                                                                проема</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Занижение дверного проема
                                                                больше 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Увеличение/уменьшение
                                                                дверного проема до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обработка стен/оконных
                                                                откосов бетоконтактом Khauf</span>
                                                            <span class="calc_sp_item_text">(используется на бетонных
                                                                основаниях) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен/оконных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text">(используется на пеноблоках,
                                                                кирпиче и других впитывающих поверхностях)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                пластиковой сеткой под штукатурку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя пластиковой сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов)</span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">




                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов при слоях свыше
                                                                45мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка углового
                                                                штукатурного профиля</span>
                                                            <span class="calc_sp_item_text">(используется при
                                                                необходимости, на внешних углах)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                профиля для примыкания штукатурного слоя к окну</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка поверхности
                                                                оконного проема под установку подоконника</span>
                                                            <span class="calc_sp_item_text">(заливка теплоизоляционной
                                                                смеси в уровень и под толщину подоконника, устройство
                                                                штроб)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка подоконников из
                                                                искусственного камня</span>
                                                            <span class="calc_sp_item_text">(без шлифования/полировки
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка горизонтальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на горизонтальной плоскости
                                                                используется гипсовая смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка вертикальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на вертикальной плоскости
                                                                используется пескоцементная смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка дверных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукартурка стен под
                                                                правило</span>
                                                            <span class="calc_sp_item_text">(исправление незначительных
                                                                дефектов стен без установки маяков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка потолка гипсовой смесью в уровень</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение раствора,
                                                                выравнивание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка стен гипсовой смесью в углы</span>
                                                            <span class="calc_sp_item_text">(санузлы, угол под кухонную
                                                                мебель)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка стен
                                                                пескоцементной смесью</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение смеси, выравнивание,
                                                                перетирание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Утепление балконов</span>
                                                            <span class="calc_sp_item_text">(заполнение отверстий и
                                                                трещин монтажной пеной, устройство в один слой
                                                                утеплителя высокой плотности с пропениванием всех
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка ниши под карниз
                                                                на потолке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Электромонтажные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3137-1" data-perc="12"></div>
                                                    <div class="calc_table_col3 w-3137-2" data-perc="14"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки под ключ" </span>
                                                            <span class="calc_sp_item_text">(устройство электрической и
                                                                слаботочной проводки без установки розеток, выключателей
                                                                и осветительных приборов, устройство штроб, установка
                                                                подрозетников, сборка распаечных коробок)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки для системы отопления" </span>
                                                            <span class="calc_sp_item_text">(устройство слаботочной
                                                                проводки, устройство штроб, установка подрозетников,
                                                                сборка распаечных коробок, установка термостатов,
                                                                датчиков температуры воздуха и пола)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                электрического щита</span>
                                                            <span class="calc_sp_item_text">(распределение потребителей
                                                                на группы,распределение нагрузок на фазы, устройство
                                                                шин, крос-модулей,установка автоматов, узо,
                                                                диф-автоматов, монтаж электросчетчика и вводного
                                                                автомата) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка временных розеток
                                                                и светильников<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в монолите</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в кирпиче, блоке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                слаботочного щита или вывод из подрозетников в одном
                                                                месте 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                слаботочный щит 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пробитие отверстий в
                                                                монолитном перекрытии диаметр до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по полу</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из кирпича, блоков стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из бетона стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сверление кирпичных,
                                                                блочных стен диаметром до 3см и глубиной до 60см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство выводов на улицу
                                                                электрических и слаботочных кабелей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка стабилизатора
                                                                напряжения</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка ИБП</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка проточного насоса
                                                                для канализации</span>
                                                            <span class="calc_sp_item_text">(Сололифт)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span
                                                            class="active">Водоснабжение</span></div>
                                                    <div class="calc_table_col2 w-3138-1" data-perc="15"></div>
                                                    <div class="calc_table_col3 w-3138-2" data-perc="27"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                полипропиленом </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                трубой из сшитого полиэтилена </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство коллекторов с
                                                                подключением к системе водоснабжения</span>
                                                            <span class="calc_sp_item_text">(монтаж водосчетчиков,
                                                                запорной арматуры, фильтров грубой очистки, фильтров
                                                                средней механической очистки, установка и регулировка
                                                                редуктора) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж автоматической
                                                                системы контроля протечки воды</span>
                                                            <span class="calc_sp_item_text">(установка запорной
                                                                арматуры, распределительной коробки, монтаж проводки,
                                                                проверка системы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутристенного
                                                                смесителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка инсталляции
                                                                подвесного унитаза</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж
                                                                накопительного/проточного водонагревателя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фильтров средней
                                                                очистки воды </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж счетчиков
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж редукторов давления
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шумовиброизоляция
                                                                канализационной трубы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Простое отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту,теплый пол не более 20% от площади дома,2
                                                                сан.узла,
                                                                котельная простая по нашему проекту, регулировка
                                                                температурой приборов и т.п. из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><span
                                                                    class="calc_sp_item_title">"Среднее
                                                                    отопление"</span></span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту, конвектора не более 30% от всех приборов,
                                                                теплый пол не более
                                                                30% от площади дома, 3 сан.узла, котельная простая по
                                                                нашему проекту, решулировака температурой одним
                                                                регулятором в доме и
                                                                теплыми полами из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Сложное отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по стороннему
                                                                проекту, конвектора более 30% от всех приборов, теплый
                                                                пол не более 50% от площади дома, 4 сан.узла, котельная
                                                                сложная с автоматизацией и интеллектуальным
                                                                регулированием)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><br></span>
                                                        </div>

                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж отопления:
                                                                двухтрубная система с параллельным подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрас,
                                                                установка радиаторов, устройство штроб, прокладка линий
                                                                холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов, прокладка лини теплых полов до
                                                                колеккторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж системы
                                                                отопления: двухтрубная система с лучевым
                                                                подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрасс,
                                                                монтаж сантехнических шкафов и установка коллекторов,
                                                                установка радиаторов,
                                                                устройство штроб, прокладка линий холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов(гребенок),
                                                                прокладка линии теплых полов до коллекторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пусконаладочные работы
                                                                простой системы отопления<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Демонтаж радиаторов и
                                                                монтаж на готовое место</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж модулей
                                                                интеллектуального регулирования системы отопления в
                                                                котельной</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж радиатора с нижним
                                                                подключением</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка теплотрасс в
                                                                теплоизоляции</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией и
                                                                интеллектуальной системой регулирования</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж датчиков теплого
                                                                пола в стяжку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Разработка проекта
                                                                теплопотерь и подбор оборудования<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Устройство
                                                            стяжки</span></div>
                                                    <div class="calc_table_col2 w-3139-1" data-perc="6"></div>
                                                    <div class="calc_table_col3 w-3139-2" data-perc="7"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола битумной
                                                                гидроизоляцией </span>
                                                            <span class="calc_sp_item_text">(подготовка поверхности,
                                                                уборка пылесосом, устройство выкрошки, нанесение
                                                                битумного праймера, укладка рулонной гидроизоляции с
                                                                нагревом)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство шумоизоляции
                                                                пола с использованием материала шумопласт или шумостоп
                                                            </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство песко-цементной
                                                                стяжки слой до 7 см</span>
                                                            <span class="calc_sp_item_text">(установка маяков,
                                                                добавление фиброволокна, пластификатора, залитие и
                                                                выравнивание смеси)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство уплотнительной
                                                                ленты</span>
                                                            <span class="calc_sp_item_text">(очистка поверхности,
                                                                проклеивание периметра стяжки и устройство диф-швов с
                                                                помощью дихтузбанда)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство подложки из
                                                                пленки под стяжку</span>
                                                            <span class="calc_sp_item_text">(уборка помещения, укладка
                                                                пленки внахлест и с заводом на стены выше уровня
                                                                стяжки)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка пленки поверх
                                                                стяжки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Гипсокартонные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3140-1" data-perc="8"></div>
                                                    <div class="calc_table_col3 w-3140-2" data-perc="6"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Потолки:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровневого ГКЛ
                                                                потолка на жестком каркасе в один слой</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                монтаж направляющего профиля к стене через демпферную
                                                                ленту,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой 40х40см в два уровня на двухуровневых
                                                                подвесах, обшитие
                                                                металлокаркаса гкл в два слоя в перехлест, усиление мест
                                                                под люстры, расшивка и обработка швов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровнего ГКЛ
                                                                потолка плавающим способом</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой
                                                                40х40см в один уровень, без привязки к стенам, обшитие
                                                                металлокаркаса гкл в один слой, усиление мест под
                                                                люстры, расшивка и обработка швов) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж коробов с подсветкой
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50мм (один слой)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж выносного карниза из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж двухторцевых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши под карниз из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text">(высота ниши не более 10см,
                                                                ширина не менее 15 см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство отверстий под
                                                                точечный светильник</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Стены:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен гипсокартоном
                                                                по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие внешних стен с
                                                                устройством ниш под радиаторы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсокартона в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен
                                                                гипсоволкнистыми листами по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсоволкнистых листов в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство откосов их
                                                                ГВЛ(теплые откосы)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50 мм в один слой на стену</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Плиточные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3141-1" data-perc="14"></div>
                                                    <div class="calc_table_col3 w-3141-2" data-perc="4"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола, стен
                                                                обмазочной гидроизоляцией </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гидроизоляционной
                                                                ленты на стыках пола и стен</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж электрического
                                                                теплого пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика
                                                                автоматической системы протечки воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство стяжки
                                                                самовыравнивающейся смесью по маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж экрана под ванну из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж сантехнического
                                                                короба из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка металлического</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка под плитку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство столешницы
                                                                примыкающей к стене</span>
                                                            <span class="calc_sp_item_text">(устройство каркаса,
                                                                выставление опалубки, заливка бетоном(замес вручную),
                                                                устройство отверстия под раковину)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж изделий из камня без
                                                                шлифовки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем с обработкой швов вручную</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем, без швов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен керамической
                                                                плиткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен/полов
                                                                керамической плиткой мозаика</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка полов
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка лестницы
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка бордюра, карандаша,
                                                                углового элемента</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка керамического
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка угловой
                                                                раскладки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Резка плитки,
                                                                керамогранита</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил лицевых внутренних
                                                                углов плитки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил торца плитки под 45
                                                                градусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство круглого
                                                                отверстия в плитке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                стандартной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                эпоксидной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка мозаики стандартной
                                                                затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Малярные
                                                            подготовительные работы</span></div>
                                                    <div class="calc_table_col2 w-3142-1" data-perc="14"></div>
                                                    <div class="calc_table_col3 w-3142-2" data-perc="11"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж карниза из
                                                                полиуретана</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(нанесение насечек на стены,
                                                                потолок и карниз, обработка поверхностей грутовкой,
                                                                монтаж распорных дюпелей в стены и дюпелей-бабочка в
                                                                потолок, ненсение гипсового клея на карниз и монтаж его
                                                                на оцинкованные саморезы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(установка изделия на
                                                                оцинкованные саморезы и клей на основе гипса,
                                                                шпатлевание и шлифование стыков и
                                                                примыканий, доработка изделий под основание)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из гипса
                                                                на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из
                                                                полиуретана на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка потолка и
                                                                торцевых частей (весь цикл работ)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание гипсокартонных
                                                                стыков и проклейка бумагой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание ГКЛ
                                                                конструкций по уголкам/маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text">(нанесение клея, поклейка
                                                                стеклохолста, нанесение клея поверх стеклохолста)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1 слой Ветонит, 2 слоя
                                                                Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2 слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4 слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                торцевых частей ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолочного плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен и торцевых
                                                                частей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка молдингов к
                                                                покраске</span>
                                                            <span class="calc_sp_item_text">(заделка стыков, шпатлевание
                                                                и шлифование)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 2 слоя Ветонит,
                                                                2 слоя Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под обои</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под обои</span>
                                                            <span class="calc_sp_item_text">(первый слой шпатлевки
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под декоративные покрытия</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску/обои в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Малярные финишные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3143-1" data-perc="5"></div>
                                                    <div class="calc_table_col3 w-3143-2" data-perc="4"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска потолка</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска торцевых частей
                                                                ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска молдингов,
                                                                карнизов, плинтусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">покраска стен</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска стен</span>
                                                            <span class="calc_sp_item_text">(с помощью
                                                                краскопульта)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев шириной 106
                                                                см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка виниловых обоев
                                                                шириной менее 70 см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев с
                                                                бордюром</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка текстильных обоев
                                                                (шелкография)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Финишные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3144-1" data-perc="8"></div>
                                                    <div class="calc_table_col3 w-3144-2" data-perc="3"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс
                                                                "Подключение"</span>
                                                            <span class="calc_sp_item_text">(установка розеток,
                                                                выключателей)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Установка"</span>
                                                            <span class="calc_sp_item_text">(монтаж люстр, точечных
                                                                светильников, бра)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка и подключение
                                                                люстры с креплением к потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка люстр стоимость
                                                                зависит от количества деталей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка точечного,
                                                                галогенового светильника</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка электрического
                                                                полотенцесушителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж LED ленты</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнических
                                                                приборов "под ключ" </span>
                                                            <span class="calc_sp_item_text">(установка ванн, туалетов,
                                                                бидэ, раковин, смесителей, душевых штанг)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка линолеума</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">



                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка ковролина</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ламината</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной
                                                                доски</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фанеры на
                                                                двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж инженерной доски на
                                                                стяжку через двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной доски,
                                                                массива (на фанеру)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пластикового
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство деревянного
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж стыковых
                                                                порожков</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="calc-modal-blocks" id="calc-modal-block-3145">
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Общестроительные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3146-1" data-perc="18"></div>
                                                    <div class="calc_table_col3 w-3146-2" data-perc="24"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка объекта к
                                                                проведению строительных работ </span>
                                                            <span class="calc_sp_item_text">(уборка, обустройство быта,
                                                                монтаж временного электроснабжения и освещения,
                                                                водоснабжения, установка унитаза, душевого
                                                                поддона)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пеноблоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кирпичная кладка в 1/2
                                                                кирпича из полнотелых кирпичей</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, армирование сеткой каждый 3й ряд, устройство
                                                                деформационного шва, устройство дверных проемов, монтаж
                                                                перемычек) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Кладка перегородок из
                                                                влагостойких пазогребневых блоков</span>
                                                            <span class="calc_sp_item_text">(привязка арматурой к
                                                                стенам, устройство деформационного шва, устройство
                                                                дверных проемов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство горизонтальных
                                                                дверных откосов</span>
                                                            <span class="calc_sp_item_text">(устройство опалубки,
                                                                армирование и залитие пескоцементной смесью)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство гидроизодяции
                                                                под кладку в один слой из рулонного материала</span>
                                                            <span class="calc_sp_item_text">(ширина 300мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пескоцементного
                                                                основания под кладку в уровень</span>
                                                            <span class="calc_sp_item_text">(толщина 50мм)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Завышение дверного
                                                                проема</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Занижение дверного проема
                                                                больше 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Увеличение/уменьшение
                                                                дверного проема до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обработка стен/оконных
                                                                откосов бетоконтактом Khauf</span>
                                                            <span class="calc_sp_item_text">(используется на бетонных
                                                                основаниях) </span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен/оконных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text">(используется на пеноблоках,
                                                                кирпиче и других впитывающих поверхностях)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                пластиковой сеткой под штукатурку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя пластиковой сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов)</span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">




                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование штукатурного
                                                                слоя оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text">(используется на стыках
                                                                примыкания разных материалов при слоях свыше
                                                                45мм)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Армирование стен
                                                                оцинкованной сеткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка углового
                                                                штукатурного профиля</span>
                                                            <span class="calc_sp_item_text">(используется при
                                                                необходимости, на внешних углах)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                профиля для примыкания штукатурного слоя к окну</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка поверхности
                                                                оконного проема под установку подоконника</span>
                                                            <span class="calc_sp_item_text">(заливка теплоизоляционной
                                                                смеси в уровень и под толщину подоконника, устройство
                                                                штроб)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка подоконников из
                                                                искусственного камня</span>
                                                            <span class="calc_sp_item_text">(без шлифования/полировки
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка горизонтальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на горизонтальной плоскости
                                                                используется гипсовая смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка вертикальных
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(на вертикальной плоскости
                                                                используется пескоцементная смесь)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка дверных
                                                                откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукартурка стен под
                                                                правило</span>
                                                            <span class="calc_sp_item_text">(исправление незначительных
                                                                дефектов стен без установки маяков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка потолка гипсовой смесью в уровень</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение раствора,
                                                                выравнивание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Высококачественная
                                                                штукатурка стен гипсовой смесью в углы</span>
                                                            <span class="calc_sp_item_text">(санузлы, угол под кухонную
                                                                мебель)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка стен
                                                                пескоцементной смесью</span>
                                                            <span class="calc_sp_item_text">(разметка помещения,
                                                                установка маяков, нанесение смеси, выравнивание,
                                                                перетирание)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Утепление балконов</span>
                                                            <span class="calc_sp_item_text">(заполнение отверстий и
                                                                трещин монтажной пеной, устройство в один слой
                                                                утеплителя высокой плотности с пропениванием всех
                                                                стыков)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штукатурка ниши под карниз
                                                                на потолке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Электромонтажные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3147-1" data-perc="12"></div>
                                                    <div class="calc_table_col3 w-3147-2" data-perc="14"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки под ключ" </span>
                                                            <span class="calc_sp_item_text">(устройство электрической и
                                                                слаботочной проводки без установки розеток, выключателей
                                                                и осветительных приборов, устройство штроб, установка
                                                                подрозетников, сборка распаечных коробок)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "монтаж
                                                                электропроводки для системы отопления" </span>
                                                            <span class="calc_sp_item_text">(устройство слаботочной
                                                                проводки, устройство штроб, установка подрозетников,
                                                                сборка распаечных коробок, установка термостатов,
                                                                датчиков температуры воздуха и пола)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                электрического щита</span>
                                                            <span class="calc_sp_item_text">(распределение потребителей
                                                                на группы,распределение нагрузок на фазы, устройство
                                                                шин, крос-модулей,установка автоматов, узо,
                                                                диф-автоматов, монтаж электросчетчика и вводного
                                                                автомата) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка временных розеток
                                                                и светильников<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в монолите</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                электрический щит в кирпиче, блоке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка и подключение
                                                                слаботочного щита или вывод из подрозетников в одном
                                                                месте 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ниши под
                                                                слаботочный щит 24 модуля</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пробитие отверстий в
                                                                монолитном перекрытии диаметр до 30мм</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка кабелей в гофре
                                                                по полу</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из кирпича, блоков стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Штробление отштукатуренной
                                                                стены из бетона стены 2х2</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сверление кирпичных,
                                                                блочных стен диаметром до 3см и глубиной до 60см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство выводов на улицу
                                                                электрических и слаботочных кабелей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка стабилизатора
                                                                напряжения</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка ИБП</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка проточного насоса
                                                                для канализации</span>
                                                            <span class="calc_sp_item_text">(Сололифт)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span
                                                            class="active">Водоснабжение</span></div>
                                                    <div class="calc_table_col2 w-3148-1" data-perc="15"></div>
                                                    <div class="calc_table_col3 w-3148-2" data-perc="27"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                полипропиленом </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Водоснабжение: монтаж
                                                                трубой из сшитого полиэтилена </span>
                                                            <span class="calc_sp_item_text">(штробление, монтаж труб
                                                                подачи воды, канализация, подключение к
                                                                коллектору)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство коллекторов с
                                                                подключением к системе водоснабжения</span>
                                                            <span class="calc_sp_item_text">(монтаж водосчетчиков,
                                                                запорной арматуры, фильтров грубой очистки, фильтров
                                                                средней механической очистки, установка и регулировка
                                                                редуктора) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж автоматической
                                                                системы контроля протечки воды</span>
                                                            <span class="calc_sp_item_text">(установка запорной
                                                                арматуры, распределительной коробки, монтаж проводки,
                                                                проверка системы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутристенного
                                                                смесителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка инсталляции
                                                                подвесного унитаза</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж
                                                                накопительного/проточного водонагревателя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фильтров средней
                                                                очистки воды </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж счетчиков
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж редукторов давления
                                                                воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шумовиброизоляция
                                                                канализационной трубы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Простое отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту,теплый пол не более 20% от площади дома,2
                                                                сан.узла,
                                                                котельная простая по нашему проекту, регулировка
                                                                температурой приборов и т.п. из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><span
                                                                    class="calc_sp_item_title">"Среднее
                                                                    отопление"</span></span>
                                                            <span class="calc_sp_item_text">(выполнение по нашему
                                                                проекту, конвектора не более 30% от всех приборов,
                                                                теплый пол не более
                                                                30% от площади дома, 3 сан.узла, котельная простая по
                                                                нашему проекту, решулировака температурой одним
                                                                регулятором в доме и
                                                                теплыми полами из котельной)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">"Сложное отопление"</span>
                                                            <span class="calc_sp_item_text">(выполнение по стороннему
                                                                проекту, конвектора более 30% от всех приборов, теплый
                                                                пол не более 50% от площади дома, 4 сан.узла, котельная
                                                                сложная с автоматизацией и интеллектуальным
                                                                регулированием)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><br></span>
                                                        </div>

                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">


                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж отопления:
                                                                двухтрубная система с параллельным подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрас,
                                                                установка радиаторов, устройство штроб, прокладка линий
                                                                холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов, прокладка лини теплых полов до
                                                                колеккторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Монтаж системы
                                                                отопления: двухтрубная система с лучевым
                                                                подключением"</span>
                                                            <span class="calc_sp_item_text">(устройство теплотрасс,
                                                                монтаж сантехнических шкафов и установка коллекторов,
                                                                установка радиаторов,
                                                                устройство штроб, прокладка линий холодного и горячего
                                                                водоснабжения, устройство линии рециркуляции горячей
                                                                воды до коллекторов(гребенок),
                                                                прокладка линии теплых полов до коллекторов установка
                                                                сантехнических шкафов под коллектор ТП, установка
                                                                гребенок ТП)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Пусконаладочные работы
                                                                простой системы отопления<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Демонтаж радиаторов и
                                                                монтаж на готовое место</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж модулей
                                                                интеллектуального регулирования системы отопления в
                                                                котельной</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж радиатора с нижним
                                                                подключением</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Прокладка теплотрасс в
                                                                теплоизоляции</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж внутрипольных
                                                                радиаторов с принудительной конвекцией и
                                                                интеллектуальной системой регулирования</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж датчиков теплого
                                                                пола в стяжку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Разработка проекта
                                                                теплопотерь и подбор оборудования<br></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Устройство
                                                            стяжки</span></div>
                                                    <div class="calc_table_col2 w-3149-1" data-perc="6"></div>
                                                    <div class="calc_table_col3 w-3149-2" data-perc="7"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола битумной
                                                                гидроизоляцией </span>
                                                            <span class="calc_sp_item_text">(подготовка поверхности,
                                                                уборка пылесосом, устройство выкрошки, нанесение
                                                                битумного праймера, укладка рулонной гидроизоляции с
                                                                нагревом)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство шумоизоляции
                                                                пола с использованием материала шумопласт или шумостоп
                                                            </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство песко-цементной
                                                                стяжки слой до 7 см</span>
                                                            <span class="calc_sp_item_text">(установка маяков,
                                                                добавление фиброволокна, пластификатора, залитие и
                                                                выравнивание смеси)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство уплотнительной
                                                                ленты</span>
                                                            <span class="calc_sp_item_text">(очистка поверхности,
                                                                проклеивание периметра стяжки и устройство диф-швов с
                                                                помощью дихтузбанда)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство подложки из
                                                                пленки под стяжку</span>
                                                            <span class="calc_sp_item_text">(уборка помещения, укладка
                                                                пленки внахлест и с заводом на стены выше уровня
                                                                стяжки)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка пленки поверх
                                                                стяжки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Гипсокартонные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3150-1" data-perc="8"></div>
                                                    <div class="calc_table_col3 w-3150-2" data-perc="6"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Потолки:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровневого ГКЛ
                                                                потолка на жестком каркасе в один слой</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                монтаж направляющего профиля к стене через демпферную
                                                                ленту,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой 40х40см в два уровня на двухуровневых
                                                                подвесах, обшитие
                                                                металлокаркаса гкл в два слоя в перехлест, усиление мест
                                                                под люстры, расшивка и обработка швов)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж одноуровнего ГКЛ
                                                                потолка плавающим способом</span>
                                                            <span class="calc_sp_item_text">(отбивка потолка по уровню,
                                                                устройство жестких одноуровневых подвесов, монтаж
                                                                профилей с ячейкой
                                                                40х40см в один уровень, без привязки к стенам, обшитие
                                                                металлокаркаса гкл в один слой, усиление мест под
                                                                люстры, расшивка и обработка швов) </span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж коробов с подсветкой
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50мм (один слой)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж выносного карниза из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж двухторцевых коробов
                                                                круглой формы из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж ниши под карниз из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text">(высота ниши не более 10см,
                                                                ширина не менее 15 см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство отверстий под
                                                                точечный светильник</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title"><b>Стены:</b></span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен гипсокартоном
                                                                по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие внешних стен с
                                                                устройством ниш под радиаторы</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсокартона в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Обшитие стен
                                                                гипсоволкнистыми листами по каркасу в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж перегородок из
                                                                гипсоволкнистых листов в два слоя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство откосов их
                                                                ГВЛ(теплые откосы)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж простых коробов
                                                                прямолинейных форм из ГКЛ в два слоя</span>
                                                            <span class="calc_sp_item_text">(высота и ширина короба не
                                                                более 20х60см)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж минеральной ваты
                                                                толщиной 50 мм в один слой на стену</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Плиточные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3151-1" data-perc="14"></div>
                                                    <div class="calc_table_col3 w-3151-2" data-perc="4"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Гидроизоляция пола, стен
                                                                обмазочной гидроизоляцией </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гидроизоляционной
                                                                ленты на стыках пола и стен</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж электрического
                                                                теплого пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика
                                                                автоматической системы протечки воды</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство стяжки
                                                                самовыравнивающейся смесью по маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж экрана под ванну из
                                                                ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж сантехнического
                                                                короба из ГКЛ</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка металлического</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнического
                                                                люка под плитку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство столешницы
                                                                примыкающей к стене</span>
                                                            <span class="calc_sp_item_text">(устройство каркаса,
                                                                выставление опалубки, заливка бетоном(замес вручную),
                                                                устройство отверстия под раковину)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж изделий из камня без
                                                                шлифовки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем с обработкой швов вручную</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен
                                                                искусственным камнем, без швов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен керамической
                                                                плиткой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка стен/полов
                                                                керамической плиткой мозаика</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка полов
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Облицовка лестницы
                                                                керамогранитом</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка бордюра, карандаша,
                                                                углового элемента</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка керамического
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка угловой
                                                                раскладки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Резка плитки,
                                                                керамогранита</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил лицевых внутренних
                                                                углов плитки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Запил торца плитки под 45
                                                                градусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство круглого
                                                                отверстия в плитке</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                стандартной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка плиточных швов
                                                                эпоксидной затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Затирка мозаики стандартной
                                                                затиркой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Малярные
                                                            подготовительные работы</span></div>
                                                    <div class="calc_table_col2 w-3152-1" data-perc="14"></div>
                                                    <div class="calc_table_col3 w-3152-2" data-perc="11"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж карниза из
                                                                полиуретана</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(нанесение насечек на стены,
                                                                потолок и карниз, обработка поверхностей грутовкой,
                                                                монтаж распорных дюпелей в стены и дюпелей-бабочка в
                                                                потолок, ненсение гипсового клея на карниз и монтаж его
                                                                на оцинкованные саморезы)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж гипсовых
                                                                изделий</span>
                                                            <span class="calc_sp_item_text">(установка изделия на
                                                                оцинкованные саморезы и клей на основе гипса,
                                                                шпатлевание и шлифование стыков и
                                                                примыканий, доработка изделий под основание)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из гипса
                                                                на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж молдингов из
                                                                полиуретана на стену </span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка потолка и
                                                                торцевых частей (весь цикл работ)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание гипсокартонных
                                                                стыков и проклейка бумагой</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивание ГКЛ
                                                                конструкций по уголкам/маякам</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка пластикового
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text">(нанесение клея, поклейка
                                                                стеклохолста, нанесение клея поверх стеклохолста)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1 слой Ветонит, 2 слоя
                                                                Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование потолков под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолков под покраску в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2 слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4 слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                торцевых частей ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                потолочного плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Грунтовка стен и торцевых
                                                                частей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка металлического
                                                                уголка</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка малярной
                                                                сетки</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка
                                                                стеклохолста</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка флизелина под
                                                                окраску</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Подготовка молдингов к
                                                                покраске</span>
                                                            <span class="calc_sp_item_text">(заделка стыков, шпатлевание
                                                                и шлифование)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 2 слоя Ветонит,
                                                                2 слоя Шитрок, шлифование 3 раза черновое, 1 раз
                                                                финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под покраску</span>
                                                            <span class="calc_sp_item_text">(1-й слой шпатлевка
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 3 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под обои</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Выравнивающее шпатлевание и
                                                                шлифование стен под обои</span>
                                                            <span class="calc_sp_item_text">(первый слой шпатлевки
                                                                наносится правилом, 1 слой Ветонит, 2 слоя Шитрок,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под декоративные покрытия</span>
                                                            <span class="calc_sp_item_text">(шпатлевание 3 слоя Ветонит,
                                                                шлифование 2 раза черновое, 1 раз финишное)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                стен под покраску/обои в сан-узлах</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Шпатлевание и шлифование
                                                                оконных откосов</span>
                                                            <span class="calc_sp_item_text">(2-а слоя шпаклевки Ветонит
                                                                VH, сетка малярная, 4-е слоя шпаклевки Семин
                                                                влагостойкая)</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Малярные финишные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3153-1" data-perc="5"></div>
                                                    <div class="calc_table_col3 w-3153-2" data-perc="4"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска потолка</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска торцевых частей
                                                                ГКЛ конструкций</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска молдингов,
                                                                карнизов, плинтусов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска откосов</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">покраска стен</span>
                                                            <span class="calc_sp_item_text">(2-3 слоя)</span>
                                                        </div>


                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Покраска стен</span>
                                                            <span class="calc_sp_item_text">(с помощью
                                                                краскопульта)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев шириной 106
                                                                см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка виниловых обоев
                                                                шириной менее 70 см</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка обоев с
                                                                бордюром</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Поклейка текстильных обоев
                                                                (шелкография)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="calc_table_row">
                                                <div class="calc_table_row_h">
                                                    <div class="calc_table_col1"><span class="active">Финишные
                                                            работы</span></div>
                                                    <div class="calc_table_col2 w-3154-1" data-perc="8"></div>
                                                    <div class="calc_table_col3 w-3154-2" data-perc="3"></div>
                                                </div>

                                                <div class="calc_table_row_spoiler cf" style="display: block;">
                                                    <div class="calc_table_row_spoiler_l">
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс
                                                                "Подключение"</span>
                                                            <span class="calc_sp_item_text">(установка розеток,
                                                                выключателей)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Комплекс "Установка"</span>
                                                            <span class="calc_sp_item_text">(монтаж люстр, точечных
                                                                светильников, бра)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка и подключение
                                                                люстры с креплением к потолку</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Сборка люстр стоимость
                                                                зависит от количества деталей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка точечного,
                                                                галогенового светильника</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка электрического
                                                                полотенцесушителя</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж LED ленты</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка датчика теплого
                                                                пола</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Установка сантехнических
                                                                приборов "под ключ" </span>
                                                            <span class="calc_sp_item_text">(установка ванн, туалетов,
                                                                бидэ, раковин, смесителей, душевых штанг)</span>
                                                        </div>

                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка линолеума</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                    </div>


                                                    <div class="calc_table_row_spoiler_r">



                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Укладка ковролина</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство ламината</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной
                                                                доски</span>
                                                            <span class="calc_sp_item_text">(на подложку плавающим
                                                                способом)</span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж фанеры на
                                                                двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж инженерной доски на
                                                                стяжку через двухкомпонентный клей</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство паркетной доски,
                                                                массива (на фанеру)</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство пластикового
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Устройство деревянного
                                                                плинтуса</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>
                                                        <div class="calc_sp_item">
                                                            <span class="calc_sp_item_title">Монтаж стыковых
                                                                порожков</span>
                                                            <span class="calc_sp_item_text"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </section>
                </div>
            </section>


            <section class="block106 info-block">
                <div class="l-container">
                    <h2>Фотографии наших работ</h2>

                </div>

                <div class="mosaic_gal_wrapper">
                    <div class="mosaic_gal_row mosaic_gal_flex direction-ltr">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/2c34e96d0e83bc867d2aff9accc166fb89bc4f8b.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjJjMzRlOTZkMGU4M2JjODY3ZDJhZmY5YWNjYzE2NmZiODliYzRmOGIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/361a6d29c1ab0f8c03c25a32f2af76b8829b69b8.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjM2MWE2ZDI5YzFhYjBmOGMwM2MyNWEzMmYyYWY3NmI4ODI5YjY5YjguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/034334dee2cbbf8147246f9d9ed4863c6ccc0ed8.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjAzNDMzNGRlZTJjYmJmODE0NzI0NmY5ZDllZDQ4NjNjNmNjYzBlZDguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_line">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/673cb5e3f41457cb5ccca3a6741e91748a4fc5a0.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjY3M2NiNWUzZjQxNDU3Y2I1Y2NjYTNhNjc0MWU5MTc0OGE0ZmM1YTAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/203b5c8ffbbb319a97fe057173e5cbde8e3f0f5a.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjIwM2I1YzhmZmJiYjMxOWE5N2ZlMDU3MTczZTVjYmRlOGUzZjBmNWEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/bf0d0c202a28f4a9a1742300c4491b3505d57110.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImJmMGQwYzIwMmEyOGY0YTlhMTc0MjMwMGM0NDkxYjM1MDVkNTcxMTAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_line">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/a80f603161f7ac6d531c38a0ff97cafd346cf5fe.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImE4MGY2MDMxNjFmN2FjNmQ1MzFjMzhhMGZmOTdjYWZkMzQ2Y2Y1ZmUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/54ba12007f3f7cfeff682a90ae102af46ae681df.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU0YmExMjAwN2YzZjdjZmVmZjY4MmE5MGFlMTAyYWY0NmFlNjgxZGYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/5d546f9913c4d7a5d467478b07e924539fb52647.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVkNTQ2Zjk5MTNjNGQ3YTVkNDY3NDc4YjA3ZTkyNDUzOWZiNTI2NDcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_flex direction-rtl">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/5a85b402d89d81be3d50076cb82111da1c74a5fa.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjVhODViNDAyZDg5ZDgxYmUzZDUwMDc2Y2I4MjExMWRhMWM3NGE1ZmEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/ec4ee02c25115c1596a9ee04512b2e92080293a0.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImVjNGVlMDJjMjUxMTVjMTU5NmE5ZWUwNDUxMmIyZTkyMDgwMjkzYTAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/55cd9b9966e8a44d640548695e7b965bf174bdf9.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjU1Y2Q5Yjk5NjZlOGE0NGQ2NDA1NDg2OTVlN2I5NjViZjE3NGJkZjkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_line">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/66a22382aabfe37d04b5d4d3edf9ea69c79d61fd.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjY2YTIyMzgyYWFiZmUzN2QwNGI1ZDRkM2VkZjllYTY5Yzc5ZDYxZmQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/2aed6da54aef3de46024f892670842e67086424c.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjJhZWQ2ZGE1NGFlZjNkZTQ2MDI0Zjg5MjY3MDg0MmU2NzA4NjQyNGMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/82a58e66bdab50107d3253ad0a3b8230ec90dd08.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjgyYTU4ZTY2YmRhYjUwMTA3ZDMyNTNhZDBhM2I4MjMwZWM5MGRkMDguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_line">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/2e383cabe4b519bc0f7814eeb2716f5cabc77c4a.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjJlMzgzY2FiZTRiNTE5YmMwZjc4MTRlZWIyNzE2ZjVjYWJjNzdjNGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/0d22898a2343b1213a406e19a20c10786b0ec41e.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjBkMjI4OThhMjM0M2IxMjEzYTQwNmUxOWEyMGMxMDc4NmIwZWM0MWUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/21a01333c7af0b3003397050c46cdf6722c96d5f.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjIxYTAxMzMzYzdhZjBiMzAwMzM5NzA1MGM0NmNkZjY3MjJjOTZkNWYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_flex direction-ltr">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/82e4d6d74a375f745688360ae999d54a7b82d2cb.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjgyZTRkNmQ3NGEzNzVmNzQ1Njg4MzYwYWU5OTlkNTRhN2I4MmQyY2IuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/3545736694293a1d1c5fcdfb84861f429111b370.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjM1NDU3MzY2OTQyOTNhMWQxYzVmY2RmYjg0ODYxZjQyOTExMWIzNzAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/d6b31b162b473b52e40589ee2edc6782f48c5eba.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImQ2YjMxYjE2MmI0NzNiNTJlNDA1ODllZTJlZGM2NzgyZjQ4YzVlYmEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_line">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/f242fb39d93cb51e96202665d095dfac3f5ab42d.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImYyNDJmYjM5ZDkzY2I1MWU5NjIwMjY2NWQwOTVkZmFjM2Y1YWI0MmQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/c859d67621b2da261761f33613ee8608ee526d9f.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImM4NTlkNjc2MjFiMmRhMjYxNzYxZjMzNjEzZWU4NjA4ZWU1MjZkOWYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/84d2e0e99560ba23e7a699c73ee3e0a7f188818f.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijg0ZDJlMGU5OTU2MGJhMjNlN2E2OTljNzNlZTNlMGE3ZjE4ODgxOGYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_line">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/a1322e7e09b1c83112bef9e1c752df4a60b0b78f.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImExMzIyZTdlMDliMWM4MzExMmJlZjllMWM3NTJkZjRhNjBiMGI3OGYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/8950cc08d3e9fa975e6ab4203fed14d6dd9cbe87.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6Ijg5NTBjYzA4ZDNlOWZhOTc1ZTZhYjQyMDNmZWQxNGQ2ZGQ5Y2JlODcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/3b5a0e6d36cf3914d8ff4da320720347e05959a9.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjNiNWEwZTZkMzZjZjM5MTRkOGZmNGRhMzIwNzIwMzQ3ZTA1OTU5YTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mosaic_gal_row mosaic_gal_flex direction-rtl">
                        <div class="mosaic_item h1 1">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/12f94423c34321429043077b865e647acc610a40.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjEyZjk0NDIzYzM0MzIxNDI5MDQzMDc3Yjg2NWU2NDdhY2M2MTBhNDAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 2">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/9b80758d45a9ff424e7e184737e3cf1122ad5e77.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6IjliODA3NThkNDVhOWZmNDI0ZTdlMTg0NzM3ZTNjZjExMjJhZDVlNzcuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                        <div class="mosaic_item h1 3">
                            <a data-fancybox="gallary"
                                href="https://remcraft.s3.eu-central-1.amazonaws.com/b0f73ab585d0c44c6850032d728b3abb85e1bf96.jpg">
                                <img class="lazy"
                                    data-src="https://d23x4egmal4dcq.cloudfront.net/eyJidWNrZXQiOiJyZW1jcmFmdCIsImtleSI6ImIwZjczYWI1ODVkMGM0NGM2ODUwMDMyZDcyOGIzYWJiODVlMWJmOTYuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7ImZpdCI6ImNvdmVyIiwid2lkdGgiOjgwMCwiaGVpZ2h0Ijo1MzV9fX0="
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </section>
{/block}',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '/',
    'headers' => 'a:0:{}',
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[pthumb?debug=``&input=`assets/template/img/slide/11.jpg`&options=`&q=95&bg=ffffff&`&pdoTools=`31d99878d659c9eee27e4a97b181f66f`]]' => '/assets/components/phpthumbof/cache/11.26e6b5327d83532fb23f09d6daaff252.jpg',
    '[[pthumb?debug=``&input=`assets/template/img/slide/1.jpg`&options=`&q=95&bg=ffffff&`&pdoTools=`f281842811ad2302a3cf688c1f730e53`]]' => '/assets/components/phpthumbof/cache/1.26e6b5327d83532fb23f09d6daaff252.jpg',
    '[[pthumb?debug=``&input=`assets/template/img/slide/22.jpg`&options=`&q=95&bg=ffffff&`&pdoTools=`a010fb96ecb0c10afd61fc40255cd1aa`]]' => '/assets/components/phpthumbof/cache/22.26e6b5327d83532fb23f09d6daaff252.jpg',
    '[[pthumb?debug=``&input=`assets/template/img/slide/2.jpg`&options=`&q=95&bg=ffffff&`&pdoTools=`0b8bf13b168cd0a23166a78eed49c06a`]]' => '/assets/components/phpthumbof/cache/2.26e6b5327d83532fb23f09d6daaff252.jpg',
    '[[pthumb?debug=``&input=`assets/template/img/slide/33.jpg`&options=`&q=95&bg=ffffff&`&pdoTools=`d80e5075669a1dcf6654d494c07b5639`]]' => '/assets/components/phpthumbof/cache/33.26e6b5327d83532fb23f09d6daaff252.jpg',
    '[[pthumb?debug=``&input=`assets/template/img/slide/3.jpg`&options=`&q=95&bg=ffffff&`&pdoTools=`50059926af2b69b73cd8845e4569bd3d`]]' => '/assets/components/phpthumbof/cache/3.26e6b5327d83532fb23f09d6daaff252.jpg',
    '[[pthumb?debug=``&input=`assets/template/img/medal/1.png`&options=`&q=95&bg=ffffff&`&pdoTools=`118759da791e6dfc68be854deb7b98be`]]' => '/assets/components/phpthumbof/cache/1.aa75a81ce46ba5eda60ca880b6c50045.png',
    '[[pthumb?debug=``&input=`assets/template/img/medal/2.png`&options=`&q=95&bg=ffffff&`&pdoTools=`8dd55fbfde1c594862135e2e1c2a214d`]]' => '/assets/components/phpthumbof/cache/2.aa75a81ce46ba5eda60ca880b6c50045.png',
    '[[pthumb?debug=``&input=`assets/template/img/medal/3.png`&options=`&q=95&bg=ffffff&`&pdoTools=`f28c776317ca0e5e0de32501e32e67e4`]]' => '/assets/components/phpthumbof/cache/3.aa75a81ce46ba5eda60ca880b6c50045.png',
    '[[pthumb?debug=``&input=`assets/template/img/medal/4.png`&options=`&q=95&bg=ffffff&`&pdoTools=`5d2535f9e06f6510ae4583acf34f8d96`]]' => '/assets/components/phpthumbof/cache/4.aa75a81ce46ba5eda60ca880b6c50045.png',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);