<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package APM Consulting
 */

get_header();
?>
<main>
	<section class="error-404 not-found">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="not-found-content">
						<h1 class="not-found-title">
							<?php esc_html_e( '404', 'apm' ); ?>
						</h1>
						<h3 class="not-found-title">
							<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'apm' ); ?>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();