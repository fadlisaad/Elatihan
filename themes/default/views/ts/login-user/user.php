<?php require_once APPPATH.'themes/default/views/ts/login-user/auth.php'; ?>
<?php
	$this->load->database();
	$ic = $_SESSION['SESS_USERNAME'];

	$query = $this->db->query("SELECT * FROM ts_peserta WHERE ts_peserta_ic = $ic LIMIT 1");
	foreach ($query->result() as $row)
?>
<?php { ?>

<h3>Selamat datang, <?php echo strtoupper($row->ts_peserta_nama); ?></h3>
<p>Berikut adalah maklumat berkenaan pendaftaran anda dalam kursus-kursus yang ditawarkan oleh Program Kursus dan Latihan Teknikal. Jika terdapat sebarang perubahan terhadap maklumat anda seperti pertukaran alamat atau nombor telefon, anda boleh mengubah maklumat tersebut disini. Status permohonan anda hanya akan dianggap tidak berjaya sekiranya anda tidak mendapat sebarang maklumbalas dari pihak urusetia dalam tempoh 2 minggu dari tarikh permohonan atau sebelum tarikh tutup pendaftaran.</p>
  
<h3>Maklumat Peribadi</h3>
      <table width="100%">
      <tr>
        <td width="150">Nama Penuh</td>
        <td><?php echo strtoupper($row->ts_peserta_nama); ?></td>
      </tr>
      <tr>
        <td width="150">No. IC/Passport</td>
        <td><?php echo $row->ts_peserta_ic; ?></td>
      </tr>
      <tr>
        <td width="150">Jantina</td>
        <td><?php echo strtoupper($row->ts_peserta_jantina); ?></td>
      </tr>
      <tr>
        <td width="150">Umur</td>
        <td><?php echo $row->ts_peserta_umur; ?></td>
      </tr>
    </table>

<h3>Maklumat Untuk Dihubungi</h3>
    <table width="100%">
      <tr>
        <td width="150">No. Telefon Bimbit</td>
        <td><?php echo $row->ts_peserta_handfone; ?></td>
      </tr>
      <tr>
        <td width="150">No.Telefon Rumah</td>
        <td><?php echo $row->ts_peserta_homeline; ?></td>
      </tr>
      <tr>
        <td width="150"><label for="label">Alamat Rumah</label></td>
        <td><?php echo strtoupper($row->ts_peserta_alamat); ?></td>
      </tr>
      <tr>
        <td width="150"><label for="label">E-mail</label></td>
        <td><?php echo $row->ts_peserta_email; ?></td>
      </tr>
    </table>
 
<h3>Maklumat Lain</h3>
<table width="100%">
  <tr>
    <td width="150"><label>Taraf Perkahwinan</label></td>
    <td><?php echo strtoupper($row->ts_peserta_perkahwinan); ?></td>
  </tr>
  <tr>
    <td width="150">Pendidikan</td>
    <td><?php echo strtoupper($row->ts_peserta_pendidikan); ?></td>
  </tr>
  <tr>
    <td width="150"><label>Pekerjaan</label></td>
    <td><?php echo strtoupper($row->ts_peserta_pekerjaan); ?></td>
  </tr>
  <tr>
    <td width="150">Bidang</td>
    <td><?php echo strtoupper($row->ts_peserta_perusahaan); ?></td>
  </tr>
</table>

<h3>Maklumat Majikan</h3>
    <table width="100%">
  <tr>
    <td width="150"><label>Majikan</label></td>
    <td><?php echo strtoupper($row->ts_majikan_nama); ?></td>
  </tr>
  <tr>
    <td width="150"><label>Alamat</label></td>
    <td><?php echo strtoupper($row->ts_majikan_alamat); ?></td>
  </tr>
  <tr>
    <td width="150"><label>No. Telefon</label></td>
    <td><?php echo $row->ts_majikan_telefon; ?></td>
  </tr>
</table>

<p>Sila pastikan segala maklumat yang telah dimasukkan adalah tepat. Klik 'Log Keluar' untuk keluar dari halaman ini.</p>
<?php } ?>