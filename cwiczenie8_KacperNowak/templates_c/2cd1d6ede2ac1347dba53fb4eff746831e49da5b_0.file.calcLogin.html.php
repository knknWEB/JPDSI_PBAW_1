<?php
/* Smarty version 4.1.0, created on 2022-04-23 14:59:32
  from 'C:\xampp\htdocs\cwiczenie8_KacperNowak\app\views\calcLogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263f834618ad0_47484862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd1d6ede2ac1347dba53fb4eff746831e49da5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cwiczenie8_KacperNowak\\app\\views\\calcLogin.html',
      1 => 1650390020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263f834618ad0_47484862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11466888846263f8345fba22_10511259', 'info');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13544828726263f8345fd9e8_90247047', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19498504256263f8345ff095_65418775', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "website.html");
}
/* {block 'info'} */
class Block_11466888846263f8345fba22_10511259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'info' => 
  array (
    0 => 'Block_11466888846263f8345fba22_10511259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kacper Nowak - PAW2 rok 2021/2022 Informatyka inżynierska<?php
}
}
/* {/block 'info'} */
/* {block 'footer'} */
class Block_13544828726263f8345fd9e8_90247047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13544828726263f8345fd9e8_90247047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
KNKnowak. Wszystkie prawa zasrtrzeżone.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_19498504256263f8345ff095_65418775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19498504256263f8345ff095_65418775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section style="margin: 2em;">
	<h3>Zaloguj się: </h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
		<div class="row gtr-uniform gtr-50">
			<div class="col-6 col-12-xsmall">
				<label for="loginID">Login: </label>
				<input id="loginID" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" /><br />
			</div>
			<div class="col-6 col-12-xsmall">
				<label for="passwordID">Hasło: </label>
				<input id="passwordID" type="text" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
" /><br />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zaloguj" class="primary" /></li>
					<li><input type="reset" value="Resetuj" /></li>
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
								

<?php
}
}
/* {/block 'content'} */
}
