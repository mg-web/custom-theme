<?php
    $callout = get_field('callout','option');
    $content = $callout['content'] ? $callout['content'] : FALSE;
    $btns = $callout['ctas'] ? $callout['ctas'] : FALSE;

?>

<section class="mg-callout">
    <div class="wrap">
        <?php 
        if($content) {echo $content; }; 
        if($btns) :
        ?>
            <div class="ctas-wrap">
                <?php
                foreach ($btns as $cta) :
                    $style = $cta['cta_btn']['style'];
                    $link = $cta['cta_btn']['link']['url'];
                    $target = $cta['cta_btn']['link']['target'] ? $cta['cta_btn']['link']['target'] : '_self';
                    $txt = $cta['cta_btn']['link']['title'] ? $cta['cta_btn']['link']['title'] : "Click Here!";
                ?>
                    <a class="btn <?php echo $style; ?>" href="<?php echo esc_html($link); ?>" target="<?php esc_html($target); ?>"><?php echo esc_html($txt); ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
                    