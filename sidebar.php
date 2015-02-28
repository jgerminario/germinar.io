  <?php if ( !is_page_template( 'front-page.php' ) ) : ?>
   <aside class="sidebar ml-40">
    <header class="top-left top-header">
      <section class="sidebar-header-content">
        <?php get_template_part( 'logo' ); ?>
  <?php else : ?>
    <aside class="sidebar">
      <header class="top-header">
        <section class="sidebar-header-content pt-90">
  <?php endif; ?>
      <div id="socialLinksScroll">
        <?php get_template_part( 'social', 'links'); ?>
      </div>
    </section>
  </header>

	<div class="widget_area">
    <?php if ( ! is_page_template( 'front-page.php' ) ) : ?>
		 <?php dynamic_sidebar( 'sidebar' ); ?>
    <?php endif; ?>
	</div>
</aside>
<script>
	jQuery(window).scroll(function(){
		jQuery('.fixed').css('left',-jQuery(window).scrollLeft());
	});
</script>
