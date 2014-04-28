<div class="three columns offset-by-one">
    <?php echo $this->element('admin_sidebar'); ?>
</div>

<div class="ten columns offset-by-two">
    <h1>Staff</h1>
	<table>
	<tr>
			<th>Id</th>
			<th>Name</th>
            <th class="actions">Actions</th>
	</tr>
	<?php
	foreach ($staff as $val): ?>
	<tr>
		<td><?php echo h($val['Staff']['id']); ?></td>
		<td><?php echo h($val['Staff']['name']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $val['Staff']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'admin_edit', $val['Staff']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'admin_delete', $val['Staff']['id']), null, __('Are you sure you want to delete # %s?', $val['Staff']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
