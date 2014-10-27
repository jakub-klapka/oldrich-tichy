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

<section class="image_paralax">
	<div class="image_paralax__image" style="padding-top: 100%;"><!-- (width/height)*100 -->
		<img data-original="<?= $root; ?>images/paralax_1.jpg" alt="" width="1337" height="1337"/>
	</div>
</section>

<?php include( 'dilo.php' ); ?>

<section class="image_paralax">
	<div class="image_paralax__image" style="padding-top: 100%;"><!-- (width/height)*100 -->
		<img data-original="build/images/paralax_1.jpg" alt="" width="1337" height="1337"/>
	</div>
</section>

<?php include( 'vystavy.php' ); ?>

<section class="image_paralax">
	<div class="image_paralax__image" style="padding-top: 100%;"><!-- (width/height)*100 -->
		<img data-original="build/images/paralax_1.jpg" alt="" width="1337" height="1337"/>
	</div>
</section>

<?php include( 'texty.php' ); ?>

<section class="image_paralax">
	<div class="image_paralax__image" style="padding-top: 100%;"><!-- (width/height)*100 -->
		<img data-original="build/images/paralax_1.jpg" alt="" width="1337" height="1337"/>
	</div>
</section>

<section class="content">
	<article class="content__inner">

		<div id="biografie" class="content__placeholder"></div>

		<h1 class="content__heading">Biografie</h1>
		<div class="split">
			<section class="split__item">
				<header class="split__item__heading"><time datetime="2014">2014</time></header>
				<div class="split__item__content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto aspernatur,
						consequuntur cupiditate ea facilis inventore ipsam maiores minima nesciunt, obcaecati
						possimus qui quidem reprehenderit soluta sunt temporibus voluptatum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto aspernatur,
						consequuntur cupiditate ea facilis inventore ipsam maiores minima nesciunt, obcaecati
						possimus qui quidem reprehenderit soluta sunt temporibus voluptatum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto aspernatur,
						consequuntur cupiditate ea facilis inventore ipsam maiores minima nesciunt, obcaecati
						possimus qui quidem reprehenderit soluta sunt temporibus voluptatum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto aspernatur,
						consequuntur cupiditate ea facilis inventore ipsam maiores minima nesciunt, obcaecati
						possimus qui quidem reprehenderit soluta sunt temporibus voluptatum.</p>
				</div>
			</section>

			<section class="split__item">
				<header class="split__item__heading"><time datetime="2014">2013</time></header>
				<div class="split__item__content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto aspernatur,
						consequuntur cupiditate ea facilis inventore ipsam maiores minima nesciunt, obcaecati
						possimus qui quidem reprehenderit soluta sunt temporibus voluptatum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto aspernatur,
						consequuntur cupiditate ea facilis inventore ipsam maiores minima nesciunt, obcaecati
						possimus qui quidem reprehenderit soluta sunt temporibus voluptatum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto aspernatur,
						consequuntur cupiditate ea facilis inventore ipsam maiores minima nesciunt, obcaecati
						possimus qui quidem reprehenderit soluta sunt temporibus voluptatum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto aspernatur,
						consequuntur cupiditate ea facilis inventore ipsam maiores minima nesciunt, obcaecati
						possimus qui quidem reprehenderit soluta sunt temporibus voluptatum.</p>
				</div>
			</section>


		</div>

	</article>
</section>

<section class="image_paralax">
	<div class="image_paralax__image" style="padding-top: 100%;"><!-- (width/height)*100 -->
		<img data-original="build/images/paralax_1.jpg" alt="" width="1337" height="1337"/>
	</div>
</section>

<section class="content is-inverse">
	<article class="content__inner">

		<div id="kontakt" class="content__placeholder"></div>

		<h1 class="content__heading">Kontakt</h1>
		<div class="split">
			<section class="split__item is-bottom-padding">
				<header class="split__item__heading"></header>
				<div class="split__item__content">
					Oldřich Tichý<br/>
					Dojetřice 8<br/>
					285 06   Sázava
				</div>
			</section>
			<section class="split__item is-bottom-padding">
				<header class="split__item__heading"></header>
				<div class="split__item__content">
					E-MAIL: <a href="znvygb:byqngvpulfnmnin@frmanz.pm" class="e_mail_link lumi_email_decode">byqngvpulfnmnin@frmanz.pm</a><br/>
					GSM: 605 467 085<br/>
					TELEFON: +420 327 321 174
				</div>
			</section>

		</div>
	</article>
</section>

</div>

<script type="text/javascript" src="<?= $root; ?>js/layout.js"></script>

</body>
</html>