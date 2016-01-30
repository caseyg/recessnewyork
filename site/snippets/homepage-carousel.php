<div class="hero gallery js-flickity col-xs-12" data-flickity-options='{"autoPlay": true, "wrapAround": true, "pageDots": false}'>
	<?php foreach($page->images()->sortBy(sort, asc) as $slide): ?>
		<?php if($slide->slideLink()->isNotEmpty()): ?>
			<a class="gallery-cell col-xs-12" href="<?php echo $slide->slideLink() ?>" style="background-color: <?php echo $slide->slidecolor() ?>;">	
		<?php else: ?>
			<div class="gallery-cell col-xs-12" style="background-color: <?php echo $slide->slidecolor() ?>;">	
		<?php endif ?>
				<img src="<?php echo $slide->crop('977','400')->url() ?>" width="977" height="400">
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