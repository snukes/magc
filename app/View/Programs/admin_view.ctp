<div class="program view">
<h2><?php  echo __('Program'); ?></h2>
<p><?php echo $this->Html->link(__('Edit Program'), array(
            'admin' => 'true',
            'action' => 'admin_edit', 
            $program['Program']['id'])); ?></p>
<table>	
    <tr>
    <td><?php echo __('Id'); ?></td>
    <td><?php echo h($program['Program']['id']); ?></td>
    </tr>

    <tr>
    <td><?php echo __('Name'); ?></td>
    <td><?php echo h($program['Program']['name']); ?></td>
    </tr>		

    <tr>
    <td><?php echo __('Image_path'); ?></dt>
    <td><?php echo h($program['Program']['image_path']); ?></td>
    </tr>	

    <tr>
    <td><?php echo __('Faculty Contact'); ?></dt>
    <td><?php echo h($program['Program']['faculty_contact']); ?></td>
    </tr>

    <tr>
    <td><?php echo __('Catalog Page'); ?></dt>
    <td><?php echo h($program['Program']['catalog_page']); ?></td>
    </tr>

    <tr>
    <td><?php echo __('Description'); ?></dt>
    <td><?php echo h($program['Program']['description']); ?></td>
    </tr>
</table>
</div>
<?php echo $this->element('admin_sidebar'); ?>
