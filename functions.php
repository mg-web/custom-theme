<?php
function mg_enqueue() {
	//Fonts
	wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Poppins:100,300,400,400i,500,600,700,800,900' );
	
	if ( ! is_admin() ) {
		wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/dist/css/style.min.css');
    }
}
add_action( 'wp_enqueue_scripts', 'mg_enqueue' );

function add_defer_attribute($tag, $handle) {
	// add script handles to the array below
	$scripts_to_defer = array('bvalidator', 'mmenu', 'cookie', 'placeholders', 'mask-js', 'library-js');
 
	foreach($scripts_to_defer as $defer_script) {
	   if ($defer_script === $handle) {
		  return str_replace(' src', ' defer="defer" src', $tag);
	   }
	}
	return $tag;
 }
 //add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
 
 /*
  * Add larger size for use in theme and featured images
  */ 
 add_image_size( 'extra_large', 1920, 0, false );

 





/**
 * Add ACF Options page
 */
if( function_exists('acf_add_options_page') ) {
  
	acf_add_options_page(array(
		'page_title'  => 'Mediagistic',
		'menu_title'  => 'Mediagistic',
		'menu_slug'   => 'mediagistic',
		'capability'  => 'edit_posts',
		'icon_url' => 'dashicons-editor-kitchensink',
		'redirect'    => false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Content',
		'menu_title'	=> 'Section Content',
		'menu_slug'		=> 'section_content',
		'parent_slug'	=> 'mediagistic',
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Hero',
	// 	'menu_title'	=> 'Hero',
	// 	'parent_slug'	=> 'sections',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Services',
	// 	'menu_title'	=> 'Services',
	// 	'parent_slug'	=> 'sections',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Callout',
	// 	'menu_title'	=> 'Callout',
	// 	'parent_slug'	=> 'sections',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'FAQ',
	// 	'menu_title'	=> 'FAQ',
	// 	'parent_slug'	=> 'sections',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Trust',
	// 	'menu_title'	=> 'Trust',
	// 	'parent_slug'	=> 'sections',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Service Areas',
	// 	'menu_title'	=> 'Service Areas',
	// 	'parent_slug'	=> 'sections',
	// ));

	/**
	 * The following code was what Socius wrote. The code above is what I added.
	 */
	// acf_add_options_page(array(
	// 	'page_title'  => 'Theme General Settings',
	// 	'menu_title'  => 'Theme Options',
	// 	'menu_slug'   => 'theme-general-settings',
	// 	'capability'  => 'edit_posts',
	// 	'redirect'    => false
	// ));

	//Add subpage
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Subpage Title',
	// 	'menu_title'	=> 'Subpage Title',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// Developer
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Developer Settings',
	// 	'menu_title'	=> 'Developer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
  
}

/**
 * ACF JSON - Optional (add /acf-json folder to theme)
 */
// add_filter('acf/settings/save_json', function() {
// 	return get_template_directory() . '/acf-json';
// });
// add_filter('acf/settings/load_json', function($paths) {
// 	$paths = array(get_template_directory() . '/acf-json');
// 	return $paths;
// });

/**
 * ACF Default Developer Fields
 */
// if( function_exists('acf_add_local_field_group') ) {

// 	acf_add_local_field_group(array(
// 		'key' => 'group_5cdedcbb7b670',
// 		'title' => 'Developer',
// 		'fields' => array(
// 			array(
// 				'key' => 'field_5cdedcc679c95',
// 				'label' => 'Additional CSS',
// 				'name' => '',
// 				'type' => 'tab',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'placement' => 'left',
// 				'endpoint' => 0,
// 			),
// 			array(
// 				'key' => 'field_5cdedcd879c97',
// 				'label' => 'Additional CSS',
// 				'name' => 'additional_css',
// 				'type' => 'acf_code_field',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'mode' => 'css',
// 				'theme' => 'paraiso-dark',
// 			),
// 			array(
// 				'key' => 'field_5cdedcd379c96',
// 				'label' => 'Additional JS',
// 				'name' => '',
// 				'type' => 'tab',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'placement' => 'left',
// 				'endpoint' => 0,
// 			),
// 			array(
// 				'key' => 'field_5ce325b428135',
// 				'label' => 'Google Tracking Code (Head)',
// 				'name' => 'google_js_head',
// 				'type' => 'acf_code_field',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'mode' => 'javascript',
// 				'theme' => 'paraiso-dark',
// 			),
// 			array(
// 				'key' => 'field_5ce3263a28136',
// 				'label' => 'Google Tracking Code (Body)',
// 				'name' => 'google_js_body',
// 				'type' => 'acf_code_field',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'mode' => 'javascript',
// 				'theme' => 'paraiso-dark',
// 			),
// 			array(
// 				'key' => 'field_5cdedce979c98',
// 				'label' => 'Additional JS',
// 				'name' => 'additional_js',
// 				'type' => 'acf_code_field',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'mode' => 'javascript',
// 				'theme' => 'paraiso-dark',
// 			),
// 		),
// 		'location' => array(
// 			array(
// 				array(
// 					'param' => 'options_page',
// 					'operator' => '==',
// 					'value' => 'acf-options-developer',
// 				),
// 			),
// 		),
// 		'menu_order' => 0,
// 		'position' => 'normal',
// 		'style' => 'default',
// 		'label_placement' => 'top',
// 		'instruction_placement' => 'label',
// 		'hide_on_screen' => '',
// 		'active' => true,
// 		'description' => '',
// 	));
// }

function mg_custom_user_roles() {
    add_role( 'mg_content', 'Content Writer', array( 'read' => true, 'level_0' => true ) );
	add_role( 'mg_ds', 'Digital Strategist', array( 'read' => true, 'level_0' => true ) );
}
add_action( 'init', 'mg_custom_user_roles' );


function mg_register_nav_menu(){
	register_nav_menus( array(
		'top_nav' => __( 'Top Menu', 'mg_theme' ),
		'main_nav' => __( 'Main Menu', 'mg_theme' ),
		'quick_nav'  => __( 'Quick Nav', 'mg_theme' ),
	) );
}
add_action( 'after_setup_theme', 'mg_register_nav_menu', 0 );


class MG_Menu_Walker extends Walker_Nav_Menu { 
	/**
	 * MG Custom Menu Walker
	 * https://awhitepixel.com/blog/wordpress-menu-walkers-tutorial/
	 */
	
	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		/**
		 * The line below is sample code for adding classes from the WordPress Menu backend.
		 * Please note: The "container" for most menus and the "items_wrap" are both typically
		 * disabled when calling a menu with wp_nav_menu(). For example:
		 * 
		 * wp_nav_menu(array( 
		 *    'theme_location'=>'top_nav', 
         *    'container' => false,  <- Disables container.
         *    'items_wrap' => '%3$s', <- Disables <ul> wrap since we are using nav, span, and achor tags only.
         *    'walker' => new MG_Menu_Walker()
         * )); 
		 */

		if( $item->current_item_parent == 1 ) {
			$output .= "<div class='dropdown'>";
		}

		if ($item->url && $item->url != '#') {
			$output .= '<a href="' . $item->url . '">';
		} else {
			$output .= '<span>';
		}
 
		$output .= $item->title;
 
		if ($item->url && $item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}

		// echo "<pre>";
		// print_r($item);
		// echo "</pre>";
	}

	function start_lvl(&$output, $depth=0, $args=null) { 
		$output .="<nav class='submenu'>";
	}

	function end_lvl(&$output, $depth=0, $args=null) { 
		$output .="</nav>";
		$output .="</div>"; // Close 'dropdown' class.
	}
}



// function mg_check_site_settings() {
// 	$posts = get_option( 'posts_per_page' );

// 	if($posts == 10) {
// 		update_option("posts_per_page", 5);
// 	}

// 	echo get_option( 'posts_per_page' );
// }
// add_action( 'init', 'mg_check_site_settings' );