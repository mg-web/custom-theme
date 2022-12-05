<?php
/**
 * Template Name: Product - Single
 */
get_header(); ?>

<?php 
    // product-single used to have the circle section...?
    //$catgory_intro_circle = get_field('intro_section_category');
    //echo build_circle($catgory_intro_circle, 'section-intro-content');
?>

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

                        <?php get_template_part( 'template-parts/section', 'products-similar' );  ?>
                        
                    </div><!-- #primary -->   

                    <?php get_sidebar(); ?>     
                </div> 
            </div>

        </div>
    </div>

<?php get_footer();