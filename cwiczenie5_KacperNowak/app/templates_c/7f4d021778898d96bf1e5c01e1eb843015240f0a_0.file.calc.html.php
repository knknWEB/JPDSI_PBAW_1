<?php
/* Smarty version 4.1.0, created on 2022-03-27 22:04:23
  from 'C:\xampp\htdocs\cwiczenie5_KacperNowak\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6240c34790bca6_08069824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f4d021778898d96bf1e5c01e1eb843015240f0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cwiczenie5_KacperNowak\\app\\calc.html',
      1 => 1648411458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240c34790bca6_08069824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7394756306240c3478fdd00_78255368', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15700169886240c3478fe923_67426179', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_7394756306240c3478fdd00_78255368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7394756306240c3478fdd00_78255368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
KNKnowak. Wszystkie prawa zasrtrzeżone.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_15700169886240c3478fe923_67426179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15700169886240c3478fe923_67426179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section style="margin: 2em;">
	<h3>Oblicz koszta swojego kredytu: </h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
		<div class="row gtr-uniform gtr-50">
			<div class="col-4 col-12-xsmall">
				<label for="sumCredit">Całkowita kwota kredytu: </label>
				<input id="sumCredit" type="text" name="sum" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->sum;?>
" /><br />
			</div>
			<div class="col-4 col-12-xsmall">
				<label for="numberOfInstallmentCredit">Miesięczna liczba rat kredytu: </label>
				<input id="numberOfInstallmentCredit" type="text" name="installment" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->installment;?>
" /><br />
			</div>
			<div class="col-4 col-12-xsmall">
				<label for="interestCredit">Oprocentowanie (w procentach): </label>
				<input id="interestCredit" type="text" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
" /><br />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Oblicz" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
				</ul>
			</div>

			<div class="table-wrapper">
			
								<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
					<h4>Wystąpiły błędy: </h4>
					<ol class="err">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				<?php }?>
				
								<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
					<h4>Informacje: </h4>
					<ol class="inf">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				<?php }?>
								

			<?php if (((isset($_smarty_tpl->tpl_vars['form']->value->resultCredit)) && (isset($_smarty_tpl->tpl_vars['form']->value->resultSum)))) {?>

			<table><thead><tr><th>Podsumowanie:</th></tr></thead><tr><td>Twoja miesięczna rata:</td><td><?php echo $_smarty_tpl->tpl_vars['form']->value->resultSum;?>
 złotych</td></tr>
				<tr><td>Całkowity koszt kredytu:</td><td><?php echo $_smarty_tpl->tpl_vars['form']->value->resultCredit;?>
 złotych</td></tr></table></div>
			<?php }?>
            </div>

<?php
}
}
/* {/block 'content'} */
}
