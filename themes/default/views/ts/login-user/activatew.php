<?php

//setup some variables
$action = array();
$action['result'] = null;
$key = $this->uri->segment(2, 0);
	
//quick/simple validation
if(empty($key)){
	$action['result'] = 'error';
	$action['text'] = 'We have missing variables. Please double check your email.';			
}
		
if($action['result'] != 'error'){

	//cleanup the variables
	$key = mysql_real_escape_string($key);
	
	//check if the key is in the database
	$check_key = mysql_query("SELECT * FROM `ts_peserta` WHERE `ts_peserta_email` = '$email' AND `activation` = '$key' LIMIT 1") or die(mysql_error());
	
	if(mysql_num_rows($check_key) != 0){
				
		//get the confirm info
		$confirm_info = mysql_fetch_assoc($check_key);
		
		//confirm the email and update the users database
		$update_users = mysql_query("UPDATE `ts_peserta` SET `active` = 1 WHERE `ts_peserta_email` = '$email' LIMIT 1") or die(mysql_error());
		
		if($update_users){
						
			$action['result'] = 'success';
			$action['text'] = 'User has been confirmed. Thank-You!';
		
		}else{

			$action['result'] = 'error';
			$action['text'] = 'The user could not be updated. Reason: '.mysql_error();;
		
		}
	
	}else{
	
		$action['result'] = 'error';
		$action['text'] = 'The key and email is not in our database.';
	
	}

}


?>

<?=show_errors($action); ?>