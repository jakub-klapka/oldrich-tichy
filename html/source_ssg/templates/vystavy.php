<section class="content is-inverse">
	<div class="content__inner">

		<div id="<?= $sections['vystavy']['lang_id']; ?>" class="content__placeholder"></div>

		<h1 class="content__heading"><?= $sections['vystavy']['name']; ?></h1>

		<?php include( dirname( __DIR__ ) . '/vystavy/vystavy' . $lang_file_suffix . '.php' ); ?>

		<?php foreach( $vystavy as $name => $items ) : ?>
			<h2 class="content__subheading"><?= $name; ?></h2>
			<div class="split">
				<?php foreach( $items as $year => $vystava ) : ?>
					<section class="split__item">
						<header class="split__item__heading"><time datetime="<?= $year; ?>"><?= $year; ?></time></header>
						<div class="split__item__content">
							<?php foreach( $vystava as $one ) : ?>
								<?= $one; ?> <br/>
							<?php endforeach; ?>
						</div>
					</section>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>
