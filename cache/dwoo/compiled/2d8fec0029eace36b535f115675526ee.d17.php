<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="sidebar">

	<span class="sidebar_top"><!-- needed for smooth start of sidebar background--></span>
	<span class="sidebar_bottom"><!-- needed for smooth end of sidebar background--></span>
	
	
	<div class="box one_fourth">
		<h3>Kursus</h3>
			<ul class="submenu">
			<?php 
$_fh3_data = navigation('kursus');
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['link'])
	{
/* -- foreach start output */
?>
				<li><?php echo anchor($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), array("target"=>$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'target',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true)));?></li>
			<?php 
/* -- foreach end output */
	}
}?>

			</ul>
	</div>
	
	<div class="box one_fourth">
		<h3>Tentang Kami</h3>
			<ul class="submenu">
			<?php 
$_fh4_data = navigation('sidebar');
if ($this->isArray($_fh4_data) === true)
{
	foreach ($_fh4_data as $this->scope['link'])
	{
/* -- foreach start output */
?>
				<li><?php echo anchor($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), array("target"=>$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'target',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true)));?></li>
			<?php 
/* -- foreach end output */
	}
}?>

			</ul>
	</div>		
	
	<div class="box one_fourth">
		<h3>Maklumat Umum</h3>
			<ul class="submenu">
			<?php 
$_fh5_data = navigation('menu-umum');
if ($this->isArray($_fh5_data) === true)
{
	foreach ($_fh5_data as $this->scope['link'])
	{
/* -- foreach start output */
?>
				<li><?php echo anchor($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), array("target"=>$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'target',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true)));?></li>
			<?php 
/* -- foreach end output */
	}
}?>

			</ul>
	</div>
	
	</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>