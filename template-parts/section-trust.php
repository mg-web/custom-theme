<?php
    $trust = get_field('trust','option');
    // $seals = $trust['seals'] ? $trust['heading'] : FALSE;
 
    // if($content) {echo $content; }; 
    if($trust) {
        echo "<section class='mg-trust'>";
        foreach ($trust as $seal) {
            $logo = $seal['seal'];
        
            echo "<img src='" . esc_url($logo['url']) . "' alt='" . esc_attr($logo['alt']) . "' />";
        }
        echo "</div>";        
    };
    ?>
</section>
                    