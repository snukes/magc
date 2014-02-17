<!-- File: /app/View/Users/index.ctp -->

<h1>User list:</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Admin</th>
    </tr>

    <!-- Looping through $users array, prints out info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['password']; ?></td>
        <td><?php echo $user['User']['email']; ?></td>
        <td>
            <input type="checkbox"  value="yes" <?php echo ($user['User']['admin'] ? "checked" : "" ); ?>>
        </td>
    <tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>
