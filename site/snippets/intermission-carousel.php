<div class="hero gallery js-flickity" data-flickity-options='{"autoPlay": true, "wrapAround": true}'>
	<?php foreach( $page->children()->limit(4) as $hero): ?>
		<a class="gallery-cell col-xs-12" href="<?php echo $hero->url() ?>">
			<div class="jumbotron" style="background-color: <?php echo $hero->herobackgroundcolor() ?>; background-image: url('<?php echo $hero->images()->first()->url() ?>');">
				<div class="overlay"></div>
				<header>
					<span>
						<?php if($hero->subtitle()): ?><h2><?php echo $hero->date("F") ?> Session — Mix by</h2><?php endif ?>
						<?php if($hero->title()): ?><h1><?php echo $hero->title() ?></h1><?php endif ?>
					</span>
				</header>
			</div>
		</a>
	<?php endforeach ?>
</div>