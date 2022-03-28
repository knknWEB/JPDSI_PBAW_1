<?php
require_once dirname (__FILE__).'/../config.php';

$action = $_REQUEST['action'];

switch ($action) {
	default : 
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		$control = new CalcControl ();
		$control->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		$control = new CalcControl ();
		$control->process ();
	break;
	case 'calcLogout' :
		// np. wylogowanie mozna dobudowac
	break;
}
