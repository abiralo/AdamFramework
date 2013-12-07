<?php
/**
* WARNING: This file is part of the core Adam Framework. DO NOT edit
* this file under any circumstances. Please do all modifications
* in the form of a child theme.
**/

/**
* Start Registring Sidebars for Widgets
**/

function adam_register_sidebars(){
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'adam' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'adam_register_sidebars' );

?>