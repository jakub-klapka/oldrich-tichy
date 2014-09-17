/* global require */
require( ['_config'], function(){

	require( ['domReady!', 'jquery', 'stickUp', 'modules/image_paralax', 'lazyload'], function( doc, $, stickup, image_paralax, lazyload ){

		//Menu sticking
		$( '.toolbar' ).stickUp();

		//Image paralaxes
		$( '.image_paralax' ).each( function(){
			Object.create( image_paralax ).init( $(this) );
		} );

		//Images lazyloading
		$( '[data-original]' ).lazyload();

	} );

} );