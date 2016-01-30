<div class="row">
	<h2 class="text-center col-xs-12">Selected Projects</h2>
</div>
<div class="row grid">
	<?php foreach($pages->find('studio')->children() as $post): ?>
		<a class="col-xs-12 col-sm-6" href="<?php echo $post->url() ?>">
			<img src="<?php if($post->images()->find('thumbnail.jpg')): ?><?php echo $post->images()->find('thumbnail.jpg')->crop(556,300)->url() ?><?php else: ?><?php echo $post->images()->first()->crop(556,300)->url() ?><?php endif ?>" alt="">
			<h2><?php echo $post->title() ?></h2>
			<h3><?php echo $post->subtitle() ?></h3>
		</a>
	<?php endforeach ?>
</div>