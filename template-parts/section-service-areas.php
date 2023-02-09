<?php
    $areas = get_field('service_areas','option');
?>

<section class="mg-service-areas">
    <?php 
        foreach( $areas as $sa ) {
            if( $sa['has_link'] ) {
                echo "<a class='service-area' href='" . $sa['link'] . "'>" . $sa['location'] . "</a>";
            } else {
                echo "<span class='service-area'>" . $sa['location'] . "</span>";
            }
        }; 
    ?>
</section>
                    