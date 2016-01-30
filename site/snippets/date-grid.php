<div class="col-xs-12 grid">
	<?php if ($page->slug() == 'intermission'): ?>
		<?php $postUris = pagesByDate($page->children(), array('group'=>'month')); ?>
		<?php foreach($postUris as $year => $months): ?>
			<?php foreach($months as $month => $uris): ?>
			<div class="row">
				<h2 class="col-xs-12"><?php echo date("F", mktime(0, 0, 0, $month)) ?> <?php echo $year ?></h2>
				<?php foreach($uris as $uri): ?>
					<?php $post = $pages->find($uri); ?>
					<a class="col-xs-6 col-sm-3" href="<?php echo $post->url() ?>">
						<img src="<?php if($post->images()->find('thumbnail.jpg')): ?><?php echo $post->images()->find('thumbnail.jpg')->url() ?><?php else: ?><?php echo $post->images()->first()->url() ?><?php endif ?>" alt="">
						<p><?php echo $post->title() ?></p>
					</a>
				<?php endforeach; ?>
			</div>

			<?php endforeach; ?>
		<?php endforeach; ?>
	<?php else: ?>
		<?php $postUris = pagesByDate($page->children(), array('group'=>'year')); ?>
		<?php foreach($postUris as $year => $uris): ?>
			<div class="row">
				<h2 class="col-xs-12"><?php echo $year ?></h2>
				<?php foreach($uris as $uri): ?>
					<?php $post = $pages->find($uri); ?>
					<a class="col-xs-6 col-sm-3" href="<?php echo $post->url() ?>">
						<img src="<?php if($post->images()->find('thumbnail.jpg')): ?><?php echo $post->images()->find('thumbnail.jpg')->url() ?><?php else: ?><?php echo $post->images()->first()->url() ?><?php endif ?>" alt="">
						<p><?php echo $post->title() ?></p>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>