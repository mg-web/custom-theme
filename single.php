<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mg_custom
 */

get_header(); ?>
<!-- Trying to create a merge conflict over here... -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-10 p-0">
                <div class="row">
                    <div id="primary" class="content-area col-12 col-lg-8">
                        <main id="main" class="site-main">

                    		<?php
                    		if ( have_posts() ) :

                    			/* Start the Loop */
                    			while ( have_posts() ) : the_post();

                    				/*
                    				 * Include the Post-Format-specific template for the content.
                    				 * If you want to override this in a child theme, then include a file
                    				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                    				 */
                    				get_template_part( 'template-parts/content' );

                    			endwhile;

                    			the_posts_navigation();
                                
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