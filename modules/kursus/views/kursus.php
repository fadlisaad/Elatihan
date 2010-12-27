<?php
// Definition
	$orderNum0 = 1;
	$orderNum1 = 1;
	$orderNum2 = 1;
	$orderNum3 = 1;
	
	$today_date = $this->settings->item('today_date');
	$close_date = $this->settings->item('close_date');
	
	$cat1 = 'Kursus Berjadual';
	$cat2 = 'Kursus Luar Jadual';

	$controller = $this->router->class;

// Queries

	if($controller == "berjadual") {
	$sql0 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = 'Teknologi Ternakan' AND ts_kursus_vendor = '$cat1' AND ts_kursus_publish_status = '1' AND ts_kursus_tarikh_mula BETWEEN '$today_date' AND '$close_date' AND ts_kursus_tarikh_mula IS NOT NULL ORDER BY ts_kursus_tarikh_mula ASC");

	$sql1 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = 'Teknologi Tanaman' AND ts_kursus_vendor = '$cat1' AND ts_kursus_publish_status = '1' AND ts_kursus_tarikh_mula BETWEEN '$today_date' AND '$close_date' AND ts_kursus_tarikh_mula IS NOT NULL ORDER BY ts_kursus_tarikh_mula ASC");

	$sql2 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = 'Teknologi Makanan' AND ts_kursus_vendor = '$cat1' AND ts_kursus_publish_status = '1' AND ts_kursus_tarikh_mula BETWEEN '$today_date' AND '$close_date' AND ts_kursus_tarikh_mula IS NOT NULL ORDER BY ts_kursus_tarikh_mula ASC");

	$sql3 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = 'Teknologi Lanjutan' AND ts_kursus_vendor = '$cat1' AND ts_kursus_publish_status = '1' AND ts_kursus_tarikh_mula BETWEEN '$today_date' AND '$close_date' AND ts_kursus_tarikh_mula IS NOT NULL ORDER BY ts_kursus_tarikh_mula ASC");

}
else {
	$sql0 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = 'Teknologi Ternakan' AND ts_kursus_vendor = '$cat2' AND ts_kursus_publish_status = '1'");

	$sql1 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = 'Teknologi Tanaman' AND ts_kursus_vendor = '$cat2' AND ts_kursus_publish_status = '1'");

	$sql2 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = 'Teknologi Makanan' AND ts_kursus_vendor = '$cat2' AND ts_kursus_publish_status = '1'");

	$sql3 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = 'Teknologi Lanjutan' AND ts_kursus_vendor = '$cat2' AND ts_kursus_publish_status = '1'");

}
?>

<!-- Content start here -->
<?php
	if($controller == "berjadual") { ?>
<p>
	<ul>
		<li>Kursus hanya akan dijalankan mengikut tarikh yang dipaparkan sekiranya jumlah peserta melebihi 15 orang (MS ISO 9001:2008)</li>
	</ul>
</p>
<?php } else { ?>
<p>
	<ul>
		<li>Kursus hanya akan dijalankan sekiranya jumlah peserta melebihi 15 orang (MS ISO 9001:2008)</li>
		<li>Tarikh akan ditetapkan oleh penganjur</li>
	</ul>
</p>
<?php } ?>
<!-- Top links button -->
<div class="entry-head">
	<span class="categories">&nbsp;<a href="#ternakan">Teknologi Ternakan</a>&nbsp;</span>
	<span class="categories">&nbsp;<a href="#tanaman">Teknologi Tanaman</a>&nbsp;</span>
	<span class="categories">&nbsp;<a href="#makanan">Teknologi Makanan</a>&nbsp;</span>
	<span class="categories">&nbsp;<a href="#lanjutan">Teknologi Lanjutan</a>&nbsp;</span>
</div>

<!-- Content of Teknologi Ternakan -->
<h3><a name="ternakan">Teknologi Ternakan</a></h3>
<?php if ($sql0->num_rows() > 0) : ?>
<?php { ?>
<table width="100%">
    <thead>
      <tr>
        <th width="20">Bil</th>
		<?php if($controller == "berjadual"): ?>
		<?php { ?>
		<th width="60">Tarikh</th>
		<?php } ?>
		<?php else: ?>
		<?php endif ?>
        <th>Tajuk</th>
        <th width="60">Yuran (RM)</th>
        <th width="20">Mohon</th>
      </tr>
      </thead>
      <tbody>
	  <?php foreach ($sql0->result_array() as $row): ?>
	  <?php { ?>
        <tr valign="top">
			  <td width="20"><?php echo $orderNum0++; ?></td>
			  <?php if($controller == "berjadual"): ?>
			  <?php { ?>
			  <td width="60"><?php echo date("d/m/Y",strtotime($row['ts_kursus_tarikh_mula'])); ?></td>
			  <?php } ?>
				<?php else: ?>
				<?php endif ?>
			  <td><?php echo strtoupper($row['ts_kursus_nama']); ?></td>
			  <td width="60"><?php echo number_format($row['ts_kursus_harga'],2); ?></td>
			  <td width="20"><?php echo anchor('kursus/'.$controller.'/keterangan/'.$row['ts_kursus_id'], 'Mohon') ?></td>
        </tr>
        <?php } ?>
		<?php endforeach ?>
        </tbody>
</table>
<?php } ?>
<?php else: ?>
<p>Tiada kursus ditawarkan</p>
<?php endif ?>
<div class='hr'><a href="#top" class="scrollTop">atas</a></div>

