<?php
/**
 * Template Name: Careers
 */
get_header(); ?>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-10">
                <div class="row">
                    <div id="primary" class="content-area col-12 col-xl-7">
                        <main id="main" class="site-main">

                        <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'page' );

                            endwhile; // End of the loop.
                        ?>   
                        <?php
                            $args = array(
                            'post_type' => 'careers',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'order' => 'ASC',
                            'orderby' => 'title',
                        );
                        $jobs_query = new WP_Query( $args ); ?>

                        <?php if( $jobs_query->have_posts() ) : ?>

                            <h4>We're Currently Looking For</h4>
                            <div class="job-boxes">
                                <div class="row">
                                <?php while ( $jobs_query->have_posts() ) : $jobs_query->the_post(); ?>
                                    
                                    <div class="col-xs-12 col-md-6">
                                        <div class="job-box">
                                            <div class="title"><?php the_title(); ?></div>
                                            <div class="team"><?php the_field('team'); ?></div>
                                            <div class="location"><?php the_field('location'); ?></div>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            </div>
                        </div>

                        <?php else: ?>

                            <h4>Sorry. There are currently no open positions.</h4>

                        <?php endif; ?>
                        
                        <?php wp_reset_query(); ?>            

                        </main><!-- #main -->
                    </div><!-- #primary -->   

                    <?php get_sidebar('careers'); ?>
    
                </div> 
            </div>

        </div>
    </div>

<?php get_footer();