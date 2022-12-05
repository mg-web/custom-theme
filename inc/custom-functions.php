<?php 
function strip_phone_number($phone = ''){
    return preg_replace('/\D+/', '', $phone);
}

function first_image_in_post($post_id = null) {
    global $post, $posts;
    $post = $post_id ? get_post($post_id) : $post;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    if($output){
        $first_img = $matches[1][0];
    }
    if(empty($first_img)) {
        $first_img = '';
    }
    return $first_img;
}

function new_excerpt_more($more) {
    return '&nbsp;<span class="ellipsis">&hellip;</span>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_archive_title($title) {    
    if ( is_category() ) {    
            $title = single_cat_title( '', false );    
        } elseif ( is_tag() ) {    
            $title = single_tag_title( '', false );    
        } elseif ( is_author() ) {    
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
        } elseif ( is_tax() ) { //for custom post types
            $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
        }    
    return $title;    
};
add_filter( 'get_the_archive_title', 'custom_archive_title');

function display_icon($class = null) {
    $output = '<img class="text-icon lazyload '.$class.'" data-src="'.get_bloginfo('template_directory').'/images/icon-gradient.svg" src="'.get_bloginfo('template_directory').'/images/dummy.png" alt="">';

    return $output;
}

// echo this button and pass through the cloned Button Options field data. Defaults to primary button.
function get_button( $button_group_data, $extra_classes = 'btn btn-primary', $div_tag = false ) {
    $data_fancybox = $button_group_data['link_type'] == 'Lightbox' ? 'data-fancybox' : '';
    $target = $button_group_data['link_type'] == 'External' ? 'target="_blank"' : '';
    $button_url = !empty($button_group_data['link_url']) ? $button_group_data['link_url'] : '#fix';
    $tag = $div_tag ? 'div' : 'a';
    $href = $tag == 'div' ? '' : 'href="' . $button_url . '"';
    if( $button_group_data['link_text'] ) {
        return '<' . $tag . ' ' . $href . ' class="' . $extra_classes . '" ' . $target . $data_fancybox . '>' . $button_group_data['link_text'] . '</' . $tag . '>';
    }else {
        return '';
    }
}

// circle layout
function build_circle( $circle_group_data, $local_class ) {
    $circle = $circle_group_data['circle_section'];

    //var_dump($circle);

    // 1) circle options that define classes for section-circle
    $layout = $circle['layout'] ? $circle['layout'] : 'content-right';
    $alignment = $circle['alignment'] ? $circle['alignment'] : 'left-aligned';
    $theme = $circle['theme'] ? $circle['theme'] : 'light';
    $type = $circle['circle_type'] ? $circle['circle_type'] : 'image';

    // 2a) format for video lightbox or div    
    $video_id = $circle['youtube_id'] ? $circle['youtube_id'] : '';
    $circle_wrap = $type == 'video' ? 'a' : 'div';
    $circle_atts = $type == 'video' ? 'href="https://www.youtube.com/watch?v='.$video_id.'&autoplay=1&rel=0" class="col circle-wrapper video fancybox"' : 'class="col circle-wrapper"';

    // 2b) turn image repeater into slider or use single image
    $count = $circle['circle_images'] ? count($circle['circle_images']) : 0;
    if($count > 1) :
        $circle_images = '<span class="circle-slider">';
        foreach($circle['circle_images'] as $circle_image): 
            $circle_bg_image = $circle_image['image']['sizes']['medium_large'];
            $circle_image_bg = $circle_image['bg_position'] ? $circle_image['bg_position'] : 'center';
            
            $circle_images .= '<span class="circle-bg-image lazyload" data-bg="'.$circle_bg_image.'" style="background-position:'.$circle_image_bg.'"></span>';
        endforeach;
        $circle_images .= '</span>';
    else:  
        $circle_bg_image = $circle['circle_images'][0]['image']['sizes']['medium_large'];
        $circle_image_bg = $circle['circle_images'][0]['bg_position'] ? $circle['circle_images'][0]['bg_position'] : 'center';
        
        $circle_images = '<div class="circle-bg-image lazyload" data-bg="'.$circle_bg_image.'" style="background-position:'.$circle_image_bg.'"></div>';
    endif;

    // 3) format title appropriately
    $title = $circle['title'] ? $circle['title'] : '';
    $formatted_title = '<div class="heading text-uppercase">'.$title.'</div>';

    $title_format = $circle['title_format'];
    if($title_format == 'small') :
        $formatted_title = '<div class="h1 text-uppercase">'.$title.'</div>';
    elseif($title_format == 'h1') :
        $formatted_title = '<h1 class="text-uppercase">'.$title.'</h1>';
    endif;

    // 3b) format text size (callout text is larger)
    $text = $circle['text'] ? $circle['text'] : '';
    $text_format = $circle['text_format'] ? $circle['text_format'] : 'small';

    // 3c) use global button function
    $button_1 = $circle['button_1'];
    $button_2 = $circle['button_2'];

    // 4) change out logo overlay if light or dark
    if($theme == 'light') :
        $logomark = get_bloginfo('template_directory').'/images/hero-overlay.svg';
    else :
        $logomark = get_bloginfo('template_directory').'/images/logomark-bottom-dark.svg';
    endif;

    // 5) get background image, if used
    $bg_image = $circle['bg_image'] ? $circle['bg_image']['sizes']['extra_large'] : '';

    ob_start(); ?>

    <div class="<?php echo $local_class;?> section-circle <?php echo $layout;?> <?php echo $alignment;?> <?php echo $theme;?> d-block">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10">

                    <div class="row flex-wrapper">

                        <?php if($circle_images) : ?>
                        <<?php echo $circle_wrap; ?> <?php echo $circle_atts; ?>>
                            <?php if($video_id) : ?>
                            <span class="circle-content">
                                <span class="play-btn"><i class="fal fa-play-circle"></i></span>
                            </span>
                            <?php endif; ?>
                            <span class="circle-bg">
                                <span class="circle-border"></span>
                                <span class="circle-overlay"></span>
                                <span class="circle-bg-color"></span>
                                <?php echo $circle_images; ?>
                            </span>
                        </<?php echo $circle_wrap;?>>
                        <?php endif; ?>

                        <div class="col text-content-area">
                            <div class="width-wrapper">
                                <?php echo $formatted_title; ?>
                                <div class="text <?php echo $text_format; ?>"><?php echo $text; ?></div>
                                <div class="button-group">
                                    <?php echo get_button($circle['button_1']); ?>
                                    <?php echo get_button($circle['button_2'], 'btn btn-secondary'); ?>
                                </div>

                                <?php // show recent posts feed on homepage ONLY ?>
                                <?php if(is_front_page() && $local_class == 'section-intro-content') : ?>
                                    <?php echo display_home_recent_posts(); ?>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="logomark lazyload" data-bg="<?php echo $logomark; ?>"></div>
        <div class="color-overlay"></div>
        <div class="bg-image lazyload" data-bg="<?php echo $bg_image; ?>"></div>
    </div>
    
    <?php $output = ob_get_clean();
    
    return $output;
}

