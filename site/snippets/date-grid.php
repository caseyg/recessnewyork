<div class="col-xs-12 grid">
	<?php if ($page->slug() == 'intermission'): ?>
		<?php $postUris = pagesByDate($page->children(), array('group'=>'month','max'=>'2116101')); ?>
		<?php foreach($postUris as $year => $months): ?>
			<?php foreach($months as $month => $uris): ?>
			<div class="row">
				<h2 class="col-xs-12"><?php echo date("F", mktime(0, 0, 0, $month)) ?> <?php echo $year ?></h2>
				<?php $sortedPages = pages($uris); ?>
				<?php foreach($sortedPages->sortBy('order', 'asc') as $post): ?>
					<a class="col-xs-6 col-sm-3" href="<?php echo $post->url() ?>">
						<img src="<?php if($post->images()->find('thumbnail.jpg')): ?><?php echo $post->images()->find('thumbnail.jpg')->url() ?><?php else: ?><?php if($post->images()->count() > 0): ?><?php echo $post->images()->first()->url() ?><?php else: ?>http://placehold.it/375x375<?php endif ?><?php endif ?>" alt="">
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