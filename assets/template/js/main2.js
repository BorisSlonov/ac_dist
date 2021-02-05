$(document).ready(function(){
	
	function sayHi() {
	    $('.popupur').fadeIn();
		$(".popupur iframe").css( "height", "800px" );
		return false;
	}

	setTimeout(sayHi, 15000);

	// Клик по ссылке "Закрыть".
	$('.popupur div').click(function() {
		$(this).parents('.popupur').fadeOut();
		return false;
	});  
	
	$('#popup__toggle').click(function() {
		$('.popupur').fadeIn();
		$(".popupur iframe").css( "height", "800px" );
		return false;
	});

	$('#popup__toggle1').click(function() {
		$('.popupur').fadeIn();
		$(".popupur iframe").css( "height", "800px" );
		return false;
	});
	
	$('#popup__toggle2').click(function() {
		$("#request2").css( "opacity", "1" );
	});
	
	

    $('.block-quality').each(function(){
        var d1 = $(this).find('div:eq(0)');
        var d2 = $(this).find('div:eq(1)');
        var box = $(this).find('.coplex_gallary_box');

        console.log(d1);

        box.find('.coplex_gal_box_title').html(d1.html());
        box.find('.cgb_left').append('<div class="cgb_left_caption">'+d2.html()+'</div>');

        d1.html('');
        d2.html('');
    });

    $('.change-stage').click(function(e){
        var _id = $(this).index();

        var id = $(this).data('id');
        $(this).parent().find('button').removeClass('active');
        $(this).parent().find('.depend_block_desc_item_text').removeClass('d-active');
        $(this).addClass('active');
        $(this).parent().find('.depend_block_desc_item_text[data-id='+id+']').addClass('d-active');

        $(this).closest('.gallery-wr').find('.owl-carousel');

    });

    $('.change-stage a').on('click', function() {
        location.href = this.href;
    });

    $('.edit-block').dblclick(function(){
        $.ajax({
            url: '/ajax/edit',
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                $.fancybox.open({
                    'src' : '#edit-block-modal'
                });

                $('#edit-block-modal').find('.modal-body').html(response.html);
            }
        });
    });


    $('.show_portfolio').click(function(e){
        e.preventDefault();

        var $id = $(this).data('id');

        $.fancybox.open({
            src: '#portfolio-modal-'+$id,
            smallBtn: false,
            buttons: false,
            touch: false,
            baseClass: 'dark-overlay',
            scrolling: 'no',
            iframe: {scrolling: 'no'},
            helpers: {
                overlay: { locked: false }
            },
            beforeShow: function(e, m) {

                $(this).scrollTop(0);
                //var el = document.querySelector('#portfolio-modal-'+$id);
                var el = document.querySelector('.gallary_pp');
                console.log(el.scrollTop);
                $('.gallary_pp').animate({scrollTop: 0 }, 'slow');

                function OffScroll () {
                    var winScrollTop = $(this).scrollTop();
                    if(winScrollTop >600){
                        // $(window).bind('scroll',function () {
                        //     $(this).scrollTop(winScrollTop);
                        // });
                        //$(window).unbind('scroll');
                        // $(this).scrollTop(600);
                    }else{

                    }
                }




                setTimeout(function(e) {

                    $('.fancybox-container .g_pp_center').on('touchstart', function (e) {
                        e.stopPropagation();
                    });
                    // e.preventDefault();
                    // m.$slide.find('.g_pp_left .th_list, .g_pp_right .pp_menu').jScrollPane({
                    //     showArrows: false,
                    //     autoReinitialise: true
                    // });
                    m.$slide.find('.g_pp_left').jScrollPane({
                        showArrows: true,
                        autoReinitialise: true,
                        horizontalGutter: 30,
                        horizontalDragMaxWidth: 100
                    });

                    // var centerHeight = $('.g_pp_center').outerHeight();
                    // var infoMobileheight = $('#pp_info_mobile').innerHeight();
                    // var wrapHeight = $('.gallary_pp_wrap').outerHeight();
                    // var onePercentHeight = wrapHeight/100;
                    // var leftBlockheight;
                    //
                    // if( $(window).outerWidth() < 767 && $(window).outerWidth() > 474 ){
                    //     leftBlockheight = (centerHeight+infoMobileheight+12)/onePercentHeight;
                    // }else if($(window).outerWidth() < 767 && $(window).outerWidth() < 474){
                    //     console.log('load title');
                    //     leftBlockheight = (centerHeight+infoMobileheight+12)/onePercentHeight;
                    // }
                    // else{
                    //     leftBlockheight = (centerHeight)/onePercentHeight;
                    // }
                    // $('.g_pp_left').each(function(){
                    //     var left_h =  $(this).find('.th_l_item:eq(0)').outerHeight();
                    //     var left_container =  $('.th_l_item').parents('.jspContainer');
                    // });

                }, 300);
            },
            beforeClose: function(e, m) {
                // m.$slide.find('.g_pp_left .th_list, .g_pp_right .pp_menu').each(function() {
                //     var jsp = $(this).data('jsp');
                //     jsp && jsp.destroy();
                // });
                m.$slide.find('.g_pp_left').each(function() {
                    var jsp = $(this).data('jsp');
                    jsp && jsp.destroy();
                });
            }
        });
        window.scrollTo(0, 20);

        //$('.gallery-full-'+$id).addClass('show');
    });







    /* jenia*/
    $('.pp_menu_item').click(function(){
        console.log('pp_menu_item click');

        var $type = $(this).data('type');
        if($(window).outerWidth() > 474){
            $(this).parents('.pp_menu').find('.pp_menu_item').removeClass('active');
            $(this).addClass('active');

            $(this).parents('.gallary_pp').find('.gallary_pp_block').hide();
            $(this).parents('.gallary_pp').find('.gallary-block-'+$type).show();
        }



        // $(window).trigger('resize.pp-modal');
    });

    $('.open-calc').click(function(){

        var _id = $('.ch_trigger.active').data('id');
        $('.calc-modal-blocks').hide();
        $('#calc-modal-block-'+_id).show();
        console.log('#calc-modal-block-'+_id);
        $.fancybox.open({
            'src' : '#calc-modal'
        });
    });

    $('.pl_stages_list_item').click(function(){
        var id = $(this).data('id');

        $(window).scrollTop($('.price-block-'+id).scrollTop());
    });

    $('.table-block--toggle').on('click', function(e) {
        e.preventDefault();
        $(this).closest('table').find('.table--content').toggle();
    });

    // МОДАЛЬНОЕ ОКНО С ЮТЮБ ВИДЕО ПО НАЖАТИЮ НА ЯЧЕЙКУ ВИДЕО БЛОКА
    $('.go_modal').magnificPopup({
        mainClass: 'mfp-zoom-out',
        removalDelay: 500
    });

    $('.go_modal_video').magnificPopup({type: 'iframe', mainClass: 'mfp-zoom-out'});

});

// window.onload = function() {
//
//     var url = "/ajax/main/instagram";
//
//     $.ajax({
//         url: url,
//         type: 'POST',
//         dataType: 'json',
//         success: function (html) {
//
//             console.log(html);
//             // loadInfo(false);
//             // $("#instagram-block").html(html);
// //                    $('html #flag_phone').mask("+380(99)999-99-99");
//             //cb();
//         }
//     });
// };