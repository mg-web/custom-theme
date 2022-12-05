<?php
/**
 * Template Name: Design System
 */
get_header(); ?>


<div class="container">
    <div class="row">
        <div id="primary" class="content-area col">
            <main id="main" class="site-main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
                ?>

<div class="ds-section">
    <div class="row">
        <div class="col-lg-4">
            <h2 class="ds-title">Headings</h2>
            <h1>Heading 1</h1>
            <hr>
            <h2>Heading 2</h2>
            <hr>
            <h3>Heading 3</h3>
            <hr>
            <h4>Heading 4</h4>
            <hr>
            <h5>Heading 5</h5>
            <hr>
            <h6>Heading 6</h6>
        </div>
        <div class="col-lg-4">
            <h2 class="ds-title">Body Text</h2>
            <h3 class="ds-subtitle">Paragraph</h3>
            <p>Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>

            <hr>

            <h3 class="ds-subtitle">Text Link</h3>
            <p>Aenean faucibus nibh et justo <a href="#">cursus id rutrum lorem imperdiet</a>. Nunc ut sem vitae risus tristique posuere.</p>

            <hr>

            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</blockquote>
        </div>
        <div class="col-lg-4">
            <h2 class="ds-title">Lists</h2>
            <h3 class="ds-subtitle">Ordered List</h3>
            <ul>
                <li>Unordered list item<br></li>
                <li>Lorem ipsum dolor sit amet
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                    <li>
                        Lorem ipsum dolor sit amet
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </li>
                    </ul>
                </li>
                <li>Lorem ipsum dolor sit amet</li>
            </ul>

            <hr>

            <h3 class="ds-subtitle">Ordered List</h3>
            <ol>
                <li>Ordered list item<br></li>
                <li>Lorem ipsum dolor sit amet<br></li>
            </ol>

            <hr>

            <h3 class="ds-subtitle">Custom Style List</h3>
            <ul class="custom-ul">
                <li>Unordered list item<br></li>
                <li>Lorem ipsum dolor sit amet
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                </li>
                <li>Lorem ipsum dolor sit amet</li>
            </ul>

        </div>
    </div>
</div>

<div class="ds-section">
    <h2 class="ds-title">Buttons</h2>
    <h3 class="ds-subtitle">Single Buttons</h3>
    <div class="row">
        <div class="col text-center">
            <a href="#" class="btn btn-primary">Primary Button</a>
        </div>
        <div class="col text-center">
            <a href="#" class="btn btn-secondary">Secondary Button</a>
        </div>
        <div class="col text-center" style="background-color: #000;">
            <a href="#" class="btn btn-tertiary">Tertiary Button</a>
        </div>
        <div class="col"></div>
    </div>

    <hr>

    <h3 class="ds-subtitle">Centered Group</h3>
    <div class="row">
        <div class="col">
            <div class="button-group">
                <a href="#" class="btn btn-primary">Primary Button</a>
                <a href="#" class="btn btn-secondary">Secondary Button</a>
            </div>
        </div>
    </div>

    <hr>
    
    <h3 class="ds-subtitle">Left Group</h3>
    <div class="row">
        <div class="col">
            <div class="button-group justify-content-start">
                <a href="#" class="btn btn-primary">Primary Button</a>
                <a href="#" class="btn btn-secondary">Secondary Button</a>
            </div>
        </div>
    </div>
</div>

<div class="ds-section">
    <h2 class="ds-title">Elements</h2>
    <div class="row">
        <div class="col-lg-6">
            <h3 class="ds-subtitle">Accordion</h3>
            <div class="row">
                <div class="col">
                <?php echo do_shortcode('
                [accordion class="light"]
                [toggle title="Toggle 1 Title" show="show"]
                Toggle 1 Content
                [/toggle]
                [toggle title="Toggle 2 Title"]
                Toggle 2 Content
                [/toggle]
                [toggle title="Toggle 3 Title"]
                Toggle 3 Content
                [/toggle]
                [/accordion]'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <h3 class="ds-subtitle">Accordion Dark</h3>
            <div class="row">
                <div class="col">
                    <?php echo do_shortcode('
                    [accordion class="dark"]
                    [toggle title="Toggle 1 Title" show="show"]
                    Toggle 1 Content
                    [/toggle]
                    [toggle title="Toggle 2 Title"]
                    Toggle 2 Content
                    [/toggle]
                    [toggle title="Toggle 3 Title"]
                    Toggle 3 Content
                    [/toggle]
                    [/accordion]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ds-section">
    <div class="row">
        <div class="col">
            <h3 class="ds-subtitle">Tabs</h3>
            <?php echo do_shortcode('[tabs class="yourcustomclass"]
            [tab title="Tab 1" active="active"]
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
            [/tab]
            [tab title="Tab 2"]
            Tab 2 Content
            [/tab]
            [tab title="Tab 3"]
            Tab 3 Content
            [/tab]
            [/tabs]'); ?>
        </div>
    </div>
</div>


<div class="ds-section">
    <div class="row">
        <div class="col">
            <h3 class="ds-subtitle">Responsive Table</h3>
            <table class="sm-table">
              <thead>
                <tr>
                  <th>Optional Column Header</th>
                  <th>Column Header Example</th>
                  <th>Another Column Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-th="Optional Column Header">Data 1 Lorem ipsum dolor sit amet</td>
                  <td data-th="Column Header Example">Data 2 Suspendisse varius enim</td>
                  <td data-th="Another Column Header">Data 3 Duis cursus, mi quis vierra</td>
                </tr>
                <tr>
                  <td data-th="Optional Column Header">Data 4</td>
                  <td data-th="Column Header Example">Data 5</td>
                  <td data-th="Another Column Header">Data 6</td>
                </tr>
                <tr>
                  <td data-th="Optional Column Header">Data 7</td>
                  <td data-th="Column Header Example">Data 8</td>
                  <td data-th="Another Column Header">Data 9</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>


            </main><!-- #main -->

        </div><!-- #primary -->
            
        <?php //get_sidebar(); ?>
        
    </div>
</div>

<?php 
get_footer();?>