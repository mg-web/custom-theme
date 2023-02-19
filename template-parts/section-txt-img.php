<?php
    $txtimg = get_field('txt_img','option');
    $heading = $txtimg['heading'] ? $txtimg['heading'] : FALSE;
    $subhead = $txtimg['subheading'] ? $txtimg['subheading'] : FALSE;
    $content = $txtimg['content'] ? $txtimg['content'] : FALSE;
    $btns = $txtimg['ctas'] ? $txtimg['ctas'] : FALSE;
?>

<section class="mg-txt-img">
    <div class="wrap">
        <h2><?php if($heading) { echo $heading; }; ?></h2>
        <h3><?php if($subhead) { echo $subhead; }; ?></h3>
        <p><?php if($content) {echo $content; }; ?></p>
        <?php
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
                    