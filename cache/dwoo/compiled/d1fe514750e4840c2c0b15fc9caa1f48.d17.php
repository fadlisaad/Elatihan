<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Ubah Maklumat | E-Latihan</title>
<link rel="shortcut icon" href="http://elearn.mardi.gov.my/favicon.ico" />

<link href="http://elearn.mardi.gov.my/application/themes/default/css/style.css" type="text/css" rel="stylesheet" />
<link href="http://elearn.mardi.gov.my/application/themes/default/css/main.css" type="text/css" rel="stylesheet" />
<link href="http://elearn.mardi.gov.my/application/themes/default/css/prettyPhoto.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="/application/assets/js/jquery/jquery.js"></script>
<script type="text/javascript" src="/application/assets/js/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="/application/assets/js/jquery/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/application/assets/js/custom.js"></script>


				<script type="text/javascript">
					var APPPATH_URI = "/application/";
					var BASE_URI = "/";
				</script>
		<link rel="canonical" href="http://elearn.mardi.gov.my/user-edit" />
		<link rel="alternate" type="application/rss+xml" title="E-Latihan" href="http://elearn.mardi.gov.my/news/rss/all.rss" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		
				<style type="text/css">
					
					
				</style></head>

<body id="top">

			
	<div class="wrapper" id="wrapper_head">
		<div class="center">
	<div id="head">
		<h1 class="logo"><a href="http://elearn.mardi.gov.my/" class='ie6fix'>E-Latihan</a></h1>
	</div>
	<div class="clearboth"></div>
			<ul id="nav">
				<li><a href="http://elearn.mardi.gov.my/">Halaman Utama</a></li>
				<li><a href="#">Tentang Kami</a>
					<ul>
											<li><a href="http://elearn.mardi.gov.my/pengenalan" target="">Pengenalan</a></li>
											<li><a href="http://elearn.mardi.gov.my/misi-dan-objektif" target="">Misi dan Objektif</a></li>
											<li><a href="http://elearn.mardi.gov.my/kemudahan" target="">Kemudahan</a></li>
					
					</ul>
				</li>
				<li><a href="#">Maklumat Umum</a>
					<ul>
											<li><a href="http://elearn.mardi.gov.my/maklumat-umum" target="">Keterangan</a></li>
											<li><a href="http://elearn.mardi.gov.my/maklumat-umum/pengesahan-status-permohonan" target="">Pengesahan Status Permohonan</a></li>
											<li><a href="http://elearn.mardi.gov.my/maklumat-umum/kaedah-pembayaran" target="">Kaedah Pembayaran</a></li>
											<li><a href="http://elearn.mardi.gov.my/maklumat-umum/jenis-perkhidmatan" target="">Jenis Perkhidmatan</a></li>
					
					</ul>
				</li>
				<li><a href="http://elearn.mardi.gov.my/kursus">Kursus</a>
					<ul>
											<li><a href="http://elearn.mardi.gov.my/kursus/berjadual" target="">Kursus Berjadual</a></li>
											<li><a href="http://elearn.mardi.gov.my/kursus/luar_jadual" target="">Kursus Luar Jadual</a></li>
											<li><a href="http://elearn.mardi.gov.my/login" target="">Login</a></li>
											<li><a href="http://elearn.mardi.gov.my/pendaftaran" target="">Pendaftaran</a></li>
											<li><a href="http://elearn.mardi.gov.my/reset" target="">Reset kata laluan</a></li>
											<li><a href="http://elearn.mardi.gov.my/photos" target="">Galeri Kursus</a></li>
					
					</ul>
				</li>
				<li><a href="http://elearn.mardi.gov.my/hubungi">Hubungi Kami</a></li>
			</ul>
</div>
<div class="clearboth"></div>	</div>
	<p>&nbsp;</p>
	<div class="wrapper" id="wrapper_main">
		<div class="center">
			<div id="main">
				<div class="content">
					<div class="entry">
						<div class="entry-content">
							<!-- Page layout: Default -->

<h2>Ubah Maklumat</h2>

