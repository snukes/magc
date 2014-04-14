<div class="actions">
	<ul>
		<li>New Sidebar</li>
		<li><?php echo $this->Html->link(__d('users', 'Logout'), array('admin' => false, 'action' => 'logout')); ?></li>
		<li><?php echo $this->Html->link(__d('users', 'My Account'), array('admin' => false, 'action' => 'edit')); ?></li>
        <li>&nbsp;</li>
        <li>Users</li>
		<li><?php echo $this->Html->link(__d('users', 'Add Users'), array('admin' => true, 'action'=>'admin_add'));?></li>
		<li><?php echo $this->Html->link(__d('users', 'List Users'), array('admin' => true, 'action'=>'admin_index'));?></li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__d('users', 'Frontend'), array('admin' => false, 'action'=>'index')); ?></li>
		<li>&nbsp;</li>
		<li>Staff Members</li>
		<li><?php echo $this->Html->link(__d('staffs', 'List Staff'), array('admin' => true, 'plugin'=>false, 'controller'=>'staffs', 'action'=>'admin_index')); ?></li>
		<li><?php echo $this->Html->link(__d('staffs', 'Add Staff Member'), array('admin' => true,'plugin'=>false, 'controller'=>'staffs', 'action'=>'admin_add')); ?></li>
	</ul>
</div>
