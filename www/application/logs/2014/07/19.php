<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-19 01:46:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\views\_partials\admin\header.php [ 14 ] in Z:\home\esnail.local\www\application\views\_partials\admin\header.php:14
2014-07-19 01:46:29 --- DEBUG: #0 Z:\home\esnail.local\www\application\views\_partials\admin\header.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\esnail....', 14, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\esnail.local\www\application\views\admin.php(18): Kohana_View->__toString()
#5 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#7 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\esnail.local\www\application\views\_partials\admin\header.php:14
2014-07-19 01:46:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\views\_partials\admin\header.php [ 14 ] in Z:\home\esnail.local\www\application\views\_partials\admin\header.php:14
2014-07-19 01:46:53 --- DEBUG: #0 Z:\home\esnail.local\www\application\views\_partials\admin\header.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\esnail....', 14, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\esnail.local\www\application\views\admin.php(18): Kohana_View->__toString()
#5 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#7 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\esnail.local\www\application\views\_partials\admin\header.php:14
2014-07-19 01:47:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\_partials\admin\header.php [ 14 ] in Z:\home\esnail.local\www\application\views\_partials\admin\header.php:14
2014-07-19 01:47:48 --- DEBUG: #0 Z:\home\esnail.local\www\application\views\_partials\admin\header.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\esnail....', 14, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\esnail.local\www\application\views\admin.php(18): Kohana_View->__toString()
#5 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#7 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\esnail.local\www\application\views\_partials\admin\header.php:14
2014-07-19 01:49:49 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant controller - assumed 'controller' ~ APPPATH\classes\Controller\Admin.php [ 15 ] in Z:\home\esnail.local\www\application\classes\Controller\Admin.php:15
2014-07-19 01:49:49 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Controller\Admin.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\esnail....', 15, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\esnail.local\www\application\classes\Controller\Admin.php:15
2014-07-19 01:50:16 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: controller ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\esnail.local\www\application\classes\Controller\Admin.php:15
2014-07-19 01:50:16 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Controller\Admin.php(15): Kohana_View->__get('controller')
#1 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\esnail.local\www\application\classes\Controller\Admin.php:15
2014-07-19 01:51:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\views\_partials\admin\header.php [ 14 ] in Z:\home\esnail.local\www\application\views\_partials\admin\header.php:14
2014-07-19 01:51:18 --- DEBUG: #0 Z:\home\esnail.local\www\application\views\_partials\admin\header.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\esnail....', 14, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\esnail.local\www\application\views\admin.php(18): Kohana_View->__toString()
#5 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#7 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\esnail.local\www\application\views\_partials\admin\header.php:14
2014-07-19 03:52:24 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Admin ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 87 ] in Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php:114
2014-07-19 03:52:24 --- DEBUG: #0 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#3 {main} in Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php:114
2014-07-19 04:24:05 --- CRITICAL: View_Exception [ 0 ]: The requested view register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\esnail.local\www\system\classes\Kohana\View.php:137
2014-07-19 04:24:05 --- DEBUG: #0 Z:\home\esnail.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('register')
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('register', NULL)
#2 Z:\home\esnail.local\www\application\classes\Controller\Auth.php(20): Kohana_View::factory('register')
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\esnail.local\www\system\classes\Kohana\View.php:137
2014-07-19 04:24:20 --- CRITICAL: View_Exception [ 0 ]: The requested view register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\esnail.local\www\system\classes\Kohana\View.php:137
2014-07-19 04:24:20 --- DEBUG: #0 Z:\home\esnail.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('register')
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('register', NULL)
#2 Z:\home\esnail.local\www\application\classes\Controller\Auth.php(20): Kohana_View::factory('register')
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\esnail.local\www\system\classes\Kohana\View.php:137
2014-07-19 04:25:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layout.php [ 35 ] in Z:\home\esnail.local\www\application\views\layout.php:35
2014-07-19 04:25:23 --- DEBUG: #0 Z:\home\esnail.local\www\application\views\layout.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\esnail....', 35, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\esnail.local\www\application\views\layout.php:35
2014-07-19 04:25:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_STRING ~ APPPATH\classes\Controller\Auth.php [ 2 ] in file:line
2014-07-19 04:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 12:36:40 --- CRITICAL: Kohana_Exception [ 0 ]: The firsname property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-19 12:36:40 --- DEBUG: #0 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firsname')
#1 Z:\home\esnail.local\www\application\views\admin\user\index.php(19): Kohana_ORM->__get('firsname')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#4 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\esnail.local\www\application\views\admin.php(21): Kohana_View->__toString()
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#7 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-19 12:57:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\admin\user\index.php [ 27 ] in file:line
2014-07-19 12:57:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-19 13:00:42 --- CRITICAL: ErrorException [ 2 ]: Wrong parameter count for var_dump() ~ APPPATH\views\admin\user\index.php [ 27 ] in file:line
2014-07-19 13:00:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Wrong parameter...', 'Z:\home\esnail....', 27, Array)
#1 Z:\home\esnail.local\www\application\views\admin\user\index.php(27): var_dump()
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#4 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\esnail.local\www\application\views\admin.php(21): Kohana_View->__toString()
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#7 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-07-19 13:13:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Admin_User::$roles ~ APPPATH\classes\Controller\Admin\User.php [ 21 ] in Z:\home\esnail.local\www\application\classes\Controller\Admin\User.php:21
2014-07-19 13:13:21 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Controller\Admin\User.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\esnail....', 21, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_admin()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\esnail.local\www\application\classes\Controller\Admin\User.php:21
2014-07-19 13:14:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin.php [ 21 ] in Z:\home\esnail.local\www\application\views\admin.php:21
2014-07-19 13:14:57 --- DEBUG: #0 Z:\home\esnail.local\www\application\views\admin.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\esnail....', 21, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\esnail.local\www\application\views\admin.php:21
2014-07-19 13:15:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin.php [ 21 ] in Z:\home\esnail.local\www\application\views\admin.php:21
2014-07-19 13:15:15 --- DEBUG: #0 Z:\home\esnail.local\www\application\views\admin.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\esnail....', 21, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\esnail.local\www\application\views\admin.php:21
2014-07-19 13:15:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin.php [ 21 ] in Z:\home\esnail.local\www\application\views\admin.php:21
2014-07-19 13:15:21 --- DEBUG: #0 Z:\home\esnail.local\www\application\views\admin.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\esnail....', 21, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\esnail.local\www\application\views\admin.php:21
2014-07-19 14:31:57 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\esnail.local\www\application\classes\Model\User.php:94
2014-07-19 14:31:57 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Model\User.php(94): Kohana_ORM->update(Object(Validation))
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\User.php(71): Model_User->update_user(Array, Array)
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\esnail.local\www\application\classes\Model\User.php:94
2014-07-19 14:38:27 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::remove(), called in Z:\home\esnail.local\www\application\classes\Controller\Admin\User.php on line 29 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1598 ] in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:1598
2014-07-19 14:38:27 --- DEBUG: #0 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(1598): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\esnail....', 1598, Array)
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\User.php(29): Kohana_ORM->remove()
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:1598