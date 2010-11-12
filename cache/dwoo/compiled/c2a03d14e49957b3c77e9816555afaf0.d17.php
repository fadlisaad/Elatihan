<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p>Pendaftaran</p><form action="http://elearn.mardi.gov.my/pendaftaran" method="post" class="ajax_form" id="form1"><p><input type="text" name="name" value="" id="name" class="text_input is_required"  /><label for="name">Nama Penuh<span style="color:red">*</span></label></p><p><input type="text" name="ic" value="" id="ic" maxlength="14" class="text_input is_required"  /><label for="ic">No Kad Pengenalan<span style="color:red">*</span></label></p><div id=\"status\"></div><p><input type="password" name="password" value="" id="password" maxlength="20" class="text_input is_required"  /><label for="password">Kata Laluan<span style="color:red">*</span></label></p><p><input type="text" name="emel" value="" id="emel" class="text_input is_required"  /><label for="emel">E-mail<span style="color:red">*</span></label></p><p><input type="text" name="tel_bimbit" value="+601" id="tel_bimbit" maxlength="12" class="text_input"  /><label for="tel_bimbit">Telefon Bimbit</label></p><p><input type="text" name="tel_pej_rumah" value="+60" id="tel_pej_rumah" maxlength="12" class="text_input is_required"  /><label for="tel_pej_rumah">Telefon pejabat/rumah</label></p><label for="alamat" class="blocklabel">Alamat</label><p><textarea name="address" cols="70" rows="5" id="address" class="text_area is_empty" ></textarea></p><p><input type="text" name="umur" value="00" id="umur" maxlength="2" class="text_input is_required"  /><label for="umur">Umur</label></p><p><select name="jantina">
<option value="none" selected="selected">- Sila Pilih -</option>
<option value="lelaki">Lelaki</option>
<option value="perempuan">Perempuan</option>
</select><label for="jantina" class="blocklabel">Jantina</label></p><p><select name="status_perkahwinan">
<option value="none" selected="selected">- Sila Pilih -</option>
<option value="bujang">Bujang</option>
<option value="berkahwin">Berkahwin</option>
<option value="tunggal">Ibu Tunggal</option>
</select><label for="status" class="blocklabel">Status Perkahwinan</label></p><p><select name="my_kelulusan">
<option value="none" selected="selected">- Sila Pilih -</option>
<option value="tiada">Tiada</option>
<option value="pmr">SRP/PMR</option>
<option value="spm">SPM</option>
<option value="stpm">STPM</option>
<option value="diploma">Diploma</option>
<option value="sarjana muda">Ijazah Sarjana Muda</option>
<option value="sarjana">Ijazah Sarjana</option>
<option value="phd">Ijazah Kedoktoran (PhD)</option>
</select><label for="kelulusan">Kelulusan Akademik</label></p><p><select name="my_pekerjaan">
<option value="none" selected="selected">- Sila Pilih -</option>
<option value="mardi">MARDI</option>
<option value="kerajaan">Agensi Kerajaan</option>
<option value="usahawan">Usahawan</option>
<option value="swasta">Swasta</option>
<option value="antarabangsa">Antarabangsa</option>
<option value="kerja sendiri">Bekerja sendiri/Awam</option>
</select><label for="pekerjaan" class="blocklabel">Pekerjaan sekarang</label></p><p><input type="text" name="my_perusahaan" value="" id="my_perusahaan" class="text_input"  /><label for="my_perusahaan">Perniagaan diusahakan sekarang</label></p><p><input type="text" name="majikan_nama" value="" id="majikan_nama" class="text_input"  /><label for="majikan_nama">Nama Majikan</label></p><p><input type="text" name="majikan_telefon" value="" id="majikan_telefon" class="text_input"  /><label for="majikan_telefon">No Telefon Majikan</label></p><label for="majikan_alamat" class="blocklabel">Alamat Majikan</label><p><textarea name="majikan_alamat" cols="70" rows="5" id="majikan_alamat" class="text_area is_empty" ></textarea></p><input type="submit" name="hantar" value="Hantar" id="send" class="button"  /><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>