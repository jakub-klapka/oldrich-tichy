<?php

$files = glob( dirname( __DIR__ ) . '/texty/*.php' );
$files = array_reverse( $files );

$texty = array();

foreach( $files as $file ) {

	include( $file );

	$texty[$year][] = array(
		'heading' => $heading,
		'content' => $content
	);

}

?>
<section class="content">
	<article class="content__inner">

		<div id="<?= $sections['texty']['lang_id']; ?>" class="content__placeholder"></div>

		<h1 class="content__heading"><?= $sections['texty']['name']; ?></h1>
		<div class="split">
			<?php foreach( $texty as $year => $items ) : ?>
				<section class="split__item">
					<header class="split__item__heading"><time datetime="<?= $year; ?>"><?= $year; ?></time></header>
					<div class="split__item__content">

						<?php foreach( $items as $item ) : ?>
							<h3 class="split__heading"><?= $item['heading']; ?></h3>
							<div class="show_more" id="show_more_<?php echo $show_more_count; $show_more_count++; ?>" aria-hidden="true">
								<?= $item['content']; ?>
							</div>

						<?php endforeach; ?>

					</div>
				</section>
			<?php endforeach; ?>

		</div>

	</article>
</section>
