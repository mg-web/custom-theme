<?php

// Add admin stylesheet
function socius_custom_enqueue_custom_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin/admin-stylesheet.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'socius_custom_enqueue_custom_admin_style' );

// Add editor stylesheet
add_theme_support( 'editor-styles' );
add_editor_style( 'css/admin/editor-style.css' );

/**
 * Enqueue scripts and styles.
 */
function socius_custom_scripts() {
	//Fonts
	wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Poppins:100,300,400,400i,500,600,700,800,900' );
	
	if ( ! is_admin() ) {
        // deregister the original version of jQuery
        wp_deregister_script('jquery');
        // register it again, this time with no file path
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', FALSE, '1.12.4');
        // add it back into the queue
        wp_enqueue_script('jquery');
		
		// Font Awesome
		// Font Awesome 5 Pro is minifying in this theme. See _typography.scss
		
		//Theme Files
		wp_enqueue_style( 'vendor-css', get_template_directory_uri() . '/css/vendor.min.css');
		wp_enqueue_script( 'vendor-js', get_template_directory_uri() . '/js/vendor.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );
		wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/css/style.min.css');

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
    }
}
add_action( 'wp_enqueue_scripts', 'socius_custom_scripts' );
add_action( 'admin_enqueue_scripts', 'socius_custom_scripts' );

/**
 * Defer JS when possible
 * Not necessary when gulp has compiled vendor scripts
 */
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
* Modify login page logo to link to site homepage instead of WordPress.org
*/
function my_login_logo_url () {
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

/**
 * Changes the default Wordpress logo to the client logo. Make sure you change the background size, width, and height depending on the logo size.
 */
function my_login_head() {
    echo "
    <style>
    body {
    	background: url('".get_bloginfo('template_url')."/images/login-bg.jpg') no-repeat center center;
    }
    .login #login {
    	padding: 20px;
    	margin: 8% auto 0;
        background: rgba(230, 230, 230, 0.90);
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.58);
    }
    .login .message {
    	margin: 0;
    }
    .login #login h1 a {
        background: url('".get_bloginfo('template_url')."/images/logo.png') no-repeat scroll center top transparent;
        width: 236px;
        height: 104px;
        background-size: contain;
        margin: 0 auto 20px;
    }
    .login #loginform {
    	margin-top: 0;
    	padding: 26px 24px;
        background: transparent;
        box-shadow: none;
    	-webkit-animation: fadein 2.5s;
        animation: fadein 2.5s;
    }
    .login label {
        color: #000000;
        font-size: 14px;
    }
    .login #login #nav,
    .login #login #backtoblog {
    	text-align: center;
        font-size: 14px;
        font-weight: 500;
    }
    .login #login #nav {
    	margin-top: 0;
   	}
    .login #backtoblog a, 
    .login #nav a {
    	color: #0073aa;
    }
    @-webkit-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    @keyframes fadein {
	    from { opacity: 0; }
	    to   { opacity: 1; }
    }
    </style>
    ";
}
add_action("login_head", "my_login_head");
remove_action('wp_head', 'wp_generator');


/**
 * Register widget area.
 */
function socius_custom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'socius_custom' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'socius_custom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'socius_custom_widgets_init' );


/**
 * Create custom recent posts widget with images.
 */
function wpb_load_widget() {
    register_widget( 'sm_recent_posts_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
// Creating the widget 
class sm_recent_posts_widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			// Base ID of your widget
			'sm_recent_posts_widget', 
			// Widget name will appear in UI
			__('Recent Posts With Featured Images', 'sm_recent_posts'), 
			// Widget description
			array( 'description' => __( 'Display recent posts with their featured image.', 'sm_recent_posts' ), ) 
		);
	}
	// Creating Recent Posts Widget
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes
		if( isset($args['before_widget']) ) { echo $args['before_widget']; }
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		// This is where you run the code and display the output
		$post_args = array( 'numberposts' => '5', 'post_status' => 'publish' );
		$recent_posts = wp_get_recent_posts( $post_args );
		if( $recent_posts ) {
			echo '<ul>';
			foreach( $recent_posts as $recent ){
				$recent_object = (object) $recent;
				$post_thumbnail = get_the_post_thumbnail_url( $recent["ID"], 'large', array( 'class' => 'img-responsive' ));
				$thumbnail = !empty($post_thumbnail) ? $post_thumbnail : first_image_in_post($recent_object);
				$thumbnail = !empty($thumbnail) ? '<div class="recent-thumbnail lazyload" data-bg="' . $thumbnail . '"></div>' : '';
				echo '<li><a href="' . get_permalink($recent["ID"]) . '"><span class="recent-title">' . $recent["post_title"] . '</span>' . $thumbnail . '</a> </li> ';
			}
			echo '</ul>';
		}
		wp_reset_query();
		if( isset($args['after_widget']) ) { echo $args['after_widget']; }
	}
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}else {
			$title = __( 'Recent Posts', 'sm_recent_posts' );
		} ?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class sm_recent_posts_widget ends here



// Limit post revisions
function sm_set_revision_size( $num, $post ) { 
    return 4;  //here allowed revisions are up to 5. 
}
add_filter( 'wp_revisions_to_keep', 'sm_set_revision_size', 10, 2 );