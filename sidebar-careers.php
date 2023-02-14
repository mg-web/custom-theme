<?php
/**
* The sidebar containing the main widget area
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package mg_custom
*/
?>

<aside id="secondary" class="col-xl-5">

        <?php //.sidebar-wrapper defaults to sticky behavior on desktop ?>
        <div class="sidebar-wrapper">
            <div class="application-form">
                <?php echo display_careerform(); ?>
            </div>

            <?php if(is_singular('careers')) : ?>
            <div class="other-positions">
                <h3>Other Available Jobs</h3>
                <?php
                    $args = array(
                    'post_type' => 'careers',
                    'post_status' => 'publish',
                    'posts_per_page' => 10,
                    'order' => 'ASC',
                    'orderby' => 'title',
                );
                $jobs_query = new WP_Query( $args ); ?>

                <?php if( $jobs_query->have_posts() ) : ?>
                    <ul>
                    <?php while ( $jobs_query->have_posts() ) : $jobs_query->the_post(); ?>
                        
                        <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>

                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                
                <?php wp_reset_query(); ?>
            
            </div>
            <?php endif; ?>

        </div>
    
</aside><!-- #secondary -->