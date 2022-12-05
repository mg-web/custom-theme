<?php
/**
 * Template Name: Locations - Single
 */
get_header();

$locations = get_field('locations', 'options_location_info');
$location = null;
$obj_id = get_queried_object_id();
$url = get_permalink($obj_id);
$pattern = '/' . preg_quote($url, '/') . '/i';

foreach ($locations as $item) {
    $link_type = $item['link_type'];
    
    if ($link_type === 'internal' && preg_match($pattern, $item['location_page'])) {
        $location = $item;
        break;
    }
}

?>
<div class="section-location content-left d-block">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">

                <div class="row flex-wrapper">
                    <div class="col-7">
                        <?php if ($location) { ?>
                            <h4><?php echo $location['name']; ?></h4>
                            <div class="location">
                                <div class="map" style="background-image: url('<?php echo $location['map_image']['sizes']['extra_large']; ?>')"></div>

                                <div class="row details">
                                    <div class="col-6">
                                        <?php echo $location['address']; ?><br />
                                        <?php echo $location['city']; ?>, <?php echo $location['state']; ?> <?php echo $location['zip']; ?><br />
                                        <?php if ($location['directions_url']) { ?>
                                            <a href="<?php echo $location['directions_url']; ?>" target="_blank"><i class="fas fa-map-marker-alt"></i> Get Directions</a><br />
                                        <?php } ?>
                                    </div>
                                    <div class="col-6">
                                        <?php if ($location['phone_1']) { ?>
                                            <i class="fas fa-phone-alt"></i><strong>Local:</strong> <?php echo $location['phone_1']; ?><br />
                                        <?php } ?>

                                        <?php if ($location['fax']) { ?>
                                            <i class="fas fa-fax"></i><strong>Fax:</strong> <?php echo $location['fax']; ?><br />
                                        <?php } ?>

                                        <?php if ($location['phone_2']) { ?>
                                            <i class="fas fa-phone-alt"></i><strong>Toll Free:</strong> <?php echo $location['phone_2']; ?><br />
                                        <?php } ?>

                                        <?php if ($location['hours']) { ?>
                                            <i class="fas fa-clock"></i><?php echo $location['hours']; ?><br />
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-5">
                        <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'page' );

                            endwhile; // End of the loop.
                        ?> 
                    </div>
                </div>

                <div class="row">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                        </main><!-- #main -->
                    </div><!-- #primary -->   
                </div> 
            </div>

        </div>
    </div>
</div>
<?php get_footer();