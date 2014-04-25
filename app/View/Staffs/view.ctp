<?php 
    /**
      * Programs Index
      *
      */
?>

<ul class="rslides">
    <li><?php echo $this->Html->image('haas.jpg', array('alt' => 'Haas'))?></li>
    <li><?php echo $this->Html->image('haaslol.jpg', array('alt' => 'Haas Lol'))?></li>
</ul>

<hr class="content-separator">

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

<div class="ten columns offset-by-two">
    <span class="content-header">
        <h1><?php echo $staff['Staff']['name'] ?></h1>
        <h2><?php echo $staff['Staff']['title'] ?></h1>
    </span>
    <p>
    Office: <?php echo $staff['Staff']['office'] ?><br/>
    Phone: <?php echo $staff['Staff']['phone'] ?><br/>
    Email: <a href="<?php echo $staff['Staff']['email'] ?>"><?php echo $staff['Staff']['email'] ?></a>
    </p>
    <p><?php echo $staff['Staff']['description'] ?></p>
</div>
