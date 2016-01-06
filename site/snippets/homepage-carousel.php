<div class="hero gallery js-flickity" data-flickity-options='{"autoPlay": true, "wrapAround": true}'>
	<?php foreach($page->images()->sortBy(sort, asc) as $slide): ?>
		<?php if($slide->slideLink()->isNotEmpty()): ?>
			<a class="gallery-cell col-xs-12" href="<?php echo $slide->slideLink() ?>">	
		<?php else: ?>
			<div class="gallery-cell col-xs-12">	
		<?php endif ?>
				<div class="jumbotron" style="background-color: <?php echo $slide->slidecolor() ?>; background-image: url('<?php echo $slide->url() ?>');">
				<?php if($slide->slideOverlay()->isTrue()): ?>
					<div class="overlay" style="background-color: <?php echo $slide->slideColor() ?>"></div>
				<?php endif ?>
					<header>
						<span>
							<?php if($slide->slidesubtitle()->isNotEmpty()): ?><h2><?php echo $slide->slidesubtitle() ?></h2><?php endif ?>
							<?php if($slide->slidetitle()->isNotEmpty()): ?><h1><?php echo $slide->slidetitle() ?></h1><?php endif ?>
						</span>
					</header>
				</div>
		<?php if ($slide->slideLink()->isNotEmpty()): ?>
			</a>
		<?php else: ?>
			</div>	
		<?php endif ?>
	<?php endforeach ?>
</div>