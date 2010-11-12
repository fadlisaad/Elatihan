<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="sidebar">

	<span class="sidebar_top"><!-- needed for smooth start of sidebar background--></span>
	<span class="sidebar_bottom"><!-- needed for smooth end of sidebar background--></span>
	
			<div class="box one_fourth">
		<h3>Ramli Bin Osman</h3>
		<h3>Menu Pengguna</h3>
			<ul class="submenu">
				<li><?php echo anchor('halaman-pengguna', 'Halaman Pengguna');?></li>
				<li><?php echo anchor('keterangan-pendaftaran', 'Senarai Kursus Berdaftar');?></li>
				<li><?php echo anchor('user-edit', 'Ubah Biodata');?></li>
				<li><?php echo anchor('logout', 'Log Keluar');?></li>
			</ul>
	</div>
	
	<div class="box one_fourth">
		<h3>Kursus</h3>
			<ul class="submenu">
				<li><?php echo anchor('kursus/berjadual', 'Kursus Berjadual');?></li>
				<li><?php echo anchor('kursus/luar_jadual', 'Kursus Luar Jadual');?></li>
			</ul>
	</div>
	
	<div class="box one_fourth">
		<h3>Tentang Kami</h3>
			<ul class="submenu">
			<?php 
$_fh0_data = navigation('sidebar');
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['link'])
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
$_fh1_data = navigation('menu-umum');
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['link'])
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