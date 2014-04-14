<div class="programs form">
<?php echo $this->Form->create('Program'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Program'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('image_path');
		echo $this->Form->input('faculty_contact');
		echo $this->Form->input('catalog_page');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('admin_sidebar'); ?>
