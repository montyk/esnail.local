<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-20 06:52:35 --- CRITICAL: Kohana_Exception [ 0 ]: The subject property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:702
2014-07-20 06:52:35 --- DEBUG: #0 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('subject', 'blah blah blah')
#1 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('subject', 'blah blah blah')
#2 Z:\home\esnail.local\www\application\classes\Model\User.php(83): Kohana_ORM->values(Array, Array)
#3 Z:\home\esnail.local\www\application\classes\Controller\Admin\Mail.php(33): Model_User->create_user(Array, Array)
#4 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:702
2014-07-20 06:56:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Mail::create_user() ~ APPPATH\classes\Controller\Admin\Mail.php [ 30 ] in file:line
2014-07-20 06:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-20 06:56:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Mail::get_password_validation() ~ APPPATH\classes\Model\Mail.php [ 35 ] in file:line
2014-07-20 06:56:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-20 07:06:51 --- CRITICAL: Kohana_Exception [ 0 ]: The form property does not exist in the Model_Mail class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:06:51 --- DEBUG: #0 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('form')
#1 Z:\home\esnail.local\www\application\views\admin\mail\index.php(23): Kohana_ORM->__get('form')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#4 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\esnail.local\www\application\views\admin.php(21): Kohana_View->__toString()
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#7 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:09:29 --- CRITICAL: Kohana_Exception [ 0 ]: The hold property does not exist in the Model_Mail class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:09:29 --- DEBUG: #0 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('hold')
#1 Z:\home\esnail.local\www\application\views\admin\mail\index.php(29): Kohana_ORM->__get('hold')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#4 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\esnail.local\www\application\views\admin.php(21): Kohana_View->__toString()
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#7 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:24:00 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Mail class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:24:00 --- DEBUG: #0 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user')
#1 Z:\home\esnail.local\www\application\views\admin\mail\index.php(28): Kohana_ORM->__get('user')
#2 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#3 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#4 Z:\home\esnail.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\esnail.local\www\application\views\admin.php(21): Kohana_View->__toString()
#6 Z:\home\esnail.local\www\system\classes\Kohana\View.php(61): include('Z:\home\esnail....')
#7 Z:\home\esnail.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\esnail....', Array)
#8 Z:\home\esnail.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#12 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:33:13 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update mail model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\esnail.local\www\application\classes\Model\Mail.php:38
2014-07-20 07:33:13 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Model\Mail.php(38): Kohana_ORM->update()
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\Mail.php(60): Model_Mail->update_mail(Array, Array)
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\esnail.local\www\application\classes\Model\Mail.php:38
2014-07-20 07:34:20 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update mail model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\esnail.local\www\application\classes\Model\Mail.php:38
2014-07-20 07:34:20 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Model\Mail.php(38): Kohana_ORM->update()
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\Mail.php(60): Model_Mail->update_mail(Array, Array)
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\esnail.local\www\application\classes\Model\Mail.php:38
2014-07-20 07:42:39 --- CRITICAL: Kohana_Exception [ 0 ]: The hold property does not exist in the Model_Mail class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:42:39 --- DEBUG: #0 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('hold')
#1 Z:\home\esnail.local\www\application\classes\Model\Mail.php(54): Kohana_ORM->__get('hold')
#2 Z:\home\esnail.local\www\application\classes\Controller\Admin\Mail.php(79): Model_Mail->trigger_hold()
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_hold()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:43:06 --- CRITICAL: Kohana_Exception [ 0 ]: The hed property does not exist in the Model_Mail class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:43:06 --- DEBUG: #0 Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('hed')
#1 Z:\home\esnail.local\www\application\classes\Model\Mail.php(54): Kohana_ORM->__get('hed')
#2 Z:\home\esnail.local\www\application\classes\Controller\Admin\Mail.php(79): Model_Mail->trigger_hold()
#3 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_hold()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\esnail.local\www\modules\orm\classes\Kohana\ORM.php:603
2014-07-20 07:57:31 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update mail model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\esnail.local\www\application\classes\Model\Mail.php:38
2014-07-20 07:57:31 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Model\Mail.php(38): Kohana_ORM->update()
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\Mail.php(60): Model_Mail->update_mail(Array, Array)
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Mail->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Mail))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\esnail.local\www\application\classes\Model\Mail.php:38
2014-07-20 10:27:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_File::count() ~ APPPATH\views\admin\mail\view.php [ 20 ] in file:line
2014-07-20 10:27:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-20 10:35:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_File::first() ~ APPPATH\views\admin\mail\view.php [ 25 ] in file:line
2014-07-20 10:35:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-20 10:36:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\Admin\File.php [ 8 ] in Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php:8
2014-07-20 10:36:18 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\esnail....', 8, Array)
#1 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_File->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_File))
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php:8
2014-07-20 10:38:29 --- CRITICAL: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php:8
2014-07-20 10:38:29 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php(8): Kohana_Upload::save(Array, 'uploaded_file.p...', 'upload')
#1 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_File->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_File))
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php:8
2014-07-20 10:46:18 --- CRITICAL: ErrorException [ 2 ]: md5_file(statement&amp;travel.png) [function.md5-file]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Admin\File.php [ 11 ] in file:line
2014-07-20 10:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'md5_file(statem...', 'Z:\home\esnail....', 11, Array)
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php(11): md5_file('statement&trave...')
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_File))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-20 10:46:32 --- CRITICAL: ErrorException [ 2 ]: md5_file(statement&amp;travel.png) [function.md5-file]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Admin\File.php [ 11 ] in file:line
2014-07-20 10:46:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'md5_file(statem...', 'Z:\home\esnail....', 11, Array)
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php(11): md5_file('statement&trave...')
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_File))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-20 10:48:36 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Request::$referer ~ APPPATH\classes\Controller\Admin\File.php [ 24 ] in file:line
2014-07-20 10:48:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-20 10:52:31 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete mail model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php:33
2014-07-20 10:52:31 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php(33): Kohana_ORM->delete()
#1 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_File->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_File))
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php:33
2014-07-20 10:53:16 --- CRITICAL: ErrorException [ 2 ]: md5_file() [function.md5-file]: Filename cannot be empty ~ APPPATH\classes\Controller\Admin\File.php [ 11 ] in file:line
2014-07-20 10:53:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'md5_file() [<a ...', 'Z:\home\esnail....', 11, Array)
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\File.php(11): md5_file('')
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_File->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_File))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-20 11:34:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update plan model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\esnail.local\www\application\classes\Model\Plan.php:39
2014-07-20 11:34:56 --- DEBUG: #0 Z:\home\esnail.local\www\application\classes\Model\Plan.php(39): Kohana_ORM->update()
#1 Z:\home\esnail.local\www\application\classes\Controller\Admin\Plan.php(53): Model_Plan->update_plan(Array, Array)
#2 Z:\home\esnail.local\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Plan->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Plan))
#5 Z:\home\esnail.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\esnail.local\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\esnail.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\esnail.local\www\application\classes\Model\Plan.php:39