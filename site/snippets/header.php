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
  <meta charset="utf-8" />
  <meta name="google" content="notranslate" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php if($page->slug() != 'home'): ?><?php echo $page->title()->html() ?> | <?php endif ?><?php echo $site->title()->html() ?></title>
  <meta name="description" content="<?php if ($page->text()->isNotEmpty()): ?><?php echo $page->text() ?><?php else: ?><?php echo $site->text() ?><?php endif ?>">
  <meta property="og:title" content="<?php if($page->slug() != 'home'): ?><?php echo $page->title()->html() ?> | <?php endif ?><?php echo $site->title()->html() ?>" />
  <?php if ($page->text()->isNotEmpty()): ?><meta property="og:description" content="<?php echo $page->text() ?>" /><?php else: ?><meta property="og:description" content="<?php echo $site->text() ?>" /><?php endif ?>
  <meta property="og:site_name" content="<?php echo $site->title() ?>" />
  <meta property="og:url" content="<?php echo $page->url() ?>" />
  <?php if ($page->images()->count() > 0): ?><meta property="og:image" content="<?php echo $page->images()->first()->url() ?>" /><?php endif ?>
  <?php if ($page->images()->count() > 0): ?><meta property="og:image:width" content="<?php echo $page->images()->first()->width() ?>" /><?php endif ?>
  <?php if ($page->images()->count() > 0): ?><meta property="og:image:height" content="<?php echo $page->images()->first()->height() ?>" /><?php endif ?>
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php if($page->slug() != 'home'): ?><?php echo $page->title()->html() ?> | <?php endif ?><?php echo $site->title()->html() ?>" />
  <meta name="twitter:description" content="<?php if ($page->text()->isNotEmpty()): ?><?php echo $page->text() ?><?php else: ?><?php echo $site->text() ?><?php endif ?>" />
  <?php if ($page->images()->count() > 0): ?><meta name="twitter:image" content="<?php echo $page->images()->first()->url() ?>" /><?php endif ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <?php echo css('assets/css/default.css') ?>
  <script src="/assets/js/app.min.js"></script>
</head>
<body id="<?php echo $page->slug() ?>" class="<?php echo $page->parent()->slug() ?>">
<div class="container">
  <nav class="row">
    <ul class="list-inline">
      <?php foreach ($site->pages()->visible() as $page): ?>
      <li class="<?php echo $page->slug() ?><?php if($page->isOpen()): ?> active<?php endif ?>"><a href="<?php echo $page->url() ?>"><?php echo $page->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  </nav>