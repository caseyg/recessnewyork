<?php if($section == 'events'): ?>
	<?php if (!$pages->find($section)->children()->filterBy('date', '>', time())->count() > 0): ?>
		<h2>Latest Event</h2>
		<?php foreach ($pages->find($section)->children()->sortBy('date', 'desc')->limit(1) as $subpage): ?>
			<a href="<?php echo $subpage->url() ?>">
				<h3><?php echo $subpage->title() ?></h3>
				<?php if ($subpage->hasImages()): ?>	
					<img src="<?php echo $subpage->images()->first()->crop('408', '263')->url() ?>" alt="">
				<?php endif ?>
			</a>
		<?php endforeach ?>		
	<?php else: ?>
		<h2>Next Event</h2>
		<?php foreach ($pages->find($section)->children()->filterBy('date', '>', time())->sortBy('date', 'desc')->limit(1) as $subpage): ?>
			<a href="<?php echo $subpage->url() ?>">
				<h3><?php echo $subpage->title() ?></h3>
				<?php if ($subpage->hasImages()): ?>	
					<img src="<?php echo $subpage->images()->first()->crop('408', '263')->url() ?>" alt="">
				<?php endif ?>
			</a>
		<?php endforeach ?>
	<?php endif ?>
<?php elseif($section == 'studio'): ?>
	<?php foreach ($pages->find($section)->children()->sortBy('date', 'desc')->limit(1) as $subpage): ?>
	<a href="<?php echo $subpage->url() ?>">
		<h3><?php echo $subpage->title() ?></h3>

		<?php if ($subpage->hasImages()): ?>	
			<img src="<?php echo $subpage->images()->first()->crop('408', '263')->url() ?>" alt="">
		<?php endif ?>
	</a>
	<?php endforeach ?>	
<?php else: ?>
	<?php foreach ($pages->find($section)->children()->sortBy('date', 'desc')->limit(1) as $subpage): ?>
	<a href="<?php echo $subpage->url() ?>">
		<h3><?php echo $subpage->title() ?></h3>

		<?php if ($subpage->hasImages()): ?>	
			<img src="<?php echo $subpage->images()->first()->crop('263')->url() ?>" alt="">
		<?php endif ?>
	</a>
	<?php endforeach ?>
<?php endif ?>