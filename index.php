<?php get_header(); ?>
<div id="main">
	<?php get_sidebar(); ?>
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(__('read more »')); ?>
			<p class="date"><?php the_time('n.j.y') ?></div>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		</div>
	</div>
	<!--<div id="delimiter">
	</div>
	<?php get_footer(); ?>-->