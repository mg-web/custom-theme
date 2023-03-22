<?php
$hero = get_field('hero','option');
$heading = $hero['heading'] ? $hero['heading'] : FALSE;
$subhead = $hero['subhead'] ? $hero['subhead'] : FALSE;
$content = $hero['content'] ? $hero['content'] : FALSE;
$btns = $hero['ctas'] ? $hero['ctas'] : FALSE;
?>

<section id="mg-hero">
    <div class="wrap">
        <h1><?php if($heading) { echo $heading; }; ?></h1>
        <h2><?php if($subhead) { echo $subhead; }; ?></h2>
        <?php 
        if($content) {echo $content; }; 
        if($btns) :
        ?>
            <div class='ctas-wrap'>
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
                    