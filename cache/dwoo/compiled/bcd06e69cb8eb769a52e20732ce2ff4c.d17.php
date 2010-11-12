<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<div class="notification lightbulb">
	<p>Sila masukkan alamat e-mail anda untuk mendapatkan semula kata laluan anda.
	</p>
</div>

<form action="reset-password" method="post" class="ajax_form">
	<p>
		<input name="e-mail" type="text" class="text_input is_required" id="e-mail">
		<label for="e-mail">E-mail</label>
	</p>
	<p>
		<input name="submit" value="Hantar" class="button" type="submit">
	</p>
</form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>