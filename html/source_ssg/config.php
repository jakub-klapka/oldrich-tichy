<?php
/*
 * Config options
 */
$root = '';



/*
 * System
 */
$show_more_count = 1;

function paralax( $image_name ) {
	$image_file = dirname( __DIR__ ) . '/source_images/' . $image_name;
	$imagesize = getimagesize( $image_file );
	global $root;
	?>
	<section class="image_paralax">
		<div class="image_paralax__image" style="padding-top: 100%;">
			<img data-original="<?= $root; ?>images/<?= $image_name; ?>" alt="" width="<?= $imagesize[0]; ?>" height="<?= $imagesize[1]; ?>"/>
		</div>
	</section>
	<?php
}