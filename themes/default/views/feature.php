<div class="center">
		<div class="feature_wrap">
			<div class=' featured_inside fadeslider'>
			<span class='fancyborder ie6fix fancyborder_top'></span>
			<span class='fancyborder ie6fix fancyborder_left'></span>
			<span class='fancyborder ie6fix fancyborder_right'></span>
			<span class='fancyborder ie6fix fancyborder_bottom'></span>
			
					<div class="featured featured1">
						<a href="kursus/berjadual#ternakan">
							<span class='feature_excerpt'>
								<strong class='sliderheading'>Kursus Teknologi Ternakan</strong>
							</span>
							{theme_image('files/sl-01.jpg')}
						</a>
					</div>
					
					<div class="featured featured2">
						<a href="kursus/berjadual#tanaman">
							<span class='feature_excerpt'>
								<strong class='sliderheading'>Kursus Teknologi Tanaman</strong>
							</span>
							{theme_image('files/sl-02.jpg')}
						</a>
					</div>
					
					<div class="featured featured3">
						<a href="kursus/berjadual#makanan">
							<span class='feature_excerpt'>
								<strong class='sliderheading'>Kursus Teknologi Makanan</strong>
							</span>
							{theme_image('files/sl-03.jpg')}
						</a>
					</div>
					
					<div class="featured featured4">
						<a href="kursus/berjadual#lanjutan">
							<span class='feature_excerpt'>
								<strong class='sliderheading'>Kursus Teknolgi Lanjutan</strong>
							</span>
							{theme_image('files/sl-04.jpg')}
						</a>
					</div>
						
				</div>
				
				<div id="feature_info">
					<a href="kursus/berjadual" class="big_button heading ie6fix"><strong class='ie6fix'>Kursus 2011</strong></a>
					<div class="text">
						<h1>Selamat datang ke E-Latihan</h1>
						<h2>Perkongsian Maklumat Teknikal MARDI Melalui E-Latihan</h2>
					</div>
				</div>
				<br>
				
				<?php if (!empty($news)): ?>
					<?php foreach ($this->data->news as $news): ?>
						<div class="entry-head">
							<span class="categories">&nbsp;<?php echo date('d M Y', $news->created_on); ?>&nbsp;</span>
							<span class="date"><?php echo $news->title; ?>:&nbsp;<?php echo $news->body; ?></span>
						</div>
					<?php endforeach; ?>
					<?php else: ?>
						<p>Tiada berita/pengumuman buat masa ini.</p>
					<?php endif; ?>
			</div>
		</div>