<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Penginapan</h2>

<div class="entry portfolio">
<div class="one_half"><img src="/application/uploads/assets/cache/22_205_155_90.jpg" alt="bilik berdua utama" width="205" height="155" />
<h3>Bilik tidur</h3>
<p>Bilik tidur berdua (Blok Danau)</p>
</div>
<div class="one_half last"><img src="/application/uploads/assets/cache/23_205_155_90.jpg" alt="bilik berdua blok danau" width="205" height="155" />
<h3>Bilik tidur</h3>
<p>Bilik tidur berdua (Blok Utama)</p>
</div>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>