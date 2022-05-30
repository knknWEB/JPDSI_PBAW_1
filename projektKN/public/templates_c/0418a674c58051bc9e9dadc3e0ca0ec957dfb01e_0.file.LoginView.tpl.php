<?php
/* Smarty version 4.1.0, created on 2022-05-29 17:04:19
  from 'C:\xampp\htdocs\projektKN\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62938b7327c107_24023107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0418a674c58051bc9e9dadc3e0ca0ec957dfb01e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\LoginView.tpl',
      1 => 1653836655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messagesForm.tpl' => 1,
  ),
),false)) {
function content_62938b7327c107_24023107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190130948362938b7326f4a8_18071308', 'hero');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'hero'} */
class Block_190130948362938b7326f4a8_18071308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_190130948362938b7326f4a8_18071308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<section id="hero" class="hero d-flex align-items-center">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12 d-flex flex-column justify-content-center">
            <h1 >Zaloguj się do systemu: </h1>
        </div>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-12">
                    <label for="id_login">Wprowadź swój login: </label>
                    <input type="text" id="id_login" name="login" class="form-control" placeholder="Login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" required>
                </div>
                <div class="col-lg-12">
                   <label for="id_pass">Wprowadź swoje hasło: </label>
                    <input type="password" id="id_pass" class="form-control" name="pass" placeholder="Hasło" required>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"/>Zaloguj się<i class="bi bi-arrow-right"></i></button>
                </div>
                <?php $_smarty_tpl->_subTemplateRender("file:messagesForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </fieldset>
        </form>	
        <div class="col-lg-12 d-flex flex-column justify-content-center">
            <h3>Nie masz konta? <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow">Zarejestruj się!<a> </h3>
        </div>
</section>
<?php
}
}
/* {/block 'hero'} */
}
