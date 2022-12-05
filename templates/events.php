<?php
/**
 * Template Name: Events
 */
get_header(); ?>

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-10 p-0">
            <div class="row">

                <div id="primary" class="content-area col-12 col-xl-8">
                    <main id="main" class="site-main p-0">
                    
                        <?php //<h1>Resources</h1> ?>

                        <h5 class="text-uppercase">Events</h5>

                        <?php // query only events
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'order' => 'DESC',
                                'orderby' => 'date',
                                'cat' => array(19,20),
                                'paged' => get_query_var('paged')
                            );
                            $events_query = new WP_Query( $args );

                            if( $events_query->have_posts() ) : ?>
                                
                                <div class="row">
                                <?php while ( $events_query->have_posts() ) : $events_query->the_post(); 
                                    
                                    get_template_part( 'template-parts/content' );

                                endwhile; ?>
                                                      
                                </div>

                                <?php wp_pagenavi(array( 'query' => $events_query )); ?>

                            <?php endif; ?>

                            <?php wp_reset_query(); ?>
                    </main>
                </div><!-- #primary -->
                    
                <?php get_sidebar(); ?>

            </div>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>