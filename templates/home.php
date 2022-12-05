<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<?php
    $home_intro_circle = get_field('intro_section_home', 'option');

    echo build_circle($home_intro_circle, 'section-intro-content');
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
                                <div class="circle-bg-image lazyload" style="background-position:80% center;" data-bg="https://assets.website-files.com/5dbac9637c76ea5bed47f711/5dd7ef714e896a5f704b4e5c_Honor-Flight-Meet-and-Greet-2019-pic-1-1-1024x683.jpg"></div>
                                <div class="circle-bg-image lazyload" data-bg="https://assets.website-files.com/5dbac9637c76ea5bed47f711/5dbb13eaf510ee2bd40155ca_bigstock-senior-couple-outside-on-patio-52779718.jpg"></div>
                                <div class="circle-bg-image lazyload" data-bg="https://assets.website-files.com/5dbac9637c76ea5bed47f711/5dd7f0f712a2f00f736b9d01_Tree-Trail-696x658.jpg"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col text-content-area">
                        <div class="width-wrapper">
                            <div class="h1 text-uppercase"><span>Welcome to</span> Storm Smart</div>
                            <h4>We are so glad that you're here.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium accumsan mi, in tincidunt nunc tincidunt sit amet. Nulla consectetur lectus in libero posuere convallis sit amet a magna. Nulla id lobortis nisl, id aliquet mi. Aenean porttitor, sem at viverra ultrices, purus est egestas nulla, sed dignissim nisl dui sit amet risus. Nullam fringilla elementum fermentum. Integer maximus nisi enim, id euismod tellus vulputate nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer bibendum turpis non augue pharetra, ac fermentum tellus pellentesque. Donec interdum risus ut pulvinar vestibulum. Nunc sed lacus massa.</p>
                            <div class="button-group">
                                <a href="#fix" class="btn btn-primary">Visit Our Showrooms</a>
                                <a href="#fix" class="btn btn-secondary">Contact Us</a>
                            </div>

                            <div class="news-slider small">

                                <div class="slide">
                                    <div class="news-box">
                                        <div class="text-box">
                                            <div class="date">January 31, 2020</div>
                                            <div class="title">Inc. 5000 Conference / Gala 2019 Photo Gallery</div>
                                            <a href="#fix">Read More</a>
                                        </div>
                                        <div class="logomark lazyload" data-bg="<?php bloginfo('template_directory');?>/images/icon-black.svg"></div>
                                    </div>
                                </div>
                                
                                <div class="slide">
                                    <div class="news-box">
                                        <div class="text-box">
                                            <div class="date">January 31, 2020</div>
                                            <div class="title">Port Charlotte Home & Garden Show Fall 2019 (October 19-20)</div>
                                            <a href="#fix">Read More</a>
                                        </div>
                                        <div class="logomark lazyload" data-bg="<?php bloginfo('template_directory');?>/images/icon-black.svg"></div>
                                    </div>
                                </div>
                                
                                <div class="slide">
                                    <div class="news-box">
                                        <div class="text-box">
                                            <div class="date">January 31, 2020</div>
                                            <div class="title">Cape Coral Home & Garden Fall 2019 Show (October  5 & 6)</div>
                                            <a href="#fix">Read More</a>
                                        </div>
                                        <div class="logomark lazyload" data-bg="<?php bloginfo('template_directory');?>/images/icon-black.svg"></div>
                                    </div>
                                </div>
                                
                                <div class="slide">
                                    <div class="news-box">
                                        <div class="text-box">
                                            <div class="date">January 31, 2020</div>
                                            <div class="title">Lorem Ipsum Dolor</div>
                                            <a href="#fix">Read More</a>
                                        </div>
                                        <div class="logomark lazyload" data-bg="<?php bloginfo('template_directory');?>/images/icon-black.svg"></div>
                                    </div>
                                </div>
                                
                                <div class="slide">
                                    <div class="news-box">
                                        <div class="text-box">
                                            <div class="date">January 31, 2020</div>
                                            <div class="title">Lorem Ipsum Dolor</div>
                                            <a href="#fix">Read More</a>
                                        </div>
                                        <div class="logomark lazyload" data-bg="<?php bloginfo('template_directory');?>/images/icon-black.svg"></div>
                                    </div>
                                </div>

                                <div class="slider-arrows stacked">
                                    <i class="fal fa-arrow-circle-left arrow-left"></i>
                                    <i class="fal fa-arrow-circle-right arrow-right"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
*/ ?>

    <?php 
        get_template_part( 'template-parts/section', 'product-selector' ); 
        get_template_part( 'template-parts/section', 'why-choose' ); 
        get_template_part( 'template-parts/section', 'diy' ); 
    ?>

<?php get_footer();