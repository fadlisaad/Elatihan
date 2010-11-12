<?php
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 * 
 * Description : main script for logout.Clear all session available.
 */
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_USERNAME']);
	unset($_SESSION['SESS_FULLNAME']);
	unset($_SESSION['SESS_PASSWORD']);
	unset($_SESSION['SESS_PHONE']);
	unset($_SESSION['SESS_EMAIL']);
	unset($_SESSION['SESS_KURSUS']);
	unset($_SESSION['SESS_YEAR']);
	
	echo "<script>window.location.href = 'http://elearn.mardi.gov.my'</script>";
?>