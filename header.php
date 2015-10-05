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

	<header class="topbar topbar-purple" id="site-header">

		<div class="wrapper">

			<div class="g-row">

				<div class="g-w-col2 g-w-left">

					<nav id="nav">

						<ul class="h-nav">

							<li class="h-nav-item h-nav-item-strong-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="h-nav-link icon icon-home">Suffolk Libraries</a></li>
							<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/" class="h-nav-link icon icon-search">Search &amp; reserve</a></li>
							<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/cgi-bin/spydus.exe/MSGTRN/OPAC/LOGINB" class="h-nav-link icon icon-lock">Login &amp; renew</a></li>
							<li class="h-nav-item"><a href="https://suffolk.spydus.co.uk/cgi-bin/spydus.exe/MSGTRN/OPAC/JOIN" class="h-nav-link icon icon-card">Apply for a card</a></li>

						</ul>

					</nav>

				</div>

				<div class="g-w-col1 g-w-right g-w-last">

					<form id="searchform" class="form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

						<input id="s" type="search" name="s" value=""></input>
						<input id="searchsubmit" type="submit" name="s" class="button" value="Search"></input>

					</form>

				</div>

			</div> <!-- end .g-row -->

		</div> <!-- end .wrapper -->

	</header>
