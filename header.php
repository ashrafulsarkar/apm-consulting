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
	$apm_primary_color   = cs_get_option( 'apm-primary-color', '#BD1C00' );
	$apm_secondary_color = cs_get_option( 'apm-secondary-color', '#333333' );
	$apm_text_color      = cs_get_option( 'apm-text-color', '#262626' );
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

	$apm_header_btn    = cs_get_option( 'apm-header-btn' );
	$apm_header_url    = isset( $apm_header_btn['url'] ) ? $apm_header_btn['url'] : '';
	$apm_header_text   = isset( $apm_header_btn['text'] ) ? $apm_header_btn['text'] : '';
	$apm_header_target = isset( $apm_header_btn['target'] ) ? $apm_header_btn['target'] : '';
	?>
	<header class="site-header">
		<div class="container">
			<div class="header_content">
				<div class="logo_part">
					<?php if ( ! empty( $apm_logo_url ) ) { ?>
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img class="menu_logo" src="<?php echo $apm_logo_url; ?>" alt="logo">
							</a>
						</div>
					<?php } else { ?>
						<div class="site-branding">
							<a href="<?php echo home_url(); ?>">
								<h6>
									<?php echo bloginfo( 'name' ) ?>
								</h6>
							</a>
						</div>
					<?php } ?>
				</div>
				<div class="menu_part">
					<div class="primary-menu">
						<nav id="main-nav" class="main-menu">
							<!-- mobile sidebar logo -->
							<?php
							if ( ! empty( $apm_logo_url ) ) { ?>
								<ul>
									<li class="d-block d-lg-none">
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
							<?php
							if ( $apm_header_text !== '' ) { ?>
								<ul>
									<li class="d-block d-lg-none">
										<div class="header_btn">
											<a href="<?php echo $apm_header_url; ?>"
												target="<?php echo $apm_header_target; ?>"><?php echo $apm_header_text; ?></a>
										</div>
									</li>
								</ul>
							<?php } ?>
						</nav>
					</div>
				</div>
				<?php
				if ( $apm_header_text !== '' ) { ?>
					<div class="button_part d-none d-lg-block">
						<div class="header_btn">
							<a href="<?php echo $apm_header_url; ?>"
								target="<?php echo $apm_header_target; ?>"><?php echo $apm_header_text; ?></a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</header>