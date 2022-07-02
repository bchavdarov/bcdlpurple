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
	<div class="wrapper bcdl-blue py-4" id="wrapper-footer">

		<div class="container">

			<div class="row text-light">

				<div class="col-md-6" data-aos="zoom-in-right" data-aos-delay="350" data-aos-anchor-placement="top-bottom">

					<h5 class=""><?php _e( 'Our location', 'bcdlpurple' ); ?></h5>
					
				  <div class="map-responsive" style="overflow:hidden; padding-bottom:70%; position:relative; height:0;">
				  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2941.888283724009!2d27.46908561523397!3d42.493927634629955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a694c751f4b145%3A0x6113076f503542c1!2z0KHQtdC80L7QsiDQodC_0LXQtCDQldCe0J7QlA!5e0!3m2!1sbg!2sbg!4v1620838290802!5m2!1sbg!2sbg" width="600" height="400" allowfullscreen style="border:0; left:0; top:0; height:100%; position:absolute;"></iframe>
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
					<h5 class="pt-3"><?php _e( 'Contacts', 'bcdlpurple' ); ?></h5>
					<div class="text-light">
						<p><?php _e( 'Semov Sped Ltd', 'bcdlpurple' ); ?></p>
						<p><?php echo __( 'Burgas', 'bcdlpurple' ).", 8000"; ?><br>
						<?php echo  __('10 Apostol Karamitev str.', 'bcdlpurple'); ?></p>
						<p>
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-forward" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
							</svg>
							&nbsp;0899 89 76 26</p>
						<p>
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-forward" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
							</svg>
							&nbsp;0899 89 76 29</p>
						<p>
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
							</svg>
							&nbsp;<a href="mailto:zdimitrov@eilfix-bg.com">zdimitrov@eilfix-bg.com</a>
						</p>
					</div>

				</div><!--col end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- wrapper end -->
	<div class="bcdl-blue text-muted">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p class="d-block text-md-left text-center"><?php _e( 'All rights reserved', 'bcdlpurple' ); ?>, &copy; <?php echo date("Y"); ?>, <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
				</div>
				<div class="col-md-4">
					<p class="d-block text-md-right text-center" style="font-family: 'Open Sans Condensed', sans-serif;"><a href="https://bchavdarov.github.io/bcdlab/" target="_blank">Developed by BCDLab</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Footer section-->