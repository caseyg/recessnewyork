<?php snippet('header') ?>

<div class="row">

	<div class="col-sm-6">
		<div class="row">
			<img class="col-xs-12" src="<?php echo $page->images()->first()->url() ?>" alt="<?php echo $page->title() ?>">
		</div>

		<div class="row">
			<div class="col-xs-12 social">
               <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $page->url() ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=110196125731861" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>

				<!-- AddThis Button BEGIN -->
				<a class="addthis_button share" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4fdee4292505e9fd">Share</a>
				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fdee4292505e9fd"></script>
				<!-- AddThis Button END -->

               <?php if($page->audio()->notEmpty()): ?><a href="<?php echo $page->audio()->first()->url() ?>">DOWNLOAD</a><?php endif ?>

				<?php if($page->hasPrevVisible()): ?>
					<a href="<?php echo $page->prevVisible()->url() ?>">Prev</a>
				<?php endif ?>

				<?php if($page->hasNextVisible()): ?>
					<a href="<?php echo $page->nextVisible()->url() ?>">Next</a>
				<?php endif ?>
			</div>
		</div>

	</div>

	<div class="col-sm-6">
		<?php echo $page->mixcloud() ?>
		
		<?php echo $page->text()->kt() ?>

		<h2>Tracklist</h2>
		<?php echo $page->tracklist()->kt() ?>		
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