function display_home_recent_posts() {
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'order' => 'DESC',
        'orderby' => 'date',
    );
    $the_query = new WP_Query( $args );

    ob_start(); ?>

    <?php if ( $the_query->have_posts() ) : ?>
    <div class="news-slider small">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="slide">
            <div class="news-box">
                <div class="text-box">
                    <div class="date"><?php echo get_the_date( 'F j, Y' ); ?></div>
                    <div class="title"><?php the_title(); ?></div>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
                <div class="logomark lazyload" data-bg="<?php bloginfo('template_directory');?>/images/icon-black.svg"></div>
            </div>
        </div>
        <?php endwhile; ?>

        <div class="slider-arrows stacked">
            <i class="fal fa-arrow-circle-left arrow-left"></i>
            <i class="fal fa-arrow-circle-right arrow-right"></i>
        </div>
    </div>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    <?php $output = ob_get_clean();
    
    return $output;
}

function display_form_offer_text() {
    $promotions = get_field('promotions','option');
    $form_text = $promotions['form_cta'];
        $form_title = $form_text['main_text'] ? $form_text['main_text'] : '';
        $form_subtext = $form_text['subtext'] ? $form_text['subtext'] : '';
        $form_mobile_button = $form_text['mobile_cta'];

    ob_start(); ?>

    <img class="open-form-logomark lazyload" data-src="<?php bloginfo('stylesheet_directory'); ?>/images/logomark-gradient.svg" src="<?php bloginfo('stylesheet_directory'); ?>/images/dummy.png" alt="">
    <div class="open-form-heading"><?php echo $form_title; ?></div>
    <div class="open-form-additional-offer">
        <span class="icon red extra-padding-right">
            <i class="far fa-plus-circle"></i>
        </span> <?php echo $form_subtext; ?>
    </div>
    <?php echo get_button($form_mobile_button, 'btn btn-primary hero-btn'); ?>


    <?php $output = ob_get_clean();
    
    return $output;
}

function display_featured_image() {
    if(has_post_thumbnail()) :
        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
        $thumbnail = $featured_image[0] ? $featured_image[0] : $bg_image; 
    else:
        $thumbnail = get_bloginfo('template_directory').'/images/placeholder.jpg';
    endif;

    return $thumbnail;
}