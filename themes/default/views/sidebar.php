<div class="sidebar">

	<span class="sidebar_top"><!-- needed for smooth start of sidebar background--></span>
	<span class="sidebar_bottom"><!-- needed for smooth end of sidebar background--></span>
	
	<?php //Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_ADMIN_ID']) || (trim($_SESSION['SESS_ADMIN_ID']) == '')): ?>

	<div class="box one_fourth">
		<h3>Kursus</h3>
			<ul class="submenu">
			{foreach navigation('kursus') link}
				<li>{anchor( $link->url, $link->title, array(target=$link->target))}</li>
			{/foreach}
			</ul>
	</div>
	
	<div class="box one_fourth">
		<h3>Tentang Kami</h3>
			<ul class="submenu">
			{foreach navigation('sidebar') link}
				<li>{anchor( $link->url, $link->title, array(target=$link->target))}</li>
			{/foreach}
			</ul>
	</div>		
	
	<div class="box one_fourth">
		<h3>Maklumat Umum</h3>
			<ul class="submenu">
			{foreach navigation('menu-umum') link}
				<li>{anchor( $link->url, $link->title, array(target=$link->target))}</li>
			{/foreach}
			</ul>
	</div>
	
	<?php else: ?>
	<?php require_once APPPATH.'themes/default/views/ts/login-user/auth.php'; ?>
	<div class="box one_fourth">
		<h3><?php echo ucwords($_SESSION['SESS_FULLNAME']);?></h3>
		<h3>Menu Pengguna</h3>
			<ul class="submenu">
				<li>{anchor( halaman-pengguna, 'Halaman Pengguna')}</li>
				<li>{anchor( keterangan-pendaftaran, 'Senarai Kursus Berdaftar')}</li>
				<li>{anchor( user-edit, 'Ubah Biodata')}</li>
				<li>{anchor( logout, 'Log Keluar')}</li>
			</ul>
	</div>
	
	<div class="box one_fourth">
		<h3>Kursus</h3>
			<ul class="submenu">
				<li>{anchor( kursus/berjadual, 'Kursus Berjadual')}</li>
				<li>{anchor( kursus/luar_jadual, 'Kursus Luar Jadual')}</li>
			</ul>
	</div>
	
	<div class="box one_fourth">
		<h3>Tentang Kami</h3>
			<ul class="submenu">
			{foreach navigation('sidebar') link}
				<li>{anchor( $link->url, $link->title, array(target=$link->target))}</li>
			{/foreach}
			</ul>
	</div>		
	
	<div class="box one_fourth">
		<h3>Maklumat Umum</h3>
			<ul class="submenu">
			{foreach navigation('menu-umum') link}
				<li>{anchor( $link->url, $link->title, array(target=$link->target))}</li>
			{/foreach}
			</ul>
	</div>
	
	<?php endif; ?>
</div>