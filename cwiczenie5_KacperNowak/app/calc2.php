<?php
require_once dirname(__FILE__).'/../config.php';

//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//1.pobranie
function getParams(&$sum,&$installment,&$interest){
	$sum = isset($_REQUEST['sum']) ? $_REQUEST['sum'] : null;
	$installment = isset($_REQUEST['installment']) ? $_REQUEST['installment'] : null;
	$interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;	
}

//2.walidacja - sprawdzenie, czy parametry zostały przekazane
function validate(&$sum,&$installment,&$interest,&$messages){
	if ( ! (isset($sum) && isset($installment) && isset($interest))) {
		return false;
	}

	// sprawdzenie, wartosci potrzebne zostały przekazane
	if ( $sum == "") {
		$messages [] = 'Nie podano liczby 1';
	}
	if ( $installment == "") {
		$messages [] = 'Nie podano liczby 2';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	//sprawdzenie, czy parametry zgodne z założeniami
	if (($installment<=0) OR (!is_numeric($installment) )) {
		$messages [] = 'Liczba rat kredytu musi być liczbą większą od zera!';
	}	
	if (($sum<=0) OR (!is_numeric($sum) )) {
		$messages [] = 'Liczba całkowita kredytu musi być liczbą większą od zera!';
	}	
	if (($interest<0) OR (!is_numeric($interest) )) {
		$messages [] = 'Liczba oprocentowania kredytu musi być liczbą większą lub równą zero!';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$sum,&$installment,&$interest,&$messages,&$resultCredit,&$resultSumMonthly){
	global $role;
	if($interest==0){	//wykona tylko jeżeli oprocentowanie jest równe zero
		if($role=='user'){
			$messages[]='Tylko administratorzy mogą obliczać raty 0%!';
		}
		else {
		$resultSumMonthly=$sum/$installment;
		$resultCredit=$sum;
		}
	}
	//oblicznia dla pozostalych przypadkow - admin, user, oprocentowanie > 0
	else{
		$interestCredit = $interest / 1200;
		$interestCredit = round($interestCredit, 7);
		$sumMonthly = ($interestCredit + $interestCredit / (pow($interestCredit + 1, $installment) - 1)) * $sum;
		$sumMonthly = round($sumMonthly, 2);	
		$resultSumMonthly = $sumMonthly;
		$resultCredit = $sumMonthly * $installment;
	}
}

//definicja zmiennych kontrolera
$sum = null;
$installment = null;
$interest = null;
$resultCredit = null;
$resultSumMonthly = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($sum,$installment,$interest);
if ( validate($sum,$installment,$interest,$messages) ) { // gdy brak błędów
	process($sum,$installment,$interest,$messages,$resultCredit,$resultSumMonthly);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('resultCredit',$resultCredit);
$smarty->assign('resultSumMonthly',$resultSumMonthly);
$smarty->assign('sum',$sum);
$smarty->assign('interest',$interest);
$smarty->assign('installment',$installment);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');