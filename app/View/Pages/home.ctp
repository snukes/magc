<?php
/**
* Home Page
*
*
*/

if (!Configure::read('debug')):
throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>

<ul class="rslides">
    <li><?php echo $this->Html->image('haas.jpg', array('alt' => 'Haas'))?></li>
    <li><?php echo $this->Html->image('haaslol.jpg', array('alt' => 'Haas Lol'))?></li>
</ul>

<hr class="content-separator">    

<div class="three columns offset-by-one">
    <a href="/">About</a>
    <hr/>
    <a href="alumni">Alumni</a>
    <hr/>
    <a href="field_trips">Field Trips</a>
    <hr/>
    <a href="student_orgs">Student Organizations</a>
    <hr/>
    <a href="facilities">Facilities</a> 
    <hr/>
</div>

<div class="thirteen columns offset-by-one">
    <span class="content-header"><h1>About Us</h1></span>
    <p>The Department of Art & Design embraces its responsibility as an integral component of a public liberal arts institution and of our local and regional communities.</p>
    <p>Our programs advance the university’s mission and its Liberal Education learning goals. Our diverse and inclusive curriculum in the visual arts promotes a body of knowledge that serves individual needs, stimulates the eyes, and challenges the minds of all our students. To support our contemporary and comprehensive visual arts program, we endorse these requirements:</p>
    <ul>
        <li>coordinated foundations core </li>
        <li>depth of knowledge and skill in an area of emphasis</li>
        <li>experience with art in two and three dimensions</li>
        <li>exploration of a variety of media</li>
        <li>knowledge of the theories and global history of art</li>
        <li>participation in the national and international contemporary art world</li>
        <li>employment of imagination, creativity, and innovation </li>
    </ul>
</div>
