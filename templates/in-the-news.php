<?php
/**
 * Template Name: In The News
 */
get_header(); ?>

<?php
    $news = get_field('in_the_news');
?>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-10 p-0">
                <div class="row">
                    <div id="primary" class="content-area col-12 col-xl-8">
                        <main id="main" class="site-main">

                        <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'page' );

                            endwhile; // End of the loop.
                        ?>

                        <?php if($news) : ?>
                        <div class="news-boxes">
                            <div class="row">

                                <?php foreach($news as $story) : ?>
                                <div class="col-xs-12 col-md-6 col-lg-4">
                                    <div class="news-box">
                                        <div class="date"><?php echo $story['date']; ?></div>
                                        <a href="<?php echo $story['url']; ?>" target="_blank"><?php echo $story['title']; ?></a>
                                        <div class="source"><?php echo $story['source']; ?></div>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div> 
                        <?php endif; ?>         

                        </main><!-- #main -->
                    </div><!-- #primary -->   

                    <?php get_sidebar(); ?>     
                </div> 
            </div>

        </div>
    </div>

<?php get_footer();
