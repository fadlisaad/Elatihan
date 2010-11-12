<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><h2>Archive</h2>
<h3>June '10</h3>

<div class="float-left width-two-thirds">
			<p>Read More&nbsp;&raquo;</p>
	</div>

<div class="float-right width-quater">
	<h4>Subscribe to RSS</h4>
<div class="spacer-left-dbl">	
	<img src="/application/assets/img/icons/rss-14x14.png" class="float-left spacer-right" />
	
	<a href="http://elearn.mardi.gov.my/news/rss/all.rss"><strong>All articles</strong><br /></a>	
		
</div>

<p class="clear-both">Get articles straight away by subscribing to our RSS feed. You can do this via most popular e-mail clients, or try <a href="http://reader.google.co.uk/">Google Reader</a>.</p>	<hr />
	</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>