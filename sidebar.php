<!-- <div id="sidebar">
	<div class="fixed">
		<div class="logo">
			<a class="img" href="/">
				<img src="/blog/wp-content/themes/germinario/imgs/germinario.png" alt="germinar.io">
			</a>
		</div>
		<ul class="sidelinks">
			<li><a href="#">about</a></li>
			<li><a href="#">portfolio</a></li>
			<li><a href="#">blog</a></li>
		</ul>
		<div class="social">
			<a href="http://www.twitter.com/jgerminario"><img src="/blog/wp-content/themes/germinario/imgs/twitter.png" onmouseover="this.src='/blog/wp-content/themes/germinario/imgs/twitter_gr.png'" onmouseout="this.src='/blog/wp-content/themes/germinario/imgs/twitter.png'" alt="Twitter"></a>
			<a href="http://www.linkedin.com/pub/jesse-germinario/15/163/b86/"><img onmouseover="this.src='/blog/wp-content/themes/germinario/imgs/linkedin_gr.png'" onmouseout="this.src='/blog/wp-content/themes/germinario/imgs/linkedin.png'" src="/blog/wp-content/themes/germinario/imgs/linkedin.png" alt="LinkedIn"></a>
			<a href="http://github.com/jgerminario"><img src="/blog/wp-content/themes/germinario/imgs/github.png" onmouseover="this.src='/blog/wp-content/themes/germinario/imgs/github_gr.png'" onmouseout="this.src='/blog/wp-content/themes/germinario/imgs/github.png'" alt="GitHub" width="24" height="24" style="padding: 0 4px 4px 4px;"></a>
			<a href="/blog/wp-rss2.php"><img src="/blog/wp-content/themes/germinario/imgs/rss.png" width="32" height="31" onmouseover="this.src='/blog/wp-content/themes/germinario/imgs/rss_gr.png'" onmouseout="this.src='/blog/wp-content/themes/germinario/imgs/rss.png'" alt="RSS feed"></a>
		</div>
	</div> -->
	<div id="widget_area">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div>
</div>
<!-- width="35" height="35" -->
<!-- <h2 ><?php _e('Categories'); ?></h2>
<ul >
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul >
<?php wp_get_archives('type=monthly'); ?>
</ul> -->
<script>
	jQuery(window).scroll(function(){
		jQuery('.fixed').css('left',-jQuery(window).scrollLeft());
	});
</script>
