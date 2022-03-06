<!DOCTYPE HTML>
<head>
	<meta charset="utf-8">
	<title>Kalkulator kredytowy</title>
</head>
<body>
	<div style="margin: 20px; padding: 10px; width:500px; background-color: #ececf9">
		<h1>Kalkulator kredytowy rat równych</h1>
		<form action="<?php print(_APP_URL);?>/app/calc_credit.php" method="post">
			<label for="sumCredit">Całkowita kwota kredytu: </label>
			<input id="sumCredit" type="number" name="sum" value="<?php if(isset($sum)) print($sum); ?>" /><br />
			<label for="numberOfInstallmentCredit">Miesięczna liczba rat kredytu: </label>
			<input id="numberOfInstallmentCredit" type="number" name="installment" value="<?php if(isset($installment)) print($installment); ?>" /><br />
			<label for="interestCredit">Oprocentowanie (w procentach): </label>
			<input id="interestCredit" type="number" name="interest" value="<?php if(isset($interest)) print($interest); ?>" /><br />
			<input type="submit" value="Oblicz" />
		</form>	
	</div>
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #ff1a3c; width:400px; font-weight: bold;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($resultSumMonthly)&&isset($resultCredit)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #b3c6ff; width:400px;">
<?php echo 'Twoja miesięczna rata: '.$resultSumMonthly." złotych" ;?><br />
<?php echo 'Całkowity koszt kredytu: '.$resultCredit." złotych"; ?><br />
</div>
<?php } ?>
</body>
</html>
