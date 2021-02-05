$(document).ready(function(){
	$('.сol5 li').click(function(){
		$('.сol5 li').removeClass('act');
		$(this).addClass('act');
		
		$('#ugolGet').val($(this).attr('data-ts'));
		
		calk();
		
		$t = $(this).attr('data-t');
		$('.cs-nal, .cs-nal-r').hide();
		$('.'+$t).show();
		
	
    })	
	
    $( function() {
        $( "#slider-range-min" ).slider({
            range:100,
            value: 1300,
            min: 800,
            max: 3000,
            step: 100,
            slide: function( event, ui ) {
                $( "#amount" ).val(ui.value );
            }
        });
        $( "#amount" ).val($( "#slider-range-min" ).slider( "value" ) );
    } );
    $( function() {
        $( "#slider-vertical" ).slider({
            orientation: "vertical",
            range: 100,
            min: 800,
            max: 3000,
            value: 1400,
            step: 100,
            slide: function( event, ui ) {
                $( "#amount1" ).val( ui.value );
            }
        });
        $( "#amount1" ).val( $( "#slider-vertical" ).slider( "value" ) );
		calk();
    } );
    $('.b1').click(function(){
        $('.ok1').show();
        $('.ok2').hide();
        $('.ok3').hide();
        $('.ok4').hide();
        $('.b2').removeClass('acti');
        $('.b3').removeClass('acti');
        $('.b4').removeClass('acti');
		$('.wall-style').css('height','460px');
        $(this).addClass('acti');
		reset();
        $( function() {
            $( "#slider-range-min" ).slider({
                range: "min",
                value: 1300,
                min: 800,
                max: 3000,
                step: 100,
                slide: function( event, ui ) {
                    $( "#amount" ).val(ui.value );
                }
            });
            $( "#amount" ).val($( "#slider-range-min" ).slider( "value" ) );
        } );
        $( function() {
            $( "#slider-vertical" ).slider({
                orientation: "vertical",
                range: 100,
                min: 800,
                max: 3000,
                value: 1400,
                step: 100,
                slide: function( event, ui ) {
                    $( "#amount1" ).val( ui.value );
                }
            });
            $( "#amount1" ).val( $( "#slider-vertical" ).slider( "value" ) );
        } );
		calk();
    }) 
    $('.b2').click(function(){
        $('.ok2').show();
        $('.ok1').hide();
        $('.ok3').hide();
        $('.ok4').hide();
        $('.b1').removeClass('acti');
        $('.b3').removeClass('acti');
        $('.b4').removeClass('acti');
		$('.wall-style').css('height','460px');
        $(this).addClass('acti');
reset();
        $( function() {
            $( "#slider-range-min" ).slider({
                range: "min",
                value: 2100,
                min: 800,
                max: 3000,
                step: 100,
                slide: function( event, ui ) {
                    $( "#amount" ).val(ui.value );
                }
            });
            $( "#amount" ).val($( "#slider-range-min" ).slider( "value" ) );
        } );
        $( function() {
            $( "#slider-vertical" ).slider({
                orientation: "vertical",
                range: 100,
                min: 800,
                max: 3000,
                value: 1400,
                step: 100,
                slide: function( event, ui ) {
                    $( "#amount1" ).val( ui.value );
                }
            });
            $( "#amount1" ).val( $( "#slider-vertical" ).slider( "value" ) );
			calk();
        } );
    })
    $('.b3').click(function(){
        $('.ok3').show();
        $('.ok2').hide();
        $('.ok1').hide();
        $('.ok4').hide();
        $('.b2').removeClass('acti');
        $('.b1').removeClass('acti');
        $('.b4').removeClass('acti');
		$('.wall-style').css('height','460px');
        $(this).addClass('acti');
reset();
        $( function() {
            $( "#slider-range-min" ).slider({
                range: "min",
                value: 2100,
                min: 800,
                max: 3000,
                step: 100,
                slide: function( event, ui ) {
                    $( "#amount" ).val(ui.value );
                }
            });
            $( "#amount" ).val($( "#slider-range-min" ).slider( "value" ) );
        } );
        $( function() {
            $( "#slider-vertical" ).slider({
                orientation: "vertical",
                range: 100,
                min: 800,
                max: 3000,
                value: 2100,
                step: 100,
                slide: function( event, ui ) {
                    $( "#amount1" ).val( ui.value );
                }
            });
            $( "#amount1" ).val( $( "#slider-vertical" ).slider( "value" ) );
			calk();
        } );
    })
    $('.b4').click(function(){
        $('.ok4').show();
        $('.ok2').hide();
        $('.ok3').hide();
        $('.ok1').hide();
        $('.b2').removeClass('acti');
        $('.b3').removeClass('acti');
        $('.b1').removeClass('acti');
        $(this).addClass('acti');
		$('.wall-style').css('height','444px');
		
reset();
        $( function() {
            $( "#slider-range-min" ).slider({
                range: "min",
                value: 800,
                min: 800,
                max: 3000,
                step: 100,
                slide: function( event, ui ) {
                    $( "#amount" ).val(ui.value );
                }
            });
            $( "#amount" ).val($( "#slider-range-min" ).slider( "value" ) );
			
        } );
        $( function() {
            $( "#slider-vertical" ).slider({
                orientation: "vertical",
                range: 100,
                min: 800,
                max: 3000,
                value: 2100,
                step: 100,
                slide: function( event, ui ) {
                    $( "#amount1" ).val( ui.value );
                }
            });
            $( "#amount1" ).val( $( "#slider-vertical" ).slider( "value" ) );
			calk();
        } );
    })
	$('.container').change(function(){
		calk();
	})
	$("#slider-range-min").slider({
  stop: function( event, ui ) {
	  calk();
  }
})
$("#slider-vertical").slider({
  stop: function( event, ui ) {
	  calk();
  }
})
	    $('.col1 li').click(function(){
        $('.col1 li').removeClass('act');
        $(this).addClass('act');
		calk();
		
    }) 
	$('.col2 li').click(function(){
        $('.col2 li').removeClass('act');
        $(this).addClass('act');
		
		
    })
	$('.col3 li').click(function(){
        $('.col3 li').removeClass('act');
        $(this).addClass('act');
		
		$('#podPriceSave').val($(this).attr('data-price'));
		
    })
	$('.col4 li').click(function(){
        $('.col4 li').removeClass('act');
        $(this).addClass('act');
	 })


	function reset(){
		$('.col1 li').removeClass('act');
		$('.col2 li').removeClass('act');
		$('.col3 li').removeClass('act');
		$('.col4 li').removeClass('act');

	}

    $('#mail').click(function(){
        $('#popup').show();
		
    })
    $('.close').click(function(){
        $('#popup').hide();
    })
	
	
	

	
})

