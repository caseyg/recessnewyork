<?php foreach ($pages->find($section)->children()->limit(1) as $subpage): ?>
<a href="<?php echo $subpage->url() ?>">
	<h4><?php echo $subpage->title() ?></h4>
	<?php if ($subpage->hasImages()): ?>	
		<img src="<?php echo $subpage->images()->first()->url() ?>" alt="">
	<?php endif ?>
</a>
<?php endforeach ?>