<h3>Selamat datang, NORZIHAN BT. ADNAN (ainszz_apple@yahoo.com)</h3>	
<form method="POST" action="user-edit-exec" name="update" id="update" class="ajax_form">
    <input type="hidden" name="ic" id="ic" value="650223-08-5860"/>
	
	<div class="notification information"><p>Ubah maklumat peribadi dan biodata</p></div>
	
    <h3>Maklumat Peribadi</h3>
		<p>
			<input name="name" type="text" class="text_input" value=""/>
			<label>Nama Penuh</label>
		</p>
		<p>
			<input name="ic" type="text" class="text_input" value=""/>
			<label>No. IC/Passport</label>
		</p>
		<p>
			<input name="jantina" type="text" class="text_input" value="" />
			<label>Jantina</label>
		</p>
		<p>
			<label>Jantina</label><br />
			<input  type="radio" name="jantina" id="jantina" value="lelaki" />Lelaki<br />
			<input  type="radio" name="jantina" id="jantina" value="perempuan" />Perempuan
		</p>
		<p>
			<input name="umur" type="text" class="text_input" value="" maxlength="2"/>
			<label>Umur</label>
		</p>
	 
    <h3>Maklumat Untuk Dihubungi</h3>
		<p>
			<input name="tel_bimbit" type="text" class="text_input" id="tel_bimbit" value=""/>
			<label>No. Telefon Bimbit</label>
		</p>
		<p>
			<input name="tel_pej_rumah" type="text" class="text_input" id="tel_pej_rumah" value="" />
			<label>No.Telefon Rumah</label>
		</p>
		<p>
			<textarea name="address" cols="40" rows="5" class="text_input" id="address"></textarea>
			<label>Alamat Rumah</label>
		</p>
		<p>
			<input name="email" type="text" class="text_input" id="email" value="" />
			<label>E-mail</label>
		</p>
	  
	<h3>Maklumat Lain</h3>
		<p>
			<label>Taraf Perkahwinan</label><br />
			<input  type="radio" name="taraf" id="taraf" value="bujang" />Bujang<br />
			<input  type="radio" name="taraf" id="taraf" value="kahwin" />Berkahwin<br />
			<input  type="radio" name="taraf" id="taraf" value="janda" />Ibu tunggal<br />
			
		</p>
		
		<p>
			<select name="pendidikan" class="text_input" id="pendidikan">
			<option value="tiada" selected="selected" >- sila pilih -</option>
			<option value="pmr" >SRP/PMR</option>
			<option value="spm" >SPM</option>
			<option value="stpm" >STPM</option>
			<option value="diploma" >Diploma</option>
			<option value="sarjana muda" >Ijazah Sarjana Muda</option>
			<option value="sarjana" >Ijazah Sarjana</option>
			<option value="phd" >PHD</option>
			<option value="tiada" >Tiada</option>
			</select>
			<label>Pendidikan</label>
		</p>
		<p>
			<select name="pekerjaan" class="text_input" id="pekerjaan">
			<option value="tiada" selected="selected" >- sila pilih -</option>
			<option value="mardi" >MARDI</option>
			<option value="kerajaan" >Agensi Kerajaan</option>
			<option value="usahawan" >Usahawan</option>
			<option value="swasta" >Swasta</option>
			<option value="antarabangsa" >Antarabangsa</option>
			<option value="kerja sendiri" >Bekerja sendiri/Awam</option>
			</select>
			<label>Pekerjaan</label>
		</p>
		<p>
			<input name="perusahaan" type="text" class="text_input" id="perusahaan" value="" />
			<label>Bidang</label>
		</p>
	
	<h3>Maklumat Majikan</h3>
		<p>
			<input name="m_nama" type="text" class="text_input" id="m_nama" value="" />
			<label>Majikan</label>
		</p>
		<p>
			<textarea name="m_alamat" cols="40" rows="5" class="text_input" id="m_alamat"></textarea>
			<label>Alamat</label>
		</p>
		<p>
			<input name="m_telefon" type="text" class="text_input" id="m_telefon" value="" />
			<label>No. Telefon</label>
		</p>

<p>Sila pastikan segala maklumat yang telah dimasukkan adalah tepat. Klik pada butang 'Kemaskini' untuk simpan maklumat</p>
<input name="submit" value="Kemaskini" class="button" type="submit">
<input name="reset" value="Batal" class="button" type="button" onclick="javascript:history.go(-1)">

