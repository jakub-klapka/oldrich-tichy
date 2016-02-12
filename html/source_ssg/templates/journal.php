<section class="content">
	<div class="content__inner">

		<div id="<?= $sections['journal']['lang_id']; ?>" class="content__placeholder"></div>

		<h1 class="content__heading"><?= $sections['journal']['name']; ?></h1>
		<div class="split">

			<?php
			if( $lang === 'en_US' ) {
				$items = glob( dirname( __DIR__ ) . '/journal/en/*.php' );
			} else {
				$items = glob( dirname( __DIR__ ) . '/journal/*.php' );
			}
			$items = array_reverse( $items ); ?>

			<?php foreach( $items as $item ) : include( $item ) ?>
				<article class="split__item">
					<header class="split__item__heading"><time datetime="<?= date_format( $date, 'c' ); ?>"><?= date_format( $date, 'j | n | Y' ); ?></time></header>
					<div class="split__item__content">

						<h3 class="split__heading"><?= $heading; ?></h3>

						<?= str_replace( '{{root}}', $root, $above); ?>

						<?php if( isset( $below ) ) : ?>
						<div class="show_more" id="show_more_<?php echo $show_more_count; $show_more_count++; ?>" aria-hidden="true">
							<?= $below; ?>
						</div>
						<?php endif; ?>
					</div>
				</article>
			<?php endforeach; ?>

		</div>

	</div>
</section>
