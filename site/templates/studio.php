<?php snippet('header') ?>

<div class="row">
	<figure class="col-xs-12">
		<img src="<?php echo $page->images()->find('hero.jpg', 'hero.png')->first()->url() ?>" alt="<?php if($page->subtitle()): ?><?php echo $page->subtitle() ?><?php endif ?><?php if($page->title()): ?>: <?php echo $page->title() ?><?php endif ?>">
	</figure>
</div>

<div class="row">
	<div class="lead text-center col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
		<img src="/assets/images/flag.png" alt="Flag">
		<?php echo $page->text()->kt()->widont() ?>
	</div>
</div>
<hr>

<?php snippet('projects') ?>

<?php snippet('footer') ?>