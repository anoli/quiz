<?php

// define project related directories
define('PROJECT_DIR', 'D:\www\test\phpMVC-master\seed-project');
define('PRIVATE_DIR', PROJECT_DIR . DIRECTORY_SEPARATOR . 'private');

// add lib to include path
set_include_path(get_include_path() . PATH_SEPARATOR . PRIVATE_DIR . DIRECTORY_SEPARATOR . 'Lib');
define('SMARTY_RESOURCE_CHAR_SET', 'ISO-8859-1');

include_once('phpMVC' . DIRECTORY_SEPARATOR . 'Router.php');

// config router
$router = new Router();
$router->setControllersDir(PRIVATE_DIR . DIRECTORY_SEPARATOR . 'Controllers');
$router->setMasterView('Layout');

// config smarty
$smarty = SmartyHelper::getSmarty();
$smarty->template_dir = PRIVATE_DIR . DIRECTORY_SEPARATOR . 'Views';
$smarty->compile_dir = PRIVATE_DIR . DIRECTORY_SEPARATOR . 'ViewsC';

// route
$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'home';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'helloworld';
$router->route($controller, $action);

?>
