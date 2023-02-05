<?php
    $callout = get_field('callout','option');
    $content = $callout['content'] ? $callout['content'] : FALSE;
    // $btns = $callout['ctas'] ? $callout['ctas'] : FALSE;

?>

<section class="mg-guarantee">
    <div class="wrap">
        <?php if($content) {echo $content; }; 
            // if($btns) {
            //     echo "<div class='ctas-wrap'>";

            //     foreach ($btns as $cta) {
            //         $style = $cta['cta_btn']['style'];
            //         $link = $cta['cta_btn']['link']['url'];
            //         $target = $cta['cta_btn']['link']['target'] ? $cta['cta_btn']['link']['target'] : '_self';
            //         $txt = $cta['cta_btn']['link']['title'] ? $cta['cta_btn']['link']['title'] : "Click Here!";
                
            //         echo "<a class='btn " . $style . "' href='" . esc_html($link) . "' target='" . esc_html($target) . "'>" . esc_html($txt) . "</a>";
            //     }
            //     echo "</div>";        
            // };
        ?>
    </div>
</section>
                    