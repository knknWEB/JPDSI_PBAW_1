<?php
/* Smarty version 4.1.0, created on 2022-05-07 16:32:45
  from 'C:\xampp\htdocs\projektKN\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6276830d8ce594_05037348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d31c5d68e21876121bb7054d18a92eb53a30b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\RegisterView.tpl',
      1 => 1651933962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6276830d8ce594_05037348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4814755716276830d8aeec6_70043025', 'hero');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_8452076406276830d8b9177_66218164 extends Smarty_Internal_Block
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
class Block_4814755716276830d8aeec6_70043025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_4814755716276830d8aeec6_70043025',
  ),
  'messages' => 
  array (
    0 => 'Block_8452076406276830d8b9177_66218164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<section id="hero" class="hero d-flex align-items-center">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 >Zarejestruj się do systemu: </h1>
        </div>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-6 ">
                   <label for="id_name">Podaj swoje imię: </label>
                    <input type="text" id="id_name" class="form-control" name="name" placeholder="Imię" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" required><br>
                </div>
                <div class="col-lg-6 ">
                   <label for="id_surname">Podaj swoje nazwisko: </label>
                    <input type="text" id="id_surname" class="form-control" name="surname" placeholder="Nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" required><br>
                </div>
                <div class="col-lg-6">
                    <label for="id_mail">Wprowadź swój adres e-mail: </label>
                    <input type="text" id="id_mail" name="mail" class="form-control" placeholder="E-mail" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->mail;?>
" required>
                </div>
                <div class="col-lg-6">
                    <label for="id_login">Wprowadź swój login: </label>
                    <input type="text" id="id_login" name="login" class="form-control" placeholder="Login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" required>
                </div>
                <div class="col-lg-6 ">
                   <label for="id_pass">Wprowadź swoje hasło: </label>
                    <input type="password" id="id_pass" class="form-control" name="pass" placeholder="Hasło" required><br>
                </div>
                <div class="col-lg-6 ">
                   <label for="id_pass2">Powtórz swoje hasło: </label>
                    <input type="password" id="id_pass2" class="form-control" name="pass2" placeholder="Hasło" required><br>
                </div>
                <div class="pure-controls">
                    <input type="submit" value="Zarejestruj!" class="pure-button pure-button-primary"/>
                </div>
                <div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8452076406276830d8b9177_66218164', 'messages', $this->tplIndex);
?>

                </div>
            </fieldset>
        </form>	
        <div class="col-lg-12 d-flex flex-column justify-content-center">
            <h3>Masz już konto? <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj się!<a> </h3>
        </div>


</section>
<?php
}
}
/* {/block 'hero'} */
}
