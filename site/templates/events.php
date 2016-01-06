<?php snippet('header') ?>

<div class="row">
	<?php snippet('hero') ?>
</div>

<?php if ($page->children()->filterBy('date', '>', time())->count() > 0): ?>
	<?php foreach ($page->children()->filterBy('date', '>', time())->sortBy('date', 'desc')->limit(1) as $subpage): ?>
		<div class="row">
			<div class="col-xs-12">
				<a href="<?php echo $subpage->url() ?>">
					<h2>Next Event: <?php echo $subpage->title() ?></h2>
					<h3><?php echo $subpage->date("M j") ?> <?php echo $subpage->time() ?> <?php echo $subpage->location() ?></h3>
				</a>
			</div>
			<div class="col-sm-6">
				<a href="<?php echo $subpage->url() ?>"><img src="<?php echo $subpage->images()->first()->crop(585, 300)->url() ?>"></a>
			</div>
			<div class="col-sm-6 next-event">
				<?php echo $subpage->text()->kt() ?>
				<?php if ($subpage->images()->filterBy('filename', '*=', 'sponsor')->count() > 0): ?>
					<section class="sponsors">
					<p>Sponsored by:</p>
						<?php foreach ($subpage->images()->filterBy('filename', '*=', 'sponsor') as $sponsor): ?>
							<?php if ($sponsor->link()->isNotEmpty()): ?>
								<a href="<?php echo $sponsor->link() ?>"><img src="<?php echo $sponsor->url() ?>"></a>
							<?php else: ?>
								<img src="<?php echo $sponsor->url() ?>">
							<?php endif ?>
						<?php endforeach ?>
					</section>
				<?php endif ?>					
				<ul class="social list-inline">
					<?php if(!$subpage->tickets()->isEmpty()): ?><li><a class="share" href="<?php echo $subpage->tickets() ?>">Purchase Tickets</a></li><?php endif ?>
					<li>
						<!-- AddThis Button BEGIN -->
						<a class="addthis_button share" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4fdee4292505e9fd">Share</a>
						<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fdee4292505e9fd"></script>
						<!-- AddThis Button END -->
					</li>
					<li>
						<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $subpage->url() ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=110196125731861" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>	
					</li>
				</ul>
			</div>
		</div>
	<?php endforeach ?>
<?php endif ?>

<hr>

<div class="row">
	<?php snippet('date-grid') ?>
</div>
<?php snippet('footer') ?>