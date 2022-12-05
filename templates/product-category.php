<?php
/**
 * Template Name: Product - Category
 */
get_header(); ?>

<?php
    $catgory_intro_circle = get_field('intro_section_category');

    echo build_circle($catgory_intro_circle, 'section-intro-content');

    get_template_part( 'template-parts/section', 'product-selector-category' ); 
    get_template_part( 'template-parts/flexible-layouts' ); 
    get_template_part( 'template-parts/section', 'gallery' ); 
    get_template_part( 'template-parts/section', 'product-benefits' ); 
?>

<?php get_footer();