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
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="copyright">
					<?php
					$apm_copyright = cs_get_option( 'apm-copyright' );
					if ( $apm_copyright ) { ?>
						<p><?php echo $apm_copyright;?></p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>