<!DOCTYPE html>
    <!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
    <!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
    <!-- Basic Page Needs
    =========================================== -->
        <title>Department of Art and Design | UW-Eau Claire</title>
        <meta name="Description" id="Description" content="The Department of Art and Design at UW-Eau Claire">
            <meta name="Keywords" id="Keywords" content="art, design, Eau Claire, UW-Eau Claire, UWEC, University of Wisconsin-Eau Claire, liberal arts">
        <meta charset="utf-8">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,900italic,500italic,700,700italic,900|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>

        <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Responsive Slides
  ================================================== -->
<?php 
echo $this->Html->script('jquery-1.8.3.min.js');
echo $this->Html->script('responsiveslides.min');
echo $this->Html->script('responsiveslides');
echo $this->Html->script('navbar');
?>	
        <!-- CSS
  ================================================== -->
<?php
echo $this->Html->css('ResponsiveGrid/stylesheets/base');
echo $this->Html->css('ResponsiveGrid/stylesheets/skeleton');
echo $this->Html->css('ResponsiveGrid/stylesheets/layout');
echo $this->Html->css('menu');
echo $this->Html->css('font-awesome');
echo $this->Html->css('style');
echo $this->Html->css('header');
?>

<?php 
$active=$this->request->here; 

$homelink = array($this->Html->url('/'), $this->Html->url('/alumni'), $this->Html->url('/field_trips'), $this->Html->url('/student_orgs'), $this->Html->url('/facilities'));
$home = false;

foreach ($homelink as $h) {
    if($h == $active)
        $home = true;
}

$aplink = array($this->Html->url('/academic_programs'), $this->Html->url('/programs/view/*'));
$ap = false;

foreach ($aplink as $apl) {
    if($apl == $active)
        $ap = true;
}

$faslink = array($this->Html->url('/faculty_and_staff'), $this->Html->url('/staff/view/*'));
$fas = false;

foreach ($faslink as $fasl) {
    if($fasl == $active)
        $fas = true;
}


$fglink = array($this->Html->url('/foster_gallery'));
$fg = false;

foreach ($fglink as $fgl) {
    if($fgl == $active)
        $fg = true;
}


$swlink = array($this->Html->url('/student_works'));
$sw = false;

foreach ($swlink as $swl) {
    if($swl == $active)
        $sw = true;
}

?>

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">			        </script>
    <![endif]-->

    </head>

    <body>
        <div class="container">
            <div class="wrap">

                <div class="header"><!-- header -->
                    <div class="accentWrapper"><h2 class="accent">University of Wisconsin - Eau Claire</h2></div>
                    <div class="banner">
                        <?php echo $this->Html->image('real_seal.png', array('class' => 'logo', 'alt' => 'Seal'))?>
                        <div id="title">
                        <h1 class="headerText">Art & Design</h1>
                        <a href="#" id="mobile-nav-button">
                            <?php echo $this->Html->image('burger.png', array('id' => 'dark-menu','width' => '25px', 'height' => '25px', 'alt' => 'menu'))?>
                            <?php echo $this->Html->image('burger_white.png', array('id' => 'light-menu','width' => '25px', 'height' => '25px', 'alt' => 'menu'))?>
                        </a>
                    </div>                    

                        <hr>
                    <nav class="cl-effect-1">
                        <ul id="main-menu">
                        <li class="<?php if ($home) {echo 'current-menu-item';} ?> first"><a href="/">Home</a></li>
                            <li class="<?php if($ap) {echo 'current-menu-item';} ?> nav-expand"><a href="/academic_programs">Academic Programs</a></li>
                            <li class="<?php if($ap) {echo 'current-menu-item';} ?> nav-shrink"><a href="/academic_programs">Programs</a></li>
                            <li class="<?php if($fas) {echo 'current-menu-item';} ?> nav-expand"><a href="/faculty_and_staff">Faculty and Staff</a></li>
                            <li class="<?php if($fas) {echo 'current-menu-item';} ?> nav-shrink"><a href="/faculty_and_staff">Faculty</a></li>
                            <li class="<?php if($fg) {echo 'current-menu-item';} ?> nav-expand"><a href="http://www.uwec.edu/Art/foster/" target="_blank">Foster Gallery</a></li>
                            <li class="<?php if($fg) {echo 'current-menu-item';} ?> nav-shrink"><a href="http://www.uwec.edu/Art/foster/" target="_blank">Gallery</a></li>
                            <li class="<?php if($sw) {echo 'current-menu-item';} ?> last"><a href="/student_works">Student Works</a></li> 
                        </ul>  
                    </nav>
               </div>   
        </div><!-- end header -->

        <div class="content">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div> <!-- end of content-->


        <div class="footerWrapper">
            <div class="footer">
                <div class="sixteen columns">Art and Design • Haas Fine Arts Center 104 • University of Wisconsin-Eau Claire<br />Eau Claire WI 54702-4004 <br /><br />
Phone: 715-836-3277<br />Questions/Comments: art@uwec.edu<br /><br />
Copyright © 2014 UW-Eau Claire and the Board of Regents of the University of Wisconsin System<br /><br />
                 <?php
                 if ($this->Session->read('Auth')) {
                     echo $this->Html->link('Logout', array(
                                            'plugin' => 'users',
                                            'controller'=>'users',
                                            'action'=>'logout'));
                 } else {
                     echo $this->Html->link('Login/Sign-Up', array(
                                            'plugin' => 'users',
                                            'controller'=>'users',
                                            'action'=>'login'));
                 }
                 ?>

             <?php if (isset($userData['is_admin']) && $userData['is_admin'] == 1): ?>
             <span>
                <p>
                     Admin:&nbsp;
                     <?php echo $this->Html->link(__('Users'), array(
                         'admin' => true,
                         'plugin' => 'users',
                         'controller' => 'users',
                         'action' => 'admin_index'));
                     ?>
                     &nbsp;|&nbsp;
                    <?php echo $this->Html->link(__('Staff'), array(
                         'plugin' => false,
                         'admin' => true,
                         'controller' => 'staffs',
                         'action' => 'admin_index'));
                     ?>
                     &nbsp;|&nbsp;
                     <?php echo $this->Html->link(__('Programs'), array(
                         'plugin' => false,
                         'admin' => true,
                         'controller' => 'programs',
                         'action' => 'admin_index'));
                     ?>
                 </p>
             </span>
             <?php endif; ?>

                </div>
            </div>
        </div> <!-- end footer -->

      </div>  
    </div>
</div>
<?php
echo $this->Html->script('classie');
echo $this->Html->script('header');
?>    
</body>
</html>
