<?php
/* Smarty version 4.1.0, created on 2022-05-28 14:38:46
  from 'C:\xampp\htdocs\projektKN\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629217d6305a94_82837943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d31c5d68e21876121bb7054d18a92eb53a30b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\RegisterView.tpl',
      1 => 1653741524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messagesForm.tpl' => 1,
  ),
),false)) {
function content_629217d6305a94_82837943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_683525936629217d62f7d38_39972937', 'hero');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'hero'} */
class Block_683525936629217d62f7d38_39972937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_683525936629217d62f7d38_39972937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <section class="breadcrumbs">
        <div class="container">
            <h1 >Zarejestruj się do systemu: </h1>
        </div>
    </section><!-- End Breadcrumbs -->
    <section id="hero" class="hero d-flex ">
        <div class="container" data-aos="fade-up">
            
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
                    <div class="col-lg-12">
                        <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"/>Zarejestruj się<i class="bi bi-arrow-right"></i></button>
                    </div>
                </fieldset>
            </form>	
            <?php $_smarty_tpl->_subTemplateRender("file:messagesForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
