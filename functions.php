<?php

function gabba_widgets_init() {
  register_sidebar( array(
    'name'           => __( 'Talent Sidebar', 'lavelle-child' ),
    'id'             => 'sidebar-2',
    'before_widget'  => '<ul><li id="%1$s" class="widget %2$s">',
    'after_widget'   => '</li></ul>',
    'before_title'   => '<h3 class="widget-title">' ,
    'after_title'    => '</h3>' ,
  ));
}
add_action( 'widgets_init' , 'gabba_widgets_init' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
  'social-menu' => esc_html__( 'Social Menu', 'lavelle' ),
  'primary' => esc_html__( 'Primary Menu', 'lavelle' ),
) );
add_action('after_setup_theme','lavelle_setup');
