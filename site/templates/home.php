<?php snippet('header') ?>

<div class="row">
	<?php snippet('hero') ?>
</div>

<div class="row peek">
	<div class="col-xs-6 col-sm-4">
		<?php snippet('page-peek', array('section' => 'events')) ?>
	</div>
	<div class="col-xs-6 col-sm-4">
		<h2>Recess Studio</h2>
		<?php snippet('page-peek', array('section' => 'studio')) ?>
	</div>
	<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">
		<h2>Intermission</h2>
		<?php snippet('page-peek', array('section' => 'intermission')) ?>
	</div>
</div>
<?php snippet('footer') ?>