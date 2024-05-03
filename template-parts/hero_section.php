<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package APM Consulting
 */

?>
<?php if ( ! is_front_page() ) :
    $apm_title = 'page-title';
    if(is_single()){
        $apm_title = 'post-title';
    }
?>
<section class="apm-hero" style="background-image: url(<?php echo APM_ROOT_IMG.'/header-bg.svg'?>)">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="site-title">
                    <h1 class="<?php echo $apm_title; ?>"><?php single_post_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>