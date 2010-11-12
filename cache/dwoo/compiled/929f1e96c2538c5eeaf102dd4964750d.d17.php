<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><ul>
    <li><a href="http://elearn.mardi.gov.my/kursus/berjadual">Kursus Berjadual</a></li>
    <li><a href="http://elearn.mardi.gov.my/kursus/luar_jadual">Kursus Luar Berjadual</a></li>
</ul><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>