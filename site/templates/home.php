<?php snippet('header') ?>

<div class="header row">
	<?php snippet('homepage-carousel') ?>
</div>

<div class="row peek">
	<div class="col-xs-12 col-sm-9">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<?php snippet('page-peek', array('section' => 'events')) ?>
			</div>
			<div class="col-xs-12 col-sm-6">
				<h2>Recess Studio</h2>
				<?php snippet('page-peek', array('section' => 'studio')) ?>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-3 intermission-peek">
		<h2>Intermission</h2>
		<div class="js-flickity" data-flickity-options='{"autoPlay": true, "prevNextButtons": false, "pageDots": false, "wrapAround": true, "imagesLoaded": true}'>
			<?php foreach( $pages->find('intermission')->children()->flip()->limit(4)->sortBy('order', 'asc') as $hero): ?>
				<a class="gallery-cell" href="<?php echo $hero->url() ?>" width="263" height="352">	
					<h3><?php echo $hero->title() ?></h3>
					<img src="<?php if($hero->images()->count() > 0): ?><?php echo $hero->images()->first()->crop('375','375')->url() ?><?php else: ?>http://placehold.it/375x375<?php endif ?>" width="375" height="375">
				</a>
			<?php endforeach ?>
		</div>
	</div>
</div>
<?php snippet('footer') ?>