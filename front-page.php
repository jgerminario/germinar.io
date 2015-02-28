<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<aside class="sidebar">
    <header class="top-left top-header">
      <section class="sidebar-header-content">
          <?php get_template_part( 'logo' ); ?>
          <div class="display-social">
          <?php get_template_part( 'social', 'links'); ?>
          </div>
        </section>
      </header>
    </aside> 
    <div class="parallax right-section">
      <div class="top-cap">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php /* get_template_part( 'content', 'page' ); */ ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
              <?php endif; ?>
              <h1 class="entry-title home-title"><a href="#portfolio"><?php the_title(); ?></a></h1>
            </header>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          </article>
        <?php endwhile;  ?>
      </div>
      <div class="img-wrapper">
        <img class="fullwrap" src="<?php echo get_template_directory_uri(); ?>/imgs/bench.jpg" />
      </div>
      <div class="home-content">
        <?php get_sidebar(); ?>
        <section class="content right-section pt-90">
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae veniam illum ea atque sunt natus similique voluptatem distinctio dolor aliquid iste corporis nostrum beatae laboriosam tempore consequuntur, blanditiis, aut aliquam.</div>
            <div>Optio, voluptate possimus? Inventore quod repudiandae voluptates ea dolorum laboriosam maiores, iusto, alias. Labore sed nostrum perferendis nemo sequi quibusdam provident! Harum perspiciatis doloremque aspernatur ex, tenetur quam, quo fugit.</div>
            <div>Aliquam, expedita amet magni eius odit aperiam earum labore, molestias maxime itaque reiciendis esse ut quibusdam harum aliquid odio quis ullam. Incidunt necessitatibus, sunt placeat aliquam fuga totam laboriosam sequi?</div>
            <div>Cupiditate esse voluptates, itaque assumenda quis atque, doloremque quisquam deserunt, facere asperiores architecto dolorem. Eos eveniet harum est suscipit, quibusdam dolorum dolor possimus adipisci, optio debitis, cumque molestiae quidem quas.</div>
            <div>Pariatur eveniet officia, odit commodi cumque quam praesentium, quo autem, corrupti magni fugit quibusdam perspiciatis saepe! Mollitia, quaerat, recusandae. Quo aut nisi maiores labore culpa nemo consequatur amet itaque nostrum?</div>
            <div>Assumenda ad possimus hic fuga neque ducimus, labore iste nulla commodi enim voluptates fugiat, est saepe consequatur amet impedit provident aspernatur fugit minus itaque earum ullam, minima doloribus porro! Cupiditate?</div>
            <iframe class="full-scr-pdf" src="https://docs.google.com/document/d/1tsf2Nd3_qiyhpUoaEfYs-5iZ5OyUsx0axqvWrw3iScc/pub?embedded=true"></iframe>
            <h2><a class="mobile-pdf" href="https://drive.google.com/file/d/0B4oYHWoyxHvORmY2bTFEUUVyQ2c/view?usp=sharing" target="_blank">View resume »</a></h2>
          <a name="portfolio">Hello</a>
          
        </section>
      </div>
</main>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js" type="text/javascript"></script>
<?php get_footer(); ?>

