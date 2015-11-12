		<footer id="footer" class="site-footer" >

			<div class="wrapper">

				<div class="g-row clearfix secondary">

					<div class="g-w-left g-w-col4">

						<?php if ( is_active_sidebar( 'footer_area_one' ) ) : ?>

							<?php dynamic_sidebar( 'footer_area_one' ); ?>

						<?php endif; ?>

					</div>

					<div class="g-w-left g-w-col4">

						<?php if ( is_active_sidebar( 'footer_area_two' ) ) : ?>

							<?php dynamic_sidebar( 'footer_area_two' ); ?>

						<?php endif; ?>

					</div>

					<div class="g-w-left g-w-col4">

						<?php if ( is_active_sidebar( 'footer_area_three' ) ) : ?>

							<?php dynamic_sidebar( 'footer_area_three' ); ?>

						<?php endif; ?>

					</div>

				</div>

			</div>

		</footer><!-- .site-footer -->

		<?php wp_footer(); ?>

	</body>

</html>
