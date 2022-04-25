<?php

require_once 'kernel/Config.class.php';
$conf = new kernel\Config();
require_once 'config.php';

function &getConf(){ 
	global $conf; return $conf; 
}
require_once 'kernel/Messages.class.php';
$msgs = new kernel\Messages();

function &getMessages(){ 
	global $msgs; 
	return $msgs; 
}
$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		include_once 'lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}
require_once 'kernel/ClassLoader.class.php'; 
$cloader = new kernel\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'kernel/Router.class.php'; //załaduj i stwórz router
$router = new kernel\Router();
function &getRouter(): kernel\Router {
    global $router; 
	return $router;
}

require_once 'kernel/functions.php';
session_start(); //uruchom lub kontynuuj sesję
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );