<!-- File: /app/View/Users/signup.ctp -->

<h1>Sign Up</h1>

<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Sign Up'); ?></legend>    
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Sign Up')); ?>
</div>
