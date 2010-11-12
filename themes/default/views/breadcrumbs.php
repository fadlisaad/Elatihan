<?php
foreach ($template['breadcrumbs'] as $crumb) {
	if(!empty($crumb->uri))
	{
		echo anchor($crumb['uri'], $crumb['title']);
		echo " > ";
	}
	else
	{
		echo '<span class="date">' . $crumb['title'] . '</span>';
	}
}
?>