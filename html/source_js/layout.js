/* global require */
require( ['_config'], function(){

	require( ['domReady!', 'jquery', 'stickUp', 'modules/image_paralax', 'lazyload', 'modules/menu_navigation'],
		function( doc, $, stickup, image_paralax, lazyload, menu_navigation ){

			//Menu sticking
			$( '.toolbar' ).stickUp();

			//Image paralaxes
			$( '.image_paralax' ).each( function(){
				Object.create( image_paralax ).init( $(this) );
			} );

			//Images lazyloading
			$( '[data-original]' ).lazyload();

			//Menu navigation
			menu_navigation.init();

		} );

} );