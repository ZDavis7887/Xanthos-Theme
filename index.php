<?php
/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage xanthos
 */


get_header(); ?>
<div class='innerContainer'>
    
<section class = 'main'>

<?php if (has_post_thumbnail()) { the_post_thumbnail('revo-full-width',array('class'=>'lead')); echo "\n"; } else { echo "<img class='cover' src=".get_template_directory_uri()."/img/Cover.jpg>"; } ?>
 <div class='pane'><h1 class = 'titles'><?php the_title(); ?></h1></div>
    </section>
<section class='innerpages'>
      <div class = "row galRow">

      <div class = 'aboutSection'><?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  


 
  <?php the_content(); ?>


<!--
          <div class='col-md-3'> <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('innerExtras') ) : endif; echo "\n"; ?>
                </div>
 
-->
         
    </div><!--end post-->
   
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

<?php else : ?>
<?php endif; ?>
          
</div>
</section>
    
</div>




<?php get_footer(); ?>