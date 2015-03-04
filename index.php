 <?php get_header(); ?>
 <?php get_sidebar(); ?>
 <section class="content right-section pt-90">
 	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 		<article>
 			<h1>
 				<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?>
 				</a>
 			</h1>
 			<?php the_content(__('read more »')); ?>
 			<p class="date">
 				<?php the_time('n.j.y') ?>
 			</p>
		</article>
 	<?php endwhile; else: ?>
 	<p>
 		<?php _e('Sorry, no posts matched your criteria.'); ?>
 	</p>
 <?php endif; ?>
</section>
</main>
<?php get_footer(); ?>
