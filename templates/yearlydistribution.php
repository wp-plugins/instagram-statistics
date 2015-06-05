<div class="wpstats_graph_wrapper wpstats_yearlydistribution" data-monthly="<?php echo htmlspecialchars(json_encode($stats->monthly)) ?>" data-years="<?php echo htmlspecialchars(json_encode($stats->years)) ?>"
	data-primary="<?php echo htmlspecialchars($details->primary_color) ?>"
	data-secondary="<?php echo htmlspecialchars($details->secondary_color) ?>"
	data-text="<?php echo htmlspecialchars($details->text_color) ?>"
	data-background="<?php echo htmlspecialchars($details->background_color) ?>">
	<b><?php echo $details->title ?></b>
	<?php
		require(plugin_dir_path(__FILE__) . 'staticContent.php');
	?>
</div>