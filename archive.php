<?php get_header(); ?>

	<div class="inner-wrapper">

		<div class="g-row">

			<?php if ( have_posts() ) : ?>

				<main id="content">

					<article class="entry">

						<header class="entry-header">

							<?php

								the_archive_title( '<h1 class="entry-title">', '</h1>' );
								the_archive_description( '<p class="secondary">', '</div>' );

							?>

						</header> <!-- .entry-header -->

						<?php while ( have_posts() ) : the_post(); ?>

							<article class="slot">

								<header class="slot-header">

									<h1 class="slot-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

									<p class="slot-meta secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time></p>

								</header>

								<div class="slot-excerpt">

									<?php the_excerpt(); ?>

								</div>

							</article>

						<?php endwhile; ?>

						<?php the_posts_pagination( array(

							'prev_text'          => __( 'Previous page', 'cs' ),
							'next_text'          => __( 'Next page', 'cs' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'cs' ) . ' </span>',

						) );

						?>

					<?php else : ?>

						<p>No posts.</p>

					<?php endif; ?>

				</article> <!-- end .entry -->

			</main>

		</div> <!-- end .g-row -->

	</div> <!-- end .wrapper -->

<?php get_footer(); ?>
