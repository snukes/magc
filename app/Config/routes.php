<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/alumni', array('controller' => 'pages', 'action' => 'display', 'alumni'));
	Router::connect('/field_trips', array('controller' => 'pages', 'action' => 'display', 'fieldtrips'));
	Router::connect('/student_orgs', array('controller' => 'pages', 'action' => 'display', 'studentorgs'));
	Router::connect('/facilities', array('controller' => 'pages', 'action' => 'display', 'facilities'));
	Router::connect('/foster_gallery', array('controller' => 'pages', 'action' => 'display', 'foster_home'));
	Router::connect('/student_works', array('controller' => 'pages', 'action' => 'display', 'student_works'));
	Router::connect('/academic_programs', array('controller' => 'programs', 'action' => 'index'));
	Router::connect('/faculty_and_staff', array('controller' => 'staffs', 'action' => 'index'));
        
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

	CakePlugin::load('Users', array('routes'=>true));
/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
