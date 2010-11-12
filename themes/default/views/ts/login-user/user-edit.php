<?php require_once APPPATH.'themes/default/views/ts/login-user/auth.php'; ?>
<?php
/**
 * Copyright 2009-2011 MARDI
 * Developed by: Mohd Fadli Saad, ZNA System Sdn Bhd
 * This file is part of MARDILMS.
 * The latest code can be found at http://elearn.mardi.gov.my/
 * 
 * Description : Edit personal details.
 */
	$this->load->database();
	$ic = $_SESSION['SESS_USERNAME'];

	$query = $this->db->query("SELECT * FROM ts_peserta WHERE ts_peserta_ic = $ic");
	foreach ($query->result() as $row)

?>
<h3>Selamat datang, <?php echo ucwords($_SESSION['SESS_FULLNAME']);?> (<?php echo $_SESSION['SESS_EMAIL']; ?>)</h3>	
<form method="POST" action="user-edit-exec" name="update" id="update" class="ajax_form">
    <input type="hidden" name="ic" id="ic" value="<?php echo ucwords($_SESSION['SESS_USERNAME']);?>"/>
	
	<div class="notification information"><p>Ubah maklumat peribadi dan biodata</p></div>
	
    <h3>Maklumat Peribadi</h3>
		<p>
			<input name="name" type="text" class="text_input" value="<?php echo strtoupper($row->ts_peserta_nama); ?>"/>
			<label>Nama Penuh</label>
		</p>
		<p>
			<input name="ic" type="text" class="text_input" value="<?php echo $row->ts_peserta_ic; ?>"/>
			<label>No. IC/Passport</label>
		</p>
		<p>
			<input name="jantina" type="text" class="text_input" value="<?php echo strtoupper($row->ts_peserta_jantina); ?>" />
			<label>Jantina</label>
		</p>
		<p>
			<label>Jantina</label><br />
			<input <?php if (!(strcmp($row->ts_peserta_jantina,"lelaki"))) { echo "checked=\"checked\"";} ?> type="radio" name="jantina" id="jantina" value="lelaki" />Lelaki<br />
			<input <?php if (!(strcmp($row->ts_peserta_perkahwinan,"kahwin"))) { echo "checked=\"checked\"";} ?> type="radio" name="jantina" id="jantina" value="perempuan" />Perempuan
		</p>
		<p>
			<input name="umur" type="text" class="text_input" value="<?php echo $row->ts_peserta_umur; ?>" maxlength="2"/>
			<label>Umur</label>
		</p>
	 
    <h3>Maklumat Untuk Dihubungi</h3>
		<p>
			<input name="tel_bimbit" type="text" class="text_input" id="tel_bimbit" value="<?php echo $row->ts_peserta_handfone; ?>"/>
			<label>No. Telefon Bimbit</label>
		</p>
		<p>
			<input name="tel_pej_rumah" type="text" class="text_input" id="tel_pej_rumah" value="<?php echo $row->ts_peserta_homeline; ?>" />
			<label>No.Telefon Rumah</label>
		</p>
		<p>
			<textarea name="address" cols="40" rows="5" class="text_input" id="address"><?php echo strtoupper($row->ts_peserta_alamat); ?></textarea>
			<label>Alamat Rumah</label>
		</p>
		<p>
			<input name="email" type="text" class="text_input" id="email" value="<?php echo $row->ts_peserta_email; ?>" />
			<label>E-mail</label>
		</p>
	  
	<h3>Maklumat Lain</h3>
		<p>
			<label>Taraf Perkahwinan</label><br />
			<input <?php if (!(strcmp($row->ts_peserta_perkahwinan,"bujang"))) { echo "checked=\"checked\"";} ?> type="radio" name="taraf" id="taraf" value="bujang" />Bujang<br />
			<input <?php if (!(strcmp($row->ts_peserta_perkahwinan,"kahwin"))) { echo "checked=\"checked\"";} ?> type="radio" name="taraf" id="taraf" value="kahwin" />Berkahwin<br />
			<input <?php if (!(strcmp($row->ts_peserta_perkahwinan,"janda"))) { echo "checked=\"checked\"";} ?> type="radio" name="taraf" id="taraf" value="janda" />Ibu tunggal<br />
			
		</p>
		
		<p>
			<select name="pendidikan" class="text_input" id="pendidikan">
			<option value="tiada" selected="selected" <?php if (!(strcmp("tiada", $row->ts_peserta_pendidikan))) {echo "selected=\"selected\"";} ?>>- sila pilih -</option>
			<option value="pmr" <?php if (!(strcmp("pmr", $row->ts_peserta_pendidikan))) { echo "selected=\"selected\"";} ?>>SRP/PMR</option>
			<option value="spm" <?php if (!(strcmp("spm", $row->ts_peserta_pendidikan))) { echo "selected=\"selected\"";} ?>>SPM</option>
			<option value="stpm" <?php if (!(strcmp("stpm", $row->ts_peserta_pendidikan))) { echo "selected=\"selected\"";} ?>>STPM</option>
			<option value="diploma" <?php if (!(strcmp("diploma", $row->ts_peserta_pendidikan))) { echo "selected=\"selected\"";} ?>>Diploma</option>
			<option value="sarjana muda" <?php if (!(strcmp("sarjana muda", $row->ts_peserta_pendidikan))) { echo "selected=\"selected\"";} ?>>Ijazah Sarjana Muda</option>
			<option value="sarjana" <?php if (!(strcmp("sarjana", $row->ts_peserta_pendidikan))) { echo "selected=\"selected\"";} ?>>Ijazah Sarjana</option>
			<option value="phd" <?php if (!(strcmp("phd", $row->ts_peserta_pendidikan))) { echo "selected=\"selected\"";} ?>>PHD</option>
			<option value="tiada" <?php if (!(strcmp("tiada", $row->ts_peserta_pendidikan))) { echo "selected=\"selected\"";} ?>>Tiada</option>
			</select>
			<label>Pendidikan</label>
		</p>
		<p>
			<select name="pekerjaan" class="text_input" id="pekerjaan">
			<option value="tiada" selected="selected" <?php if (!(strcmp("tiada", $row->ts_peserta_pekerjaan))) {echo "selected=\"selected\"";} ?>>- sila pilih -</option>
			<option value="mardi" <?php if (!(strcmp("mardi", $row->ts_peserta_pekerjaan))) { echo "selected=\"selected\"";} ?>>MARDI</option>
			<option value="kerajaan" <?php if (!(strcmp("kerajaan", $row->ts_peserta_pekerjaan))) { echo "selected=\"selected\"";} ?>>Agensi Kerajaan</option>
			<option value="usahawan" <?php if (!(strcmp("usahawan", $row->ts_peserta_pekerjaan))) { echo "selected=\"selected\"";} ?>>Usahawan</option>
			<option value="swasta" <?php if (!(strcmp("swasta", $row->ts_peserta_pekerjaan))) { echo "selected=\"selected\"";} ?>>Swasta</option>
			<option value="antarabangsa" <?php if (!(strcmp("antarabangsa", $row->ts_peserta_pekerjaan))) { echo "selected=\"selected\"";} ?>>Antarabangsa</option>
			<option value="kerja sendiri" <?php if (!(strcmp("kerja sendiri", $row->ts_peserta_pekerjaan))) { echo "selected=\"selected\"";} ?>>Bekerja sendiri/Awam</option>
			</select>
			<label>Pekerjaan</label>
		</p>
		<p>
			<input name="perusahaan" type="text" class="text_input" id="perusahaan" value="<?php echo strtoupper($row->ts_peserta_perusahaan); ?>" />
			<label>Bidang</label>
		</p>
	
	<h3>Maklumat Majikan</h3>
		<p>
			<input name="m_nama" type="text" class="text_input" id="m_nama" value="<?php echo strtoupper($row->ts_majikan_nama); ?>" />
			<label>Majikan</label>
		</p>
		<p>
			<textarea name="m_alamat" cols="40" rows="5" class="text_input" id="m_alamat"><?php echo strtoupper($row->ts_majikan_alamat); ?></textarea>
			<label>Alamat</label>
		</p>
		<p>
			<input name="m_telefon" type="text" class="text_input" id="m_telefon" value="<?php echo $row->ts_majikan_telefon; ?>" />
			<label>No. Telefon</label>
		</p>

<p>Sila pastikan segala maklumat yang telah dimasukkan adalah tepat. Klik pada butang 'Kemaskini' untuk simpan maklumat</p>
<input name="submit" value="Kemaskini" class="button" type="submit">
<input name="reset" value="Batal" class="button" type="button" onclick="javascript:history.go(-1)">

</form>