<div class="home_slide">
	<div class="home_slider__inner">
		<h1 class="home_slider__name">Oldřich <strong>Tichý</strong></h1>
		<h2 class="home_slider__meta">
			<?php $i = 1; foreach( $home_slide_items as $item ) : ?>
				<?= $item; ?><?php if( $i !== count( $home_slide_items ) ) : ?> <span class="home_slider__meta__separator">|</span> <?php endif; ?>
			<?php $i++; endforeach; ?>
		</h2>
		<a class="home_slider__scroll_down" href="#journal"><?= $scroll_down; ?></a>
	</div>
</div>