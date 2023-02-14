<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package mg_custom
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>

<?php if (function_exists('acf')) :
	if(get_field('additional_css','option')) { echo '<style>' .get_field('additional_css','option'). '</style>'; }
	if(get_field('google_js_head','option')) { the_field('google_js_head','option'); } 
endif; ?>
</head>

<body <?php body_class(); ?>>
<?php if (function_exists('acf')) :
	if(get_field('google_js_body','option')) { the_field('google_js_body','option'); }
endif; ?>

<div id="page" class="site d-block w-100">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'mg_custom' ); ?></a>
	<!--[if lte IE 9]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<?php get_template_part( 'template-parts/section', 'nav' ); ?>

	<?php if(is_front_page()) :
		get_template_part( 'template-parts/section', 'hero' );
	else:
		get_template_part( 'template-parts/section', 'banner' ); 
	endif; ?>

	<div id="content" class="site-content d-block">