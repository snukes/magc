<?php
/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="three columns offset-by-one">
    <?php echo $this->element('Users.Users/sidebar'); ?>
</div>

<div class="ten columns offset-by-two">
	<h2><?php echo __d('users', 'Users'); ?></h2>

	<table >
	<tr>
		<th><?php echo $this->Paginator->sort('username'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th class="actions"><?php echo __d('users', 'Actions'); ?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr<?php echo $class; ?>>
			<td><?php echo $this->Html->link($user[$model]['username'], array('action' => 'view', $user[$model]['id'])); ?></td>
			<td><?php echo $user[$model]['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__d('users', 'View'), array('action' => 'view', $user[$model]['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	<?php echo $this->element('Users.pagination'); ?>
</div>
