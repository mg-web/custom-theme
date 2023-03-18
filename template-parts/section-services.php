<?php
/**
 * The "Services Section" which is most commonly displayed beneath the hero.
 */

$services = get_field('services','option');

?>

<section class="mg-services">
    <?php
    if($services) :
        foreach ($services as $service) :
            $icon = $service['icon'] ? $service['icon'] : FALSE;
            $name = $service['name'];
            $desc = $service['description'];
            $link = $service['link'];
            $cls = $service['special_class'] ? "service " . $service['special_class'] : "service"; // Set additional special class if one has been added in the back end.
        ?>
                <div class="<?php echo $cls; ?>">
                    <?php if($icon) { echo "<i class='" . $icon . "'></i>"; } ?><!-- Need to get font awesome working -->
                    <h3 class="service-name"><?php echo $name; ?></h3>
                    <p class="service-description"><?php echo $desc; ?></p>
                </div>
        <?php 
        endforeach;   
    endif;
    ?>
</section>