<?php get_header(); ?>

	<main id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="inner-wrapper">

				<article <?php post_class( 'bg bg-white') ?> id="post-<?php the_ID(); ?>">

					<div class="g-row">

						<div class="g-w-col12">

							<header class="entry-header single-narrow-header single-narrow-header">

								<?php if(function_exists('breadcrumb_trail')) { breadcrumb_trail(array('separator' => ' &rarr; ', 'show_browse' => 'false')); } ?>

								<h1 class="entry-title single-narrow-title single-narrow-title"><?php the_title(); ?></h1>

							</header>

						</div>

					</div> <!-- end .g-row -->

					<div class="g-row">

						<div class="entry-content single-narrow-content single-narrow-content">

							<div class="g-w-col12">

								<?php

									// check if the post has a Post Thumbnail assigned to it.
									if ( has_post_thumbnail() ) {
										echo "<figure>";
										the_post_thumbnail();
										echo "<figcaption class='secondary'><p>";
										echo get_post(get_post_thumbnail_id())->post_excerpt;
										echo "</p></figcaption>";
										echo "</figure>";
									}

								?>

								<?php the_content(); ?>

								<section class="content-band" id="library-content">

										<h1 class="content-band-title">Special events</h1>

										<?php echo EM_Events::output(array('limit'=>30, 'location'=>$EM_Location->location_id, 'pagination'=>1)); ?>

								</section>

							</div>

						</div> <!-- end entry-content style -->

					</div> <!-- end .g-row -->

				</article>

			</div>  <!-- end .inner-wrapper -->

		<?php endwhile; // End the loop ?>

	</main>

<?php get_footer(); ?>
