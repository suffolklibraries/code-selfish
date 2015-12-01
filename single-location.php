<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="wrapper">

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<div class="g-row">

					<div class="g-w-col12">

						<header>

							<?php if(function_exists('breadcrumb_trail')) {

								breadcrumb_trail(array('separator' => ' &rarr; ', 'show_browse' => 'false'));

							}

							?>

							<h1 class="entry-title"><?php the_title(); ?></h1>

						</header>

					</div>

				</div> <!-- end .g-row -->

				<div class="g-row">

					<div class="entry-content">

						<div class="g-w-col6 g-w-left">

							<section class="content-band">

								<h1 class="content-band-title">Information</h1>

								<?php

									// check if the post has a Post Thumbnail assigned to it.
									if ( has_post_thumbnail() ) {
										echo "<figure>";
										the_post_thumbnail();
										echo "<figcaption class='header-caption'><p>";
										echo get_post(get_post_thumbnail_id())->post_excerpt;
										echo "</p></figcaption>";
										echo "</figure>";
									}

								?>

								<p><strong>Free wifi available</strong></p>

								<?php the_content(); ?>

							</section>

							<section class="content-band">

								<h1 class="content-band-title">Special events</h1>

								<?php echo EM_Events::output(array('limit'=>30, 'location'=>$EM_Location->location_id, 'pagination'=>1)); ?>

							</section>

						</div>

					</div> <!-- end .g-row -->

				</div>

			</article>

		</div>

	<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
