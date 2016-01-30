<div class="hero gallery js-flickity col-xs-12" data-flickity-options='{"autoPlay": true, "wrapAround": true, "pageDots": false}'>
	<?php 
	$slides = $page->carousel()->yaml();
	foreach( $slides as $slide): ?>
		<?php $hero = $page->children()->find($slide["page"]); ?>
		<a class="gallery-cell col-xs-12" href="<?php echo $hero->url() ?>">	
			<img src="<?php if($hero->images()->find('hero.png')): ?><?php echo $hero->images()->find('hero.jpg', 'hero.png')->first()->crop('1140','467')->url() ?><?php else: ?><?php echo $hero->images()->first()->crop('1140','467')->url() ?><?php endif ?>" width="1140" height="467" alt="<?php if($hero->subtitle()): ?><?php echo $hero->subtitle() ?><?php endif ?><?php if($hero->title()): ?>: <?php echo $hero->title() ?><?php endif ?>">
			<div class="overlay" style="background-color: rgba(0,0,0,.5)">
				<?php if($page->slug() == 'events'): ?><h2><?php echo $hero->date("F j") ?><?php if(!$hero->time()->isEmpty()): ?>, <?php echo $hero->time() ?><?php endif ?></h2><?php else: ?><?php if($hero->subtitle()): ?><h2><?php echo $hero->date("F") ?> Session — Mix by</h2><?php endif ?><?php endif ?>
				<?php if($hero->title()): ?><h1><?php echo $hero->title() ?></h1><?php endif ?>
			</div>
		</a>
	<?php endforeach ?>
</div>