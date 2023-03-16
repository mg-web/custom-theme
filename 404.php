<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mg_custom
 */

get_header(); ?>
<!-- This looks like a weird place to put a comment. -->
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="error-page">
                <div class="error-404-hero-content-wrap">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col offset-1 col-10 p-0">
                                <div class="error-404-hero-content">
                                    <h1 class="error-404-heading">Error <span class="_300">404</span></h1>
                                    <h3 class="error-404-sub-heading">Something isn't right here.</h3>
                                    <h5 class="error-404-tiny-heading">Why don't you try one of the links below?</h5>

                                <?php if(has_nav_menu('error-page')) :
                                    wp_nav_menu( array( 'theme_location' => 'error-page', 'container' => false ) );
                                endif; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background-image-wrap">
                    <div class="background-overlay lazyload" data-bg="<?php bloginfo('stylesheet_directory'); ?>/images/hero-overlay.svg"></div>
                    <div class="background-gradients"></div>
                    <div class="background-image lazyload" data-bg="<?php bloginfo('stylesheet_directory'); ?>/images/error-bg.jpg"></div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
