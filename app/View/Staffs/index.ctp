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
	<?php foreach ($staff as $s): ?>
        <?php echo $this->Html->link($s['Staff']['name'], array('action' => 'view', $s['Staff']['id'])) ?>
        <hr>
    <?php endforeach; ?>    
</div>

<div class="ten columns offset-by-two">
    <span class="content-header"><h1>Faculty and Staff</h1></span>
    <p>The Department of Art & Design includes full-time faculty, part-time faculty, visiting artists, educators, and designers. In this particular department, there are 18 members in the team. They have helped shape the curriculum into a vehicle for training students to function in the professional fields they choose. Their teaching is informed and influenced by the hurdles they face in their own creative work, and students benefit from the expertise that comes with finding creative solutions to those struggles.</p>

    <p>
    <strong>Christos Theo</strong><br/>
    Department Chair<br/>
    <br/>
    Office: HFA Room 104A<br/>
    Phone: 715-836-3277<br/>
    Email: <a href="mailto:theocm@uwec.edu">theocm@uwec.edu</a><br/>
    <br/>

    <strong>Megan Clark</strong><br/>
    Academic Department Associate<br/>
    <br/>
    Office: HFA Room 104<br/>
    Phone: 715-836-3277<br/>
    Email: <a href="mailto:clarkmeg@uwec.edu">clarkmeg@uwec.edu</a><br/>
    <br/>

    </p>    

</div>
