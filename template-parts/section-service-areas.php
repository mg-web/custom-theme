<?php
$areas = get_field('service_areas','option');
?>

<section class="mg-service-areas">
    <?php 
    foreach( $areas as $sa ) :
        if( $sa['has_link'] ) : ?>
            <a class="service-area" href="<?php echo $sa['link']; ?>"><?php echo $sa['location']; ?></a>
        <?php else : ?>
            <span class="service-area"><?php echo $sa['location']; ?></span>
        <?php endif;
    endif; 
    ?>
</section>
                    