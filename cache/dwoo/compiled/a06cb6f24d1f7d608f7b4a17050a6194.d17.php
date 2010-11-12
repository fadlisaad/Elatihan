<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div id="footer_outside">
<p>      <span class="link"><a href="http://elearn.mardi.gov.my/terma-dan-syarat">Terma dan Syarat</a></span> |         <span class="link"><a href="http://elearn.mardi.gov.my/dasar-privasi">Dasar Privasi</a></span> |         <span class="link"><a href="http://elearn.mardi.gov.my/dasar-keselamatan">Dasar Keselamatan</a></span> |         <span class="link"><a href="http://elearn.mardi.gov.my/penafian">Penafian</a></span> |         <span class="link"><a href="http://elearn.mardi.gov.my/peta-laman">Peta Laman</a></span>    </p>
	<span class="copyright">Hakcipta Terpelihara &copy;2009 - <?php echo date('Y');?> | <?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'settings',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["ci"], false)->item('site_name');?> - Pusat Latihan dan Teknikal MARDI - Halaman ini sesuai dipaparkan dengan <a href="http://www.spreadfirefox.com/?q=affiliates&id=167974&t=218">Mozilla Firefox 3.0</a> atau <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Internet Explorer 7.0</a> keatas dengan resolusi minimum 800x600 piksel.</span>
		
	<ul class="social_bookmarks">
			<li class="rss"><a href="<?php echo base_url();?>news/rss/all.rss" class="ie6fix">RSS</a></li>
	</ul>
		
	<a href="#top" class='scrollTop'>atas</a>
	<!--end footer_outside-->
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>