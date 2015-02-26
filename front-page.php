<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<!-- <div id="main"> -->
  <!-- <div class="top-front"> -->
  </div>
  <div id="content" class="front-margin">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
      <?php endwhile;  ?>
    <img class="fullwrap" src="/blog/wp-content/themes/germinario/imgs/bench.jpg" />
    </div>
  </div>
