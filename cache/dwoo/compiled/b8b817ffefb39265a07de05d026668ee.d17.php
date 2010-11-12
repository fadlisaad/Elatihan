<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Hubungi Kami</h2>

<p>Berikut adalah keterangan untuk membolehkan anda menghubungi kami.</p>
<h3>Alamat</h3>
<p>Pengarah<br />Pusat Perkhidmatan Teknikal<br />Ibu Pejabat MARDI<br />Peti Surat 12301<br />50774 KUALA LUMPUR</p>
<p>(u.p. Program Kursus dan Latihan Teknikal)</p>
<ul>
<li>Tel: 03-8943 7888/7238/7221 </li>
<li>Faks: 03-8948 2216 </li>
<li>E-mail:elatihan@mardi.gov.my</li>
</ul>
<h3>Peta Lokasi</h3>
<p><a class="preloading" title="Ibu Pejabat MARDI, Peti Surat 12301, 50774 KUALA LUMPUR" rel="prettyPhoto[iframes]" href="http://maps.google.com/?ie=UTF8&ll=2.989242,101.702285&z=12&output=embed?iframe=true&width=500&height=400"><?php echo theme_image('files/map.jpg');?></a></p>
<p>Koordinat:</p>
<ul>
<li>Longitud: 2.989242&deg;</li>
<li>Latitud: 101.702285&deg;</li>
</ul><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>