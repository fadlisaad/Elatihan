<div class="center">
	<div id="head">
		<h1 class="logo"><a href="{base_url()}" class='ie6fix'>E-Latihan</a></h1>
	</div>
	<div class="clearboth"></div>
			<ul id="nav">
				<li><a href="{base_url()}">Halaman Utama</a></li>
				<li><a href="#">Tentang Kami</a>
					<ul>
					{foreach navigation('sidebar') link}
						<li>{anchor( $link->url, $link->title, array(target=$link->target))}</li>
					{/foreach}
					</ul>
				</li>
				<li><a href="#">Maklumat Umum</a>
					<ul>
					{foreach navigation('menu-umum') link}
						<li>{anchor( $link->url, $link->title, array(target=$link->target))}</li>
					{/foreach}
					</ul>
				</li>
				<li><a href="{base_url()}kursus">Kursus</a>
					<ul>
					{foreach navigation('kursus') link}
						<li>{anchor( $link->url, $link->title, array(target=$link->target))}</li>
					{/foreach}
					</ul>
				</li>
				<li><a href="{base_url()}hubungi">Hubungi Kami</a></li>
			</ul>
</div>
<div class="clearboth"></div>