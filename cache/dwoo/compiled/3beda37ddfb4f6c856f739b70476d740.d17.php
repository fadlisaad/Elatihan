<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><h3>Selamat datang, Idawati Yahaya (qisnisya@gmail.com)</h3>	
<form method="POST" action="user-edit-exec" name="update" id="update" class="ajax_form">
    <input type="hidden" name="ic" id="ic" value="810702015448"/>
	
	<div class="notification information"><p>Ubah maklumat peribadi dan biodata</p></div>
	
    <h3>Maklumat Peribadi</h3>
		<p>
			<input name="name" type="text" class="text_input" value="IDAWATI YAHAYA"/>
			<label>Nama Penuh</label>
		</p>
		<p>
			<input name="ic" type="text" class="text_input" value="810702015448"/>
			<label>No. IC/Passport</label>
		</p>
		<p>
			<input name="jantina" type="text" class="text_input" value="PEREMPUAN" />
			<label>Jantina</label>
		</p>
		<p>
			<label>Jantina</label><br />
			<input  type="radio" name="jantina" id="jantina" value="lelaki" />Lelaki<br />
			<input  type="radio" name="jantina" id="jantina" value="perempuan" />Perempuan
		</p>
		<p>
			<input name="umur" type="text" class="text_input" value="29" maxlength="2"/>
			<label>Umur</label>
		</p>
	 
    <h3>Maklumat Untuk Dihubungi</h3>
		<p>
			<input name="tel_bimbit" type="text" class="text_input" id="tel_bimbit" value="+60192288172"/>
			<label>No. Telefon Bimbit</label>
		</p>
		<p>
			<input name="tel_pej_rumah" type="text" class="text_input" id="tel_pej_rumah" value="+6077962599" />
			<label>No.Telefon Rumah</label>
		</p>
		<p>
			<textarea name="address" cols="40" rows="5" class="text_input" id="address">124A JALAN KELICAP
FELDA NITAR 01
86800 MERSING</textarea>
			<label>Alamat Rumah</label>
		</p>
		<p>
			<input name="email" type="text" class="text_input" id="email" value="qisnisya@gmail.com" />
			<label>E-mail</label>
		</p>
	  
	<h3>Maklumat Lain</h3>
		<p>
			<label>Taraf Perkahwinan</label><br />
			<input  type="radio" name="taraf" id="taraf" value="bujang" />Bujang<br />
			<input  type="radio" name="taraf" id="taraf" value="kahwin" />Berkahwin<br />
			<input  type="radio" name="taraf" id="taraf" value="janda" />Ibu tunggal<br />
			
		</p>
		
		<p>
			<select name="pendidikan" class="text_input" id="pendidikan">
			<option value="tiada" selected="selected" >- sila pilih -</option>
			<option value="pmr" >SRP/PMR</option>
			<option value="spm" selected="selected">SPM</option>
			<option value="stpm" >STPM</option>
			<option value="diploma" >Diploma</option>
			<option value="sarjana muda" >Ijazah Sarjana Muda</option>
			<option value="sarjana" >Ijazah Sarjana</option>
			<option value="phd" >PHD</option>
			<option value="tiada" >Tiada</option>
			</select>
			<label>Pendidikan</label>
		</p>
		<p>
			<select name="pekerjaan" class="text_input" id="pekerjaan">
			<option value="tiada" selected="selected" >- sila pilih -</option>
			<option value="mardi" >MARDI</option>
			<option value="kerajaan" >Agensi Kerajaan</option>
			<option value="usahawan" selected="selected">Usahawan</option>
			<option value="swasta" >Swasta</option>
			<option value="antarabangsa" >Antarabangsa</option>
			<option value="kerja sendiri" >Bekerja sendiri/Awam</option>
			</select>
			<label>Pekerjaan</label>
		</p>
		<p>
			<input name="perusahaan" type="text" class="text_input" id="perusahaan" value="EDA NIAGA" />
			<label>Bidang</label>
		</p>
	
	<h3>Maklumat Majikan</h3>
		<p>
			<input name="m_nama" type="text" class="text_input" id="m_nama" value="- TIADA -" />
			<label>Majikan</label>
		</p>
		<p>
			<textarea name="m_alamat" cols="40" rows="5" class="text_input" id="m_alamat">NO 1,2,3 & 4 JALAN MERPATI
IKS FELDA NITAR 01
86800 MERSING</textarea>
			<label>Alamat</label>
		</p>
		<p>
			<input name="m_telefon" type="text" class="text_input" id="m_telefon" value="+6077962599" />
			<label>No. Telefon</label>
		</p>

<p>Sila pastikan segala maklumat yang telah dimasukkan adalah tepat. Klik pada butang 'Kemaskini' untuk simpan maklumat</p>
<input name="submit" value="Kemaskini" class="button" type="submit">
<input name="reset" value="Batal" class="button" type="button" onclick="javascript:history.go(-1)">

</form><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>