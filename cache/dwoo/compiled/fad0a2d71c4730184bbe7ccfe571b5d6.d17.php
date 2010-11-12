<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><h2>Galeri Kursus</h2>

	
	<dl class="photos">
					<dt><a href="http://elearn.mardi.gov.my/photos/bakeri">Bakeri</a></dt>
			<dd>Kursus bakeri</dd>
			</dl>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>