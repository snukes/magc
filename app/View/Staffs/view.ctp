<?php 
    /**
      * Programs Index
      *
      */
?>

<div class="three columns offset-by-one">
	<?php foreach ($staffs as $s): ?>
        <?php 
        if ($s['Staff']['id'] === $staff['Staff']['id']) {
            echo $this->Html->link($s['Staff']['name'], array('action' => 'view', $s['Staff']['id']), array('class' => 'selected-staff'));
        } else {
            echo $this->Html->link($s['Staff']['name'], array('action' => 'view', $s['Staff']['id']));
        }
        ?>
        <hr>
    <?php endforeach; ?>    
</div>

<div class="thirteen columns offset-by-one">
    <h1><?php echo $staff['Staff']['name'] ?></h1>
    <hr>
    
    
    <p>
    Office: <?php echo $staff['Staff']['office'] ?><br/>
    Phone: <?php echo $staff['Staff']['phone'] ?><br/>
    Email: <a href="<?php echo $staff['Staff']['email'] ?>"><?php echo $staff['Staff']['email'] ?></a>
    </p>
    <p><?php echo $staff['Staff']['description'] ?></p>
</div>
