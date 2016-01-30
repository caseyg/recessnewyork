<div class="hero gallery js-flickity col-xs-12" data-flickity-options='{"autoPlay": true, "wrapAround": true, "pageDots": false}'>
	<?php foreach( $page->children()->limit(4) as $hero): ?>
		<a class="gallery-cell col-xs-12" href="<?php echo $hero->url() ?>">	
			<img src="<?php echo $hero->images()->first()->crop('1140','467')->url() ?>" width="1140" height="467">
			<div class="overlay" style="background-color: rgba(0,0,0,.5)">
				<?php if($hero->subtitle()): ?><h2><?php echo $hero->date("F") ?> Session — Mix by</h2><?php endif ?>
				<?php if($hero->title()): ?><h1><?php echo $hero->title()->widont() ?></h1><?php endif ?>
			</div>
		</a>
	<?php endforeach ?>
</div>