<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-05 06:13:31 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/system/classes/Kohana/Cookie.php:67
2014-03-05 06:13:31 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__atuvc', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('__atuvc')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2014-03-05 06:13:35 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/system/classes/Kohana/Cookie.php:67
2014-03-05 06:13:35 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__atuvc', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('__atuvc')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2014-03-05 06:13:36 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/system/classes/Kohana/Cookie.php:67
2014-03-05 06:13:36 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__atuvc', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('__atuvc')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2014-03-05 12:22:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view example could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-03-05 12:22:22 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('example')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('example', NULL)
#2 /var/www/application/classes/Controller/Welcome.php(8): Kohana_View::factory('example')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-03-05 12:35:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_quote' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-03-05 12:35:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 12:35:41 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ SELECT `quote`.`quoteId` AS `quoteId`, `quote`.`author` AS `author`, `quote`.`content` AS `content`, `quote`.`source` AS `source` FROM `quotes` AS `quote` WHERE `id` = '1' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-03-05 12:35:41 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `quote`....', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/application/classes/Controller/Welcome.php(7): Kohana_ORM->find()
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-03-05 12:35:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method ORM::factor() ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in file:line
2014-03-05 12:35:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 12:36:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Quote class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2014-03-05 12:36:40 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id')
#1 /var/www/application/views/Example.php(3): Kohana_ORM->__get('id')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(View))
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2014-03-05 12:43:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_tag' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-03-05 12:43:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 12:43:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''foreign_key'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/Model/Tag.php [ 12 ] in file:line
2014-03-05 12:43:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-05 12:44:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Tag class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2014-03-05 12:44:36 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id')
#1 /var/www/application/views/Example.php(5): Kohana_ORM->__get('id')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(View))
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2014-03-05 12:44:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Tag class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2014-03-05 12:44:44 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /var/www/application/views/Example.php(5): Kohana_ORM->__get('name')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(View))
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2014-03-05 12:44:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Tag class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2014-03-05 12:44:46 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /var/www/application/views/Example.php(5): Kohana_ORM->__get('name')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(View))
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603