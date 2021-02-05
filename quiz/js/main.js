/*Данный шаблон был приобретён на сайте Landistore.com*/
/*Landistore - интернет-магазин качественных сайтов для вашего бизнеса*/
/*(с) Все права защищены*/
$(document).ready(function(){

    $("form").submit(function () {
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: 'mail.php',
            data: formNm.serialize(),
            success: function (data) {
                $('.modal').modal('hide');
                $('body').css('padding-right','0');
                $('#modal-thank').modal('show');
            },
            error: function (jqXHR, text, error) {
                $(formNm).html(error);
            }
        });
        return false;
    });
    jQuery(function($){
        $(".phone-mask").mask("+7 (999) 999-99-99");
    });
    $(".animate-scroll").click(function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top }, 1500);
    });

    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            margin:30,
            loop:false,
            items:3,
            responsive : {
                0 : {
                  items:1
                },
                560 : {
                    items:2
                },
                768 : {
                    items:3
                }
            }
        });
    });

    $(".next-step, .prev-step").click(function (event) {
        event.preventDefault();
        var id  = $('#wizard'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top }, 1500);
    });
});


$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });
    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}