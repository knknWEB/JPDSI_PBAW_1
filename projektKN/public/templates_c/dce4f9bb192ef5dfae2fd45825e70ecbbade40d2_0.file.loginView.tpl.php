<?php
/* Smarty version 4.1.0, created on 2022-05-07 13:06:39
  from 'C:\xampp\htdocs\projektKN\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627652bfa3bf40_56918901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce4f9bb192ef5dfae2fd45825e70ecbbade40d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\loginView.tpl',
      1 => 1651921598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627652bfa3bf40_56918901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1969303803627652bfa372c7_59441830', 'hero');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'hero'} */
class Block_1969303803627652bfa372c7_59441830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_1969303803627652bfa372c7_59441830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
     <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Zaloguj się do systemu: </h1>
    </div>
    
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="login" class="form-control" placeholder="Login" required>
                </div>

                <div class="col-md-6 ">
                  <input type="password" class="form-control" name="pass" placeholder="Hasło" required>
                </div>
                <div class="pure-controls">
			        <input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		        </div>

              </div>
            </form>
</section>


<?php
}
}
/* {/block 'hero'} */
}
