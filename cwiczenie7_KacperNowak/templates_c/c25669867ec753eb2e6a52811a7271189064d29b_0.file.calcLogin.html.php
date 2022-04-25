<?php
/* Smarty version 4.1.0, created on 2022-04-19 19:40:22
  from 'C:\xampp\htdocs\cwiczenie7_KacperNowak\app\views\calcLogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ef406d210c7_64135532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c25669867ec753eb2e6a52811a7271189064d29b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cwiczenie7_KacperNowak\\app\\views\\calcLogin.html',
      1 => 1650390020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625ef406d210c7_64135532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2016415484625ef406d03284_80103580', 'info');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_439953137625ef406d050c3_87525632', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_216808853625ef406d06d57_19134913', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "website.html");
}
/* {block 'info'} */
class Block_2016415484625ef406d03284_80103580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'info' => 
  array (
    0 => 'Block_2016415484625ef406d03284_80103580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kacper Nowak - PAW2 rok 2021/2022 Informatyka inżynierska<?php
}
}
/* {/block 'info'} */
/* {block 'footer'} */
class Block_439953137625ef406d050c3_87525632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_439953137625ef406d050c3_87525632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
KNKnowak. Wszystkie prawa zasrtrzeżone.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_216808853625ef406d06d57_19134913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_216808853625ef406d06d57_19134913',
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