function roundPlus(x, n) { 
  if(isNaN(x) || isNaN(n)) return false;
  var m = Math.pow(10,n);
  return Math.round(x*m)/m;
}


$(document).ready(function(){
	$('.col1 li').click(function(){
		$img = $(this).attr('data-img');
		
		$url1="images/1/"+$img+'.png';
		$url2="images/2/"+$img+'.png';
		$url3="images/3/"+$img+'.png';
		$url4="images/4/"+$img+'.png';
		
		$('.cso1 .cs-otk').attr('src', $url1);
		$('.cso2 .cs-otk').attr('src', $url2);
		$('.cso3 .cs-otk').attr('src', $url3);
		$('.cso4 .cs-otk').attr('src', $url4);
		
		$('#sendGet').val($(this).attr('data-ts'));
		
		$('#otkColor').val($(this).text())
		calk();
		
    })	
	
	$('.col2 li').click(function(){
		$img = $(this).attr('data-img');
		
		$url1="images/1/"+$img+'.png';
		$url2="images/2/"+$img+'.png';
		$url3="images/3/"+$img+'.png';
		$url4="images/4/"+$img+'.png';
		
		$url1r="images/1/r/"+$img+'.png';
		$url2r="images/2/r/"+$img+'.png';
		$url3r="images/3/r/"+$img+'.png';
		$url4r="images/4/r/"+$img+'.png';
		
		$('.cso1 .cs-nal').attr('src', $url1);
		$('.cso2 .cs-nal').attr('src', $url2);
		$('.cso3 .cs-nal').attr('src', $url3);
		$('.cso4 .cs-nal').attr('src', $url4);
		
		$('.cso1 .cs-nal-r').attr('src', $url1r);
		$('.cso2 .cs-nal-r').attr('src', $url2r);
		$('.cso3 .cs-nal-r').attr('src', $url3r);
		$('.cso4 .cs-nal-r').attr('src', $url4r);
		
		
    })	
	
	$('.col3 li').click(function(){
		$img = $(this).attr('data-img');
		
		$url1="images/1/"+$img+'.png';
		$url2="images/2/"+$img+'.png';
		$url3="images/3/"+$img+'.png';
		$url4="images/4/"+$img+'.png';
		
		$url5="images/3/por/"+$img+'.png';
		
		$('.cso1 .cs-pod').attr('src', $url1);
		$('.cso2 .cs-pod').attr('src', $url2);
		$('.cso3 .cs-pod').attr('src', $url3);
		$('.cso4 .cs-pod').attr('src', $url4);
		
		
		$('.cso3 .cs-por').attr('src', $url5);
		
		
		
		$('#podGet').val($(this).attr('data-ts'));
		
		$('.pod-name-type').text($(this).text())
		calk();
		
		
    })	
	
	$('.col4 li').click(function(){
		$img = $(this).attr('data-img');
		
		$url1="images/1/"+$img+'.png';
		$url2="images/2/"+$img+'.png';
		$url3="images/3/"+$img+'.png';
		$url4="images/4/"+$img+'.png';
		
		$('.cso1 .cs-okn').attr('src', $url1);
		$('.cso2 .cs-okn').attr('src', $url2);
		$('.cso3 .cs-okn').attr('src', $url3);
		$('.cso4 .cs-okn').attr('src', $url4);
		
    })	
	
	$('.js-cso').click(function(){
		$cso = $(this).attr('data-cso');
		$('.cso').hide();
		$('.'+$cso).show()
		
		
    })	
	

	
	
	
	$("#order-btn").click(function(){
		$('.send-gif').fadeIn('100');
		$('#popup').hide();
		$('.header-ico.send-ico').hide();
		$('html, body').animate({scrollTop: 0});
			   setTimeout(function () {  
			   
			// используем скрипт для работы с canvas
				html2canvas(constrBody, {
					onrendered: function(canvas) {
						// в скрытый input с классом 'screen-uri' добавляем запись вида "data:image/png;base64,iVBORw0KGgoAA..."
						// чтобы получить картинку нужно в PHP скрипте-обработчике отсечь из этой строки "data:image/png;base64,",
						// а остальную строку сохранить в файл с расширением PNG. И у нас будет скриншот экрана в файле ))
						$('.screen-uri').val(canvas.toDataURL("image/png"));


		
						var i = $(".screen-uri").val();
						var e = $("#email").val();
						var t = $("#phone").val();
						var n = $("#name").val();
						
						var data = {
							screenshot: i,
							phone: t,
							email: e,
							name: n
						};
						
						$.post(
							"mail.php",
							data,
							onSuccess,
							'text'
						);	
						
					}
				});
			
			}, 1000);  
			
			});
			function onSuccess(data){$('.ajaxOut').html(data);$('.send-gif').fadeOut('100');}
			
			
		$("#save-btn").click(function(){
			$('.send-gif').fadeIn('100');
			$('html, body').animate({scrollTop: 0});
			   setTimeout(function () {  
			   
			// используем скрипт для работы с canvas

				html2canvas(constrBody, {
					onrendered: function(canvas) {
						// в скрытый input с классом 'screen-uri' добавляем запись вида "data:image/png;base64,iVBORw0KGgoAA..."
						// чтобы получить картинку нужно в PHP скрипте-обработчике отсечь из этой строки "data:image/png;base64,",
						// а остальную строку сохранить в файл с расширением PNG. И у нас будет скриншот экрана в файле ))
						$('.screen-uri').val(canvas.toDataURL("image/png"));


		
						var i = $(".screen-uri").val();
						
						
						var data = {
							screenshot: i
						};
						
						$.post(
							"save.php",
							data,
							onSuccess1,
							'text'
						);	
						
					}
				});
				}, 1000);  	
			});
			function onSuccess1(data){$('#out-link').attr('href',data);
			var link = document.createElement('a');
			link.setAttribute('href',data);
			link.setAttribute('download','download');
			link.click();
			$('.send-gif').fadeOut('100');
			}


	$('.prew span img').click(function(){
		$('#win-with-porog').val($(this).attr('data-porog'));
			
	})
})











	function calk(){
		
		var a=$("#amount").val();//ширина проема
		var b=$("#amount1").val();//высота проема
		var c=$("#glubina").val();//глубина откоса
		var shirina=a/1000;//ширина проема м
		var visota=b/1000;//высота проема м
		var glubina=c/1000;//глубина откоса м
        if ($("#kol_vo").val()!=""){
            var kol_vo=$("#kol_vo").val();//количество проемов
        }
        else{
            var kol_vo=1;//количество проемов
        }
        
		var area=(shirina+visota*2)*glubina*kol_vo;//площадь сендвича
		var price_send_white=100;//цена белого сендвича
		var price_send_wood=120;//цена ламинированного сендвича
        var send_raz=glubina*shirina;//размер сендвич панели(гор.)
        var send1_raz=glubina*visota;//размер сендвич панели(верт.)
        var send_kol=kol_vo;//вывод поштучно сендвич панели
        var send1_kol=kol_vo*2;//вывод поштучно сендвич панели
		var otkColor = $('#otkColor').val();//название ламинации
		if($('.col1 li.a3').hasClass('act')||$('.col1 li.a4').hasClass('act')){
				var price_send=area*price_send_wood;//стоимость ламинированного сендвича
				$('.senner').html('ламинированный '+otkColor);//тип сендвич панели
				$('.send td.buy').html(price_send_wood);//вывод цены
                $('.send1 td.buy').html(price_send_wood);//вывод цены
				var send_kol_it=send_kol*send_raz*price_send_wood;//итого за сендвич панели расчет
            var send1_kol_it=send1_kol*send1_raz*price_send_wood;//итого за сендвич панели расчет
		}
		else{
			var price_send=area*price_send_white;//стоимость белого сендвича
			$('.senner').html('белый');//тип сендвич панели
			$('.send td.buy').html(price_send_white);//вывод цены
            $('.send1 td.buy').html(price_send_white);//вывод цены
            var send_kol_it=send_kol*send_raz*price_send_white;//итого за сендвич панели расчет
            var send1_kol_it=send1_kol*send1_raz*price_send_white;//итого за сендвич панели расчет
		}
		
		
		//Вывод сендвича
		var sendGet=$("#sendGet").val();
		if (sendGet==0){
			var price_send = 0;
			
			$('.send').hide();
			$('.send1').hide();
			
			$('.pena').hide();
			$('.germ').hide();
			$('.gvozdi').hide();
			
			var price_pena=0;//цена пены
			var price_germ=0;//цена герметика
			var price_gvozdi=0;//цена жидких гвоздей
		
		}
		else{
			$('.send').show();
			$('.send1').show();
			
			$('.pena').show();
			$('.germ').show();
			$('.gvozdi').show();
			
			var price_pena=50;//цена пены
			var price_germ=120;//цена герметика
			var price_gvozdi=150;//цена жидких гвоздей
		
		}
		
		
		
		
		var price_ugl=100;//цена уголков
		var price_P=100;//цена п
		var price_F=100;//цена f
		var price_R=120;//цена ревика
		
		
		var price_pod=$('#podPriceSave').val();//цена подоконника
		var price_klin=100;//цена монтажного клина
		var price_zagl=50;//цена заглушки

		
		var summ_pena=Math.ceil(area*0.4)*price_pena;//стоимость монтажной пены
		var summ_germ=Math.ceil(kol_vo*0.3)*price_germ;//стоимость герметика
		var summ_gvozdi=Math.ceil(kol_vo*0.4)*price_gvozdi;//стоимость жидких гвоздей
		
		//Уголки
		var summ_ugl=kol_vo*(Math.ceil((shirina+0.12+visota*2+0.06)/3)*3)*price_ugl;//стоимость уголков 
		var summ_F=kol_vo*(Math.ceil((shirina+0.12+visota*2+0.06)/3)*3)*price_F;//стоимость F 
		var summ_P=kol_vo*(Math.ceil((shirina+0.12+visota*2+0.06)/3)*3)*price_P;//стоимость П
		var summ_R=kol_vo*(Math.ceil((shirina+0.12+visota*2+0.06)/3)*3)*price_R;//стоимость ревика
		
		var ugolGet=$("#ugolGet").val();
		if (ugolGet==0){
			var ugolTotal = 0;
			
			$('.ugl').hide();
			$('.fprof').hide();
			$('.pprof').hide();
			$('.revik-tab').hide();
		}
		if (ugolGet==1){
			//var ugolTotal = summ_ugl + summ_P;
			var ugolTotal = summ_ugl;
			$('.ugl').show();
			$('.fprof').hide();
			$('.pprof').hide();
			$('.revik-tab').hide();
		}
		if (ugolGet==2){
			var ugolTotal = summ_F;
			$('.ugl').hide();
			$('.fprof').show();
			$('.pprof').hide();
			$('.revik-tab').hide();
			
		}
		if (ugolGet==3){
			var ugolTotal = summ_R;
			$('.ugl').hide();
			$('.fprof').hide();
			$('.pprof').hide();
			$('.revik-tab').show();
		}
		

		
		
		
		//стоимость подоконника
		var podGet=$("#podGet").val();
		if (podGet==0) {
			var summ_pod = 0;
			$('.pod-fields').hide();
			var price_zagl = 0;
			
			}
		else {
			$('.pod-fields').show();
			var glubinaPod = glubina;
			if (glubinaPod == 0.22) glubinaPod = 0.25;
			if (glubinaPod == 0.27) glubinaPod = 0.3;
			if (glubinaPod == 0.375) glubinaPod = 0.4;
			
			var pod=(shirina+0.05)*(glubinaPod+0.1);//площадь подоконника
			var summ_pod=kol_vo*(pod*price_pod+price_zagl+0.3*pod*price_klin)+Math.ceil(pod*kol_vo)*price_pena;
			
			var porog = (0.9+0.05)*(glubinaPod+0.1); 
			var summ_porog=kol_vo*(porog*price_pod+price_zagl+0.3*porog*price_klin)+Math.ceil(porog*kol_vo)*price_pena;
		}
		
		
		
		
		//итоговая стоимость
		if ($('#win-with-porog').val() == 1) { 
			var main_summ=summ_pena+summ_germ+summ_gvozdi+price_send+ugolTotal+summ_pod+price_zagl + summ_porog; 
			$('.por_t').show();
		}
		
		else {
			var main_summ=summ_pena+summ_germ+summ_gvozdi+price_send+ugolTotal+summ_pod+price_zagl;
			$('.por_t').hide();
		}
		$('.sum').html(Math.ceil(main_summ));//вывод итоговой цены
		$('.main_table_itogo .itog').html(Math.ceil(main_summ));//вывод итоговой цены
	   
       //$('.sum').html (summ_pena + ' - ' + summ_germ + ' - ' + summ_gvozdi + ' - ' + price_send + ' - ' + ugolTotal + ' - ' + summ_pod + ' - ' + price_zagl)
        //вывод в таблицу
		var pena_kol=Math.ceil(area*0.4);//количество пены
		var gvozdi_kol=Math.ceil(kol_vo*0.4);//количество гвозди
		var pena_it=pena_kol*price_pena;//итоговая цена пена
		var germ_kolvo=Math.ceil(kol_vo*0.3);//количество герметика
		var germ_it=germ_kolvo*price_germ;//итоговая цена герметика
		var gvozdi_it=gvozdi_kol*price_gvozdi//итоговая цена гвозди
		var ugol_kol=kol_vo*Math.ceil((shirina+visota*2)/3);//уголки количество
		
        $('.send td.mm').html(c+'*'+a);//вывод итоговой цены за сендвич панели
        $('.send1 td.mm').html(c+'*'+b);//вывод итоговой цены за сендвич панели
        $('.send td.st').html(send_kol);//вывод итоговой цены за сендвич панели
        $('.send1 td.st').html(send1_kol);//вывод итоговой цены за сендвич панели
        $('.send td.itog').html(roundPlus(send_kol_it, 2));//вывод итоговой цены за сендвич панели
        $('.send1 td.itog').html(roundPlus(send1_kol_it, 2));//вывод итоговой цены за сендвич панели
        $('.germ td.buy').html(price_germ);//вывод цены за шт герметика
        $('.gvozdi td.buy').html(price_gvozdi);
        $('.gvozdi td.st').html(gvozdi_kol);
        $('.germ td.st').html(germ_kolvo);
        $('.germ td.itog').html(roundPlus(germ_it, 2));
        $('.gvozdi td.itog').html(roundPlus(gvozdi_it, 2));
        $('.pena td.st').html(pena_kol);//вывод количества пены
        $('.pena td.buy').html(price_pena);//вывод цены
        $('.pena td.itog').html(roundPlus(pena_it, 2));//вывод итоговой цены за пену 
        $('.ugl td.st').html(ugol_kol);
        $('.ugl td.buy').html(ugolTotal/ugol_kol);
        $('.ugl td.itog').html(ugolTotal);
        $('.fprof td.st').html(ugol_kol);
        $('.fprof td.buy').html(ugolTotal/ugol_kol);
        $('.fprof td.itog').html(ugolTotal);	
        $('.pprof td.st').html(ugol_kol);
        $('.pprof td.buy').html(ugolTotal/ugol_kol);
        $('.pprof td.itog').html(ugolTotal);	
		
		$('.revik-tab td.st').html(ugol_kol);
        $('.revik-tab td.buy').html(ugolTotal/ugol_kol);
        $('.revik-tab td.itog').html(ugolTotal);	
		
        var w=parseFloat(c)+50;
        var v=parseFloat(a)+100;
		//
        $('.pod_t td.mm').html(v +'*'+glubinaPod*1000);
        $('.pod_t td.st').html(kol_vo);
        $('.pod_t td.buy').html(price_pod);
        $('.pod_t td.itog').html(roundPlus(kol_vo*(price_pod*pod+price_zagl+0.3*pod*price_klin)+Math.ceil(pod*kol_vo)*price_pena, 2));
		
		$('.por_t td.mm').html('0.9 *'+glubinaPod*1000);
        $('.por_t td.st').html(kol_vo);
        $('.por_t td.buy').html(price_pod);
        $('.por_t td.itog').html(roundPlus(summ_porog, 2));
		
		
        $('.zagl_t td.st').html(kol_vo);
        $('.zagl_t td.buy').html(price_zagl);
        $('.zagl_t td.itog').html(roundPlus(kol_vo*price_zagl, 2));

		
        $('.m1').val($("#glubina").val());
        $('.m2').val(kol_vo);
        $('.m3').val($("#amount").val());
        $('.m4').val($("#amount1").val());
        $('.m5').val($('.prew span.acti img').data('plen'));
        $('.m6').val($('.sist').text());
        $('.m7').val($('.sum').text());
        $('.m8').val($('.send td.mm').html());
        $('.m9').val($('.send td.st').html());
        $('.m10').val($('.send td.buy').text());
        $('.m11').val($('.send td.itog').text());
        $('.m12').val($('.send1 td.mm').text());
        $('.m13').val($('.send1 td.st').text());
        $('.m14').val($('.send1 td.buy').text());
        $('.m15').val($('.send1 td.itog').text());
        $('.m16').val($('.pena td.st').text());
        $('.m17').val($('.pena td.buy').text());
        $('.m18').val($('.pena td.itog').text());
        $('.m19').val($('.germ td.st').text());
        $('.m20').val($('.germ td.buy').text());
        $('.m21').val($('.germ td.itog').text());
        $('.m22').val($('.gvozdi td.st').text());
        $('.m23').val($('.gvozdi td.buy').text());
        $('.m24').val($('.gvozdi td.itog').text());
        $('.m25').val($('.ugl td.st').text());
        $('.m26').val($('.ugl td.buy').text());
        $('.m27').val($('.ugl td.itog').text());
        $('.m28').val($('.fprof td.st').text());
        $('.m29').val($('.fprof td.buy').text());
        $('.m30').val($('.fprof td.itog').text());
        $('.m31').val($('.pprof td.st').text());
        $('.m32').val($('.pprof td.buy').text());
        $('.m33').val($('.pprof td.itog').text()); 
        $('.mm34').val($('.pod_t td.mm').text());
        $('.m34').val($('.pod_t td.st').text());
        $('.m35').val($('.pod_t td.buy').text());
        $('.m36').val($('.pod_t td.itog').text()); 
        $('.m37').val($('.zagl_t td.st').text());
        $('.m38').val($('.zagl_t td.buy').text());
        $('.m39').val($('.zagl_t td.itog').text());
        
	}