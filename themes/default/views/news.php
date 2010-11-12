<h1 class='siteheading'><?php echo $article->title; ?></h1>
<div class="entry-content">
<?php if($article->category->slug): ?>
	<p><?php echo lang('news_posted_label'); ?> <?php echo anchor('news/category/'.$article->category->slug, $article->category->title); ?> <?php echo lang('news_date_at'); ?> <?php echo date('M d, Y', $article->created_on); ?></p>
<?php else: ?>
	<p><?php echo lang('news_posted_label_alt'); ?> <?php echo date('M d, Y', $article->created_on); ?></p>
<?php endif; ?>

<?php echo stripslashes($article->body); ?>
<?php
if( $this->settings->item('enable_social_bookmarks'))
{ ?>
<ul class="social_bookmarks">
	<li class="rss"><?php $this->load->view('fragments/rss_box') ?></li>
	<li class="rss"><?php $this->load->view('fragments/archive_box') ?></li>
</ul>

<?php } ?>
</div>