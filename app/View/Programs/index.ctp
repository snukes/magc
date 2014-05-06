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
        <?php echo $this->Html->link($p['Program']['name'], array('action' => 'view', $p['Program']['id'])) ?>
        <hr>
    <?php endforeach; ?>    
</div>

<div class="twelve columns offset-by-one">
    <span class="content-header"><h1>Academic Programs</h1></span>
    <p>From earliest times, human beings have given meaning to life through artistic expressions. In our evolving world, visual awareness and visual communication have become increasingly significant. The Department of Art & Design responds to the needs of a visually-oriented world through instruction in studio art, art history, art education, and the exhibition of art. A variety of programs are offered that lend specific direction and discipline while also allowing students the freedom to explore new avenues of thought and media.</p>
</div>
