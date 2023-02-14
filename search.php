<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mg_custom
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area col col-lg-8">
            <main id="main" class="site-main">

        		<?php
        		if ( have_posts() ) :

        			/* Start the Loop */
        			while ( have_posts() ) : the_post();

        				get_template_part( 'template-parts/content', 'search' );

        			endwhile;

                    the_posts_pagination( 
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

<?php get_footer(); ?>