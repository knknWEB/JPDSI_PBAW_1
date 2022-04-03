<?php
require_once 'initialize.php';
if($action=='calcCompute'){
	$ctrl = new app\appCtrls\CalcCtrl();
	$ctrl->process ();
}
else
{
	$ctrl = new app\appCtrls\CalcCtrl();
		$ctrl->generateView ();
}