<!-- Content of Teknologi Tanaman -->
<h3><a name="tanaman">Teknologi Tanaman</a></h3>
<?php if ($sql1->num_rows() > 0) : ?>
<?php { ?>
<table width="100%">
    <thead>
      <tr>
        <th width="20">Bil</th>
		<?php if($controller == "berjadual"): ?>
			  <?php { ?>
        <th width="60">Tarikh</th>
		<?php } ?>
				<?php else: ?>
				<?php endif ?>
        <th>Tajuk</th>
        <th width="60">Yuran (RM)</th>
        <th width="20">Mohon</th>
      </tr>
      </thead>
      <tbody>
	  <?php foreach ($sql1->result_array() as $row): ?>
	  <?php { ?>
        <tr valign="top">
          <td width="20"><?php echo $orderNum1++; ?></td>
		  <?php if($controller == "berjadual"): ?>
			  <?php { ?>
          <td width="60"><?php echo date("d/m/Y",strtotime($row['ts_kursus_tarikh_mula'])); ?></td>
		  <?php } ?>
				<?php else: ?>
				<?php endif ?>
          <td><?php echo strtoupper($row['ts_kursus_nama']); ?></td>
          <td width="60"><?php echo number_format($row['ts_kursus_harga'],2); ?></td>
          <td width="20"><?php echo anchor('kursus/'.$controller.'/keterangan/'.$row['ts_kursus_id'], 'Mohon') ?></td>
        </tr>
        <?php } ?>
		<?php endforeach ?>
        </tbody>
</table>
<?php } ?>
<?php else: ?>
<p>Tiada kursus ditawarkan</p>
<?php endif ?>
<div class='hr'><a href="#top" class="scrollTop">atas</a></div>

<!-- Content of Teknologi Makanan -->
<h3><a name="makanan">Teknologi Makanan</a></h3>
<?php if ($sql2->num_rows() > 0) : ?>
<?php { ?>
<table width="100%">
    <thead>
      <tr>
        <th width="20">Bil</th>
		<?php if($controller == "berjadual"): ?>
			  <?php { ?>
        <th width="60">Tarikh</th>
		<?php } ?>
				<?php else: ?>
				<?php endif ?>
        <th>Tajuk</th>
        <th width="60">Yuran (RM)</th>
        <th width="20">Mohon</th>
      </tr>
      </thead>
      <tbody>
	  <?php foreach ($sql2->result_array() as $row): ?>
	  <?php { ?>
        <tr valign="top">
          <td width="20"><?php echo $orderNum2++; ?></td>
		  <?php if($controller == "berjadual"): ?>
			  <?php { ?>
          <td width="60"><?php echo date("d/m/Y",strtotime($row['ts_kursus_tarikh_mula'])); ?></td>
		  <?php } ?>
				<?php else: ?>
				<?php endif ?>
          <td><?php echo strtoupper($row['ts_kursus_nama']); ?></td>
          <td width="60"><?php echo number_format($row['ts_kursus_harga'],2); ?></td>
          <td width="20"><?php echo anchor('kursus/'.$controller.'/keterangan/'.$row['ts_kursus_id'], 'Mohon') ?></td>
        </tr>
        <?php } ?>
		<?php endforeach ?>
        </tbody>
</table>
<?php } ?>
<?php else: ?>
<p>Tiada kursus ditawarkan</p>
<?php endif ?>
<div class='hr'><a href="#top" class="scrollTop">atas</a></div>

<!-- Content of Teknologi Lanjutan -->
<h3><a name="lanjutan">Teknologi Lanjutan</a></h3>
<?php if ($sql3->num_rows() > 0) : ?>
<?php { ?>
<table width="100%">
    <thead>
      <tr>
        <th width="20">Bil</th>
		<?php if($controller == "berjadual"): ?>
			  <?php { ?>
        <th width="60">Tarikh</th>
		<?php } ?>
				<?php else: ?>
				<?php endif ?>
        <th>Tajuk</th>
        <th width="60">Yuran (RM)</th>
        <th width="20">Mohon</th>
      </tr>
      </thead>
      <tbody>
	  <?php foreach ($sql3->result_array() as $row): ?>
	  <?php { ?>
        <tr valign="top">
          <td width="20"><?php echo $orderNum3++; ?></td>
		  <?php if($controller == "berjadual"): ?>
			  <?php { ?>
          <td width="60"><?php echo date("d/m/Y",strtotime($row['ts_kursus_tarikh_mula'])); ?></td>
		  <?php } ?>
				<?php else: ?>
				<?php endif ?>
          <td><?php echo strtoupper($row['ts_kursus_nama']); ?></td>
          <td width="60"><?php echo number_format($row['ts_kursus_harga'],2); ?></td>
          <td width="20"><?php echo anchor('kursus/'.$controller.'/keterangan/'.$row['ts_kursus_id'], 'Mohon') ?></td>
        </tr>
        <?php } ?>
		<?php endforeach ?>
        </tbody>
</table>
<?php } ?>
<?php else: ?>
<p>Tiada kursus ditawarkan</p>
<?php endif ?>
<?php 
	$sql0->free_result();
	$sql1->free_result();
	$sql2->free_result();
	$sql3->free_result();
?>