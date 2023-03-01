<?php
/**
 * Header section of the site. Please note: This is different from the header.php file
 * found in the site's root directory. Also take note that IDs are used instead of classes
 * in order to distinguish these elements as the only occurances of their kind on the site.
 * There should never be more than 1 instance of "site-header" so it is not appropriate
 * to use a class here.
 */

 $hdr= get_field('hdr_ctas','option');
 $btns = $hdr['ctas'] ? $hdr['ctas'] : FALSE;
?>

<header id="site-header">
    <nav id="top-nav">
        <?php 
            wp_nav_menu(array( 
                'theme_location'=>'top_nav', 
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new MG_Menu_Walker()
            )); 
        ?>
    </nav>

    <div class="site-branding">
        <img src="https://digitalbrent.com/generic-hvac.png" alt="Generic HVAC Logo" width="300" height="72">
        <p class="tag-line">This is where the tagline would go if there were one, but there's not!</p>
    </div>

    <div id="header-ctas">
        <!-- <a class="btn cta-2" href="#">Review Us on Google</a>
        <a class="btn cta-2" href="#">Schedule an Appointment</a>
        <a class="btn cta-1" href="#">Call Now</a> -->
        <?php 
            if($btns) {
                echo "<div class='ctas-wrap'>";

                foreach ($btns as $cta) {
                    $style = $cta['cta_btn']['style'];
                    $link = $cta['cta_btn']['link']['url'];
                    $target = $cta['cta_btn']['link']['target'] ? $cta['cta_btn']['link']['target'] : '_self';
                    $txt = $cta['cta_btn']['link']['title'] ? $cta['cta_btn']['link']['title'] : "Click Here!";
                
                    echo "<a class='btn " . $style . "' href='" . esc_html($link) . "' target='" . esc_html($target) . "'>" . esc_html($txt) . "</a>";
                }
                echo "</div>";        
            };
        ?>
    </div>

    <nav id="primary-nav">
        <?php 
            wp_nav_menu(array( 
                'theme_location'=>'main_nav', 
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new MG_Menu_Walker()
            )); 
        ?>
    </nav>

    <div id="mob-menu">
        <!-- This checkbox will give us the toggle behavior, it will be hidden, but functional -->
        <input id="toggle" type="checkbox">

        <!-- IMPORTANT: Any element that we want to modify when the checkbox state changes go here, being "sibling" of the checkbox element -->

        <!-- This label is tied to the checkbox, and it will contain the toggle "buttons" -->
        <label class="toggle-container" for="toggle">
            <!-- If menu is open, it will be the "X" icon, otherwise just a clickable area behind the hamburger menu icon -->
            <span class="button button-toggle"></span>
        </label>

        <!-- The nav menu -->
        <div class="nav">
            <a href="#">Heating</a>
            <a href="#">Cooling</a>
            <a href="#">Air Quality</a>
            <a href="#">Systems</a>
            <a href="#">Service Areas</a>
            <a href="#">Financing</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</header>