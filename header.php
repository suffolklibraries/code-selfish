<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<title><?php wp_title(); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header class="topbar topbar-purple clearfix" id="site-header">

		<div class="g-row">

			<div class="g-w-left g-w-col4">

				<ul class="h-nav topbar-nav">

					<li class="h-nav-item"><h1 class="topbar-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="icon icon-home">Suffolk Libraries</a></h1></li>
					<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/" class="h-nav-link icon icon-search">Search &amp; reserve</a></li>
					<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/cgi-bin/spydus.exe/MSGTRN/OPAC/LOGINB" class="h-nav-link icon icon-lock">Login &amp; renew</a></li>
					<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/cgi-bin/spydus.exe/MSGTRN/OPAC/JOIN" class="h-nav-link icon icon-card">Apply for a card</a></li>
					<li class="h-nav-item"><a href="#" class="h-nav-link icon icon-info">Help</a></li>
					<li class="h-nav-item"><a href="#" class="h-nav-link icon icon-phone">Contact</a></li>

				</ul>

			</div>

			<div class="g-w-right g-w-col2 g-w-last text-w-right">

				<form id="searchform" class="pure-form pure-form-custom" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

					<input id="s" type="search" name="s" value=""></input>
					<input id="searchsubmit" type="submit" name="s" class="pure-button pure-button-custom" value="Search"></input>

				</form>

			</div>

		</div> <!-- end .g-row -->

	</header>
