	<div class="widget_area">
		 <?php dynamic_sidebar( 'sidebar' ); ?>
	</div>
</div>
<script>
	jQuery(window).scroll(function(){
		jQuery('.fixed').css('left',-jQuery(window).scrollLeft());
	});
</script>
