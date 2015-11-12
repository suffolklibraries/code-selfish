<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ) {?>

		<figure class="hero-splash hero-splash-<?php global $post; echo $post->post_name; ?>">

			<?php the_post_thumbnail(); ?>

			<figcaption class="hero-splash-text hero-splash-text-<?php global $post; echo $post->post_name; ?>"><?php if ( has_excerpt() ) {?><?php the_excerpt(); ?><?php } ?></figcaption>

		</figure>

	<?php } ?>

	<div class="wrapper">

		<div class="g-row">

			<div class="g-w-col8 g-w-left">

				<main id="content">

					<article class="entry">

						<div class="entry-header">

							<h1 class="entry-title"><?php the_title(); ?>

						</div>

						<div class="entry-content">

							<?php the_content(); ?>

						</div>

					</article>

				</main>

			</div>

	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
