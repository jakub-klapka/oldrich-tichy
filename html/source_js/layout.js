/* global require */
require( ['_config'], function(){

	require( ['domReady!', 'test', 'jquery'], function( doc, test, $ ){

		Object.create( test ).init( $('.toolbar__logo') );

		Object.create( test ).init( $('.test') );

	} );

} );