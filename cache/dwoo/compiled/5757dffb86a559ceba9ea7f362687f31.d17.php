<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>

<div class="error">
	<h6>Data insertion failed</h6>
	<p><br /><span style="color:red;">The E-mail field must contain a valid email address.</span>
</p>
	<a class="close" title="Close this message" href="#"></a>
</div>



<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>