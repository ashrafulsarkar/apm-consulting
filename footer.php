<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package APM Consulting
 */

?>
<footer class="site-footer">
	<div class="footer-top">
		<div class="container">
			<div class="footer_wraper">
				<div class="footer_logo_part">
					<div class="footer_logo">
						<?php
						$apm_footer_logo     = cs_get_option( 'apm-footer-logo' );
						$apm_footer_logo_url = isset( $apm_footer_logo['url'] ) ? $apm_footer_logo['url'] : '';
						if ( ! empty( $apm_footer_logo_url ) ) { ?>
							<img src="<?php echo $apm_footer_logo_url; ?>" alt="logo">
						<?php } ?>
					</div>
					<div class="social_part">
						<ul>
							<?php
							$apm_social_icons = cs_get_option( 'apm-social-icons-list' );
							if ( is_array( $apm_social_icons ) ) {
								for ( $i = 0; $i < count( $apm_social_icons ); $i++ ) { ?>
									<li>
										<a href="<?php echo esc_url( $apm_social_icons[ $i ]['icon-link'] ); ?>"
											target="_blank">
											<i class="<?php echo esc_attr( $apm_social_icons[ $i ]['icon'] ); ?>"></i>
										</a>
									</li>
								<?php }
							} ?>
						</ul>
					</div>
				</div>
				<div class="footer_menu_part">
					<?php
					wp_nav_menu( array(
						'theme_location' => "footer_menu",
						'container'      => "ul",
					) );
					?>
				</div>
				<div class="footer_address_part">
					<?php $apm_address = cs_get_option( 'apm-address' ); ?>
					<p><?php echo $apm_address; ?></p>
				</div>
				<div class="footer_contact_part">
					<?php
					$apm_email = cs_get_option( 'apm-email' );
					$apm_phone = cs_get_option( 'apm-phone' );
					if ( $apm_email ) { ?>
						<a href="mailto:<?php echo $apm_email; ?>"><?php echo $apm_email; ?></a>
					<?php }
					if ( $apm_email ) { ?>
						<a href="tel:<?php echo $apm_phone; ?>"><?php echo 't: '.$apm_phone; ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="copyright">
						<?php
						$apm_copyright = cs_get_option( 'apm-copyright' );
						if ( $apm_copyright ) { ?>
							<p><?php echo $apm_copyright; ?></p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>