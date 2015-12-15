<?php get_header(); ?>

	<div class="wrapper">

		<div class="g-row">

			<?php if ( have_posts() ) : ?>

				<div class="g-w-left g-w-col8">

					<main id="content">

						<article class="entry bg bg-white">

							<header class="entry-header">

								<?php

									the_archive_title( '<h1 class="entry-title">', '</h1>' );
									the_archive_description( '<div class="panel clearfix"><p class="secondary">', '</p></div>' );

								?>

							</header> <!-- .entry-header -->

							<?php while ( have_posts() ) : the_post(); ?>

								<article class="slot">

									<header class="slot-header">

										<h1 class="slot-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

										<p class="slot-meta secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time></p>

										<?php if ( has_post_thumbnail() ) {?>

											<figure class="hero-splash hero-splash-in-entry hero-splash-in-entry-text hero-splash-<?php global $post; echo $post->post_name; ?> slot-pic">

												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

											</figure>

										<?php } ?>

									</header>

									<div class="slot-excerpt">

										<?php the_excerpt(); ?>

									</div>

								</article>

							<?php endwhile; ?>

							<?php the_posts_pagination( array(

								'prev_text'          => __( '&larr; Previous', 'cs' ),
								'next_text'          => __( 'Next &rarr;', 'cs' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'cs' ) . ' </span>',

							) );

							?>

						<?php else : ?>

							<p>No posts.</p>

						<?php endif; ?>

					</article> <!-- end .entry -->

				</main>

			</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
