<div class="three columns offset-by-one">
    <?php echo $this->element('admin_sidebar'); ?>
</div>

<div class="ten columns offset-by-two">
	<h2><?php echo __('Program'); ?></h2>
	<table>
	<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Image Path</th>
			<th>Faculty Contact</th>
			<th>Catalog Points</th>
			<th>Description</th>
			<th class="actions">Actions</th>
	</tr>
	<?php
	foreach ($programs as $program): ?>
	<tr>
		<td><?php echo h($program['Program']['id']); ?></td>
		<td><?php echo h($program['Program']['name']); ?></td>
		<td><?php echo h($program['Program']['image_path']); ?></td>
		<td><?php echo h($program['Program']['faculty_contact']); ?></td>
		<td><?php echo h($program['Program']['catalog_page']); ?></td>
		<td><?php echo h($program['Program']['description']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $program['Program']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'admin_edit', $program['Program']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'admin_delete', $program['Program']['id']), null, __('Are you sure you want to delete # %s?', $program['Program']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
