<?php
/* Smarty version 4.1.0, created on 2022-05-22 16:20:38
  from 'C:\xampp\htdocs\projektKN\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628a46b6916f83_05613038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7c29de0c8097ed112f5d3ad60d527ebd356689a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\templates\\messages.tpl',
      1 => 1653229237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628a46b6916f83_05613038 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
    <section class="breadcrumbs">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <div class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </header>
        </div>
    </section>
<?php }
}
}
