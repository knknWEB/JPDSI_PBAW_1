<?php
/* Smarty version 4.1.0, created on 2022-05-28 17:17:55
  from 'C:\xampp\htdocs\projektKN\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62923d23316dd8_54303979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7c29de0c8097ed112f5d3ad60d527ebd356689a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\templates\\messages.tpl',
      1 => 1653751073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62923d23316dd8_54303979 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
    <section class="breadcrumbs">
        <div class="container" data-aos="fade-up">
        <h2> Dostępne wiadomości: </h2>
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
