<?php
/**
 * Site Footer (colophon). Like the header, IDs used here also instead of classes.
 * IDs are more appropriate because there should only ever be a single occurance of the colophon.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mg_custom
 */

 $ftr = get_field('mg_options','option');
 $addr = $ftr['address'];
//  $addr = $ftr['address'] ? $ftr['address'] : ''; - Questioning if these checks are really necessary.
 $street1 = $ftr['address']['street'];
 $street2 = $ftr['address']['street_2'] ? "<div class='street-2'>" . $ftr['address']['street_2'] . "</div>" : '';
 $city = $ftr['address']['city'];
 $state = $ftr['address']['state'];
 $zip = $ftr['address']['zip_code'];
 $lic = $ftr['general']['license'] ? "<div class='license'>License:<br>" . $ftr['general']['license'] . "</div>" : '';
 $copyYear = 2008; // Set website start date. Make this an option in ACF later.
 $curYear = date('Y');
?>

<footer id="colophon">
    <div class="site-branding">
        <img src="https://digitalbrent.com/generic-hvac.png" alt="Generic HVAC Logo" width="300" height="72">
        <p class="tag-line"><?php bloginfo( 'description' ); ?></p>
    </div>

    <?php if( $addr ){ ?>
        <div class="location">
            <div class='street'><?php echo $street1; ?></div>
            <?php echo $street2; ?>
            <div class="city-stat-zip"><?php echo $city . ", " . $state . " " . $zip; ?></div>
            Phone: (123)456-7890
            <?php echo $lic; ?>
        </div>
    <?php } ?>

    <div class="optional-widget">
    </div>

    <div id="sub-footer">
        <h3>Quick Links</h3>

        <nav id="quick-links">
            <a href="#">Site Map</a>
            <a href="#">Policy</a>
            <a href="#">Contact</a>
            <a href="#">About Us</a>
        </nav>

        <div id='copyright'>Copyright <?php echo $copyYear . "-" . $curYear . " " .get_bloginfo('name'); ?></div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
