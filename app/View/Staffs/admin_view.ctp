<div class="three columns offset-by-one">
    <?php echo $this->element('admin_sidebar'); ?>
</div>


<div class="ten columns offset-by-two">
<h1>Staff</h1>
<p><?php echo $this->Html->link(__('Edit Staff'), array(
            'admin' => 'true',
            'action' => 'admin_edit', 
            $staff['Staff']['id'])); ?></p>
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
