/* global jQuery */
( function( $ ){

	$( function () {

		//Menu sticking
		$( '.toolbar' ).stickUp();

		//Images lazyloading
		$( '[data-original]' ).lazyload();

	} );

} )( jQuery );