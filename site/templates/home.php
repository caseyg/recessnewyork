<?php snippet('header') ?>

<div class="header row">
	<?php snippet('homepage-carousel') ?>
</div>

<div class="row peek">
	<div class="col-xs-6 col-sm-9">
		<div class="row">
			<div class="col-xs-6 col-sm-6">
				<?php snippet('page-peek', array('section' => 'events')) ?>
			</div>
			<div class="col-xs-6 col-sm-6">
				<h2>Recess Studio</h2>
				<?php snippet('page-peek', array('section' => 'studio')) ?>
			</div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-3">
		<h2>Intermission</h2>
		<?php snippet('page-peek', array('section' => 'intermission')) ?>
	</div>
</div>
<?php snippet('footer') ?>