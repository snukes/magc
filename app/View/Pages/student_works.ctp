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
    <a href="facilities">Facilities</a> 
    <hr/>
</div>

<div class="ten columns offset-by-two">
    <span class="content-header"><h1>Student Works</h1></span>
    <p>Our programs advance the university’s mission and its Liberal Education learning goals. Our diverse and inclusive curriculum in the visual arts promotes a body of knowledge that serves individual needs, stimulates the eyes, and challenges the minds of all our students. To support our contemporary and comprehensive visual arts program, we endorse these requirements:</p>
</div>
