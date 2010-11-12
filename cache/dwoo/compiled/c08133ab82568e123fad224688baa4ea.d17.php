<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="center">
	<h1 class='siteheading'>Photos</h1>
		<div class="entry-content">
			<h2>Galeri Kursus</h2>

	
	<dl class="photos">
					<dt><a href="http://elearn.mardi.gov.my/photos/bakeri">Bakeri</a></dt>
			<dd>Kursus bakeri</dd>
			</dl>
			<p><input name="back" value="Kembali" class="button" type="button" onclick="javascript:history.back(1)"></p>
		</div>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>