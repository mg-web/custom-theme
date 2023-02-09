<?php
    $hero = get_field('hero','option');
    $heading = $hero['heading'] ? $hero['heading'] : FALSE;
    $subhead = $hero['subhead'] ? $hero['subhead'] : FALSE;
    $content = $hero['content'] ? $hero['content'] : FALSE;
    $btns = $hero['ctas'] ? $hero['ctas'] : FALSE;
?>

<section class="mg-hero">
    <div class="wrap">
        <h1><?php if($heading) { echo $heading; }; ?></h1>
        <h2><?php if($subhead) { echo $subhead; }; ?></h2>
        <?php if($content) {echo $content; }; 
            if($btns) {
                echo "<div class='ctas-wrap'>";

                foreach ($btns as $cta) {
                    $style = $cta['cta_btn']['style'];
                    $link = $cta['cta_btn']['link']['url'];
                    $target = $cta['cta_btn']['link']['target'] ? $cta['cta_btn']['link']['target'] : '_self';
                    $txt = $cta['cta_btn']['link']['title'] ? $cta['cta_btn']['link']['title'] : "Click Here!";
                
                    echo "<a class='btn " . $style . "' href='" . esc_html($link) . "' target='" . esc_html($target) . "'>" . esc_html($txt) . "</a>";
                }
                echo "</div>";        
            };
        ?>
    </div>
</section>
                    