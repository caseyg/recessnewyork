<!DOCTYPE html>
<html lang="en">
<head>
  <script>document.documentElement.className += ' wf-loading';</script>
  <style>
  .wf-loading h1,
  .wf-loading h2,
  .wf-loading h3,
  .wf-loading p,
  .wf-loading li,
  .wf-loading a,
  .wf-loading figure {
  opacity: 0;
  }
  h1, h2, h3, p, li, a, figure {
  opacity: 1;
  visibility: visible; /* Old IE */
  -webkit-transition: opacity 0.24s ease-in-out;
     -moz-transition: opacity 0.24s ease-in-out;
          transition: opacity 0.24s ease-in-out;
  }
  </style>
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/assets/js/webfontloader.js"></script>
  <script>
  $(function() {
      WebFont.load({
      typekit: {
        id: 'aqj4zae'
      },
          active: function() {
        $(".jumbotron").bigtext({
            childSelector: 'h1'
        });
              $('header').css('visibility', 'visible').css('opacity', 1);
          },
          inactive: function() {
        $(".jumbotron").bigtext({
            childSelector: 'h1'
        });
              $('header').css('visibility', 'visible').css('opacity', 1);         
          }
      });
  });
  </script>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <link rel="stylesheet" href="/node_modules/flickity/dist/flickity.css" media="screen">
  <?php echo css('assets/css/default.css') ?>  
</head>
<body id="<?php echo $page->slug() ?>">
<div class="container">
  <nav class="row">
    <ul class="list-inline">
      <?php foreach ($site->pages()->visible() as $page): ?>
      <li class="<?php echo $page->slug() ?><?php if($page->isOpen()): ?> active<?php endif ?>"><a href="<?php echo $page->url() ?>"><?php echo $page->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  </nav>