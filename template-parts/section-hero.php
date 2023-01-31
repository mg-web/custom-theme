<?php
    $hero = get_field('hero','option');
    $heading = $hero['heading'] ? $hero['heading'] : FALSE;
    $subhead = $hero['subhead'] ? $hero['subhead'] : FALSE;
    $content = $hero['content'] ? $hero['content'] : FALSE;
    // Have to do some array work to sort out ctas.

?>

<section class="mg-hero">
    <h1><?php if($heading) { echo $heading; } ?></h1>
    <h2><?php if($subhead) { echo $subhead; } ?></h2>
    <p><?php if($content) {echo $content; }?></p>
    
    ?>
    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
</section>