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
?>

<section class="mg-accordion">
    <h2>Accordion Section</h2>

    <details>
        <summary>This the first accordion item!</summary>
        <div class="detail-content">
            Here is the content! As you can see from the code, this is just a regular paragraph 
            tag. The rest of the code is comprised of the &lt;details&gt; tag (the container
            for each item), and the &lt;summary&gt; tag (summary is the title of the accordion item).
        </div>
    </details>
    <details>
        <summary>This the second accordion item!</summary>
        <div class="detail-content">
            Here is the content! As you can see from the code, this is just a regular paragraph 
            tag. The rest of the code is comprised of the &lt;details&gt; tag (the container
            for each item), and the &lt;summary&gt; tag (summary is the title of the accordion item).
        </div>
    </details>
    <details>
        <summary>This the third accordion item!</summary>
        <div class="detail-content">
            Here is the content! As you can see from the code, this is just a regular paragraph 
            tag. The rest of the code is comprised of the &lt;details&gt; tag (the container
            for each item), and the &lt;summary&gt; tag (summary is the title of the accordion item).
        </div>
    </details>
    <details>
        <summary>This the fourth accordion item!</summary>
        <div class="detail-content">
            Here is the content! As you can see from the code, this is just a regular paragraph 
            tag. The rest of the code is comprised of the &lt;details&gt; tag (the container
            for each item), and the &lt;summary&gt; tag (summary is the title of the accordion item).
        </div>
    </details>
    <details>
        <summary>This the fifth accordion item!</summary>
        <div class="detail-content">
            Here is the content! As you can see from the code, this is just a regular paragraph 
            tag. The rest of the code is comprised of the &lt;details&gt; tag (the container
            for each item), and the &lt;summary&gt; tag (summary is the title of the accordion item).
        </div>
    </details>
</section>