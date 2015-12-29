<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>

	<main id="content" class="clearfix bg-white" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php if ( has_post_thumbnail() ) {?>

				<figure class="hero-splash hero-splash-<?php global $post; echo $post->post_name; ?>">

					<?php the_post_thumbnail(); ?>

					<figcaption class="hero-splash-text hero-splash-text-<?php global $post; echo $post->post_name; ?>"><?php if ( has_excerpt() ) {?><?php the_excerpt(); ?><?php } ?></figcaption>

				</figure>

			<?php } ?>

			<div class="wrapper">

				<?php the_content(); ?>

				<nav id="nav">

					<h1 class="hide accessibility">Navigation</h1>

					<div class="g-row">

						<div class="g-w-col4 g-w-left">

							<section class="vbox">

								<h1 class="vbox-title"><a href="https://suffolk.spydus.co.uk" class="icon icon-search">Search &amp; reserve</a></h1>

								<p class="vbox-text">Search for books, CDs &amp; DVDs and reserve for collection from your library.</p>

							</section>

						</div>

						<div class="g-w-col4 g-w-left">

							<section class="vbox">

								<h1 class="vbox-title"><a href="https://suffolk.spydus.co.uk/cgi-bin/spydus.exe/MSGTRN/OPAC/LOGINB" class="icon icon-lock">Login &amp; renew</a></h1>

								<p class="vbox-text">See your loans &amp; fines, renew titles and update your details.</p>

							</section>

						</div>

						<div class="g-w-col4 g-w-left">

							<section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-tablet" href="<?php echo get_site_url(); ?>/elibrary">eLibrary</a></h1>

		                        <p class="vbox-text">Free eBooks, eAudio, downloads, magazines &amp; streaming.</p>

		                    </section>

						</div>

					</div> <!-- end .g-row -->

					<div class="g-row">

		                <div class="g-w-col4 g-w-left">

		                    <section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-map" href="<?php echo get_site_url(); ?>/branches">Branches</a></h1>

		                        <p class="vbox-text">Branch contact details and Ipswich Enterprise + Innovation hub.</p>

		                    </section>

		                </div>

		                <div class="g-w-col4 g-w-left">

		                    <section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-info" href="<?php echo get_site_url(); ?>/help">Help using the service</a></h1>

		                        <p class="vbox-text">Guides to using the library services, costs &amp; what you can borrow.</p>

		                    </section>

		                </div>

		                <div class="g-w-col4 g-w-left">

							<section class="vbox">

								<h1 class="vbox-title"><a href="#" class="icon icon-card">Apply for a card</a></h1>

								<p class="vbox-text">Apply online to access books, music, CDs, research resources and the eLibrary.</p>

							</section>

		                </div>

		            </div> <!-- end .g-row -->

		            <div class="g-row">

		                <div class="g-w-col4 g-w-left">

							<section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-library" href="<?php echo get_site_url(); ?>/information-resources">Information resources</a></h1>

		                        <p class="vbox-text">Free access to Ancestry, Find My Past, Access to Research and many other resources.</p>

		                    </section>

		                </div>

		                <div class="g-w-col4 g-w-left">

							<section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-calendar" href="<?php echo get_site_url(); ?>/events-activities">Events &amp; activities</a></h1>

		                        <p class="vbox-text">Special events and regular activities for children &amp; older people. Free computer training.</p>

		                    </section>

		                </div>

		                <div class="g-w-col4 g-w-left">

							<section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-bus" href="<?php echo get_site_url(); ?>/community-services">Schools, mobiles, home</a></h1>

		                        <p class="vbox-text">Mobile libraries, home library service &amp; Literacy, Books and Reading Team for Schools.</p>

		                    </section>

		                </div>

		            </div> <!-- end .g-row -->

					<div class="g-row">

		                <div class="g-w-col4 g-w-left">

							<section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-book" href="<?php echo get_site_url(); ?>/reading-lists-groups-advice">Reading</a></h1>

		                        <p class="vbox-text">New in, suggestions, lists, groups and advice for children. Info on dyslexia and Irlens.</p>

		                    </section>

		                </div>

		                <div class="g-w-col4 g-w-left">

							<section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-pen" href="<?php echo get_site_url(); ?>/news">News &amp; blog</a></h1>

		                        <p class="vbox-text">Announcements, press releases and our behind the scenes blog.</p>

		                    </section>

		                </div>

						<div class="g-w-col4 g-w-left">

							<section class="vbox">

		                        <h1 class="vbox-title"><a class="icon icon-people" href="<?php echo get_site_url(); ?>/about">About us</a></h1>

		                        <p class="vbox-text">Governance, board members, jobs and documents.</p>

		                    </section>

		                </div>

		            </div> <!-- end .g-row -->

				</nav>

			</div> <!-- end .wrapper -->

		<?php endwhile; ?>

		<?php $the_query = new WP_Query( 'category_name=hot-picks&posts_per_page=6' ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<section class="content-band bg-lgrey clearfix" id="hot-picks">

					<div class="wrapper">

						<div class="g-row">

							<div class="g-w-col12 g-w-left">

								<h1 class="content-band-title">Popular</h1>

							</div>

						</div> <!-- end .g-row -->

						<div class="g-row">

							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<div class="g-w-left g-w-col2">

									<div class="vbox-box secondary">

										<?php if ( has_post_thumbnail() ) : ?>

							                <a href="<?php echo CFS()->get('catalogue_link'); ?>"><?php the_post_thumbnail(); ?></a>

										<?php endif; ?>

										<p><a href="<?php echo CFS()->get('catalogue_link'); ?>"><?php the_title(); ?></a></p>

									</div> <!-- end .vbox-box -->

								</div>

							<?php endwhile; ?>

						</div> <!-- end .g-row -->

					</div> <!-- end .wrapper -->

				</section>

			<?php endif; ?>

		<?php wp_reset_postdata(); ?>

		<section class="content-band clearfix bg-light" id="recommend">

			<div class="wrapper">

				<div class="g-row">

					<div class="g-w-col112 g-w-left">

					<h1 class="content-band-title">New in and recommendations</h1>

					</div>

				</div> <!-- end .g-row -->

				<div class="g-row">

					<?php $the_query = new WP_Query( 'category_name=book-lists&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<div class="g-w-left g-w-col3">

							<section class="vbox-box">

								<h1 class="vbox-box-title"><a href="category/book-lists">Fiction</a></h1>

								<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/book-lists"><?php the_post_thumbnail(); ?></a>

								<?php endif; ?>

							</section> <!-- end .vbox-box -->

						</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

					<?php $the_query = new WP_Query( 'category_name=film-lists&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box">

									<h1 class="vbox-box-title"><a href="category/film-lists">Films &amp; DVDs</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/film-lists"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

								</section> <!-- end .vbox-box -->

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

					<!-- Children's -->

					<?php $the_query = new WP_Query( 'category_name=childrens-book-lists&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box">

									<h1 class="vbox-box-title"><a href="category/childrens-book-lists">Children &amp; YAs</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/childrens-book-lists"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

								</section> <!-- end .vbox-box -->

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

					<!-- Non fiction -->

					<?php $the_query = new WP_Query( 'category_name=non-fiction-lists&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box">

									<h1 class="vbox-box-title"><a href="category/non-fiction-lists">Non-fiction</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/non-fiction-lists"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

								</section> <!-- end .vbox-box -->

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

				</div> <!-- end .g-row -->

				<div class="g-row">

					<!-- Music -->

					<?php $the_query = new WP_Query( 'category_name=music-lists&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box">

									<h1 class="vbox-box-title"><a href="category/music-lists">Music</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/music-lists"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

								</section> <!-- end .vbox-box -->

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

					<!-- Mental health -->

					<?php $the_query = new WP_Query( 'category_name=mental-health-lists&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box">

									<h1 class="vbox-box-title"><a href="category/mental-health-lists">Mental health</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/mental-health-lists"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

								</section> <!-- end .vbox-box -->

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

					<!-- Local interest -->

					<?php $the_query = new WP_Query( 'category_name=local-interest&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box">

									<h1 class="vbox-box-title"><a href="category/local-interest">Local interest</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/local-interest"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

								</section> <!-- end .vbox-box -->

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

					<!-- For book clubs -->

					<?php $the_query = new WP_Query( 'category_name=book-club-lists&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box">

									<h1 class="vbox-box-title"><a href="category/book-club-lists">For book clubs</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/book-club-lists"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

								</section> <!-- end .vbox-box -->

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

				</div> <!-- end .g-row -->

			</div> <!-- end .wrapper -->

		</section>

		<section class="bg-lgrey content-band clearfix" id="radio">

			<div class="wrapper">

				<div class="g-row">

					<div class="g-w-left g-w-col12">

						<h1 class="content-band-title">From our staff</h1>

					</div>

				</div> <!-- end .g-row -->

				<div class="g-row">

					<?php $the_query = new WP_Query( 'page_id=3443&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box secondary">

									<h1 class="vbox-box-title"><a href="reading-lists-groups-advice/lesleys-readers"><?php the_title(); ?></a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="reading-lists-groups-advice/lesleys-readers"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

									<p>Our monthly book discussion with Radio Suffolk's Lesley Dolphin.</p>

								</section>

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

					<div class="g-w-left g-w-col3">

						<section class="vbox-box secondary">

							<h1 class="vbox-box-title"><a href="/bookedout">Booked Out</a></h1>

			            	<a href="/bookedout"><img alt="The Booked Out team" src="wp-content/uploads/2015/11/bookedout.jpg"></a>

							<p>Our monthly books podcast from the team atm Woodbridge Library.</p>

						</section>

					</div>

					<?php $the_query = new WP_Query( 'category_name=staff-picks&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box secondary">

									<h1 class="vbox-box-title"><a href="category/staff-picks">Staff picks</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/staff-picks"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

									<p>Library staff share their recommendations.</p>

								</section>

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

					<?php $the_query = new WP_Query( 'category_name=literacy&posts_per_page=1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="g-w-left g-w-col3">

								<section class="vbox-box secondary">

									<h1 class="vbox-box-title"><a href="category/literacy">Beyond the Book</a></h1>

									<?php if ( has_post_thumbnail() ) : ?>

									<a href="category/literacy"><?php the_post_thumbnail(); ?></a>

									<?php endif; ?>

									<p>Reviews and literacy resources for parents &amp; teachers.</p>

								</section>

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

					<?php wp_reset_postdata(); ?>

				</div> <!-- end .g-row -->

			</div> <!-- end .wrapper -->

		</section>

	</main>

<?php get_footer(); ?>
