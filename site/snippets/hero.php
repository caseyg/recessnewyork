<?php if($page->carousel()->isNotEmpty()): ?>
	<div class="hero gallery js-flickity">
		<?php 
		$slides = $page->carousel()->yaml();
		foreach( $slides as $slide): ?>
			<?php $hero = $page->children()->find($slide["page"]); ?>
			<a class="gallery-cell col-xs-12" href="<?php echo $hero->url() ?>">
				<?php if($hero->images()->find('hero.png')): ?>
					<figure>
						<img src="<?php echo $hero->images()->find('hero.jpg', 'hero.png')->first()->url() ?>" alt="<?php if($hero->subtitle()): ?><?php echo $hero->subtitle() ?><?php endif ?><?php if($hero->title()): ?>: <?php echo $hero->title() ?><?php endif ?>">
					</figure>
				<?php else: ?>
					<div class="jumbotron" style="background-color: <?php echo $hero->herobackgroundcolor() ?>; background-image: url('<?php echo $hero->images()->first()->url() ?>');">
						<div class="overlay"></div>
						<header>
							<span>
								<?php if($page->slug() == 'events'): ?><h2><?php echo $hero->date("F j") ?><?php if(!$hero->time()->isEmpty()): ?>, <?php echo $hero->time() ?><?php endif ?></h2><?php else: ?><?php if($hero->subtitle()): ?><h2><?php echo $hero->date("F") ?> Session — Mix by</h2><?php endif ?><?php endif ?>
								<?php if($hero->title()): ?><h1><?php echo $hero->title() ?></h1><?php endif ?>
							</span>
						</header>
					</div>
				<?php endif ?>
			</a>
		<?php endforeach ?>
	</div>
<?php else: ?>
	<?php if($page->images()->find('hero.png')): ?>
		<figure class="col-xs-12">
			<img src="<?php echo $page->images()->find('hero.jpg', 'hero.png')->first()->url() ?>" alt="<?php if($page->subtitle()): ?><?php echo $page->subtitle() ?><?php endif ?><?php if($page->title()): ?>: <?php echo $page->title() ?><?php endif ?>">
		</figure>
	<?php else: ?>
		<div class="col-xs-12">
			<div class="jumbotron" style="background-color: <?php echo $page->herobackgroundcolor() ?>;">
				<header>
					<?php if($page->subtitle()): ?><h2><?php echo $page->subtitle() ?></h2><?php endif ?>
					<?php if($page->title()): ?><h1><?php echo $page->title() ?></h1><?php endif ?>
				</header>
			</div>
		</div>
	<?php endif ?>
<?php endif ?>