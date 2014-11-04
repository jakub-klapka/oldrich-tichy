<!doctype html>
<html lang="<?= $lang; ?>">
<head>
	<meta charset="UTF-8">
	<title>Oldřich Tichý</title>

	<link rel="stylesheet" href="<?= $root; ?>css/layout.css?v=<?= $static_ver; ?>"/>

	<link rel="shortcut icon" href="<?= $root; ?>images/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?= $root; ?>images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $root; ?>images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $root; ?>images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= $root; ?>images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= $root; ?>images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= $root; ?>images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= $root; ?>images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= $root; ?>images/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $root; ?>images/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?= $root; ?>images/favicon/favicon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?= $root; ?>images/favicon/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="<?= $root; ?>images/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?= $root; ?>images/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?= $root; ?>images/favicon/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#2e3c41">
	<meta name="msapplication-TileImage" content="<?= $root; ?>images/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="<?= $root; ?>images/favicon/browserconfig.xml">

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
	<a class="toolbar__language_link" href="<?= $root . $other_lang_suffix; ?>"><?= $other_lang; ?></a>
</header>

<?php include( 'journal.php' ); ?>

<?php paralax( 'paralax_1.jpg' ); ?>

<?php include( 'image_interlude.php' ); ?>

<?php paralax( 'paralax_6.jpg' ); ?>

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
<div id="skrollr-body" style="display: none;"><div></div></div>
<script type="text/javascript" src="<?= $root; ?>js/layout.js?v=<?= $static_ver; ?>"></script>

</body>
</html>