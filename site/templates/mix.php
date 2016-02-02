<?php snippet('header') ?>

<div class="row main">

	<div class="col-sm-6">
		<div class="row">
			<img class="col-xs-12" src="<?php echo $page->images()->first()->resize(555,555)->url() ?>" width="555" height="555" alt="<?php echo $page->title() ?>">
		</div>
	</div>

	<div class="col-sm-6 info">
		<?php if ($page->mixcloud()->isNotEmpty()): ?><iframe class="mixcloud" width="100%" height="120" src="https://www.mixcloud.com/widget/iframe/?embed_type=widget_standard&amp;embed_uuid=708eec7a-8ea6-40db-9fee-bb79b230b549&amp;feed=<?php echo urlencode($page->mixcloud()) ?>&amp;hide_artwork=1&amp;hide_cover=1&amp;hide_tracklist=1&amp;light=1&amp;replace=0" frameborder="0"></iframe><?php endif ?>
		<p>Selections by <a href="<?php echo $page->authorwebsite() ?>"><?php echo $page->title() ?></a></p>
		<?php echo $page->text()->kt() ?>

		<h2>Tracklist</h2>
		<?php echo $page->tracklist()->kt() ?>		
	</div>

</div>

<div class="row">
	<div class="col-xs-8 col-sm-6 social">
		<!-- AddThis Button BEGIN -->
		<a class="addthis_button share" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4fdee4292505e9fd">Share</a>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fdee4292505e9fd"></script>
		<!-- AddThis Button END -->

       	<?php if($page->audio()->count() > 0): ?><a class="share" href="<?php echo $page->audio()->first()->url() ?>">DOWNLOAD</a><?php endif ?>
		
		<div class="pull-right">
          	<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $page->url() ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=110196125731861" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
		</div>
	</div>
	<div class="col-xs-4 col-sm-6 col-sm-offset-0">
		<?php if($page->hasPrev()): ?>
			<a class="share" href="<?php echo $page->prev()->url() ?>">Prev</a>
		<?php endif ?>

		<?php if($page->hasNext()): ?>
			<a class="share pull-right" href="<?php echo $page->next()->url() ?>">Next</a>
		<?php endif ?>
	</div>
</div>


<div class="row">
	<div class="col-xs-12">
		<hr>
	</div>
</div>

<div class="row">
	<?php snippet('date-grid', array('page' => $site->pages()->find('intermission'))); ?>
</div>

<?php snippet('footer') ?>