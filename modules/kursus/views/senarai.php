<?php
// Definition
$orderNum0 = 1;
$today_date = date('Y-m-d');
$close_date = date('2010-12-30');

$controller = $this->router->class;

// Queries

if($controller == "berjadual") {
$sql0 = $this->db->query("SELECT * FROM ts_kursus WHERE ts_kursus_kategori = $id AND ts_kursus_vendor = 'Kursus Berjadual' AND ts_kursus_publish_status = '1' AND ts_kursus_tarikh_mula BETWEEN $today_date AND $close_date AND ts_kursus_tarikh_mula IS NOT NULL ORDER BY ts_kursus_tarikh_mula ASC LIMIT 5");
}
else {
$sql0 = $this->db->query("SELECT * FROM ts_kursus 
WHERE ts_kursus_kategori = Teknologi Ternakan AND ts_kursus_vendor = $id AND ts_kursus_publish_status = '1' AND ts_kursus_tarikh_mula BETWEEN \''.$today_date.'\' AND \''.$close_date.'\' AND ts_kursus_tarikh_mula IS NOT NULL ORDER BY ts_kursus_tarikh_mula ASC LIMIT 5");
}
?>

<!-- Content start here -->

<!-- Content of Teknologi Ternakan -->
<h3><a name="senarai"><?php echo $row['ts_kursus_kategori']; ?></a></h3>
<table width="100%">
    <thead>
      <tr>
        <th width="20">Bil.</th>
		<th width="60">Tarikh</th>
        <th>Tajuk</th>
        <th width="60">Yuran</th>
        <th width="20">Mohon</th>
      </tr>
      </thead>
      <tbody>
	  <?php foreach ($sql0->result_array() as $row): ?>
	  <?php { ?>
        <tr valign="top">
          <td width="20"><?php echo $orderNum0++; ?></td>
		  <td width="60"><?php echo date("d/m/Y",strtotime($row['ts_kursus_tarikh_mula'])); ?></td>
          <td><?php echo strtoupper($row['ts_kursus_nama']); ?></td>
          <td width="60">RM <?php echo number_format($row['ts_kursus_harga']); ?></td>
          <td width="20"><?php echo anchor('kursus/'.$controller.'/keterangan/'.$row['ts_kursus_id'], 'Mohon') ?></td>
        </tr>
        <?php } ?>
		<?php endforeach ?>
        </tbody>
</table>
<div class='hr'><a href="#top" class="scrollTop">atas</a></div>
<?php
	$sql0->free_result();
?>