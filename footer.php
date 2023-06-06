<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mg_custom
 */
?>

<?php
/**
 * Site Footer (colophon). Like the header, IDs used here also instead of classes.
 * IDs are more appropriate because there should only ever be a single occurance of the colophon.
 */
?>

<footer id="colophon">
    <div class="site-branding">
        <img src="https://digitalbrent.com/generic-hvac.png" alt="Generic HVAC Logo" width="300" height="72">
        <p class="tag-line">This is where the tagline would go if there were one, but there's not!</p>
    </div>

    <div class="location">
        General Heating & Air<br><!-- All of the fields in this widget should by dynamically loaded from the theme options. -->
        21 Jump Street<br>
        Miami, FL 90210
        <br>
        Phone: (123)456-7890
        <br>
        License #: FL-76543-210
    </div>

    <div class="optional-widget">

    </div>

    <nav id="quick-links">
        <a href="#">Specials</a>
        <a href="#">Blog</a>
        <a href="#">FAQ</a>
        <a href="#">About Us</a>
    </nav>
</header>

<?php wp_footer(); ?>
</body>
</html>
