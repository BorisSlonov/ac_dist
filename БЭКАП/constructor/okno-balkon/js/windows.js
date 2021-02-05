$(document).ready(function(){

    function setNewHeader(){
        $('#header .logo img').attr('src', 'fileadmin/templates/pn/images/logo_new.png')
        $('#header .logo span').html('производитель <br />окон ПВХ с 2002 г.')
        $('#header>.top_nav .toplink1>a').text('Онлайн калькулятор');
        $('#header>.top_nav .toplink1>span').text('Онлайн калькулятор');
        $('#header>.top_nav .toplink2>a').text('Вам перезвонить?').attr({href: '#',id: 'phone_zvonok_link_new'}).removeAttr('onclick');
    }
    setNewHeader();

    function setReviews(){
        $('.reviews>.header-h3').text('Отзывы покупателей')
        $('.reviews').append('<a class="orangeBtn">Оставить отзыв</a>');
        $('.reviews .post-item').each(function(index, el) {
            $(el).find('>div, >span').wrapAll('<div class="left">');
        });
    }
    setReviews();


    function setAltForSliders(){
        $('.sliders .gallery_holder li img').each(function(index, el) {
            var ttl = $(el).attr('title');
            if( ttl != '' ){
                $(el).attr('alt', ttl);
            }
        });
    }

    setAltForSliders();


    function validator(val){
        var reg = /\+7\([0-9]{3}\)[0-9]{3}\-[0-9]{2}\-[0-9]{2}/
        return val.match(reg);
    }

    $('body').on('click', '#sub', function(event) {
        event.preventDefault();
        $(this).attr('disabled', true);
        var form = $('form#calc-form');
        var error = false;

        el = $('input[name="tx_tdb_pi1[phone]"]', form);
        if ($.trim(el.val()) == '') {
            alert('Необходимо указать телефон, на который Вам можно перезвонить');
            el.focus();
            error = true;
        }
        if (!validator(el.val())) {
            alert('Не правильно указан номера телефона. Введите правильный, пожалуйста');
            el.focus();
            error = true;
        }

        console.log(error);
        if( !error ){
            $.ajax({
               type: 'POST',
               url: form.attr("action"),
               dataType: 'JSON',
               data: form.serialize(),
               success: function(response){
                   if(response && response.success && response.success == true){
                       alert('Сообщение успешно отправлено');
                   } else {
                       alert('Не удалось отправить сообщение');
                   }
               }
            });
            return false;
            //$(form).submit();
        }

    });


    function configurator(type){
        var item = $('.screen .inner .left .block .img');
        $(item).attr("class", "img").addClass(type);

    }

    function startConf(){
        var type = $('input[name="tx_tdb_pi1[windowType]"]:checked').val();
        configurator( type );
    }


    $('body').on('change', 'input[name="tx_tdb_pi1[windowType]"]', function(event) {
        startConf();
    });

    startConf();


    $(".phone").inputmask("+7(999)999-99-99");
    $('input.sizes').inputmask({
        "mask": "9",
        "repeat": 6,
        "greedy": false
    }).on('keypress, click, mouseover', function(event) {
        $('input.sizes').removeClass('active');

        var fr = $(this).attr('for');
        $('.ei').removeClass('show')
        $('.ei.'+fr).addClass('show')
        $(this).addClass('active');
        $(this).focus();

        $('input.sizes').each(function(index, el) {
            $(el).attr('placeholder', 'в мм');
            if( $(el).val() != '' ){
                $(el).addClass('active');
                var fr2 = $(el).attr('for');
                $('.ei.'+fr2).addClass('show');
            }
        });
        $(this).attr('placeholder', '');
    });



})