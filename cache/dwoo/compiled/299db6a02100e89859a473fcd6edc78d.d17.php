<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Kemudahan</h2>

<p>Pihak kami menyediakan kemudahan kuliah, amali dan lain-lain di Kompleks  Latihan MARDI, Serdang dan Stesen MARDI di luar Serdang untuk  memastikan peserta kursus dapat menjalani kursus dalam persekitaran yang  kondusif.</p>
<ul>
<li>Kemudahan Amali      
<ul>
<li><a title="Kuliah" href="<?php echo page_url(10);?>">Dewan Kuliah</a></li>
<li><a title="Makmal Komputer" href="<?php echo page_url(29);?>">Makmal Komputer</a></li>
<li><a title="Ladang" href="<?php echo page_url(30);?>">Makmal, Ladang dan Testbed</a></li>
</ul>
</li>
<li>Kemudahan Lain      
<ul>
<li><a title="Penginapan" href="<?php echo page_url(31);?>">Penginapan</a></li>
<li><a title="Kafeteria" href="<?php echo page_url(32);?>">Kafeteria</a></li>
<li><a title="Surau" href="<?php echo page_url(35);?>">Surau</a></li>
<li><a title="Riadah" href="<?php echo page_url(34);?>">Riadah</a></li>
<li><a title="Pengangkutan" href="<?php echo page_url(36);?>">Pengangkutan</a></li>
</ul>
</li>
</ul><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>