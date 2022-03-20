<?php require_once dirname(__FILE__) .'/../../config.php';?>

<?php //góra strony z szablonu 
include _ROOT_PATH.'/websites/header.php';
?>


<section style="margin-left:2em; margin-right:2em;"">
	<h2>Dostęp zabroniony - wymagane zalogowanie</h2>
	<form method="post" action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
		<div class="row gtr-uniform gtr-50">
			<div class="col-6 col-12-medium">
				<label for="id_login">Login: </label>
				<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
			</div>
			<div class="col-6 col-12-medium">
				<label for="id_pass">Hasło: </label>
				<input id="id_pass" type="password" name="pass" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zaloguj!" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
				</ul>
			</div>
		</div>
	</form>
<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo "<table><thead><tr><th>Wystąpiły błędy:</th></tr></thead>";
		foreach ( $messages as $key => $msg ) {
			echo '<tr><td>'.$msg.'</td></tr>';
		}
		echo "</table>";
	}
}
echo "</table>";
?>

</section>
</div>
<?php
include _ROOT_PATH.'/websites/footer.php';
?>
