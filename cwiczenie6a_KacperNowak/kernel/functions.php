<?php
function getFromRequest($param_name){
	if(isset($_REQUEST [$param_name])){
		return $_REQUEST [$param_name];
	}
	else{
		return null;
	}
}
