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
		<img data-original="build/images/paralax_1.jpg" alt="" width="1337" height="1337"/>
	</div>
</section>

<?php include( 'dilo.php' ); ?>

<section class="image_paralax">
	<div class="image_paralax__image" style="padding-top: 100%;"><!-- (width/height)*100 -->
		<img data-original="build/images/paralax_1.jpg" alt="" width="1337" height="1337"/>
	</div>
</section>

<section class="content is-inverse">
	<div class="content__inner">

		<div id="vystavy" class="content__placeholder"></div>

		<h1 class="content__heading">Výstavy</h1>

		<h2 class="content__subheading">Samostatné výstavy</h2>

		<div class="split">
			<section class="split__item">
				<header class="split__item__heading"><time datetime="2014">2014</time></header>
				<div class="split__item__content">
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
				</div>
			</section>
			<section class="split__item">
				<header class="split__item__heading"><time datetime="2014">2013</time></header>
				<div class="split__item__content">
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
				</div>
			</section>
			<section class="split__item">
				<header class="split__item__heading"><time datetime="2014">2012</time></header>
				<div class="split__item__content">
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
					Lorem ipsum dolor sit amet. <br/>
				</div>
			</section>
		</div>

		<h2>účast na kolektivních výstavách</h2>

		<section class="split__item">
			<header class="split__item__heading"><time datetime="2014">2014</time></header>
			<div class="split__item__content">
				Lorem ipsum dolor sit amet. <br/>
				Lorem ipsum dolor sit amet. <br/>
				Lorem ipsum dolor sit amet. <br/>
				Lorem ipsum dolor sit amet. <br/>
			</div>
		</section>
		<section class="split__item">
			<header class="split__item__heading"><time datetime="2014">2013</time></header>
			<div class="split__item__content">
				Lorem ipsum dolor sit amet. <br/>
				Lorem ipsum dolor sit amet. <br/>
				Lorem ipsum dolor sit amet. <br/>
				Lorem ipsum dolor sit amet. <br/>
			</div>
		</section>


	</div>
</section>

<section class="image_paralax">
	<div class="image_paralax__image" style="padding-top: 100%;"><!-- (width/height)*100 -->
		<img data-original="build/images/paralax_1.jpg" alt="" width="1337" height="1337"/>
	</div>
</section>

