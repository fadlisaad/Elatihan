<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!-- Page layout: Default -->

<h2>Ladang</h2>

<div class="entry portfolio">
<div class="one_half"><img src="/application/uploads/assets/cache/18_199_150_90.jpg" alt="bakeri" width="199" height="150" />
<h3>Bakeri</h3>
<p>Penerangan tentang bakeri</p>
</div>
<div class="one_half last"><img src="/application/uploads/assets/cache/19_199_150_90.jpg" alt="tisu kultur" width="199" height="150" />
<h3>Tisu Kultur</h3>
<p>Rumah hijau ini..</p>
</div>
<div class="one_half"><img src="/application/uploads/assets/cache/20_205_155_90.jpg" alt="test bed" width="205" height="155" />
<h3>Test Bed</h3>
<p>Test bed ini merupakan..</p>
</div>
<div class="one_half last"><img src="/application/uploads/assets/cache/21_205_155_90.jpg" alt="makmal pemprosesan" width="205" height="155" />
<h3>Makmal Pemprosesan</h3>
<p>Makmal pemprosesan</p>
</div>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>