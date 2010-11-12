<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p><a href="<?php echo base_url();?>">Halaman Utama</a></p>
<p>Kursus</p>
	<ul style="padding-left:20px">
	<?php 
$_fh0_data = navigation('kursus');
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['link'])
	{
/* -- foreach start output */
?>
		<li style="padding-left:20px"><?php echo anchor($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), array("target"=>$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'target',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true)));?></li>
	<?php 
/* -- foreach end output */
	}
}?>

	</ul>

<p>Tentang Kami</p>
	<ul style="padding-left:20px">
	<?php 
$_fh1_data = navigation('sidebar');
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['link'])
	{
/* -- foreach start output */
?>
		<li style="padding-left:20px"><?php echo anchor($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), array("target"=>$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'target',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true)));?></li>
	<?php 
/* -- foreach end output */
	}
}?>

		<li style="padding-left:20px">Kemudahan Amali      
			<ul>
				<li><a title="Kuliah" href="<?php echo page_url(10);?>">Dewan Kuliah</a></li>
				<li><a title="Makmal Komputer" href="<?php echo page_url(29);?>">Makmal Komputer</a></li>
				<li><a title="Ladang" href="<?php echo page_url(30);?>">Ladang</a></li>
				<li><a title="Ladang" href="<?php echo page_url(30);?>">Makmal dan Testbed</a></li>
			</ul>
		</li>
		<li style="padding-left:20px">Kemudahan Lain      
			<ul>
				<li><a title="Penginapan" href="<?php echo page_url(31);?>">Penginapan</a></li>
				<li><a title="Kafeteria" href="<?php echo page_url(32);?>">Kafeteria</a></li>
				<li><a title="Surau" href="<?php echo page_url(34);?>">Surau</a></li>
				<li><a title="Riadah" href="<?php echo page_url(35);?>">Riadah</a></li>
				<li><a title="Pengangkutan" href="<?php echo page_url(36);?>">Pengangkutan</a></li>
			</ul>
		</li>
	</ul>

<p>Maklumat Umum</p>
	<ul style="padding-left:20px">
	<?php 
$_fh2_data = navigation('menu-umum');
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['link'])
	{
/* -- foreach start output */
?>
		<li style="padding-left:20px"><?php echo anchor($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), array("target"=>$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'target',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true)));?></li>
	<?php 
/* -- foreach end output */
	}
}?>

	</ul>
<p><a href="<?php echo base_url();?>hubungi">Hubungi Kami</a></p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>