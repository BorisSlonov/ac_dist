/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function ( $ )
{
		$('.inputfile').change(function( e )
		{
			var label	 = $(this).closest('label'),
			labelVal = $(label).find( 'span' ).html();
			var fileName = '';
			if( $(this)[0].files && $(this)[0].files.length > 1 )
				fileName = ( $(this).attr( 'data-multiple-caption' ) || '' ).replace( '{count}', $(this)[0].files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
			{
				$(label).find( 'span' ).html(fileName);
				$(label).find( 'span' ).addClass('is_file');
			} else
				$(label).find( 'span' ).html(labelVal)
			// Firefox bug fix
			$(this).focus(function(){ $(this).addClass( 'has-focus' ); });
			$(this).blur(function(){ $(this).removeClass( 'has-focus' ); });
		});

}(jQuery));