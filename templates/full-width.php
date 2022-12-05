<?php
/**
 * Template Name: Full-width
 */
get_header(); ?>


    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-10 p-0">
                <div class="row">
                    <div id="primary" class="content-area col-12">
                        <main id="main" class="site-main">

                            <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'page' );

                            endwhile; // End of the loop.
                            ?>

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div>
            </div>
            
        </div>
    </div>

<?php 
get_footer();?>