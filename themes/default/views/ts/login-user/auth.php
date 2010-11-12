<?php
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 *
 * Description : main script for authentication.
 */
	//Put all error state to 0
	error_reporting(0);
	
	//Start session
	session_start();
	
	if(isset($_SESSION['SESS_ADMIN_ID'])) {
		//Create query
		$qry="SELECT * FROM ts_peserta";
		$result=mysql_query($qry);
		
		$qry2="SELECT * FROM ts_peserta, ts_invoice, ts_kursus WHERE ts_peserta.ts_peserta_ic = '".$_SESSION['SESS_USERNAME']."' AND ts_invoice.peserta_id = ts_peserta.ts_peserta_id AND ts_kursus.ts_kursus_ID = ts_invoice.kursus_id";
		$result_invoice=mysql_query($qry2);
		
		$qry3="SELECT * FROM ts_invoice, ts_kursus WHERE ts_kursus.ts_kursus_ID = ts_invoice.kursus_id";
		$kursus=mysql_query($qry3);
	}
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_ADMIN_ID']) || (trim($_SESSION['SESS_ADMIN_ID']) == '')) {
		header("location: access-denied");
		exit();
	}
?>