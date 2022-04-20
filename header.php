<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BCDLpurple
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<style>
		/*.bcdldropdown:hover .bcdldropdown-menu {
			display: block;*/
		}
	</style>
	<script>
		//var bcdlli = document.getElementsByClassName('bcdlhover');
		//var bcdla = bcdlli[0].firstChild;

	</script>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div id="wrapper-navbar">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bcdlpurple' ); ?></a>

		<header id="masthead" class="site-header">


		<!-- BCDL_Purple_Navwalker -->
		<nav id="bcdl-main-navigation" class="main-navigation navbar navbar-expand-md navbar-light bg-light">
			<div class="container-fluid">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$bcdlpurple_description = get_bloginfo( 'description', 'display' );
				if ( $bcdlpurple_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $bcdlpurple_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->


			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bcdl-navbar-menu" aria-controls="bcdl-navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
		    <div id="bcdl-navbar-menu" class="collapse navbar-collapse">
				<?php
				wp_nav_menu( [
							'theme_location'    => 'primary',
							'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
							'container'         => 'false',
							'walker'            => new BCDL_Purple_Navwalker(),
						] );
				?>

				<?php 
					if ( is_multisite() ): 
					$base = network_site_url(); 
						if ( is_main_site() ): //if is main site?>
		        
		        	<a class="clearlink text-decoration-none" href="<?php echo $base.'/en'; ?>">
		        	<span class="text-secondary bg-light bcdl-os">
		        		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/globe.svg' ) ?>" style="height: 1.4em">
								<span class="bcdl-osc" style="line-height:100%">EN</span>
							</span>
		        </a>
		        <?php else://elseif is main site ========================================= ?>
		        	<a class="clearlink text-decoration-none" href="<?php echo $base; ?>">
		        	<span class="text-secondary bg-light bcdl-os">
		        		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/globe.svg' ) ?>" style="height: 1.4em">
								<span class="bcdl-osc" style="line-height:100%">BG</span>
							</span>
			        </a>
		        <?php endif;//endif is main site =========================================?>
	        
	      	<?php endif; //multisite check ?>

	      	<button id="bcdl-search" type="button" class="btn btn-outline-secondary mx-3" data-bs-toggle="modal" data-bs-target="#bcdlsearchmodal">
						<svg id="i-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
								<circle cx="14" cy="14" r="12" />
								<path d="M23 23 L30 30"  />
						</svg>
					</button>

				</div>
			</div>
		</nav>
		<!-- end of BCDL_Purple_Navwalker -->

		
		</header><!-- #masthead -->
	</div> <!-- the navbar wrapper -->

	<!-- Modal -->
	<div class="modal fade" id="bcdlsearchmodal" data-bs-backdrop="true" data-bs-keyboard="true" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content">
				<div class="modal-body">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>

	

	<?php
		if ( is_home() || is_front_page() ) :
			get_template_part( 'template-parts/section', 'carousel' );
		else :
			get_template_part( 'template-parts/header', 'archive' );
		endif;
	?>