</form>						</div><p><input name="back" value="Kembali" class="button" type="button" onclick="javascript:history.back(1)"></p>
						<div class='hr'><a href="#top" class="scrollTop">atas</a></div>
					</div>
				</div>
				<div class="sidebar">

	<span class="sidebar_top"><!-- needed for smooth start of sidebar background--></span>
	<span class="sidebar_bottom"><!-- needed for smooth end of sidebar background--></span>
	
			<div class="box one_fourth">
		<h3>NORZIHAN BT. ADNAN</h3>
		<h3>Menu Pengguna</h3>
			<ul class="submenu">
				<li><a href="http://elearn.mardi.gov.my/halaman-pengguna">Halaman Pengguna</a></li>
				<li><a href="http://elearn.mardi.gov.my/keterangan-pendaftaran">Senarai Kursus Berdaftar</a></li>
				<li><a href="http://elearn.mardi.gov.my/user-edit">Ubah Biodata</a></li>
				<li><a href="http://elearn.mardi.gov.my/logout">Log Keluar</a></li>
			</ul>
	</div>
	
	<div class="box one_fourth">
		<h3>Kursus</h3>
			<ul class="submenu">
				<li><a href="http://elearn.mardi.gov.my/kursus/berjadual">Kursus Berjadual</a></li>
				<li><a href="http://elearn.mardi.gov.my/kursus/luar_jadual">Kursus Luar Jadual</a></li>
			</ul>
	</div>
	
	<div class="box one_fourth">
		<h3>Tentang Kami</h3>
			<ul class="submenu">
							<li><a href="http://elearn.mardi.gov.my/pengenalan" target="">Pengenalan</a></li>
							<li><a href="http://elearn.mardi.gov.my/misi-dan-objektif" target="">Misi dan Objektif</a></li>
							<li><a href="http://elearn.mardi.gov.my/kemudahan" target="">Kemudahan</a></li>
			
			</ul>
	</div>		
	
	<div class="box one_fourth">
		<h3>Maklumat Umum</h3>
			<ul class="submenu">
							<li><a href="http://elearn.mardi.gov.my/maklumat-umum" target="">Keterangan</a></li>
							<li><a href="http://elearn.mardi.gov.my/maklumat-umum/pengesahan-status-permohonan" target="">Pengesahan Status Permohonan</a></li>
							<li><a href="http://elearn.mardi.gov.my/maklumat-umum/kaedah-pembayaran" target="">Kaedah Pembayaran</a></li>
							<li><a href="http://elearn.mardi.gov.my/maklumat-umum/jenis-perkhidmatan" target="">Jenis Perkhidmatan</a></li>
			
			</ul>
	</div>
	
	</div>			</div>
		</div>
	</div>
	<!--end box-->
	</div>
	<!--end center-->
		<!-- start footer -->
	<div class="wrapper" id="wrapper_footer">
		<div id="footer_outside">
<p>      <span class="link"><a href="http://elearn.mardi.gov.my/terma-dan-syarat">Terma dan Syarat</a></span> |         <span class="link"><a href="http://elearn.mardi.gov.my/dasar-privasi">Dasar Privasi</a></span> |         <span class="link"><a href="http://elearn.mardi.gov.my/dasar-keselamatan">Dasar Keselamatan</a></span> |         <span class="link"><a href="http://elearn.mardi.gov.my/penafian">Penafian</a></span> |         <span class="link"><a href="http://elearn.mardi.gov.my/peta-laman">Peta Laman</a></span>    </p>
	<span class="copyright">Hakcipta Terpelihara &copy;2009 - 2010 | E-Latihan - Pusat Latihan dan Teknikal MARDI - Halaman ini sesuai dipaparkan dengan <a href="http://www.spreadfirefox.com/?q=affiliates&id=167974&t=218">Mozilla Firefox 3.0</a> atau <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Internet Explorer 7.0</a> keatas dengan resolusi minimum 800x600 piksel.</span>
		
	<ul class="social_bookmarks">
			<li class="rss"><a href="http://elearn.mardi.gov.my/news/rss/all.rss" class="ie6fix">RSS</a></li>
	</ul>
		
	<a href="#top" class='scrollTop'>atas</a>
	<!--end footer_outside-->
</div>	</div>
	<!-- end footer -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4727712-28']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();

</script>	
</body>
</html>	<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>