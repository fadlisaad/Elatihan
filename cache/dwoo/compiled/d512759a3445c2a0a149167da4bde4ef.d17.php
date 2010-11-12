<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="center">
	<div id="head">
		<h1 class="logo"><a href="<?php echo base_url();?>" class='ie6fix'>E-Latihan</a></h1>
	</div>
	<div class="clearboth"></div>
			<ul id="nav">
				<li><a href="<?php echo base_url();?>">Halaman Utama</a></li>
				<li><a href="#">Tentang Kami</a>
					<ul>
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
				</li>
				<li><a href="#">Maklumat Umum</a>
					<ul>
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
				</li>
				<li><a href="<?php echo base_url();?>kursus">Kursus</a>
					<ul>
					<?php 
$_fh2_data = navigation('kursus');
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['link'])
	{
/* -- foreach start output */
?>
						<li><?php echo anchor($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true), array("target"=>$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'target',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["link"]) ? $this->scope["link"]:null), true)));?></li>
					<?php 
/* -- foreach end output */
	}
}?>

					</ul>
				</li>
				<li><a href="<?php echo base_url();?>index.php/hubungi">Hubungi Kami</a></li>
			</ul>
</div>
<div class="clearboth"></div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>