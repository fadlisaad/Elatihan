<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>

<div class="error">
	<h6>Data insertion failed</h6>
	<p><br /><span style="color:red;">The No kad pengenalan field is required.</span>
<br /><span style="color:red;">The Password field is required.</span>
<br /><span style="color:red;">The E-mail field is required.</span>
</p>
	<a class="close" title="Close this message" href="#"></a>
</div>



<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>