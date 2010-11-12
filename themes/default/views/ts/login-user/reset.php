<?php
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/ts
 * 
 * Description : main script for reset lost password
 */
?>

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
</form>