/* global jQuery */
( function( $ ){

	$( function () {

		//Menu sticking
		$( '.toolbar' ).stickUp();

		//Images lazyloading
		$( '[data-original]' ).lazyload();

		//Scroll
		var myScroll = new IScroll('#skrollr-body', {
			mouseWheel: true
		});

	} );

} )( jQuery );