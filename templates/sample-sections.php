<?php
/**
 * Template Name: Sample Sections
 */

get_header(); 

get_template_part( 'template-parts/section-hero');
get_template_part( 'template-parts/section-faq');
get_template_part( 'template-parts/section-cards');
get_template_part( 'template-parts/section-reviews');
get_template_part( 'template-parts/section-services');
get_template_part( 'template-parts/section-txt-img');
// get_template_part( 'template-parts/section-trust');
get_template_part( 'template-parts/section-callout');
get_template_part( 'template-parts/section-service-areas');
get_template_part( 'template-parts/section-contact-form');
get_template_part( 'template-parts/social-menu');
?>

<p style="grid-column: span 12; text-align: center;">Created by <a href="http://digitalbrent.com/">DigitalBrent</a></p>

<script>
  let swatches = jQuery(".swatch-block");

  function rgb2hex(rgb) {
    rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
    return (rgb && rgb.length === 4) ? "#" +
    ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
    ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
    ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : '';
  }

  swatches.each(function(){
    let rgb_color = jQuery(this).css("background-color");
    let hex_color = rgb2hex(rgb_color);
    jQuery(this).find('~ .swatch-hex').html(hex_color);
    jQuery(this).find('~ .swatch-rgb').html(rgb_color);
  });
</script>

<?php get_footer();