<?php $this->set('title_for_layout', $staff['Staff']['name'] . ' | ');?>

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

<div class="twelve columns offset-by-one single staff">
    <h1><?php echo $staff['Staff']['name'] ?></h1>
    <hr>
    <div id="staff-image">
        <?php echo $this->Html->image($staff['Staff']['image_path'], array('alt' => 'faculty picture', 'width' => '150px'))?>
    </div>
    <div id="basic-info">
        <h5>ROLE:</h5>
        <p><?php echo $staff['Staff']['title'] ?></p>
        <h5 class="contact-header">CONTACT:</h5>
        <p>Office: <?php echo $staff['Staff']['office'] ?></p>
        <p>Phone: <?php echo $staff['Staff']['phone'] ?></p>
        <p>Email: <a href="<?php echo $staff['Staff']['email'] ?>"><?php echo $staff['Staff']['email'] ?></a>
        <br>
        <p>Website: <a href="<?php echo $staff['Staff']['personal_website'] ?>"><?php echo $staff['Staff']['personal_website'] ?></a></p>
    </div>
    <hr>
    <div id="bio-title">
        <h5>BIOGRAPHY</h5>
    </div>
    <div id="bio-desc"><?php echo $staff['Staff']['description'] ?></div>

</div>
