<?php
/* Smarty version 4.1.0, created on 2022-05-07 15:37:53
  from 'C:\xampp\htdocs\projektKN\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62767631e1d0e8_74837632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0418a674c58051bc9e9dadc3e0ca0ec957dfb01e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\LoginView.tpl',
      1 => 1651930672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62767631e1d0e8_74837632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42247193962767631dfd549_52388070', 'hero');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_63175300662767631e03ac4_02265466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                    <div class="messages bottom-margin">
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                    <?php }?>

                    <?php
}
}
/* {/block 'messages'} */
/* {block 'hero'} */
class Block_42247193962767631dfd549_52388070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_42247193962767631dfd549_52388070',
  ),
  'messages' => 
  array (
    0 => 'Block_63175300662767631e03ac4_02265466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<section id="hero" class="hero d-flex align-items-center">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 >Zaloguj się do systemu: </h1>
        </div>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-6">
                    <label for="id_login">Wprowadź swój login: </label>
                    <input type="text" id="id_login" name="login" class="form-control" placeholder="Login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" required>
                </div>
                <div class="col-lg-6 ">
                   <label for="id_pass">Wprowadź swoje hasło: </label>
                    <input type="password" id="id_pass" class="form-control" name="pass" placeholder="Hasło" required><br>
                </div>
                <div class="pure-controls">
                    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
                </div>
                <div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63175300662767631e03ac4_02265466', 'messages', $this->tplIndex);
?>

                </div>
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
