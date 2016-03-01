<?php snippet('header') ?>

<div class="row">
	<div class="col-xs-12">
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-push-2">
		<header class="content-header">
			<h1><?php if (!$page->sport()->isEmpty()): ?><?php echo $page->sport() ?>, <?php endif ?><?php echo $page->season() ?> <?php echo $page->date('Y') ?></h1>
			<?php if($page->champion()->isNotEmpty()): ?><h2>Champion: <?php echo $page->champion() ?></h2><?php endif ?>
		</header>
	</div>
	<div class="col-xs-6 col-sm-2 col-sm-pull-8">
		<!-- AddThis Button BEGIN -->
		<a class="addthis_button share" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4fdee4292505e9fd">Share</a>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fdee4292505e9fd"></script>
		<!-- AddThis Button END -->
	</div>
	<div class="social col-xs-6 col-sm-2">
       <iframe class="pull-right" src="//www.facebook.com/plugins/like.php?href=<?php echo $page->url() ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=110196125731861" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
	</div>
</div>

<div class="row">
	<?php if($page->images()->count() > 1): ?>
		<div class="gallery">
			<?php 
			$images = $page->images()->filter(function($image){
				return !str::contains($image->filename(), 'sponsor') && !str::contains($image->filename(), 'thumbnail');
			});
			foreach( $images as $slide): ?>
				<figure class="gallery-cell col-xs-12">
					<img src="<?php echo $slide->url() ?>">
				</figure>
			<?php endforeach ?>
			<div class="gallery-cell col-xs-12">
				<div class="lead col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<?php echo $page->text()->kt() ?>
					<?php if ($page->images()->filterBy('filename', '*=', 'sponsor')->count() > 0): ?>
						<section class="sponsors">
						<p>Sponsored by:</p>
							<?php foreach ($page->images()->filterBy('filename', '*=', 'sponsor') as $sponsor): ?>
								<?php if ($sponsor->link()->isNotEmpty()): ?>
									<a href="<?php echo $sponsor->link() ?>"><img src="<?php echo $sponsor->url() ?>"></a>
								<?php else: ?>
									<img src="<?php echo $sponsor->url() ?>">
								<?php endif ?>
							<?php endforeach ?>
						</section>
					<?php endif ?>
				</div>
			</div>
		</div>
		<div class="gallery-status"></div>
	<?php else: ?>
		<div class="lead col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			<?php echo $page->text()->kt() ?>
		</div>
	<?php endif ?>
</div>

<div class="row">
	<hr>	
</div>

<div class="row">
	<?php snippet('date-grid', array('page' => $site->pages()->find('events'))); ?>
</div>
<script>
var $gallery = $('.gallery').flickity({
	"imagesLoaded": true,
	"wrapAround": true,
	"pageDots": false,
    arrowShape: { 
      x0: 10,
      x1: 60, y1: 50,
      x2: 65, y2: 50,
      x3: 15
    }
});
var $galleryStatus = $('.gallery-status');
var flkty = $gallery.data('flickity');

function updateStatus() {
	var cellNumber = flkty.selectedIndex + 1;
	$galleryStatus.text( cellNumber + '/' + flkty.cells.length );
}
updateStatus();
$gallery.on( 'cellSelect', updateStatus);
</script>
<?php snippet('footer') ?>