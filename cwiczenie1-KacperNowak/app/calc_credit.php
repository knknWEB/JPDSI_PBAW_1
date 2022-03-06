<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

//1.pobranie
$sum = $_REQUEST ['sum'];
$installment = $_REQUEST ['installment'];
$interest = $_REQUEST ['interest'];

//2.walidacja - sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($sum) && isset($installment) && isset($interest))) {
	$messages[] = 'Błąd. Nie wszystkie parametry zostały przekazane!';
}

// sprawdzenie, wartosci potrzebne zostały przekazane
if ($sum == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ($installment  == "") {
	$messages [] = 'Nie podano liczby rat';
}
if ($interest  == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//sprawdzenie, czy parametry zgodne z założeniami
if (empty($messages)) {
	if ($installment<=0) {
		$messages [] = 'Liczba rat kredytu musi być liczbą większą od zera!';
	}	
	if ($sum<=0) {
		$messages [] = 'Liczba całkowita kredytu musi być liczbą większą od zera!';
	}	
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów

	if($interest==0){	//wykona tylko jeżeli oprocentowanie jest równe zero
		$resultSumMonthly=$sum/$installment;
		$resultCredit=$sum;
	}
	else{
	$interestCredit = $interest / 1200;
	$interestCredit = round($interestCredit, 7);
	$sumMonthly = ($interestCredit + $interestCredit / (pow($interestCredit + 1, $installment) - 1)) * $sum;
	$sumMonthly = round($sumMonthly, 2);
 
	$resultSumMonthly = $sumMonthly;
	$resultCredit = $sumMonthly * $installment;
	}
}

// 4. Wywołanie widoku z przekazaniem zmiennych
include 'calc_credit_view.php';