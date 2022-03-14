<!DOCTYPE HTML>
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">O mnie</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend><h1>Kalkulator kredytowy rat równych</h1></legend>
	<fieldset>
	<label for="sumCredit">Całkowita kwota kredytu: </label>
			<input id="sumCredit" type="number" name="sum" value="<?php out($sum) ?>" /><br />
			<label for="numberOfInstallmentCredit">Miesięczna liczba rat kredytu: </label>
			<input id="numberOfInstallmentCredit" type="number" name="installment" value="<?php out($installment) ?>" /><br />
			<label for="interestCredit">Oprocentowanie (w procentach): </label>
			<input id="interestCredit" type="number" name="interest" value="<?php out($interest) ?>" /><br />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 2em 2em 2em 2em; border-radius: 1em; background-color: #ff1a3c; width:25em; font-weight: bold;"">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
<?php if (isset($resultSumMonthly)&&isset($resultCredit)){ ?>
	<div style="margin-top: 1em; padding: 2em 2em 2em 2em; border-radius: 1em; background-color: #b3c6ff; width:25em;">
<?php echo 'Twoja miesięczna rata: '.$resultSumMonthly." złotych" ;?><br />
<?php echo 'Całkowity koszt kredytu: '.$resultCredit." złotych"; ?><br />
</div>
<?php } ?>

</div>

</body>
</html>