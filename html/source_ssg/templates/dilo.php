<section class="content">
	<div class="content__inner">

		<div id="<?= $sections['dilo']['lang_id']; ?>" class="content__placeholder"></div>

		<h1 class="content__heading"><?= $sections['dilo']['name']; ?></h1>

		<div class="gallery" data-gallery-anchor="<?= $sections['dilo']['lang_id']; ?>">
			<ul class="gallery__menu">
				<?php $i = 1; foreach( $dilo_cats as $cat ) : ?>
					<li class="gallery__menu__item<?php if( $i === 1 ) : ?> active<?php endif; ?>"><button data-cat="<?= $cat['id']; ?>"><?= $cat['name']; ?></button></li>
				<?php $i++; endforeach; ?>
			</ul>

			<div class="gallery__full_image">
				<button class="gallery__full_image__close"><?= $dilo_close; ?></button>
				<button class="gallery__full_image__prev"><?= $dilo_prev; ?></button>
				<img alt="" class="gallery__full_image__image"/>
				<button class="gallery__full_image__next"><?= $dilo_next; ?></button>
				<div class="gallery__full_image__description"></div>
			</div>

			<div class="gallery__items">

				<?php include( dirname( __DIR__ ) . '/dilo/dilo.php' ); ?>
				<?php foreach( array_reverse( $dilo ) as $item ) : ?>
					<?php
						$image_file = dirname( dirname( __DIR__ ) ) . '/source_images/dilo/' . $item['filename'] . '.jpg';
						$thumb_file = dirname( dirname( __DIR__ ) ) . '/source_images/dilo/' . $item['filename'] . '_thumb.jpg';
						$image_size = getimagesize( $image_file );
						$thumb_size = getimagesize( $thumb_file );
						if( $lang === 'en_US' ) {
							$item['name'] = $item['en_name'];
							switch( $item['type'] ) {
								case 'olej':
									$item['type'] = 'oil';
									break;
								case 'olej na plátně':
									$item['type'] = 'oil on canvas';
									break;
								default:
									$item['type'] = '';
							}
						}
					?>
					<div class="gallery__items__item" data-full="<?= $root; ?>images/dilo/<?= $item['filename']; ?>.jpg"
					     data-width="<?= $image_size[0]; ?>"
					     data-height="<?= $image_size[1]; ?>"
					     data-cat="<?= $dilo_cats[$item['cat']]['id']; ?>"
					     data-alt="<?= $item['name']; ?>" >
						<img data-original="<?= $root; ?>images/dilo/<?= $item['filename']; ?>_thumb.jpg"
						     width="<?= $thumb_size[0]; ?>"
						     height="<?= $thumb_size[1]; ?>"
						     alt="<?= $item['name']; ?>"
						     class="gallery__items__item__image" />
						<div class="gallery__items__item__description"><?= $item['name']; ?></div>
						<div class="gallery__items__item__description_placeholder" aria-hidden="true">
							<?php ob_start(); ?>
								<?php if( isset( $item['year'] ) ) : ?><strong><?= $item['year']; ?></strong>&nbsp;|&nbsp;<?php endif; ?>
								<?php if( isset( $item['name'] ) && !empty( $item['name'] ) ) : ?><strong><?= $item['name']; ?></strong>&nbsp;|&nbsp;<?php endif; ?>
								<?php if( isset( $item['type'] ) ) : ?><?= $item['type']; ?>&nbsp;|&nbsp;<?php endif; ?>
								<?php if( isset( $item['size'] ) ) : ?><?= $item['size']; ?><?php endif; ?>
							<?php $desc = ob_get_clean(); echo preg_replace( '/\s+/', '', $desc ); ?>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>

	</div>
</section>
