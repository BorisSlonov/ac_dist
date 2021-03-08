
if (window.innerWidth <= 900) {
	var priceBlock2 = document.getElementsByClassName('prices_block_v2')

	for (var i = 0; i < priceBlock2.length; i++) {
		priceBlock2[i].classList.add("active")
	}

	let headerPhone = document.querySelector('a[name="header-phone"]');

	headerPhone.href = '+7(495)414-26-92';
}

let btnCallBack = document.createElement('a');
btnCallBack.className = 'btnCallBack';
document.body.appendChild(btnCallBack)
btnCallBack.setAttribute("href", "#forma-svyaz");
btnCallBack.setAttribute("data-fancybox", "");



function equalHeight(group) {
	var tallest = 0;
	group.each(function () {
		thisHeight = $(this).height();
		if (thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	group.height(tallest);
}
$(document).ready(function () {


	equalHeight($(".item img"));

	if ($(window).width() >= '1240') {
		$(window).scroll(function () {
			var $this = $(this)

			$head = $('.logo_header');
			$logo = $('.logo_white');
			$menuBtn = $('.mobile-menu-button');
			if ($this.scrollTop() > 120) {
				$head.addClass('logo_fixed_active');
				$logo.add('logo_white_active')
				$(".contact-panel-wrapper").css('height', 66 + "px");
				// $(".contact-panel").css('justify-content', 'space-between');

			} else {
				$head.removeClass('logo_fixed_active');
				$logo.removeClass('logo_white_active')
				$(".contact-panel-wrapper").css('height', 50 + "px");
				// $(".contact-panel").css('justify-content', 'flex-end');
			}
		});
	}



	$(".phoneForm").mask("+7(999) 999-9999");









	$('.main-slider').slick({
		lazyLoad: 'progressive',
		autoplay: true,
		autoplaySpeed: 10000,
		dots: true,
		nextArrow: '<button type="button" class="slick-arrow slick-next"><svg fill="#3c5395" width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
		prevArrow: '<button type="button" class="slick-arrow slick-prev"><svg fill="#3c5395" width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>'
	});


	$('.advantages-icons__row').slick({
		lazyLoad: 'progressive',
		autoplay: true,
		speed: 1000,
		autoplaySpeed: 1000,
		slidesToShow: 3,
		nextArrow: '<button type="button" class="slick-arrow slick-next"><svg fill="#3c5395 " width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
		prevArrow: '<button type="button" class="slick-arrow slick-prev"><svg fill="#3c5395" width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
		responsive: [
			{
				breakpoint: 550,
				settings: {
					slidesToShow: 2
				}
			}
		]
	});



	$('.images-slider').slick({
		lazyLoad: 'progressive',
		centerMode: true,
		dots: true,
		slidesToShow: 3,
		nextArrow: '<button type="button" class="slick-arrow slick-next"><svg fill="#3c5395" width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
		prevArrow: '<button type="button" class="slick-arrow slick-prev"><svg fill="#3c5395" width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
		responsive: [
			{
				breakpoint: 1500,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 840,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	$('.images-grid-slider').slick({
		lazyLoad: 'progressive',
		centerMode: true,
		slidesToShow: 1,
		nextArrow: '<button type="button" class="slick-arrow slick-next"><svg width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
		prevArrow: '<button type="button" class="slick-arrow slick-prev"><svg width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>'
	});

	// Steps 
	$('.steps-nav-link').on('click', function (e) {
		e.preventDefault();
		var parentBlock = $(this).closest('.step');
		var parentList = $(this).closest('.steps-nav');
		var elementIndex = $(this).parent().index() - 1;

		parentBlock.find('.step-sliders-list .active').removeClass('active')
		parentBlock.find('.step-sliders-list-item').eq(elementIndex).addClass('active')
		parentList.find('.active').removeClass('active')
		$(this).addClass('active');
	})




	setTimeout(function () {
		$(".step-slider").slick({
			lazyLoad: 'progressive',
			dots: true,
			nextArrow: '<button type="button" class="slick-arrow slick-next"><svg width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
			prevArrow: '<button type="button" class="slick-arrow slick-prev"><svg width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>'
		})
	}, 2000); setTimeout(function () { $(".step-slider").slick("setPosition") }, 2000)




	$('.slider').slick({
		lazyLoad: 'progressive',
		nextArrow: '<button type="button" class="slick-arrow slick-next"><svg width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
		prevArrow: '<button type="button" class="slick-arrow slick-prev"><svg width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve"><g><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105 L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795 l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>'
	})


	//
	$('.slider-vertical-list-item').on('click', function (e) {
		e.preventDefault();
		var parentBlock = $(this).closest('.slider-vertical-wrapper');
		var parentList = $(this).closest('.slider-vertical-list');
		var elementIndex = $(this).index();

		parentBlock.find('.slider-vertical-image .slider.active').removeClass('active')
		parentBlock.find('.slider-vertical-image .slider').eq(elementIndex).addClass('active')
		parentList.find('.active').removeClass('active')
		$(this).addClass('active');

		$('.slider').slick('refresh')

	})


	$('.mobile-menu-button').on('click', function () {
		$('.nav-wrapper').toggleClass('show');
	})
	$(window).click(function () {
		$('.nav-wrapper').removeClass('show');
	});

	$('.mobile-menu-button, .nav-list').click(function (event) {
		event.stopPropagation();
	});


	$('.nav-sub-list-icon').on('click', function () {
		$(this).next('.nav-sub-list').slideToggle()
	})

	$('[data-lazy]').Lazy();

});


// Отправка данных на сервер
function send(event, php) {
	console.log("Отправка запроса");
	event.preventDefault ? event.preventDefault() : event.returnValue = false;
	var req = new XMLHttpRequest();
	req.open('POST', php, true);
	req.onload = function () {
		if (req.status >= 200 && req.status < 400) {
			json = JSON.parse(this.response); // Ебанный internet explorer 11
			console.log(json);

			// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
			if (json.result == "success") {
				// Если сообщение отправлено



				$.fancybox.open('<div class="message"><h2>Спасибо за заявку!</h2><p>Мы свяжемся с вами в ближайшее время</p></div>');

				function closePopup() {
					$.fancybox.close()
					$.fancybox.close()
				}

				setTimeout(closePopup, 3000);



			} else {
				// Если произошла ошибка
				alert("Ошибка. Сообщение не отправлено");
			}
			// Если не удалось связаться с php файлом
		} else { alert("Ошибка сервера. Номер: " + req.status); }
	};

	// Если не удалось отправить запрос. Стоит блок на хостинге
	req.onerror = function () { alert("Ошибка отправки запроса"); };
	req.send(new FormData(event.target));
}

