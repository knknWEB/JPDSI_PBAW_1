<?php
require_once 'initialize.php';

if ($action='calcCompute'){
	include_once $conf->root_path.'/app/appCtrls/CalcCtrl.class.php';
	$control = new CalcControl ();
	$control->process ();
}
else
{
	include_once $conf->root_path.'/app/appCtrls/CalcCtrl.class.php';
	$control = new CalcControl ();
	$control->generateView ();
}


