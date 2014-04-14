<div class="staff index">
	<h2><?php echo __('Staff'); ?></h2>
	<table>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('office'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('image_path'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_website'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_work'); ?></th>
			<th><?php echo $this->Paginator->sort('student_work'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($staff as $val): ?>
	<tr>
		<td><?php echo h($val['Staff']['id']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['name']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['title']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['office']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['phone']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['email']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['image_path']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['personal_website']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['personal_work']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['student_work']); ?>&nbsp;</td>
		<td><?php echo h($val['Staff']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $val['Staff']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $val['Staff']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $val['Staff']['id']), null, __('Are you sure you want to delete # %s?', $val['Staff']['id'])); ?>
		</td>
	</tr>
	<?php
		unset($val);
		endforeach; 
	?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Staff'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

