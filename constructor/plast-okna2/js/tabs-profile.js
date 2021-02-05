(function($) {
$(function() {

	$('ul.tabsprof').delegate('li:not(.current)', 'click', function() {
		$(this).addClass('current').siblings().removeClass('current')
			.parents('div.sectionprof').find('div.boxprof').eq($(this).index()).fadeIn(150).siblings('div.boxprof').hide();
	})

})
})(jQuery)