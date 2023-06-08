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
?>

<footer id="colophon">
    <div class="site-branding">
        <img src="https://digitalbrent.com/generic-hvac.png" alt="Generic HVAC Logo" width="300" height="72">
        <p class="tag-line"><?php bloginfo( 'description' ); ?></p>
    </div>

    <?php if( $addr ){ ?>
        <div class="location">
            <div class='company-name'><?php bloginfo( 'name' ); ?></div>
            <div class='street'><?php echo $street1; ?></div>
            <?php echo $street2; ?>
            Miami, FL 90210
            <br>
            Phone: (123)456-7890
            <br>
            License #: FL-76543-210
        </div>
    <?php } ?>

    <div class="optional-widget">

    </div>

    <nav id="quick-links">
        <a href="#">Specials</a>
        <a href="#">Blog</a>
        <a href="#">FAQ</a>
        <a href="#">About Us</a>
    </nav>
</footer>

<?php wp_footer(); ?>
</body>
</html>
