<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-18 23:35:15 --- CRITICAL: View_Exception [ 0 ]: The requested view partials/header could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\esnail.local\www\system\classes\Kohana\View.php:137
2014-07-18 23:35:15 --- DEBUG: #0 Z:\home\esnail.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('partials/header')
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('partials/header', NULL)
#2 Z:\home\esnail.local\www\application\classes\Controller\Admin.php(13): Kohana_View::factory('partials/header')
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\esnail.local\www\system\classes\Kohana\View.php:137
2014-07-18 23:36:20 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/_partials/header could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\esnail.local\www\system\classes\Kohana\View.php:137
2014-07-18 23:36:20 --- DEBUG: #0 Z:\home\esnail.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/_partials...')
#1 Z:\home\esnail.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/_partials...', NULL)
#2 Z:\home\esnail.local\www\application\classes\Controller\Admin.php(13): Kohana_View::factory('admin/_partials...')
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\esnail.local\www\system\classes\Kohana\View.php:137