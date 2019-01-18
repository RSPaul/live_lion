<?php 
	 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	 function my_theme_enqueue_styles() { 
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 

 	function tt_hidetitle_class($classes) {
		if ( is_single() || is_page () ):
		$classes[] = 'hidetitle';
		return $classes;
		endif;
		return $classes;
		}
		add_filter('post_class', 'tt_hidetitle_class');

		function twentynineteenchild_widgets_init() {

			register_sidebar(
				array(
					'name'          => __( 'Sidebar 1', 'twentynineteenchild' ),
					'id'            => 'sidebar-1',
					'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteenchild' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			);
			register_sidebar(
				array(
					'name'          => __( 'Sidebar 2', 'twentynineteenchild' ),
					'id'            => 'sidebar-2',
					'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteenchild' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			);
			register_sidebar(
				array(
					'name'          => __( 'Sidebar 3', 'twentynineteenchild' ),
					'id'            => 'sidebar-3',
					'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteenchild' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			);

		}
		add_action( 'widgets_init', 'twentynineteenchild_widgets_init' );



 ?>