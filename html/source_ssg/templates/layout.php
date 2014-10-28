<!doctype html>
<html lang="<?= $lang; ?>">
<head>
	<meta charset="UTF-8">
	<title>Oldřich Tichý</title>

	<link rel="stylesheet" href="<?= $root; ?>css/layout.css"/>
</head>
<body>

<div class="static_bg"></div>

<?php include( 'home_slide.php' ); ?>

<div class="content_wrap">
<header class="toolbar">
	<div class="toolbar__inner">
		<a class="toolbar__logo" href="">Oldřich Tichý<i class="toolbar__logo__image"></i></a>

		<nav class="toolbar__navigation">
			<ul class="toolbar__navigation__menu" id="menu">
				<?php foreach( $sections as $section ) : ?>
					<li class="toolbar__navigation__menu__item"><a href="#<?= $section['lang_id']; ?>"><?= $section['name']; ?></a></li>
				<?php endforeach; ?>
			</ul>
			<div class="toolbar__navigation__indicator" aria-hidden="true" id="menu_indicator"></div>
		</nav>
	</div>
	<a class="toolbar__language_link" href="<?= $root . '/' . $other_lang_suffix; ?>"><?= $other_lang; ?></a>
</header>

<?php include( 'journal.php' ); ?>

<?php paralax( 'paralax_1.jpg' ); ?>

<?php include( 'dilo.php' ); ?>

<?php paralax( 'paralax_2.jpg' ); ?>

<?php include( 'vystavy.php' ); ?>

<?php paralax( 'paralax_3.jpg' ); ?>

<?php include( 'texty.php' ); ?>

<?php paralax( 'paralax_4.jpg' ); ?>

<?php include( 'biografie.php' ); ?>

<?php paralax( 'paralax_5.jpg' ); ?>

<?php include( 'kontakt.php' ); ?>

</div>

<script type="text/javascript" src="<?= $root; ?>js/layout.js"></script>

</body>
</html>