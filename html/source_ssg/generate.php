<?php

include( 'config.php' );

$pages = glob( 'pages/*.php' );

/*
 * Pages
 */
foreach( $pages as $page ) {

	include( $page );

	ob_start();
		include( 'templates/layout.php' );
	$output = ob_get_clean();

	file_put_contents( dirname( __DIR__ ) . '/build/' . basename( $page, '.php' ) . '.html', $output );

}

/*
 * Htaccess
 */
include( 'templates/htaccess.php' );

$htaccess = str_replace( '{{root_rel}}', $root_rel, $htaccess );

file_put_contents( dirname( __DIR__ ) . '/build/' . '.htaccess', $htaccess );
