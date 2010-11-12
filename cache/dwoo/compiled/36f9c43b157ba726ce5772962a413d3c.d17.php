<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><h2><?php echo $this->scope["page"]["title"];?></h2>

<?php echo $this->scope["page"]["body"];
 /* end template body */
return $this->buffer . ob_get_clean();
?>