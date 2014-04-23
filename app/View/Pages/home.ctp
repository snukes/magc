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
    <a href="index.html">About</a>
    <hr/>
    <a href="Xtra/alumni.html">Alumni</a>
    <hr/>
    <a href="Xtra/fieldTrips.html">Field Trips</a>
    <hr/>
    <a href="Xtra/studentOrgs.html">Student Organizations</a>
    <hr/>
    <a href="Xtra/facilities.html">Facilities</a> 
    <hr/>
</div>

<div class="ten columns offset-by-two">
    <h4>
        <!-- work on text heirarchy - weight and size -->
        The Department of Art & Design embraces its responsibility as an integral component of a public liberal arts institution and of our local and regional communities. 			</h4>
    <h5>
        Our programs advance the university’s mission and its Liberal Education learning goals. Our diverse and inclusive curriculum in the visual arts promotes a body of knowledge that serves individual needs, stimulates the eyes, and challenges the minds of all our students. To support our contemporary and comprehensive visual arts program, we endorse these requirements:
    </h5>
    <ul>
        <li>coordinated foundations core </li>
        <li>depth of knowledge and skill in an area of emphasis</li>
        <li>experience with art in two and three dimensions</li>
        <li>exploration of a variety of media</li>
        <li>knowledge of the theories and global history of art</li>
        <li>participation in the national and international contemporary art world, and
        employment of imagination, creativity, and innovation </li>
    </ul>
    <br/>
    <br/>
    <br/>
</div>
