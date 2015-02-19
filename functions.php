<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function my_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar_title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'my_widgets_init' );
?>