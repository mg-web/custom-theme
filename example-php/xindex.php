<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

                <div id="primary" class="content-area col-12 col-lg-8">
                    <main id="main" class="site-main p-0">
                    
                        <?php
                        if ( have_posts() ) : ?>
                            
                            <div class="row">
                            <?php while ( have_posts() ) : the_post();
                                
                                get_template_part( 'template-parts/content' );
                            
                            endwhile; ?>                       
                            </div>

                            <?php the_posts_pagination( 
                                array( 
                                    'screen_reader_text' => ' ',
                                    'mid_size'  => 2,
                                    'prev_text' => __( 'Previous', 'textdomain' ),
                                    'next_text' => __( 'Next', 'textdomain' ),
                                ) 
                            );
                            
                        else :
                            
                            get_template_part( 'template-parts/content', 'none' );
                            
                        endif; ?>

                        
                    </main>
                </div><!-- #primary -->
                    
                <?php get_sidebar(); ?>
            
            </div>
        </div>
        
    </div>
</div>


<?php get_footer(); ?>