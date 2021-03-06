<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="accessibility hide">

		<ul>

			<li><a href="#content">Skip to content</a></li>

			<?php if ( is_front_page() ) {?>

			<li><a href="#nav">Skip to main navigation menu</a></li>

			<?php } ?>

			<li><a href="#uni-nav">Skip to tools menu</a></li>

		</ul>

	</div>

	<header class="topbar topbar-purple" id="site-header">

		<div class="g-row">

			<nav id="uni-nav">

				<ul class="h-nav topbar-nav clearfix">

					<li class="h-nav-item"><h1 class="topbar-title"><a class="h-nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="weight-semib">Suffolk</span> <span class="weight-normal">Libraries</span></a></h1></li>

					<?php if ( ! is_front_page() ) {?>

						<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/" class="h-nav-link icon icon-search-white">Search &amp; reserve</a></li>
						<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/cgi-bin/spydus.exe/MSGTRN/OPAC/LOGINB" class="h-nav-link icon icon-lock-white">Login &amp; renew</a></li>
						<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/cgi-bin/spydus.exe/MSGTRN/OPAC/JOIN" class="h-nav-link icon icon-card-white">Apply for a card</a></li>
						<li class="h-nav-item"><a href="#" class="h-nav-link icon icon-info-white">Help</a></li>
						<li class="h-nav-item"><a href="#" class="h-nav-link icon icon-phone-white">Contact</a></li>

					<?php } ?>

					<?php if ( is_front_page() ) {?>

						<li class="h-nav-item"><a href="tel:01473263838" class="h-nav-link icon icon-phone-white">01473 263838</a></li>
						<li class="h-nav-item"><a href="mailto:help@suffolklibraries.co.uk" class="h-nav-link icon icon-email-white">help@suffolklibraries.co.uk</a></li>
						<li class="h-nav-item"><a href="http://twitter.com/suffolklibrary" class="h-nav-link icon icon-twitter-white">Twitter</a></li>
						<li class="h-nav-item"><a href="http://facebook.com/suffolklibraries" class="h-nav-link icon icon-facebook-white">Facebook</a></li>

					<?php } ?>

					<li class="h-nav-item">

						<form id="searchform" class="pure-form pure-form-custom" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

							<input id="s" type="search" name="s" value=""></input>
							<input id="searchsubmit" type="submit" class="pure-button pure-button-custom" value="Search"></input>

						</form>

					</li>

				</ul>

			</nav> <!-- end #uni-nav -->

		</div> <!-- end .g-row -->

	</header>
