<?php
/**
 * Template Name: Style Guide
 */

get_header(); 
?>



<section id="articles">
    <article>
      <header>
        <h1>Article H1 in Article Header</h1>
      </header>

      <div class="article-content">
        <p>
          All of the text in this section is contained inside an &lt;article&gt; tag. Articles can have their own &lt;header&gt; and &lt;footer&gt; tags.
          In order to prevent confusion, the header and footer on this theme's articles were not given any classes or IDs. No styling has been added for
          the natural header and footer elements. The styling for the site header and site footer can be found in their corresponding scss files. The site 
          header is given the ID of "masthead" and the footer is given the ID "colophon" to help further distinguish those from other headers & footers
          across the site. All styling for the site wide header and footer has been added to those IDs. See "header.scss" & "footer.scss" for details. 
          Here is a bonus <a href="#">link</a> just to show you what links look like inside articles.
        </p>

        <img class="alignleft" src="http://placekitten.com/220/220" alt="Test Image Cat" title="This is a cat!">

        <p>
          <b>Please Note:</b> This is what the articles look like at full width. Typically articles are displayed alongside
          a sidebar or &lt;aside&gt; of some type. When the sidebar is added, that should reduce the amount of space these 
          paragraphs take up. They should look a little meatier then and not so thin and stretched out like they do here.
        </p>

        <p>
          This is more stuff inside a paragraph tag. Have you noticed how all the theme images are cats? I'm not really a
          cat person, but I think most of these are kind of cool looking. I especially like the space cats. Have you ever
          heard of Nyan Cat? It's like a little 8-bit pixel cat with a toaster pastry for a body. It flies endlessly through
          space, emitting a rainbow trail.
        </p>

        <p>
          What was I going to type here? Oh, right! Something about the superiority of texas toast to regular toast. If you
          have never gad texas toast, you are really missing out. Waffles are also quite amazing, but I assume most people
          have had them.
        </p>

        <figure class="alignright">
          <img src="http://placekitten.com/170/220" alt="Test Image Cat" title="This is the Title">
          <figcaption>This image has a caption.</figcaption>
        </figure>

        <p>
          Greatly ate titillating various via kangaroo the rancorously barked beneath gosh bawdy kookaburra well independent
          censoriously and crane waked less and far unsuccessfully eagle and the therefore more diabolic around coquettishly
          jeepers well memorably far while more slapped, as if he'd never seen a chocolate lab do they hokey-pokey for twenty bucks.
          Far after around burst enchanting gregariously inclusively blanched and a hare steady tarantula that aside gawked
          past jeez one less and breathless within guinea much eel musically noble tiger that a.
        </p>

        <p>
          Stark far and the ambitious picked and beneath without far deservedly so reprehensively much lizard until telepathic
          barring much some gawked interminable hence oversold excruciating about grimily earthworm rattlesnake macaw.
        </p>
      </div>

      <footer>
        Article Footer
      </footer>
    </article>
    </section>

<p style="grid-column: span 12; text-align: center;">Created by <a href="http://digitalbrent.com/">DigitalBrent</a></p>


<script>
  let swatches = jQuery(".swatch-block");

  function rgb2hex(rgb) {
    rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
    return (rgb && rgb.length === 4) ? "#" +
    ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
    ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
    ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : '';
  }

  swatches.each(function(){
    let rgb_color = jQuery(this).css("background-color");
    let hex_color = rgb2hex(rgb_color);
    jQuery(this).find('~ .swatch-hex').html(hex_color);
    jQuery(this).find('~ .swatch-rgb').html(rgb_color);
  });
</script>

<?php get_footer();