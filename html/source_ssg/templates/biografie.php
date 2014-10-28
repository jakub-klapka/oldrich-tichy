<section class="content">
	<article class="content__inner">

		<div id="<?= $sections['biografie']['lang_id']; ?>" class="content__placeholder"></div>

		<h1 class="content__heading"><?= $sections['biografie']['name']; ?></h1>
		<div class="split">
			<?php include( dirname( __DIR__ ) . '/biografie/biografie.php' ); ?>
			<?php foreach( $biografie as $year => $content ) : ?>
				<section class="split__item">
					<header class="split__item__heading"><time datetime="<?= $year; ?>"><?= $year; ?></time></header>
					<div class="split__item__content">
						<?= $content; ?>
					</div>
				</section>
			<?php endforeach; ?>
		</div>
	</article>
</section>
