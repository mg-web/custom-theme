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
</section>