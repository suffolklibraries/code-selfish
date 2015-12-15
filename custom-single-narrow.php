<?php /* Template Name: Single narrow column page */ ?>

<?php get_header(); ?>

		<main id="content" role="main">

			<?php while (have_posts()) : the_post(); ?>

				<div class="inner-wrapper">

					<?php get_template_part('inc/subnav'); ?>

					<div class="g-row clearfix">

						<article class="entry bg bg-white single-narrow-entry single-narrow-entry-<?php global $post; echo $post->post_name; ?>">

							<header class="entry-header single-narrow-header single-narrow-header-<?php global $post; echo $post->post_name; ?>">

								<?php if(function_exists('breadcrumb_trail')) { breadcrumb_trail(array('separator' => ' &rarr; ', 'show_browse' => 'false')); } ?>

								<h1 class="entry-title single-narrow-title single-narrow-title-<?php global $post; echo $post->post_name; ?>"><?php the_title(); ?>

							</header>

							<div class="entry-content single-narrow-content single-narrow-content-<?php global $post; echo $post->post_name; ?>">

								<?php if ( has_post_thumbnail() ) {?>

									<figure class="hero-splash hero-splash-single-narrow hero-splash-<?php global $post; echo $post->post_name; ?>">

										<?php the_post_thumbnail(); ?>

										<figcaption class="hero-splash-text hero-splash-single-narrow-text hero-splash-text-<?php global $post; echo $post->post_name; ?>"><?php if ( has_excerpt() ) {?><?php the_excerpt(); ?><?php } ?></figcaption>

									</figure>

								<?php } ?>

								<?php the_content(); ?>

							</div>

						</article>

					</div> <!-- end .g-row -->

				</div> <!-- end .inner-wrapper -->

			<?php endwhile; ?>

		</main>

<?php get_footer(); ?>
