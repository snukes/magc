<div class="three columns offset-by-one">
    <?php echo $this->element('admin_sidebar'); ?>
</div>

<div class="ten columns offset-by-two">
<?php echo $this->Form->create('Staff'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Staff'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('title');
		echo $this->Form->input('office');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('image_path');
		echo $this->Form->input('personal_website');
		echo $this->Form->input('personal_work');
		echo $this->Form->input('student_work');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
