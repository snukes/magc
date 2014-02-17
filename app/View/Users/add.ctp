<!-- File: /app/View/Users/add.ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('email');
echo $this->Form->checkbox('admin');
echo $this->Form->input('password');
echo $this->Form->input('password_confirmation');
echo $this->Form->end('Save User');
?>
