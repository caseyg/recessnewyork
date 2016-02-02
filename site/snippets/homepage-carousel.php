<?php if($page->images()->count > 1): ?>
	<div class="hero gallery col-xs-12">
		<?php foreach($page->images()->sortBy(sort, asc) as $slide): ?>
			<?php if($slide->slideLink()->isNotEmpty()): ?>
				<a class="gallery-cell col-xs-12" href="<?php echo $slide->slideLink() ?>" style="background-color: <?php echo $slide->slidecolor() ?>;" width="1140" height="467">	
			<?php else: ?>
				<div class="gallery-cell col-xs-12" style="background-color: <?php echo $slide->slidecolor() ?>;" width="1140" height="467">	
			<?php endif ?>
					<img src="<?php echo $slide->crop('1140','467')->url() ?>" width="1140" height="467">
					<div class="overlay"<?php if($slide->slideOverlay()->isTrue()): ?>style="background-color: rgba(0,0,0,.5)"<?php endif ?>>
						<?php if($slide->slidesubtitle()->isNotEmpty() || $slide->slidetitle()->isNotEmpty()): ?>
							<?php if($slide->slidesubtitle()->isNotEmpty()): ?><h2><?php echo $slide->slidesubtitle() ?></h2><?php endif ?>
							<?php if($slide->slidetitle()->isNotEmpty()): ?><h1><?php echo $slide->slidetitle() ?></h1><?php endif ?>
						<?php endif ?>
					</div>
			<?php if ($slide->slideLink()->isNotEmpty()): ?>
				</a>
			<?php else: ?>
				</div>	
			<?php endif ?>
		<?php endforeach ?>
	</div>
<?php else: ?>
	<?php foreach($page->images()->sortBy(sort, asc) as $slide): ?>
		<?php if($slide->slideLink()->isNotEmpty()): ?>
			<a class="hero col-xs-12" href="<?php echo $slide->slideLink() ?>" style="background-color: <?php echo $slide->slidecolor() ?>;" width="1140" height="467">	
		<?php else: ?>
			<div class="hero col-xs-12" style="background-color: <?php echo $slide->slidecolor() ?>;" width="1140" height="467">	
		<?php endif ?>
				<img src="<?php echo $slide->crop('1140','467')->url() ?>" width="1140" height="467">
				<div class="overlay"<?php if($slide->slideOverlay()->isTrue()): ?>style="background-color: rgba(0,0,0,.5)"<?php endif ?>>
					<?php if($slide->slidesubtitle()->isNotEmpty() || $slide->slidetitle()->isNotEmpty()): ?>
						<?php if($slide->slidesubtitle()->isNotEmpty()): ?><h2><?php echo $slide->slidesubtitle() ?></h2><?php endif ?>
						<?php if($slide->slidetitle()->isNotEmpty()): ?><h1><?php echo $slide->slidetitle() ?></h1><?php endif ?>
					<?php endif ?>
				</div>
		<?php if ($slide->slideLink()->isNotEmpty()): ?>
			</a>
		<?php else: ?>
			</div>	
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>