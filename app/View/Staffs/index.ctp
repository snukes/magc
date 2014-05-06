<?php 
    /**
      * Programs Index
      *
      */
?>


<div class="sixteen columns backdrop">

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

<hr class="content-separator">
<div class="staff-index-wrapper">
<?php foreach ($staff as $s): ?>
    <div class="three columns">
        
        <?php echo $this->Html->link(
            $this->Html->image($s['Staff']['image_path'], array('height' => '150px', 'width' => '150px', 'alt' => $s['Staff']['name'])),
            array('action' => 'view', $s['Staff']['id']),
            array('escape' => false)) ?>
        
        <h4><?php echo $this->Html->link($s['Staff']['name'], array('action' => 'view', $s['Staff']['id'])) ?> 
        <h5><?php echo $s['Staff']['title']?></h5>
    
    </div>        
<?php endforeach; ?>    
</div>
</div>
