<?php
$trust = get_field('trust','option');
 
if($trust) :
?>
    <section class='mg-trust'>
        <?php
        foreach ($trust as $seal) :
            $logo = $seal['seal'];
            echo "<img src='" . esc_url($logo['url']) . "' alt='" . esc_attr($logo['alt']) . "' />";
        endforeach;
        ?>
    </div>        
<?php endif; ?>
</section>
                    