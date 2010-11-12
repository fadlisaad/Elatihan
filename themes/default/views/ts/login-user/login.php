<?php
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 * 
 * Description : Login form.
 */
 
?>
<?php if ($this->session->flashdata('notice')): ?>
    <div class="notification information">
		<p><?php echo $this->session->flashdata('notice');?></p>
	</div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <div class="notification warning">
		<p><?php echo $this->session->flashdata('error');?></p>
	</div>
<?php endif; ?>

<?php if(! isset($_SESSION['SESS_ADMIN_ID'])): ?>
	<div class="notification information">
		<p><strong>Pertama kali mendaftar?</strong>
		<a href="pendaftaran">Klik untuk mendaftar</a>
		</p>
	</div>
<?php endif; ?>

<form id="loginForm" name="loginForm" method="post" action="login-exec" class="ajax_form">
<p>
	
	<input name="login" id="login" maxlength="50" type="text" class="text_input is_required">
	<label for="username">No Kad Pengenalan</label>
</p>
<p>
    
    <input name="password" maxlength="15" type="password" id="password" class="text_input is_required">
	<label for="password">Kata Laluan</label>
</p>	
<p><a href="reset">Lupa kata laluan?</a></p>
	<input name="submit" value="Login" class="button" type="submit">
</form>