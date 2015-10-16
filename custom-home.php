<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>

		<main id="content" class="clearfix" role="main">

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

			                <div class="g-w-col2 g-w-left">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-info" href="#">Branches</a></h1>

			                        <p class="vbox-text">Branch contact details and Ipswich Enterprise + Innovation hub.</p>

			                    </section>

			                </div>

			                <div class="g-w-col2 g-w-left">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-bus" href="#">Help using the service</a></h1>

			                        <p class="vbox-text">Guides to using the library services, costs &amp; what you can borrow.</p>

			                    </section>

			                </div>

			                <div class="g-w-col2 g-w-left g-w-last">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-tablet" href="#">eLibrary</a></h1>

			                        <p class="vbox-text">Free eBooks, eAudio, downloads, magazines &amp; streaming.</p>

			                    </section>

			                </div>

			            </div> <!-- end .g-row -->

			            <div class="g-row">

			                <div class="g-w-col2 g-w-left">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-calendar" href="#">Events &amp; activities</a></h1>

			                        <p class="vbox-text">Special events and regular activities for children &amp; older people. Free computer training.</p>

			                    </section>

			                </div>

			                <div class="g-w-col2 g-w-left">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-book-open" href="#">Reading</a></h1>

			                        <p class="vbox-text">New in, suggestions, lists, groups and advice for children. Info on dyslexia and Irlens.</p>

			                    </section>

			                </div>

			                <div class="g-w-col2 g-w-left g-w-last">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-newspaper" href="#">News &amp; blog</a></h1>

			                        <p class="vbox-text">Announcements, press releases and our behind the scenes blog.</p>

			                    </section>

			                </div>

			            </div> <!-- end .g-row -->

						<div class="g-row">

			                <div class="g-w-col2 g-w-left">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-info" href="#">Information resources</a></h1>

			                        <p class="vbox-text">Free access to Ancestry, Find My Past, Access to Research and many other resources.</p>

			                    </section>

			                </div>

			                <div class="g-w-col2 g-w-left">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-bus" href="#">Community services</a></h1>

			                        <p class="vbox-text">Mobile libraries, home library service &amp; schools library service.</p>

			                    </section>

			                </div>

			                <div class="g-w-col2 g-w-left g-w-last">

			                    <section class="vbox">

			                        <h1 class="vbox-title"><a class="vbox-link vbox-link-tablet" href="#">eLibrary</a></h1>

			                        <p class="vbox-text">Free eBooks, eAudio, downloads, magazines &amp; streaming.</p>

			                    </section>

			                </div>

			            </div> <!-- end .g-row -->

					</nav>

				</div>

			<?php endwhile; ?>

		</main>

<?php get_footer(); ?>
