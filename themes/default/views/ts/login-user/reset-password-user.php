<?php
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/ts
 * 
 * Description : main script to retrieve user password
 */
 error_reporting(0);
 ini_set("display_errors", 0);
 session_start();

if( isset($_POST['submit'])) {
//Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
//This script is complete
//Connect to database from here
//$link = mysql_connect('localhost', 'root', '');
$link = mysql_connect('202.190.32.26', 'root', 'xs2mysql'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//select the database | Change the name of database from here
mysql_select_db('mardilms'); 

//get e-mail address from reset.php
$email=$_POST['e-mail'];
$email=mysql_real_escape_string($email);
$status = "OK";
$msg="";
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
// You can supress the error message by un commenting the above line
if (!stristr($email,"@") OR !stristr($email,".")) {
$msg="<div class='notification failure canhide'><p>E-mail anda salah. Sila cuba semula.</p></div>";
$status= "NOTOK";
}

if($status=="OK") { // validation passed now we will check the tables
	$query="SELECT ts_peserta_ID, ts_peserta_ic, ts_peserta_password, ts_peserta_email FROM ts_peserta WHERE ts_peserta_email = '$email'";
	$st=mysql_query($query);
	$recs=mysql_num_rows($st);
	$row=mysql_fetch_object($st);
	$em=$row->ts_peserta_email;// email is stored to a variable
	if (!$recs) { // No records returned, so no email address in our table
		// let us show the error message
		echo "<div class='notification failure canhide'><p>Tiada rekod. Maaf, alamat e-mail anda tiada dalam rekod kami.</p></div>";
		echo "<p><a href='reset'>Klik disini</a> untuk mencuba semula atau pergi ke halaman <a href='login'>Login</a></p>";
	exit;
	}

// formating the mail posting
	// headers here
	$from ="elatihan@mardi.gov.my"; // Change this address within quotes to your address
	$headers ="Reply-to: $headers4\n";
	$headers = "From: $headers4\n";
	$headers = "Errors-to: $from\n";
	$headers = "Content-Type: text/html; charset=iso-8859-1\n".$headers;
	// for html mail un-comment the above line

// mail function will return true if it is successful
	if(mail("$em","Kata laluan untuk laman e-Latihan, MARDI","<p>E-mail ini telah dihantar ke alamat e-mail anda kerana anda telah meminta untuk mengingatkan kata laluan anda. Berikut adalah keterangan login dan e-mail anda.</p><p>Login ID: $row->ts_peserta_ic</p><p> E-mail: $row->ts_peserta_email</p><p>Password:$row->ts_peserta_password</p><p>Sila klik pada pautan dibawah ini untuk login.</p><p><a href='http://elearn.mardi.gov.my/login'>Login</a></p><p>Sekian, terima kasih.</p><p> Administrator, e-Latihan MARDI</p><p>Sila hubungi elatihan@mardi.gov.my untuk keterangan lanjut.</p>","$headers")) {

	echo "<h3>TERIMA KASIH</h3>";
	echo "<div class='notification information canhide'><p>Sila semak e-mail anda</p></div>";
	echo "<p>Satu e-mail dengan keterangan ID pengguna dan kata laluan telah dihantar ke alamat e-mail anda [".$row->ts_peserta_email."]</p>";
	echo "<a href='login'>Klik disini untuk ke halaman Login</a> | <a href='index.php'>Kembali ke halaman utama</a>";
}

else { // there is a system problem in sending mail
	echo "<div class='notification failure canhide'><p>Maaf. Terdapat masalah dengan server e-mail kami dalam memproses e-mail anda</p></div>";
	echo "<p>Sila maklumkan kepada pentadbir laman ini untuk tindakan lanjut. <a href='mailto:elatihan@mardi.gov.my'>elatihan@mardi.gov.my</a></p>";
	echo "<input type='button' value='Cuba semula' onClick='history.go(-1)' class='button'>";
}

}
else { // Validation failed so show the error message
	echo "$msg";
	echo "<input class='button' type='button' value='Cuba semula' onClick='history.go(-1)'>";
}
		// echo 'Thank you. Your message said "'.$_POST['message'].'"';
		//unset($_SESSION['security_code']);

} else {

}
?>
