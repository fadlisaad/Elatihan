<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>

<form id="loginForm" name="loginForm" method="post" action="register-exec" class="ajax_form">
<p>
	<input name="login" id="login" maxlength="50" type="text" class="text_input is_required">
	<label for="username">No Kad Pengenalan</label>
</p>
<p>
    <input name="password" maxlength="15" type="password" id="password" class="text_input is_required">
	<label for="password">Kata Laluan</label>
</p>	
<p>
	<a href="reset">Lupa kata laluan?</a>
</p>
	<input name="submit" value="Login" class="button" type="submit">
</form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>