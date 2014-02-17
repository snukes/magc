<!-- File: /app/View/Users/view.ctp -->

<h1><?php echo h($user['User']['username']); ?></h1>

<p>Email Address: <?php echo $user['User']['email']; ?></p>

<p>Password: <?php echo $user['User']['password']; ?></p>

<p>Admin: <input type="checkbox" value="yes" <?php echo ($user['User']['admin'] ? 'checked' : '' ); ?>>
</p>
