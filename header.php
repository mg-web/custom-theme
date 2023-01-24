<?php 
/**
 * Main index file.
 */
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Index</title>
  <meta name="description" content="A website">
  <meta name="author" content="Mediagistic">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap');

    body {
        font-family: 'Source Sans Pro', sans-serif;
    }

    h1, h2, h3,
    h4, h5, h6 {
        font-family: 'PT Serif', serif;
    }    
  </style>
  <?php wp_head(); ?>
</head>

<body>
<?php get_template_part( 'template-parts/section-header'); ?>