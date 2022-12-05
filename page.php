<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package socius_custom
 */

get_header(); ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 p-0">
                <div class="row">
                    <div id="primary" class="content-area col-12 col-xl-8">
                        <main id="main" class="site-main page-top-margin">

                        <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'page' );

                            endwhile; // End of the loop.
                        ?>               

                        </main><!-- #main -->
                    </div><!-- #primary -->   

                    <?php get_sidebar(); ?>     
                </div> 
            </div>

        </div>
    </div>

<?php get_footer();
