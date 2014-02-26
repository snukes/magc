<!-- File: /app/View/Users/add.ctp -->

<h1>Add Post</h1>

<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>    
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('role', 
            array('options' => array(
                'admin' => 'Admin', 
                'artist' => 'Artist', 
                'viewer' => 'viewer')
            ));
        echo $this->Form->input('password');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Save User')); ?>
</div>
