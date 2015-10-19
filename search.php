<?php get_header(); ?>

	<div class="inner-wrapper">

		<div class="g-row">

			<main id="content">

				<article class="entry">

					<div class="entry-header">

						<h1 class="entry-title">Your search for &#8220;<?php echo get_search_query(); ?>&#8221;</h2>

					</div>

					<div class="entry-content"><p>Looking for a particular book, film or song(s) to borrow? Search:</p>

						<ul>
							<li><a href="http://suffolk.spydus.co.uk">Catalogue of print books, CDs and DVDs</a></li>
							<li><a href="<?php bloginfo('url'); ?>/elibrary">elibrary of ebooks and MP3s</a></li>
						</ul>

					</div>

					<script>
						(function() {
						var cx = '005184331307728575178:aigcnsbfsr0';
						var gcse = document.createElement('script');
						gcse.type = 'text/javascript';
						gcse.async = true;
						gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
							'//cse.google.com/cse.js?cx=' + cx;
						var s = document.getElementsByTagName('script')[0];
						s.parentNode.insertBefore(gcse, s);
						})();
					</script>

					<gcse:searchresults-only queryParameterName="s" linkTarget="_parent"></gcse:searchresults-only>

					<noscript>

						<p>Search this site with Google.</p>

						<form method="get" action="http://www.google.com/search" class="pure-form form-custom" role="search" id="search">

							<input type="search" name="q">
							<input type="submit" class="pure-button" value="Search">
							<input type="hidden" name="sitesearch" value="suffolklibraries.co.uk">

						</form>

					</noscript>

				</article> <!-- end .entry -->

			</main>

		</div> <!-- end .g-row -->

	</div> <!-- end .inner-wrapper -->

<?php get_footer(); ?>
