<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package APM Consulting
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php apm_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'apm' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>