<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 44,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Калькулятор окон',
    'longtitle' => '',
    'description' => '',
    'alias' => 'kalkulyator-okon',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<div class="page_wrapper">
            <center><iframe class="construc3" src="assets/template/okno" style="height:1450px !important;"
                    width="980" height="1450" frameborder="0" scrolling="no" allowtransparency></iframe></center>
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
        </div>',
    'richtext' => 0,
    'template' => 21,
    'menuindex' => 16,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1609239387,
    'editedby' => 1,
    'editedon' => 1609243839,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1609239360,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'kalkulyator-okon/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html class="no-js" lang="en">
    <meta charset="utf-8">
    <base href="{\'site_url\' | config}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$_modx->config.site_name}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/template/css/normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/template/css/owl.theme.css" />
    <link rel="stylesheet" href="assets/template/css/owl.transitions.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="assets/template/css/jquery.fancybox-themes.css" />
    <link rel="stylesheet" href="assets/template/css/jquery.jscrollpane.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/template/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{\'!fileCashFix\' | snippet : [\'input\' => \'assets/template/css/animationcall.css\']}">
    <link rel="stylesheet" type="text/css" href="{\'!fileCashFix\' | snippet : [\'input\' => \'assets/template/css/comment.css\']}" />
    <link rel="stylesheet" type="text/css" href="{\'!fileCashFix\' | snippet : [\'input\' => \'assets/template/css/bootstrap-grid.min.css\']}">
    <link href="assets/template/css/custom.css" rel="stylesheet">
    <script>document.addEventListener("DOMContentLoaded", function () { Marquiz.init({ host: \'//quiz.marquiz.ru\', id: \'5f6dab731128100044ec688a\', autoOpen: 10, autoOpenFreq: \'once\', openOnExit: true }); });</script>
</head>
<body>
    <div id="gal-block-top"></div>
    <div id="popup_container"></div>
    {include "popups"}
    {include "header"}
    <div class="page_wrapper">
    {$_modx->resource.content}
    </div>
    {include "footer"}
<!-- js -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
<script type=\'text/javascript\' src="assets/template/js/slick.min.js"></script>
<script type=\'text/javascript\' src="assets/template/js/fancySelect.js"></script>
<script type=\'text/javascript\' src="assets/template/js/misc.js"></script>
<script type=\'text/javascript\' src="{\'!fileCashFix\' | snippet : [\'input\' => \'assets/template/js/sliders.js\']}"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
<script src="assets/template/js/owl.carousel2.thumbs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="assets/template/js/jquery.inputmask.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sly/1.6.1/sly.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.2.1/script/jquery.jscrollpane.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>
<script src="assets/template/js/forms.js"></script>
<script src="assets/template/js/custom-file-input.js"></script>
<script src="assets/template/js/main.js"></script>
<script src="assets/template/js/main2.js"></script>
<script type="application/javascript">
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });
</script>
<script type=\'text/javascript\'>
    window.BTURI = "https://reconstruction.bold-themes.com/company/wp-content/themes/reconstruction";
    window.BTAJAXURL = "https://reconstruction.bold-themes.com/company/wp-admin/admin-ajax.php";
    window.bt_text = [];
    window.bt_text.previous = \'Предыдущий\';
    window.bt_text.next = \'Следующий\';
</script>
<script src="assets/template/js/theme.js"></script>
<script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
<!-- Marquiz script start -->
<script>
    (function (w, d, s, o) {
        if (!window.__marquiz) window.__marquiz = [];
        window.marquiz = function () { window.Marquiz ? Marquiz.add(arguments) : window.__marquiz.push(arguments) }
        var j = d.createElement(s); j.async = true; j.src = \'//script.marquiz.ru/v2.js\'; j.onload = function () {
            if (document.readyState !== \'loading\') Marquiz.init(o);
            else document.addEventListener("DOMContentLoaded", function () {
                Marquiz.init(o);
            });
        };
        d.head.insertBefore(j, d.head.firstElementChild);
    })(window, document, \'script\', {
        host: \'//quiz.marquiz.ru\',
        id: \'5f6dab731128100044ec688a\',
        autoOpen: false,
        autoOpenFreq: \'once\',
        openOnExit: false,
        disableOnMobile: false
    }
    );
</script>
<script>
    (function (w, d, u) {
        var s = d.createElement(\'script\');
        s.async = true;
        s.src = u + \'?\' + (Date.now() / 60000 | 0);
        var h = d.getElementsByTagName(\'script\')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, \'https://cdn-ru.bitrix24.ru/b2128711/crm/tag/call.tracker.js\');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
        m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(69275725, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
<div><img src="https://mc.yandex.ru/watch/69275725" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
</body>
</html>',
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