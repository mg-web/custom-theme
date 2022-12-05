<?php
/**
 * Template Name: Locations - All
 */
get_header();

$locations = get_field('locations', 'options_location_info');
?>
<div class="section-locations content-left d-block">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">

                <div class="row flex-wrapper">
                    <div class="col-12 locations-all">
                        <h4>Our Showrooms</h4>
                        <?php 
                            foreach ($locations as $location) {
                                $url = '#';
                                $target = '';
                                $link_type = $location['link_type'];
                                
                                if ($link_type === 'internal' && $location['location_page']) {
                                    $url = $location['location_page'];
                                } else if ($link_type === 'external' && $location['external_url']) {
                                    $url = $location['external_url'];
                                    $target = ' target="_blank" ';
                                }
                        ?>
                              <div class="location">
                                  <a href="<?php echo $url; ?>" <?php echo $target; ?> class="map" style="background-image: url('<?php echo $location['map_image']['sizes']['extra_large']; ?>')">
                                      <div class="overlay"></div>
                                      <div class="name"><?php echo $location['name']; ?></div>
                                  </a>
                                
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
                        
                              <?php //echo '<pre>' . print_r($location['map_image']['sizes'], 1) . '</pre>' ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="row flex-wrapper">
                    <div class="col-12">
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