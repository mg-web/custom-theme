<?php 
/**
 * The social menu is a simple div with a class as it may be repeated several times
 * on any given page. It should not be a section because it is often simply a component
 * of a larger template part, such as the site header or footer. It should not be
 * a nav as all links are sure to be external. 
 * 
 * The social menu is controlled by custom fields in the MG Options tab of WordPress.
 * 
 * For values where only a handle is required and not a full URL, the complete URL
 * for the profile is constructed prior to being used in the code. 
 */

$social = get_field('mg_options','option')['social_media'];

$social['insta'] ? $social['insta'] = "<a href='https://www.instagram.com/" . $social['insta'] . "'><i class='fa-brands fa-square-instagram'>Is this working?</i></a>" : '';
$social['twitter'] ? $social['twitter'] = "https://twitter.com/" . $social['twitter'] : '';
$social['pinterest'] ? $social['pinterest'] = "https://pinterest.com/" . $social['pinterest'] : '';
?>

<div class="social-menu">
    <?php
        foreach( $social as $soc ){
            echo $soc;
        } 
    ?>
</div>