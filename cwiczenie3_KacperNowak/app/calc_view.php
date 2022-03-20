<?php require_once dirname(__FILE__) .'/../config.php';?>

<?php //góra strony z szablonu 
include _ROOT_PATH.'/websites/header.php';
?>
<section style="margin: 2em;">
	<h3>Oblicz koszta swojego kredytu: </h3>
	<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post">
		<div class="row gtr-uniform gtr-50">
			<div class="col-4 col-12-xsmall">
				<label for="sumCredit">Całkowita kwota kredytu: </label>
				<input id="sumCredit" type="text" name="sum" value="<?php out($sum) ?>" /><br />
			</div>
			<div class="col-4 col-12-xsmall">
				<label for="numberOfInstallmentCredit">Miesięczna liczba rat kredytu: </label>
				<input id="numberOfInstallmentCredit" type="text" name="installment" value="<?php out($installment) ?>" /><br />
			</div>
			<div class="col-4 col-12-xsmall">
				<label for="interestCredit">Oprocentowanie (w procentach): </label>
				<input id="interestCredit" type="text" name="interest" value="<?php out($interest) ?>" /><br />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Oblicz" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
				</ul>
			</div>

			<div class="table-wrapper">
			<?php
			if (isset($messages)) {
				if (count ( $messages ) > 0) {
					echo "<table><thead><tr><th>Wystąpiły błędy:</th></tr></thead>";
					foreach ( $messages as $key => $msg ) {
						echo '<tr><td>'.$key.'</td><td>'.$msg.'</td></tr>';
					}
					echo "</table>";
				}
			}
			echo "</table>";
			?>
			<?php if (isset($resultSumMonthly)&&isset($resultCredit)){ ?>
				<?php echo "<table><thead><tr><th>Podsumowanie:</th></tr></thead><tr><td>Twoja miesięczna rata:</td><td>".$resultSumMonthly." złotych"."</td></tr>
				<tr><td>Całkowity koszt kredytu:</td><td>".$resultCredit." złotych"."</td></tr></table></div>"; }?>
			</div>
<?php
include _ROOT_PATH.'/websites/footer.php';
?>

