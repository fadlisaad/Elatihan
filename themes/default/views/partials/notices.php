<?php if ($this->session->flashdata('error')): ?>
<div class="error">
	<h6>Error</h6>
	<p><?php echo $this->session->flashdata('error'); ?></p>
	<a class="close" title="<?php echo lang('close_message');?>" href="#"></a>
</div>
<?php endif; ?>

<?php if (!empty($this->validation->error_string)): ?>
<div class="error">
	<h6>Required field(s) missing.</h6>
	<?php echo $this->validation->error_string; ?>
	<a class="close" title="<?php echo lang('close_message');?>" href="#"></a>
</div>
<?php endif; ?>

<?php if (validation_errors()): ?>
<div class="error">
	<h6>Data insertion failed</h6>
	<p><?php echo validation_errors(); ?></p>
	<a class="close" title="<?php echo lang('close_message');?>" href="#"></a>
</div>
<?php endif; ?>

<?php if (!empty($messages['error'])): ?>
<div class="error">
	<h6>Required field(s) missing.</h6>
	<p><?php echo $messages['error']; ?></p>
	<a class="close" title="<?php echo lang('close_message');?>" href="#"></a>
</div>
<?php endif; ?>

<?php if ($this->session->flashdata('notice')): ?>
    <div class="notice">
		<h6>Info</h6>
		<p><?php echo $this->session->flashdata('notice');?></p>
		<a class="close" title="<?php echo lang('close_message');?>" href="#"></a>
	</div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
    <div class="notice">
		<h6>Success</h6>
		<p><?php echo $this->session->flashdata('success');?></p>
		<a class="close" title="<?php echo lang('close_message');?>" href="#"></a>
	</div>
<?php endif; ?>