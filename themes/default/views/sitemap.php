<p><a href="{base_url()}">Halaman Utama</a></p>
<p>Kursus</p>
	<ul style="padding-left:20px">
	{foreach navigation('kursus') link}
		<li style="padding-left:20px">{anchor( $link->url, $link->title, array(target=$link->target))}</li>
	{/foreach}
	</ul>

<p>Tentang Kami</p>
	<ul style="padding-left:20px">
	{foreach navigation('sidebar') link}
		<li style="padding-left:20px">{anchor( $link->url, $link->title, array(target=$link->target))}</li>
	{/foreach}
		<li style="padding-left:20px">Kemudahan Amali      
			<ul>
				<li><a title="Kuliah" href="{page_url(10)}">Dewan Kuliah</a></li>
				<li><a title="Makmal Komputer" href="{page_url(29)}">Makmal Komputer</a></li>
				<li><a title="Ladang" href="{page_url(30)}">Ladang</a></li>
				<li><a title="Ladang" href="{page_url(30)}">Makmal dan Testbed</a></li>
			</ul>
		</li>
		<li style="padding-left:20px">Kemudahan Lain      
			<ul>
				<li><a title="Penginapan" href="{page_url(31)}">Penginapan</a></li>
				<li><a title="Kafeteria" href="{page_url(32)}">Kafeteria</a></li>
				<li><a title="Surau" href="{page_url(34)}">Surau</a></li>
				<li><a title="Riadah" href="{page_url(35)}">Riadah</a></li>
				<li><a title="Pengangkutan" href="{page_url(36)}">Pengangkutan</a></li>
			</ul>
		</li>
	</ul>

<p>Maklumat Umum</p>
	<ul style="padding-left:20px">
	{foreach navigation('menu-umum') link}
		<li style="padding-left:20px">{anchor( $link->url, $link->title, array(target=$link->target))}</li>
	{/foreach}
	</ul>
<p><a href="{base_url()}hubungi">Hubungi Kami</a></p>