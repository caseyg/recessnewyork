<?php snippet('header') ?>

<div class="row">
	<?php snippet('hero') ?>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<h3>Next Event</h3>
		<?php snippet('page-peek', array('section' => 'events')) ?>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<h3>Recess Studio</h3>
		<?php snippet('page-peek', array('section' => 'studio')) ?>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		<h3>Intermission</h3>
		<?php snippet('page-peek', array('section' => 'intermission')) ?>
	</div>
</div>
<?php snippet('footer') ?>