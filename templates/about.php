<?php
/**
 * Template Name: About
 */
get_header(); ?>

<?php
    $about_intro_circle = get_field('intro_section_about');

    echo build_circle($about_intro_circle, 'section-intro-content');
?>

<?php /*
<div class="section-intro-content section-circle content-right d-block">

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-10">

                <div class="row flex-wrapper">

                    <div class="col circle-wrapper">
                        <div class="circle-bg">
                            <div class="circle-border"></div>
                            <div class="circle-overlay"></div>
                            <div class="circle-bg-color"></div>
                            <?php // slider variation ?>
                            <div class="circle-slider">
                                <div class="circle-bg-image lazyload" data-bg="https://assets.website-files.com/5dbac9637c76ea5bed47f711/5de66b1d076fe44716413b3d_ss-aerial-final-pic-1a.jpg.jpg"></div>
                                <div class="circle-bg-image lazyload" data-bg="https://assets.website-files.com/5dbac9637c76ea5bed47f711/5de66b3bd04b57d7c04a0646_Windows.jpg"></div>
                                <div class="circle-bg-image lazyload" data-bg="https://assets.website-files.com/5dbac9637c76ea5bed47f711/5de66dd0e7c62dad4a868d0d_195176_standard.jpg"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col text-content-area">
                        <div class="width-wrapper">
                            <div class="h1 text-uppercase"><span>The Recognized Leader in</span> Hurricane Protection</div>
                            <h4>Focused on your hurricane protection needs.</h4>
                            <p>Located in Southwest Florida, Storm Smart is a group of dedicated hurricane protection industry professionals, with a history of providing unmatched customer service and innovative product development which has set us apart and helped us become the largest manufacturer and installer of code-approved hurricane protection products.</p>
                            <div class="button-group">
                                <a href="#fix" class="btn btn-primary">Request a Consultation</a>
                                <a href="#fix" class="btn btn-secondary">Our Recognitions</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
*/ ?>

    <?php get_template_part( 'template-parts/about', 'quality' ); ?>

    <?php get_template_part( 'template-parts/section', 'why-choose' ); // reversed ?>

    <?php get_template_part( 'template-parts/about', 'ceo' ); ?>
    <?php get_template_part( 'template-parts/about', 'leader' ); ?>

    <?php get_template_part( 'template-parts/section', 'product-selector' ); ?>

    <?php get_template_part( 'template-parts/about', 'experts' ); ?>
    <?php get_template_part( 'template-parts/about', 'protection' ); ?>

<?php get_footer();