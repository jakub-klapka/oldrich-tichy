/* global require */
require.config({
	waitSeconds: 0,
	paths: {
		'jquery': 'libs/jquery-2.1.1',
		'domReady': 'libs/domReady',
		'stickUp': 'libs/stickUp',
		'lazyload': 'libs/jquery.lazyload'
	},
	shim: {
		lazyload: {
			deps: ['jquery']
		}
	}
});