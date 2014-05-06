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
	<?php foreach ($programs as $p): ?>
        <?php 
        if ($p['Program']['id'] === $program['Program']['id']) {
            echo $this->Html->link($p['Program']['name'], array('action' => 'view', $p['Program']['id']), array('class' => 'selected-program'));
        } else {
            echo $this->Html->link($p['Program']['name'], array('action' => 'view', $p['Program']['id']));
        }
        ?>
        <hr>
    <?php endforeach; ?>    
</div>

<div class="twelve columns offset-by-one">
    <span class="content-header"><h1><?php echo $program['Program']['name'] ?></h1></span>
    <p><?php echo $program['Program']['description'] ?></p>
    <p>For further information of the specific field, please contact the faculty member: <?php echo $program['Program']['faculty_contact'] ?></p>
    <p>Class Requirements: 2013-2014 Course Catalog p.<?echo $program['Program']['catalog_page'] ?></p>
</div>
