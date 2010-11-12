<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, SAMUEL TANG</h3>
<p>Berikut adalah maklumat berkenaan pendaftaran anda dalam kursus-kursus yang ditawarkan oleh Program Kursus dan Latihan Teknikal. Jika terdapat sebarang perubahan terhadap maklumat anda seperti pertukaran alamat atau nombor telefon, anda boleh mengubah maklumat tersebut disini. Status permohonan anda hanya akan dianggap tidak berjaya sekiranya anda tidak mendapat sebarang maklumbalas dari pihak urusetia dalam tempoh 2 minggu dari tarikh permohonan atau sebelum tarikh tutup pendaftaran.</p>
  
<h3>Maklumat Peribadi</h3>
      <table width="100%">
      <tr>
        <td width="150">Nama Penuh</td>
        <td>SAMUEL TANG</td>
      </tr>
      <tr>
        <td width="150">No. IC/Passport</td>
        <td>820826145171</td>
      </tr>
      <tr>
        <td width="150">Jantina</td>
        <td>LELAKI</td>
      </tr>
      <tr>
        <td width="150">Umur</td>
        <td>28</td>
      </tr>
    </table>

<h3>Maklumat Untuk Dihubungi</h3>
    <table width="100%">
      <tr>
        <td width="150">No. Telefon Bimbit</td>
        <td>+60123880066</td>
      </tr>
      <tr>
        <td width="150">No.Telefon Rumah</td>
        <td>+60378049731</td>
      </tr>
      <tr>
        <td width="150"><label for="label">Alamat Rumah</label></td>
        <td>55,SS23/33 TAMAN SEA 47400 PETALING JAYA, SELANGOR</td>
      </tr>
      <tr>
        <td width="150"><label for="label">E-mail</label></td>
        <td>t_s007@yahoo.com</td>
      </tr>
    </table>
 
<h3>Maklumat Lain</h3>
<table width="100%">
  <tr>
    <td width="150"><label>Taraf Perkahwinan</label></td>
    <td>BUJANG</td>
  </tr>
  <tr>
    <td width="150">Pendidikan</td>
    <td>DIPLOMA</td>
  </tr>
  <tr>
    <td width="150"><label>Pekerjaan</label></td>
    <td>USAHAWAN</td>
  </tr>
  <tr>
    <td width="150">Bidang</td>
    <td>F&B</td>
  </tr>
</table>

<h3>Maklumat Majikan</h3>
    <table width="100%">
  <tr>
    <td width="150"><label>Majikan</label></td>
    <td></td>
  </tr>
  <tr>
    <td width="150"><label>Alamat</label></td>
    <td></td>
  </tr>
  <tr>
    <td width="150"><label>No. Telefon</label></td>
    <td></td>
  </tr>
</table>

<p>Sila pastikan segala maklumat yang telah dimasukkan adalah tepat. Klik 'Log Keluar' untuk keluar dari halaman ini.</p>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>