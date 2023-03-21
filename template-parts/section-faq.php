<?php
/**
 * Dev Note: For this section it is best to use details as it is a more semantic element.
 * Details can be considered the natural HTML accordion element. Using details does come
 * with a caveat. Specifically it is difficult to animate the opening and closing of the
 * content area using only CSS, which is the preferred method. If animation is needed,
 * you should use the implimentation found at the link below:
 * 
 * https://css-tricks.com/how-to-animate-the-details-element/
 */

$faq = get_field('faq','option');
?>

<section class="mg-accordion mg-test">
    <h2>FAQ Section (Details Accordion)</h2>

    <?php foreach( $faq as $qa ) : ?>
        <details>
            <summary><?php echo $qa['question']; ?></summary>
            <div class="detail-content">
                <?php echo $qa['answer']; ?>
            </div>
        </details>
    <?php endforeach ?>
</section>