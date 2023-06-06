<?php 
/**
 * Main index file.
 */
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Index</title>
  <meta name="description" content="A website">
  <meta name="author" content="Mediagistic">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap');

    body {
        font-family: 'Source Sans Pro', sans-serif;
    }

    h1, h2, h3,
    h4, h5, h6 {
        font-family: 'PT Serif', serif;
    }    
  </style>
  <?php wp_head(); ?>
</head>

<body>
<?php
/**
 * Main header of the site. Please note that IDs are used instead of classes in order to distinguish these elements as the only occurances of their kind on the site. 
 * There should never be more than 1 instance of "masthead" so it is not appropriate to use a class here.
 */

 $hdr = get_field('hdr_ctas','option');
 $btns = $hdr ? $hdr : FALSE;
?>

<header id="masthead">
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
<p>chickens</p>
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
                    $a_tag = $cta['a_tag'];
                    $call_btn = $cta['call_btn'];
                    $btn_target = $cta['btn_target'];
                    $btn_txt = $cta['btn_txt'];
                    $btn_link = $cta['btn_link'];
                    $click_func = $cta['click_func'];
                    $style = $cta['style'];
                
                    if ( $a_tag && $btn_target ) {
                        echo "<a class='btn " . $style . "' href='" . $btn_link . "' target='_blank'>" . $btn_txt . "</a>";
                    } elseif ( $a_tag && !$btn_target ) {
                        echo "<a class='btn " . $style . "' href='" . $btn_link . "'>" . $btn_txt . "</a>";
                    } elseif ( $call_btn ) {
                        echo "<a class='btn " . $style . "' href='tel:1234567890'>" . $btn_txt . "</a>";
                    }
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