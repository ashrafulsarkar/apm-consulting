<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package APM Consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	$apm_primary_color   = cs_get_option( 'apm-primary-color', '#313235' );
	$apm_secondary_color = cs_get_option( 'apm-secondary-color', '#292A2D' );
	$apm_text_color      = cs_get_option( 'apm-text-color', '#000000' );
	?>
	<style>
		:root {
			--site_primary_color:
				<?php echo $apm_primary_color; ?>
			;
			--site_secondary_color:
				<?php echo $apm_secondary_color; ?>
			;
			--site_text_color:
				<?php echo $apm_text_color; ?>
			;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	wp_body_open();
	$apm_logo     = cs_get_option( 'apm-header-logo' );
	$apm_logo_url = isset( $apm_logo['url'] ) ? $apm_logo['url'] : '';
	?>
	<header>
		<div class="header-image">
			<img src="<?php echo APM_ROOT_IMG . '/header.png'?>" alt="">
		</div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-4 col-6">
					<?php if ( ! empty( $apm_logo_url ) ) { ?>
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img class="menu_logo" src="<?php echo $apm_logo_url; ?>" alt="logo">
							</a>
						</div>
					<?php } else { ?>
						<div class="site-branding">
							<a href="<?php echo home_url(); ?>">
								<h2>
									<?php echo bloginfo( 'name' ) ?>
								</h2>
							</a>
						</div>
					<?php } ?>
				</div>
				<div class="col-sm-8 col-6">
					<div class="primary-menu">
						<nav id="main-nav" class="main-menu">
							<!-- mobile sidebar logo -->
							<?php
							if( ! empty( $apm_logo_url ) ){ ?>
								<ul>
									<li class="d-block d-sm-none">
										<div class="logo mobile-nav">
											<img src="<?php echo $apm_logo_url; ?>" alt="logo">
										</div>
									</li>
								</ul>
							<?php } ?>
							<!-- main nav menu -->
							<?php
							wp_nav_menu( array(
								'theme_location' => "main_menu",
								'container'      => "ul",
							) );
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>