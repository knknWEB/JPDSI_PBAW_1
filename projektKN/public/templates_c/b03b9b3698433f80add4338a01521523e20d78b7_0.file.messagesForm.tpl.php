<?php
/* Smarty version 4.1.0, created on 2022-05-28 14:38:01
  from 'C:\xampp\htdocs\projektKN\app\views\templates\messagesForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629217a95a51a8_51158688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b03b9b3698433f80add4338a01521523e20d78b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\templates\\messagesForm.tpl',
      1 => 1653741465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629217a95a51a8_51158688 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
    <section>
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
