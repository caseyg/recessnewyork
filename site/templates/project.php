<?php snippet('header') ?>

<div class="row">
	<div class="col-xs-12">
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-push-2">
		<header class="content-header">
			<h1><?php echo $page->title() ?></h1>
			<?php if($page->subtitle()->isNotEmpty()): ?><h2><?php echo $page->subtitle() ?></h2><?php endif ?>
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

<class class="row">
	<div class="text-center col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
		<?php echo $page->text()->kt() ?>
	</div>
</class>

<?php if($page->images()->count() > 1): ?>
	<div class="row">
		<div class="gallery js-flickity">
			<?php 
			foreach( $page->images() as $slide): ?>
				<?php if($slide->filename() != 'thumbnail.jpg'): ?>
					<figure class="gallery-cell col-xs-12">
						<img src="<?php echo $slide->url() ?>">
					</figure>
				<?php endif ?>
			<?php endforeach ?>
		</div>
	</div>
<?php endif ?>

<div class="row">
	<hr>
</div>

<div class="row">
	<?php snippet('projects') ?>
</div>

<?php snippet('footer') ?>