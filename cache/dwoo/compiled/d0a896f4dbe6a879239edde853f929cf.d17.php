<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
<h3>Selamat datang, TESTING IS</h3>
<p>Berikut adalah maklumat berkenaan pendaftaran anda dalam kursus-kursus yang ditawarkan oleh Program Kursus dan Latihan Teknikal. Jika terdapat sebarang perubahan terhadap maklumat anda seperti pertukaran alamat atau nombor telefon, anda boleh mengubah maklumat tersebut disini. Status permohonan anda hanya akan dianggap tidak berjaya sekiranya anda tidak mendapat sebarang maklumbalas dari pihak urusetia dalam tempoh 2 minggu dari tarikh permohonan atau sebelum tarikh tutup pendaftaran.</p>
  
<h3>Maklumat Peribadi</h3>
      <table width="100%">
      <tr>
        <td width="150">Nama Penuh</td>
        <td>TESTING IS</td>
      </tr>
      <tr>
        <td width="150">No. IC/Passport</td>
        <td>101010101010</td>
      </tr>
      <tr>
        <td width="150">Jantina</td>
        <td>NONE</td>
      </tr>
      <tr>
        <td width="150">Umur</td>
        <td>0</td>
      </tr>
    </table>

<h3>Maklumat Untuk Dihubungi</h3>
    <table width="100%">
      <tr>
        <td width="150">No. Telefon Bimbit</td>
        <td>+601</td>
      </tr>
      <tr>
        <td width="150">No.Telefon Rumah</td>
        <td>+60</td>
      </tr>
      <tr>
        <td width="150"><label for="label">Alamat Rumah</label></td>
        <td></td>
      </tr>
      <tr>
        <td width="150"><label for="label">E-mail</label></td>
        <td>najwaabdullatif@gmail.com</td>
      </tr>
    </table>
 
<h3>Maklumat Lain</h3>
<table width="100%">
  <tr>
    <td width="150"><label>Taraf Perkahwinan</label></td>
    <td>NONE</td>
  </tr>
  <tr>
    <td width="150">Pendidikan</td>
    <td>NONE</td>
  </tr>
  <tr>
    <td width="150"><label>Pekerjaan</label></td>
    <td>NONE</td>
  </tr>
  <tr>
    <td width="150">Bidang</td>
    <td></td>
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