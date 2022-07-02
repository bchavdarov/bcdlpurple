<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BCDLpurple
 */

?>

<!--Footer section-->
<section id="footer" class="">
	<div class="wrapper bcdl-purple py-4" id="wrapper-footer">

		<div class="container">

			<div class="row text-light">

				<div class="col-md-6" data-aos="zoom-in-right" data-aos-delay="350" data-aos-anchor-placement="top-bottom">

					<h5 class=""><?php _e( 'Our location', 'bcdlpurple' ); ?></h5>
					
				  <div class="map-responsive" style="overflow:hidden; padding-bottom:70%; position:relative; height:0;">
						<!--
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2941.8560425753485!2d27.480405215215942!3d42.49461303458672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a694936f93c5d9%3A0xfae3adeaf90618a2!2z0JzQvtGA0YHQutCwINCz0YDQsNC00LjQvdCw!5e0!3m2!1sbg!2sbg!4v1656759658774!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						-->

						<?php if ( is_active_sidebar( 'footermap' ) ) : ?>
							<div id="footer-widget" class="primary-sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'footermap' ); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>

					</div>

				</div><!--col end -->
				<?php 
					$sectFooterTitle01 = get_theme_mod( 'bcdl-section-footer01' );
					$sectFooterContent01 = get_theme_mod( 'bcdl-content-footer01' );
				?>
				<div class="col-md-3 footermenu px-5 py-4 py-md-0">
					<h5 class="pt-3"><?php echo $sectFooterTitle01; ?></h5>
					<div class="text-light">
						<?php echo $sectFooterContent01; ?>
					</div>

					<?php if ( is_active_sidebar( 'footerwdg-1' ) ) : ?>
						<div id="footer-widget" class="primary-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'footerwdg-1' ); ?>
						</div><!-- #primary-sidebar -->
					<?php endif; ?>

				</div><!--col end -->
				<div class="col-md-3 py-4 py-md-0">
					
					<?php if ( is_active_sidebar( 'footerwdg-2' ) ) : ?>
						<div id="footer-widget" class="primary-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'footerwdg-2' ); ?>
						</div><!-- #primary-sidebar -->
					<?php endif; ?>

				</div><!--col end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- wrapper end -->
	<div class="bcdl-purple text-muted">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p class="d-block text-md-left text-center"><?php _e( 'All rights reserved', 'bcdlpurple' ); ?>, &copy; <?php echo date("Y"); ?>, <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
				</div>
				<div class="col-md-4">
					<p class="d-block text-md-right text-center" style="font-family: 'Open Sans Condensed', sans-serif;"><a href="https://bchavdarov.github.io/bcdlab/" target="_blank">Developed by bchavdarov @ BCDLab</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Footer section-->