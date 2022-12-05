<?php 

// Fill ACF select field dynamically
function acf_load_select_layout_dynamic( $field ) {
    // reset choices
    $field['choices'] = array();
    // Array of choices. You can use any data including a post type or repeater field rows.
	
	$field['choices']['general'] = 'General';
	
    if(have_rows('main_services', 'option')):
        
        while(have_rows('main_services', 'option')): the_row();
        
            $service_name = get_sub_field('service_name') ? get_sub_field('service_name') : '';
            $service_slug = get_sub_field('service_slug') ? get_sub_field('service_slug') : '';
            $field['choices'][ $service_slug ] = $service_name;
        
        endwhile;
        
    endif;
    
    // return the field
    return $field;
}
// This will fill any field with the name "product_type" with the main services
add_filter('acf/load_field/name=product_type', 'acf_load_select_layout_dynamic');

/**
 * Add ACF Options page
 */
if( function_exists('acf_add_options_page') ) {
  
	acf_add_options_page(array(
		'page_title'  => 'Theme General Settings',
		'menu_title'  => 'Theme Options',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
		'redirect'    => false
	));

	// Add subpage
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Sections',
		'menu_title'	=> 'Theme Sections',
		'parent_slug'	=> 'theme-general-settings',
	));

	// Developer
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Developer Settings',
		'menu_title'	=> 'Developer',
		'parent_slug'	=> 'theme-general-settings',
	));
  
}

/**
 * ACF JSON - Optional (add /acf-json folder to theme to being writing
 */
add_filter('acf/settings/save_json', function() {
	return get_template_directory() . '/acf-json';
});
add_filter('acf/settings/load_json', function($paths) {
	$paths = array(get_template_directory() . '/acf-json');
	return $paths;
});

/**
 * ACF Default Developer Fields
 * NOTE: Requires ACF Code Field plugin
 */
if( function_exists('acf_add_local_field_group') ) {

	acf_add_local_field_group(array(
		'key' => 'group_5cdedcbb7b670',
		'title' => 'Developer',
		'fields' => array(
			array(
				'key' => 'field_5cdedcc679c95',
				'label' => 'Additional CSS',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5cdedcd879c97',
				'label' => 'Additional CSS',
				'name' => 'additional_css',
				'type' => 'acf_code_field',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'mode' => 'css',
				'theme' => 'paraiso-dark',
			),
			array(
				'key' => 'field_5cdedcd379c96',
				'label' => 'Additional JS',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5ce325b428135',
				'label' => 'Google Tracking Code (Head)',
				'name' => 'google_js_head',
				'type' => 'acf_code_field',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'mode' => 'javascript',
				'theme' => 'paraiso-dark',
			),
			array(
				'key' => 'field_5ce3263a28136',
				'label' => 'Google Tracking Code (Body)',
				'name' => 'google_js_body',
				'type' => 'acf_code_field',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'mode' => 'javascript',
				'theme' => 'paraiso-dark',
			),
			array(
				'key' => 'field_5cdedce979c98',
				'label' => 'Additional JS',
				'name' => 'additional_js',
				'type' => 'acf_code_field',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'mode' => 'javascript',
				'theme' => 'paraiso-dark',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-developer',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

}