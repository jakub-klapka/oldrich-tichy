<?php

include( 'config.php' );

$pages = glob( 'pages/*.php' );

foreach( $pages as $page ) {

	include( $page );

	ob_start();
		include( 'templates/layout.php' );
	$output = ob_get_clean();

	file_put_contents( dirname( __DIR__ ) . '/build/' . basename( $page, '.php' ) . '.html', $output );

}