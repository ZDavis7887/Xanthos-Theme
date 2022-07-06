<?php
/**
 * Template Name: Home
 *
 *
 * @package WordPress
 * @subpackage xanthos
 */

get_header(); ?>
 
<div class = 'clearfix'></div>
<?php echo do_shortcode('[metaslider id="341"]'); ?>
<!--<div class='mainLogo'><img style='margin:auto' src='http://neovision.zdvisions.com/wp-content/uploads/2019/04/zdv2019.png'></div>-->
<div class = 'container revoContain'>
    <section>
    
    <div class = 'row callToActions g-row'>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('CTAs') ) : endif; echo "\n"; ?>
    
            </div>
    </section>

    </div>
<div class='latest'><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('latest') ) : endif; echo "\n"; ?></div>
<?php get_footer(); ?>


