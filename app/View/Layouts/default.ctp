<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>MAGC</title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
    <div id="container">
        <div id="header">
            <?php
            if ($this->Session->read('Auth')) {
                echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout'));
            } else {
                echo $this->Html->link('Login/Sign-Up', array('controller'=>'users', 'action'=>'login'));
            }
            ?>
        </div>
        <div id="content">

            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer">
        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
