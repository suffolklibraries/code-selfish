<?php /* Template Name: Full width page */ ?>

<?php get_header(); ?>

		<main id="content" class="site-main" role="main">

			<?php while (have_posts()) : the_post(); ?>

				<?php if ( has_post_thumbnail() ) {?>

					<figure class="hero-splash hero-splash-<?php global $post; echo $post->post_name; ?>">

						<?php the_post_thumbnail(); ?>

						<figcaption class="hero-splash-text hero-splash-text-<?php global $post; echo $post->post_name; ?>"><?php if ( has_excerpt() ) {?><?php the_excerpt(); ?><?php } ?></figcaption>

					</figure>

				<?php } ?>

				<div class="wrapper">

					<div class="g-row">

						<article class="entry">

							<div class="entry-header">

								<h1 class="entry-title full-width-title full-width-title-<?php global $post; echo $post->post_name; ?>"><?php the_title(); ?>

							</div>

							<div class="entry-content full-width-content full-width-content-<?php global $post; echo $post->post_name; ?>">

								<?php the_content(); ?>

							</div>

						</article>

					</div> <!-- end .g-row -->

				</div> <!-- end .wrapper -->

			<?php endwhile; ?>

		</main>

<?php get_footer(); ?>
