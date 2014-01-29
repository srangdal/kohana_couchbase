<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-29 06:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-01-29 06:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/test/index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-29 06:53:52 --- ERROR: ErrorException [ 1 ]: Call to undefined function vardump() ~ APPPATH/classes/controller/welcome.php [ 7 ]
2014-01-29 06:53:52 --- STRACE: ErrorException [ 1 ]: Call to undefined function vardump() ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 06:53:57 --- ERROR: ErrorException [ 1 ]: Call to undefined function vardump() ~ APPPATH/classes/controller/welcome.php [ 7 ]
2014-01-29 06:53:57 --- STRACE: ErrorException [ 1 ]: Call to undefined function vardump() ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 06:54:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/welcome.php [ 7 ]
2014-01-29 06:54:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 /var/www/test/application/classes/controller/welcome.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/test/a...', 7, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/test/index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-29 06:57:27 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:27 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:57:34 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:34 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:57:42 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:42 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:57:44 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:44 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:57:55 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:55 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:57:56 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:56 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:57:56 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:56 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:57:56 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:56 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:57:57 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:57:57 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:58:01 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:58:01 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:58:20 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:58:20 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:59:11 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:59:11 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 06:59:13 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 06:59:13 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:01:26 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:01:26 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:01:37 --- ERROR: ErrorException [ 1 ]: Class 'Session_Couchbase' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
2014-01-29 07:01:37 --- STRACE: ErrorException [ 1 ]: Class 'Session_Couchbase' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 07:02:38 --- ERROR: ErrorException [ 1 ]: Class 'Session_Couchbase' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
2014-01-29 07:02:38 --- STRACE: ErrorException [ 1 ]: Class 'Session_Couchbase' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 07:02:40 --- ERROR: ErrorException [ 1 ]: Class 'Session_Couchbase' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
2014-01-29 07:02:40 --- STRACE: ErrorException [ 1 ]: Class 'Session_Couchbase' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 07:05:40 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:05:40 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:05:57 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:05:57 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:15:26 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:15:26 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:15:34 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:15:34 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:15:35 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:15:35 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:15:36 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:15:36 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:16:38 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:16:38 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:16:40 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:16:40 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:16:40 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:16:40 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:16:40 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:16:40 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:16:40 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:16:40 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:16:41 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:16:41 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:16:48 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:16:48 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:16:49 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:16:49 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:16:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:16:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:16:51 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:16:51 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:16:51 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:16:51 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:16:51 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:16:51 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:16:51 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:16:51 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:03 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:03 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:04 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:04 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:04 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:04 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:04 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:04 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:48 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:48 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:49 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:49 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:17:59 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:17:59 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:05 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:05 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:05 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:05 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:06 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:06 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:06 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:06 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:07 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:07 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:31 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:31 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:32 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:32 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:32 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:32 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:32 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:32 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:32 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:32 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:32 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:32 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:18:34 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:18:34 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:19:06 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:19:06 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:19:06 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:19:06 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:19:06 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:19:06 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:19:07 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:19:07 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:19:07 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:19:07 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:19:07 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:19:07 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:19:07 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:19:07 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:19:27 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:19:27 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:20:57 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:20:57 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:21:01 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:21:01 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:21:22 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:21:22 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:21:27 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:21:27 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:21:37 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:21:37 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:21:42 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:21:42 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:23:04 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:23:04 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:23:05 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:23:05 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:23:05 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:23:05 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:24:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2014-01-29 07:24:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/test/system/classes/kohana/session.php(126): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(55): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:24:10 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2014-01-29 07:24:10 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/test/system/classes/kohana/session.php(126): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(55): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance('couchbase')
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:24:42 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2014-01-29 07:24:42 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/test/system/classes/kohana/session.php(126): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(55): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance()
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:25:38 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:25:38 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance()
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:29:09 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:29:09 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance()
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:30:16 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:30:16 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session/couchbase.php(15): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session_Couchbase->__construct(NULL, NULL)
#3 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance()
#4 [internal function]: Controller_Welcome->action_index()
#5 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/test/index.php(109): Kohana_Request->execute()
#9 {main}
2014-01-29 07:31:03 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2014-01-29 07:31:03 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /var/www/test/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/test/system/classes/kohana/session/couchbase.php(15): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/test/system/classes/kohana/session.php(54): Kohana_Session_Couchbase->__construct(NULL, NULL)
#3 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance()
#4 [internal function]: Controller_Welcome->action_index()
#5 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/test/index.php(109): Kohana_Request->execute()
#9 {main}
2014-01-29 07:33:42 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:33:42 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:33:52 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:33:52 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:34:00 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:34:00 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:34:19 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:34:19 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:34:33 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:34:33 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:34:34 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:34:34 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:34:35 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:34:35 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:34:35 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:34:35 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:34:35 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:34:35 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:36:51 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:36:51 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:37:02 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:37:02 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:37:37 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:37:37 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:39:08 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:39:08 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:39:12 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:39:12 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:39:12 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:39:12 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:39:12 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:39:12 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:39:43 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:39:43 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:40:08 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-01-29 07:40:08 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/test/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/test/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /var/www/test/index.php(108): Kohana_Request::factory()
#3 {main}
2014-01-29 07:43:42 --- ERROR: ErrorException [ 1 ]: Class 'Couchbase' not found ~ SYSPATH/classes/kohana/session/couchbase.php [ 17 ]
2014-01-29 07:43:42 --- STRACE: ErrorException [ 1 ]: Class 'Couchbase' not found ~ SYSPATH/classes/kohana/session/couchbase.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 07:48:07 --- ERROR: ErrorException [ 1 ]: Class 'Couchbase' not found ~ SYSPATH/classes/kohana/session/couchbase.php [ 17 ]
2014-01-29 07:48:07 --- STRACE: ErrorException [ 1 ]: Class 'Couchbase' not found ~ SYSPATH/classes/kohana/session/couchbase.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 07:48:11 --- ERROR: ErrorException [ 1 ]: Class 'Couchbase' not found ~ SYSPATH/classes/kohana/session/couchbase.php [ 17 ]
2014-01-29 07:48:11 --- STRACE: ErrorException [ 1 ]: Class 'Couchbase' not found ~ SYSPATH/classes/kohana/session/couchbase.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 07:51:26 --- ERROR: CouchbaseLibcouchbaseException [ 0 ]: Failed to create libcouchbase instance: The administration user cannot be used for authenticating to the bucket, or did you just misspell the username? ~ SYSPATH/classes/kohana/session/couchbase.php [ 17 ]
2014-01-29 07:51:26 --- STRACE: CouchbaseLibcouchbaseException [ 0 ]: Failed to create libcouchbase instance: The administration user cannot be used for authenticating to the bucket, or did you just misspell the username? ~ SYSPATH/classes/kohana/session/couchbase.php [ 17 ]
--
#0 /var/www/test/system/classes/kohana/session/couchbase.php(17): Couchbase->__construct('127.0.0.1', 'mindt', 'ted@med@', 'default')
#1 /var/www/test/system/classes/kohana/session.php(53): Kohana_Session_Couchbase->__construct(Array, NULL)
#2 /var/www/test/application/classes/controller/welcome.php(6): Kohana_Session::instance()
#3 [internal function]: Controller_Welcome->action_index()
#4 /var/www/test/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/test/index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-29 07:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-01-29 07:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/test/index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-29 07:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-01-29 07:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/test/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/test/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/test/index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-29 08:36:15 --- ERROR: ErrorException [ 1 ]: Call to undefined function get() ~ SYSPATH/classes/kohana/session/couchbase.php [ 59 ]
2014-01-29 08:36:15 --- STRACE: ErrorException [ 1 ]: Call to undefined function get() ~ SYSPATH/classes/kohana/session/couchbase.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-29 08:39:39 --- ERROR: ErrorException [ 8 ]: Undefined index: num ~ APPPATH/classes/controller/welcome.php [ 6 ]
2014-01-29 08:39:39 --- STRACE: ErrorException [ 8 ]: Undefined index: num ~ APPPATH/classes/controller/welcome.php [ 6 ]
--
#0 /var/www/application/classes/controller/welcome.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 6, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /var/www/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/index.php(109): Kohana_Request->execute()
#6 {main}