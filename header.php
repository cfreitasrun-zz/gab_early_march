<?php
/**
 *
 * @package lavelle
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Navigation -->
		<div class="site-heading">
		<nav class="navbar" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
						<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'lavelle' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php lavelle_the_custom_logo(); ?>
				</div>
				<nav class="main-navigation" role="navigation">
									<?php lavelle_header_menu(); // main navigation ?>
							<div class="social-navigation" role="navigation">
									<?php if ( has_nav_menu( 'social-menu' ) ) : ?>

									<?php wp_nav_menu( array(
													'theme_location'  => 'social-menu',
													'depth'           => 1,
													'container_class' => 'social-menu-wrap',
													'menu_class'      => 'social-menu',
													'link_before'     => '<span>',
													'link_after'      => '</span>'
												) ); ?>
							</div><!-- #social-navigation -->
									<?php endif; ?>
				</nav>


		<!-- End: Navigation -->
<div class="slider">


		<?php lavelle_slider(); ?>

				<?php
					global $post;
					if( is_singular() && get_post_meta($post->ID, 'site_layout', true) ){
						$layout_class = get_post_meta($post->ID, 'site_layout', true);
					}
					else{
						$layout_class = get_theme_mod( 'lavelle_sidebar_position' );
					}
					if ((isset($layout_class)) && ($layout_class == '')) $layout_class = "mz-sidebar-right";
				?>
</div>
			<!-- BEGIN .container -->
			<div class="container <?php echo esc_attr($layout_class); ?>">

			<div id="content">
				<div class="row">
					<div class="<?php echo esc_attr(lavelle_content_bootstrap_classes()); ?>">
