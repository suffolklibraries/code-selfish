<?php /* Template Name: Single narrow column page */ ?>

<?php get_header(); ?>

		<main id="content" role="main">

			<?php while (have_posts()) : the_post(); ?>

				<?php if ( has_post_thumbnail() ) {?>

					<figure class="hero-splash hero-splash-<?php global $post; echo $post->post_name; ?>">

						<?php the_post_thumbnail(); ?>

						<figcaption class="hero-splash-text hero-splash-text-<?php global $post; echo $post->post_name; ?>"><?php if ( has_excerpt() ) {?><?php the_excerpt(); ?><?php } ?></figcaption>

					</figure>

				<?php } ?>

				<div class="wrapper">

					<div class="g-row clearfix">

                        <div class="inner-wrapper">

    						<article class="entry single-narrow-entry single-narrow-entry-<?php global $post; echo $post->post_name; ?>">

    							<div class="entry-header single-narrow-header single-narrow-header-<?php global $post; echo $post->post_name; ?>">

    								<h1 class="entry-title single-narrow-title single-narrow-title-<?php global $post; echo $post->post_name; ?>"><?php the_title(); ?>

    							</div>

    							<div class="entry-content single-narrow-content single-narrow-content-<?php global $post; echo $post->post_name; ?>">

    								<?php the_content(); ?>

    							</div>

    						</article>

                        </div> <!-- end .inner-wrapper -->

					</div> <!-- end .g-row -->

				</div> <!-- end .wrapper -->

			<?php endwhile; ?>

		</main>

<?php get_footer(); ?>