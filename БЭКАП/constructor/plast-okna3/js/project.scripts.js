// inits
$(document).ready(function(){
	
	
	$(".ipad1but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad1").css("display","block");     
    });
    
    $(".ipad2but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad2").css("display","block");      
    });  
    
    $(".ipad3but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad3").css("display","block");     
    });
    
    $(".ipad4but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad4").css("display","block");      
    });
    
    $(".ipad5but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad5").css("display","block");     
    });
	
	$(".ipad6but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad6").css("display","block");      
    });
	
	$(".ipad7but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad7").css("display","block");      
    });
	
	$(".ipad8but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad8").css("display","block");      
    });
	
	$(".ipad9but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad9").css("display","block");      
    });
	
	$(".ipad10but").click(function () { 
      $(".ipadbut_left div").css("color","#fff");
      $(".ipadbut_right div").css("color","#fff");
      $(this).css("color","#ffff00");       
      $(".ipadcontent").css("display","none");
      $(".ipad10").css("display","block");
    });
	
	
	$(window).scroll(function() {
        if($(this).scrollTop() > 150){
            /*$('#note').stop().animate({
                top: '0px'    
                }, 50);*/
        }
        else{
            $('#note').stop().animate({
               top: '-100px'    
            }, 50);
        }
    });
    
    $(window).scroll(function() {
        if($(this).scrollTop() > 200){
            $('#note').stop().animate({
                top: '0px'    
                }, 300);
        }
        
    });
	
	
  	$(window).scroll(function() {
        if($(this).scrollTop() > 200){
            $('#toTop').stop().animate({
                top: '100px'    
                }, 100);
        }
        else{
            $('#toTop').stop().animate({
               top: '-100px'    
            }, 100);
        }
    });
    $('#toTop').on('click', function() {
        $('html, body').stop().animate({
           scrollTop: 0
        }, 500, function() {
           $('#toTop').stop().animate({
               top: '-100px'    
           }, 100);
        });
    });

	$('.rating').each(function(i, el) {
		val=parseFloat($(el).text());
		$(el).html('<span style="width:'+val*33+'px;"/>');
	});
	
	// main slider [home]
	if($('.home-slider').size()){
		homeSlider();
	}
	// horizontal slider 
	if($('.horizontal-slider').size()){
		horSlider('.horizontal-slider','.slide-item');
	}
	
	// horizontal slider otdelka
	if($('.horizontal-slider').size()){
		horSlider_otdelka('.horizontal-slider','.slide-item');
	}
	
	
	
	
	// slider with pager
	if($('.slider-with-rounds').size()){
		pagerSlider('.slider-with-rounds','.slider-item');
	}
	
	// upload 
	$('input.custom-upload').each(function(index, element) {
		$(element).wrap('<div class="fileform"/>');
		txt='���������� ����';
		if($(element).attr('accept')=='image/jpeg'){txt='�������� ����';}
		$(element).after('<a class="upl-text">'+txt+'</a>')
	}).change(function(e) {
		if($(this).attr('accept')=='image/jpeg'){
			$(this).parent().find('.upl-text').text($(this).val() ? '���� ���������' : '�������� ����');}
		else{
			$(this).parent().find('.upl-text').text($(this).val() ? '���� ����������' : '���������� ����');
		}
	});

	
	if($('.custom-radio').size()){
		$('input[type=radio].custom-radio').each(function(index, element) {
			var inp=$('input[type=radio].custom-radio[name='+$(element).attr('name')+']');
			$(element).prop('checked') ? className='active' : className='';
			$(element).before('<span class="'+$(element).attr('class')+' '+className+'" />').appendTo($(element).prev('span')).parents('label').addClass(className);
		}).change(function(e) {
			inp=$('input[type=radio].custom-radio[name='+$(this).attr('name')+']');
			if(inp.size()>1){
				var rChecked=false;
				inp.each(function(index, element){
					if(inp.eq(index).prop('checked')){
						inp.eq(index).parent().addClass('active').parents('label').addClass('active');
						rChecked=true;
					}
					else{
						inp.eq(index).parent().removeClass('active').parents('label').removeClass('active');
					}
				});
			}
			else{
				$(this).parent().toggleClass('active').parents('label').toggleClass('active');
			}
		});
	}
	if ($('.custom-checkbox').size()) {
	    $('input[type=checkbox].custom-checkbox').each(function (index, element) {
	        $(element).attr('checked') == 'checked' ? className = ' active' : className = '';
	        $(element).before('<span class="' + $(element).attr('class') + className + '"/>').appendTo($(element).prev('span.custom-checkbox'));
	    }).change(function (e) {
	        if($(this).attr('checked') == 'checked'){
	        	$(this).parent().addClass('active');
	        } else {
	        	$(this).parent().removeClass('active');
	        } 
	    });
	}


	$('body').on('click', '#ajax_fancy_submit', function(){
		$.fancybox.close();
		$.fancybox.showLoading();
		var form = $(this).closest('form');
		var url = form.attr('action');
		var data = form.serialize();
		$.post(url, data, function(data){
			$.fancybox({	
				content	: data,	
				padding:0, 
				margin:0, 
				scrolling:'visible', 
				wrapCSS:'custom-fancy',
				afterShow: function(){
					$('.custom-select').selectbox();
				},
			})
		});
		return false;
	});

	//order handler
	$('#order').on('click', function(event){
		showAJAXloader();
		$.ajax({
			url: '../../ajax/order.php',
			type: 'get',
			dataType: 'html',
			success: function(data){
			$.fancybox({
              	content	: data,	
				padding:0, 
				margin:0, 
				scrolling:'visible', 
				wrapCSS:'custom-fancy',
				afterShow: function(){
					$('.custom-select').selectbox();
				},
            });
			}
		})
		.done(function() {
			hideAJAXloader();
		});
	});
	
	$('a.fancy').fancybox({
  		helpers: {
		    overlay: {
		     	locked: false
		    }
	  	}
	});
	
	
	
	
	
	$(".hmw1").hover(
	  function () {
	    $(".pophmw1").stop().fadeIn(50);
	  }, 
	  function () {
	    $(".pophmw1").stop().fadeOut(50);
	  }
	);
	
	$(".hmw1 img").hover(
	  function () {
	    $(".pophmw1").stop().fadeIn(50);
	  });
	
	$(".pophmw1").hover(
	  function () {
	    $(this).stop().fadeIn(50);
	  }, 
	  function () {
	    $(this).stop().fadeOut(50);
	  }
	);
	
	
	
	$(".hmw2").hover(
	  function () {
	    $(".pophmw2").stop().fadeIn(50);
	  }, 
	  function () {
	    $(".pophmw2").stop().fadeOut(50);
	  }
	);
	
	$(".hmw2 img").hover(
	  function () {
	    $(".pophmw2").stop().fadeIn(50);
	  });
	
	$(".pophmw2").hover(
	  function () {
	    $(this).stop().fadeIn(50);
	  }, 
	  function () {
	    $(this).stop().fadeOut(50);
	  }
	);
	
	
	$(".hmw6").hover(
	  function () {
	    $(".pophmw6").stop().fadeIn(50);
	  }, 
	  function () {
	    $(".pophmw6").stop().fadeOut(50);
	  }
	);
	
	$(".hmw6 img").hover(
	  function () {
	    $(".pophmw6").stop().fadeIn(50);
	  });
	
	$(".pophmw6").hover(
	  function () {
	    $(this).stop().fadeIn(50);
	  }, 
	  function () {
	    $(this).stop().fadeOut(50);
	  }
	);
	
	
	
	$(".hmw5").hover(
	  function () {
	    $(".pophmw5").stop().fadeIn(50);
	  }, 
	  function () {
	    $(".pophmw5").stop().fadeOut(50);
	  }
	);
	
	$(".hmw5 img").hover(
	  function () {
	    $(".pophmw5").stop().fadeIn(50);
	  });
	
	$(".pophmw5").hover(
	  function () {
	    $(this).stop().fadeIn(50);
	  }, 
	  function () {
	    $(this).stop().fadeOut(50);
	  }
	);


	$(".hmw3").hover(
	  function () {
	    $(".pophmw3").stop().fadeIn(50);
	    $(this).css("z-index","50");
	  }, 
	  function () {
	    $(".pophmw3").stop().fadeOut(50);
	    $(this).css("z-index","44");
	  }
	);
	
	$(".hmw3 img").hover(
	  function () {
	    $(".pophmw3").stop().fadeIn(50);
	    $(this).css("z-index","50");
	  });
	
	$(".pophmw3").hover(
	  function () {
	    $(this).stop().fadeIn(50);
	  }, 
	  function () {
	    $(this).stop().fadeOut(50);
	  }
	);


	$(".hmw4").hover(
	  function () {
	    $(".pophmw4").stop().fadeIn(50);
	    $(this).css("z-index","50");
	  }, 
	  function () {
	    $(".pophmw4").stop().fadeOut(50);
	    $(this).css("z-index","44");
	  }
	);
	
	$(".hmw4 img").hover(
	  function () {
	    $(".pophmw4").stop().fadeIn(50);
	    $(this).css("z-index","50");
	  });
	
	$(".pophmw4").hover(
	  function () {
	    $(this).stop().fadeIn(50);
	  }, 
	  function () {
	    $(this).stop().fadeOut(50);
	  }
	);

	
	
	
	
	
	

});