<section class="content">
	<article class="content__inner">

		<div id="texty" class="content__placeholder"></div>

		<h1 class="content__heading">Texty</h1>
		<div class="split">
			<section class="split__item">
				<header class="split__item__heading"><time datetime="2014">2014</time></header>
				<div class="split__item__content">
					<h3 class="split__heading">Neumann, Ivan: <em>Hluboko v lesích</em><br/>
						Lidová demokracie, 1988</h3>
					<div class="show_more" id="show_more_4" aria-hidden="true">
						<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorem, ipsum modi
							nostrum omnis quaerat quasi repellat rerum veniam? Accusantium ad cum minima odio
							placeat qui quod rem reprehenderit, similique!</p>

						<p>Accusamus deserunt ipsam nobis quam reprehenderit voluptates. A asperiores aut
							consectetur deserunt eligendi fugiat laudantium nesciunt non officia, officiis provident
							quas quia rerum sunt tempore totam, velit vero voluptates voluptatibus.</p>

						<p>Dolor eos ipsa natus quae! Adipisci aperiam debitis dignissimos dolorem est
							exercitationem facere fugiat id illum incidunt ipsum nam nesciunt nihil, nobis
							perspiciatis quam reprehenderit repudiandae? Dolorem eveniet fuga incidunt.</p>

						<p>Accusamus in quasi temporibus. Atque dolorem ducimus eos esse eum excepturi fuga fugiat,
							incidunt laborum laudantium, optio pariatur provident quia quo repellat rerum sapiente?
							A accusamus amet ex fuga obcaecati!</p>
					</div>

					<h3 class="split__heading">Ševeček, Ludvík:  <em>Malba jako prostředek bytostné komunikace</em><br/>
						Nepublikovaný text, 1988, archiv autora</h3>
					<div class="show_more" id="show_more_5" aria-hidden="true">
						<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorem, ipsum modi
							nostrum omnis quaerat quasi repellat rerum veniam? Accusantium ad cum minima odio
							placeat qui quod rem reprehenderit, similique!</p>

						<p>Accusamus deserunt ipsam nobis quam reprehenderit voluptates. A asperiores aut
							consectetur deserunt eligendi fugiat laudantium nesciunt non officia, officiis provident
							quas quia rerum sunt tempore totam, velit vero voluptates voluptatibus.</p>

						<p>Dolor eos ipsa natus quae! Adipisci aperiam debitis dignissimos dolorem est
							exercitationem facere fugiat id illum incidunt ipsum nam nesciunt nihil, nobis
							perspiciatis quam reprehenderit repudiandae? Dolorem eveniet fuga incidunt.</p>

						<p>Accusamus in quasi temporibus. Atque dolorem ducimus eos esse eum excepturi fuga fugiat,
							incidunt laborum laudantium, optio pariatur provident quia quo repellat rerum sapiente?
							A accusamus amet ex fuga obcaecati!</p>
					</div>


				</div>
			</section>

			<section class="split__item">
				<header class="split__item__heading"><time datetime="2014">2013</time></header>
				<div class="split__item__content">
					<h3 class="split__heading">Neumann, Ivan: <em>Hluboko v lesích</em><br/>
						Lidová demokracie, 1988</h3>
					<div class="show_more" id="show_more_4" aria-hidden="true">
						<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorem, ipsum modi
							nostrum omnis quaerat quasi repellat rerum veniam? Accusantium ad cum minima odio
							placeat qui quod rem reprehenderit, similique!</p>

						<p>Accusamus deserunt ipsam nobis quam reprehenderit voluptates. A asperiores aut
							consectetur deserunt eligendi fugiat laudantium nesciunt non officia, officiis provident
							quas quia rerum sunt tempore totam, velit vero voluptates voluptatibus.</p>

						<p>Dolor eos ipsa natus quae! Adipisci aperiam debitis dignissimos dolorem est
							exercitationem facere fugiat id illum incidunt ipsum nam nesciunt nihil, nobis
							perspiciatis quam reprehenderit repudiandae? Dolorem eveniet fuga incidunt.</p>

						<p>Accusamus in quasi temporibus. Atque dolorem ducimus eos esse eum excepturi fuga fugiat,
							incidunt laborum laudantium, optio pariatur provident quia quo repellat rerum sapiente?
							A accusamus amet ex fuga obcaecati!</p>
					</div>

					<h3 class="split__heading">Ševeček, Ludvík:  <em>Malba jako prostředek bytostné komunikace</em><br/>
						Nepublikovaný text, 1988, archiv autora</h3>
					<div class="show_more" id="show_more_5" aria-hidden="true">
						<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorem, ipsum modi
							nostrum omnis quaerat quasi repellat rerum veniam? Accusantium ad cum minima odio
							placeat qui quod rem reprehenderit, similique!</p>

						<p>Accusamus deserunt ipsam nobis quam reprehenderit voluptates. A asperiores aut
							consectetur deserunt eligendi fugiat laudantium nesciunt non officia, officiis provident
							quas quia rerum sunt tempore totam, velit vero voluptates voluptatibus.</p>

						<p>Dolor eos ipsa natus quae! Adipisci aperiam debitis dignissimos dolorem est
							exercitationem facere fugiat id illum incidunt ipsum nam nesciunt nihil, nobis
							perspiciatis quam reprehenderit repudiandae? Dolorem eveniet fuga incidunt.</p>

						<p>Accusamus in quasi temporibus. Atque dolorem ducimus eos esse eum excepturi fuga fugiat,
							incidunt laborum laudantium, optio pariatur provident quia quo repellat rerum sapiente?
							A accusamus amet ex fuga obcaecati!</p>
					</div>


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