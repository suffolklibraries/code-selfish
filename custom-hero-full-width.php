<?php /* Template Name: Full width hero page */ ?>

<?php get_header(); ?>

	<main id="content" role="main">

		<?php while (have_posts()) : the_post(); ?>

	    <?php if ( has_post_thumbnail() ) {?>

	        <figure class="hero-splash hero-splash-full-width hero-splash-<?php global $post; echo $post->post_name; ?>">

	            <?php the_post_thumbnail(); ?>

	            <figcaption class="hero-splash-text hero-splash-full-width-text hero-splash-text-<?php global $post; echo $post->post_name; ?>"><?php if ( has_excerpt() ) {?><?php the_excerpt(); ?><?php } ?></figcaption>

	        </figure>

	    <?php } ?>

			<div class="wrapper">

				<?php if ( is_active_sidebar( 'subnav_menu' ) ) : ?>

					<?php dynamic_sidebar( 'subnav_menu' ); ?>

				<?php endif; ?>

				<div class="g-row clearfix">

					<article class="entry bg bg-white full-width-entry full-width-entry-<?php global $post; echo $post->post_name; ?>">

						<header class="entry-header full-width-header full-width-header-<?php global $post; echo $post->post_name; ?>">

							<?php if( function_exists('breadcrumb_trail') && !is_page ('presents') ) { breadcrumb_trail(array('separator' => ' &rarr; ', 'show_browse' => 'false')); } ?>

							<h1 class="entry-title full-width-title full-width-title-<?php global $post; echo $post->post_name; ?>"><?php the_title(); ?></h1>

						</header>

						<div class="entry-content full-width-content full-width-content-<?php global $post; echo $post->post_name; ?>">

							<?php the_content(); ?>

						</div>

					</article>

				</div> <!-- end .g-row -->

			</div> <!-- end .wrapper -->

		<?php endwhile; ?>

	</main>

<?php get_footer(); ?>
