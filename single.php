<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="wrapper">

		<div class="g-row">

			<div class="g-w-col8 g-w-left">

				<?php if ( is_active_sidebar( 'subnav_menu' ) ) : ?>

					<?php dynamic_sidebar( 'subnav_menu' ); ?>

				<?php endif; ?>

				<main id="content">

					<article class="entry bg bg-white">

						<header class="entry-header">

							<?php if(function_exists('breadcrumb_trail')) { breadcrumb_trail(array('separator' => ' &rarr; ', 'show_browse' => 'false')); } ?>

							<h1 class="entry-title"><?php the_title(); ?></h1>

						</header>

						<div class="entry-content">

							<?php if ( has_post_thumbnail() ) {?>

								<figure class="hero-splash hero-splash-in-entry hero-splash-<?php global $post; echo $post->post_name; ?>">

									<?php the_post_thumbnail(); ?>

									<figcaption class="hero-splash-text hero-splash-in-entry-text hero-splash-text-<?php global $post; echo $post->post_name; ?>"><?php if ( has_excerpt() ) {?><?php the_excerpt(); ?><?php } ?></figcaption>

								</figure>

							<?php } ?>

							<?php the_content(); ?>

						</div>

						<footer class="entry-footer">

								<p class="entry-meta secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time></p>

						</footer>

					</article>

				</main>

			</div>

	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
