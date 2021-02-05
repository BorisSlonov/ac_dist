$(document).ready(function() {

        var set = "";

  function get_summ(x) {

      if ($("#stek1").hasClass("active")) {
          var typeGlazing = 0;
      } else {
          var typeGlazing = 0;
      }
      if ($("#stek2").hasClass("active")) {
          var typeGlazing = 0;
      } else {
          var typeGlazing = 0;
      }

      var summer = typeGlazing;

      set = "";
      var stek_price = $('.tipstek a.active').data('price');
      
      set += "Тип остекления: " + $('.tipstek a.active').text() + "\n";
      var roof_price = $('.roof a.active').data('price');
     
     set += "Крыша: " + $('.roof a.active').text() + "\n";
      var mat_price = $('.mat a.active').data('price');
      
      set += "Материал отделки: " + $('.mat a.active').text() + "\n";
      var shkaf_price = $('.shkaf a.active').data('price');
      
      set += "Шкаф на балкон: " + $('.shkaf a.active').text() + "\n";
      var floor_price = $('.floor a.active').data('price');
      
      set += "Тип потолка: " + $('.ceiling a.active').text() + "\n";
      var ceiling_price = $('.ceiling a.active').data('price');
      
      set += "Тип пола: " + $('.floor a.active').text() + "\n";
      
      var summ = stek_price + roof_price + mat_price + shkaf_price + ceiling_price + floor_price + summer;

      set += "Цена: " + summ + "\n";
      $("#cena").html(summ);
      if (x) set += x;
      $(".data_calc").val(set);

  }
  
  
  
   get_summ();
      
      $("#floor1").show();
      $("#ceiling1").show();
      
      $('.pol2 a').on({
          'click': function(event) {
              var $t = $(this);
              var $t_id = $(this).attr('id');
              var $t_price = $(this).data('price');
              var $t_show = $(this).data('show');

              $t.parent().children().removeClass("active");
              $t.addClass("active");

              get_summ();

              if ($('#stek1').hasClass('active')) { //Холодное остекление
                  $($t_show).hide();
                  $('#roof1_1, #roof1_2, #roof1_3, #roof1_4').hide();
                  if ($('#roof2').hasClass('active')) $('#roof1_3').show();
                  if ($('#roof3').hasClass('active')) $('#roof1_1').show();
              } else if ($('#stek2').hasClass('active')) { //теплое остекление
                  $($t_show).show();
                  $('#roof1_1, #roof1_2, #roof1_3, #roof1_4').hide();
                  if ($('#roof2').hasClass('active')) $('#roof1_4').show();
                  if ($('#roof3').hasClass('active')) $('#roof1_2').show();

              }

              if ($t.parent().hasClass('mat')) {
                  $('#blkbg').removeClass('tip1 tip2 tip3');
                  if ($t.hasClass('left')) $('#blkbg').addClass('tip1');
                  if ($t.hasClass('cent')) $('#blkbg').addClass('tip2');
                  if ($t.hasClass('right')) $('#blkbg').addClass('tip3');
              }

              if ($t.parent().hasClass('shkaf') || $t.parent().hasClass('mat')) {

                  if ($('.mat .left').hasClass('active')) {
                      $('#shkaf1_1, #shkaf1_2, #shkaf2_1, #shkaf2_2, #shkaf3_1, #shkaf3_2').hide();
                      if ($('.shkaf a.cent').hasClass('active')) $('#shkaf1_1').show();
                      if ($('.shkaf a.right').hasClass('active')) $('#shkaf1_2').show();
                  } else if ($('.mat .cent').hasClass('active')) {
                      $('#shkaf1_1, #shkaf1_2, #shkaf2_1, #shkaf2_2, #shkaf3_1, #shkaf3_2').hide();
                      if ($('.shkaf a.cent').hasClass('active')) $('#shkaf2_1').show();
                      if ($('.shkaf a.right').hasClass('active')) $('#shkaf2_2').show();
                  } else if ($('.mat .right').hasClass('active')) {
                      $('#shkaf1_1, #shkaf1_2, #shkaf2_1, #shkaf2_2, #shkaf3_1, #shkaf3_2').hide();
                      if ($('.shkaf a.cent').hasClass('active')) $('#shkaf3_1').show();
                      if ($('.shkaf a.right').hasClass('active')) $('#shkaf3_2').show();
                  }
              }

              if ($t.parent().hasClass('floor')) {
                  $('#floor1, #floor2').hide();
                  if ($('.floor a.left').hasClass('active')) $('#floor1').show();
                  if ($('.floor a.cent').hasClass('active')) $('#floor2').show();
              }
              
              
              if ($t.parent().hasClass('ceiling')) {
                  $('#ceiling2, #ceiling3').hide();
                  
                  if ($('.ceiling a.left').hasClass('active')) {
                    $('#ceiling1').show();
                     $('#ceiling2, #ceiling3').hide();
                  }
                  
                  if ($('.ceiling a.cent').hasClass('active')) {
                    $('#ceiling2').show();
                     $('#ceiling1, #ceiling3').hide();
                  }
                  
                  if ($('.ceiling a.right').hasClass('active')) {
                    $('#ceiling3').show();
                     $('#ceiling1, #ceiling2').hide();
                  }
              }

              event.preventDefault();
          }
      });


  });