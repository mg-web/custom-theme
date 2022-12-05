<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package socius_custom
 */

?>

    </div><!-- #content -->
    
    <?php if( !is_page_template( array('templates/contact.php', 'templates/product-category.php', 'templates/locations-all.php', 'templates/locations-single.php', 'templates/careers.php') ) && !is_home() && !is_singular('post') ) :
        get_template_part( 'template-parts/section', 'gallery' ); 
    endif; ?>

    <?php if(is_front_page() || is_page_template( array('templates/product-category.php')) ) : 
        get_template_part( 'template-parts/section', 'financing' );
    endif; ?> 
    
    <?php if( !is_404() && !is_page_template( 'templates/careers.php' ) && !is_singular('careers') ) :
        get_template_part( 'template-parts/section', 'reviews' );  
    endif; ?>

    <?php if(is_front_page() || is_page_template( array('templates/product-category.php')) ) : 
        get_template_part( 'template-parts/section', 'careers' ); 
    endif; ?>

	<?php get_template_part( 'template-parts/section', 'footer' ); ?>	
	<?php get_template_part( 'template-parts/section', 'sticky' ); ?>
	
</div><!-- #page -->

<div id="mmenu">   
	<?php //Stitch together menus
		$topmenu = '';
		$primarymenu = '';
		if ( has_nav_menu( 'top' ) ) { $topmenu = wp_nav_menu( array (  'echo' => false, 'theme_location' => 'top', 'items_wrap' => '%3$s' , 'container' => false)); }
		if ( has_nav_menu( 'primary' ) ) {$primarymenu = wp_nav_menu( array (  'echo' => false, 'theme_location' => 'primary', 'items_wrap' => '%3$s' , 'container' => false)); }
		echo '<ul id="mobile-menu">'. $primarymenu . $topmenu  . '</ul>';
	?>
</div>

<?php wp_footer(); ?>

<?php // Custom PHP variables to be read by main.js ?>
<script>
    var settings = {
        company: {
            name: '<?php echo get_bloginfo( 'name' ); ?>'
        }
    };
</script>

<?php if (function_exists('acf')) :
	if(get_field('additional_js','option')) { the_field('additional_js','option'); }
endif; ?>

<?php get_template_part( 'template-parts/lightbox-form' ); ?>

<?php get_template_part( 'inc/ppc-scripts' ); ?>

</body>
</html>
