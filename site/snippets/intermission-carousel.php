<div class="hero gallery col-xs-12">
	<?php foreach( $page->children()->flip()->limit(4)->sortBy('order', 'asc') as $hero): ?>
		<a class="gallery-cell col-xs-12" href="<?php echo $hero->url() ?>" width="1140" height="467">	
			<img src="<?php if($hero->images()->count() > 0): ?><?php echo $hero->images()->first()->crop('1140','467')->url() ?><?php else: ?>http://placehold.it/1140x467<?php endif ?>" width="1140" height="467">
			<div class="overlay" style="background-color: rgba(0,0,0,.5)">
				<?php if($hero->subtitle()): ?><h2><?php echo $hero->date("F") ?> Session — Mix by</h2><?php endif ?>
				<?php if($hero->title()): ?><h1><?php echo $hero->title()->widont() ?></h1><?php endif ?>
			</div>
		</a>
	<?php endforeach ?>
</div>