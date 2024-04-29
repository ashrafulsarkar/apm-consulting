<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package APM Consulting
 */

?>
<div class="col-lg-4 flife-post-part">
	<article id="post-<?php the_ID(); ?>">
		<?php apm_post_thumbnail(); ?>
		<div class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			endif;
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					apm_posted_on();
					apm_posted_by();
					?>
				</div>
			<?php endif; ?>
		</div>
		<div class="entry-content">
			<?php
			the_excerpt();
			?>
		</div>
	</article>
</div>