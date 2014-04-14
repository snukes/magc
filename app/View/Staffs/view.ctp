<div class="staff view">
<h2><?php  echo __('Staff'); ?></h2>
	<table>
		<tr>
		<td><?php echo __('Id'); ?></td>
		<td><?php echo h($staff['Staff']['id']); ?></td>
		</tr>
		
		<tr>
		<td><?php echo __('Name'); ?></td>
		<td><?php echo h($staff['Staff']['name']); ?></td>
		</tr>		
		
		<tr>
		<td><?php echo __('Title'); ?></dt>
		<td><?php echo h($staff['Staff']['title']); ?></td>
		</tr>

		<tr>
		<td><?php echo __('Office'); ?></dt>
		<td><?php echo h($staff['Staff']['office']); ?></td>
		</tr>

		<tr>
		<td><?php echo __('Phone'); ?></dt>
		<td><?php echo h($staff['Staff']['phone']); ?></td>
		</tr>

		<tr>
		<td><?php echo __('Email'); ?></dt>
		<td><?php echo h($staff['Staff']['email']); ?></td>
		</tr>

		<tr>
		<td><?php echo __('Image_path'); ?></dt>
		<td><?php echo h($staff['Staff']['image_path']); ?></td>
		</tr>	
	
		<tr>
		<td><?php echo __('Personal Website'); ?></dt>
		<td><?php echo h($staff['Staff']['personal_website']); ?></td>
		</tr>

		<tr>
		<td><?php echo __('Personal Work'); ?></dt>
		<td><?php echo h($staff['Staff']['personal_work']); ?></td>
		</tr>

		<tr>
		<td><?php echo __('Student Work'); ?></dt>
		<td><?php echo h($staff['Staff']['student_work']); ?></td>
		</tr>

		<tr>
		<td><?php echo __('Description'); ?></dt>
		<td><?php echo h($staff['Staff']['description']); ?></td>
		</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Staff'), array('action' => 'edit', $staff['Staff']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Staff'), array('action' => 'delete', $staff['Staff']['id']), null, __('Are you sure you want to delete # %s?', $staff['Staff']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Staff members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

