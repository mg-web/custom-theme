<?php
/**
* The sidebar containing the main widget area
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package mg_custom
*/
?>

<aside id="secondary" class="col-xl-4">

        <?php //.sidebar-wrapper defaults to sticky behavior on desktop ?>
        <div class="sidebar-wrapper">
            <div class="d-flex flex-column align-items-end">

                <div class="smaller-sidebar">
                    <div class="sidebar-open-form">
                        <div class="offer-form interior-form">                            
                            <?php echo display_form_offer_text(); ?>
                            <?php echo display_quickform(); ?>
                        </div>
                    </div>

                    <a href="#fix" class="inside-sidebar-callout-link">
                        <div class="inside-sidebar-callout-link-background lazyload" data-bg="<?php bloginfo('template_directory');?>/images/placeholder.jpg"></div>
                        <div class="inside-sidebar-callout-link-overlay">
                            <div class="inside-sidebar-callout-link-title-accent-text">Callout Title Accent text</div>
                            <div class="sidebar-cta-divider"></div>
                            <div class="inside-sidebar-callout-link-title">Callout Title</div>
                            <div class="inside-sidebar-callout-link-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a ultricies tellus.</div>
                            <div class="button-group">
                                <div class="btn btn-tertiary">Call to Action</div></div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    
</aside><!-- #secondary -->