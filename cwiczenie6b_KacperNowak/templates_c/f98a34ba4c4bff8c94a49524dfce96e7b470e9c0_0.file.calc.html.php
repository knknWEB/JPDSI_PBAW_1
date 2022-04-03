<?php
/* Smarty version 4.1.0, created on 2022-04-03 21:39:17
  from 'C:\xampp\htdocs\cwiczenie6b_KacperNowak\app\views\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249f7e5f046d3_34537301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f98a34ba4c4bff8c94a49524dfce96e7b470e9c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cwiczenie6b_KacperNowak\\app\\views\\calc.html',
      1 => 1648981861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249f7e5f046d3_34537301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3363463846249f7e5ef4f36_10267403', 'info');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18383853416249f7e5ef62f0_69009394', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7278715366249f7e5ef68d8_25903719', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "website.html");
}
/* {block 'info'} */
class Block_3363463846249f7e5ef4f36_10267403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'info' => 
  array (
    0 => 'Block_3363463846249f7e5ef4f36_10267403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kacper Nowak - PAW2 rok 2021/2022 Informatyka inżynierska<?php
}
}
/* {/block 'info'} */
/* {block 'footer'} */
class Block_18383853416249f7e5ef62f0_69009394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18383853416249f7e5ef62f0_69009394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
KNKnowak. Wszystkie prawa zasrtrzeżone.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_7278715366249f7e5ef68d8_25903719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7278715366249f7e5ef68d8_25903719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section style="margin: 2em;">
	<h3>Oblicz koszta swojego kredytu: </h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
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
