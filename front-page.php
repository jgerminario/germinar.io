<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
  <div id="content" class="front-margin">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
      <?php endwhile;  ?>
    <img class="fullwrap" src="<?php echo get_template_directory_uri(); ?>/imgs/bench.jpg" />
    </div>
    </div>
  </div>