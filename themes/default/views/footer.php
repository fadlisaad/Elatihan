<div id="footer_outside">
<p><?php 
   $link = navigation('footer');
   for($i = 0; $i < count($link); $i++):  ?>
      <span class="link"><?php echo anchor( $link[$i]->url, htmlentities($link[$i]->title)) ?></span> <?php echo ($i+1!=count($link)) ? '|' : '' ?>
   <?php endfor; ?></p>
	<span class="copyright">Hakcipta Terpelihara &copy;2009 - {date('Y')} | {$ci->settings->item('site_name')} - Pusat Latihan dan Teknikal MARDI - Halaman ini sesuai dipaparkan dengan <a href="http://www.spreadfirefox.com/?q=affiliates&id=167974&t=218">Mozilla Firefox 3.0</a> atau <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Internet Explorer 8.0</a> keatas dengan resolusi minimum 1024x600 piksel.</span>
		
	<ul class="social_bookmarks">
			<li class="rss"><a href="{base_url()}news/rss/all.rss" class="ie6fix">RSS</a></li>
	</ul>
		
	<a href="#top" class='scrollTop'>atas</a>
	<!--end footer_outside-->
</div>