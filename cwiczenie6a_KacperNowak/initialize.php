<?php
require_once dirname(__FILE__).'/kernel/Config.class.php';
$conf = new Config();
include dirname(__FILE__).'/config.php'; 

function &getConf(){ 
	global $conf; 
	return $conf; 
}
require_once getConf()->root_path.'/kernel/Messages.class.php';

$msgs = new Messages();
function &getMessages(){ 
	global $msgs; 
	return $msgs; 
}

$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		include_once getConf()->root_path.'/lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/appViews',
			'two' => getConf()->root_path.'/app/appViews/templates'
		));
	}
	return $smarty;
}

require_once getConf()->root_path.'/kernel/functions.php';
$action = getFromRequest('action');