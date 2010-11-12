<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Jenis Perkhidmatan</h2>

<h3>Pakej A</h3>
<ul>
<li>Penginapan Makan dan minum </li>
<li>Keperluan kursus*</li>
</ul>
<h3>Pakej B</h3>
<ul>
<li>Makan dan minum </li>
<li>Keperluan kursus*</li>
</ul>
<blockquote>
<p>*kos keperluan kursus  termasuk alat tulis, bahan mentah untuk amali, penyediaan nota kursus,  bayaran honororium penceramah, gambar kumpulan, sewaan kenderaan dan  peralatan sepanjang kursus berlangsung.</p>
</blockquote>
<p>Pihak penganjur berhak  untuk menentukan perkhidmatan berasaskan kesesuaian kursus</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>