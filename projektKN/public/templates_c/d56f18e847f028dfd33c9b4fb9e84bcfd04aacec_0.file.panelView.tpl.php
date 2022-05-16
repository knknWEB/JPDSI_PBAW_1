<?php
/* Smarty version 4.1.0, created on 2022-05-16 20:28:21
  from 'C:\xampp\htdocs\projektKN\app\views\panelView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628297c500a5c4_29851949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56f18e847f028dfd33c9b4fb9e84bcfd04aacec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\panelView.tpl',
      1 => 1652725693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:news.tpl' => 1,
  ),
),false)) {
function content_628297c500a5c4_29851949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1351895733628297c4f27371_33441146', 'about');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'about'} */
class Block_1351895733628297c4f27371_33441146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_1351895733628297c4f27371_33441146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Panel użytkownika - członkostwa</p>
          <h3>Witaj <?php echo $_smarty_tpl->tpl_vars['users']->value["Name"];?>
!</h3>
        </header>

        <div class="row">
            <div class="col-lg-4">
                <h3 class="post-title">Członek: </h3>
                <table class="pure-table">
                    <thead>
                        <tr>
                            <td>Imię: </td>
                            <th><?php echo $_smarty_tpl->tpl_vars['users']->value["Name"];?>
</th>
                        </tr>
                        <tr>
                            <td>Nazwisko:</td>
                            <th><?php echo $_smarty_tpl->tpl_vars['users']->value["Surname"];?>
</th>
                        </tr>
                        <tr>
                            <td>Adres e-mail:</td>
                            <th><?php echo $_smarty_tpl->tpl_vars['users']->value["Mail"];?>
</th>
                        </tr>
                        <tr>
                            <td>Login:</td>
                            <th><?php echo $_smarty_tpl->tpl_vars['users']->value["Login"];?>
</th>
                        </tr>
                        <tr>
                            <td>Unikalne ID:</td>
                            <th><?php echo $_smarty_tpl->tpl_vars['users']->value["UserId"];?>
</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-lg-4">
                <h3 class="post-title">Status członkostwa: </h3>
                <table class="pure-table">
                    <thead>
                        <tr>
                            <td>Członek: </td>
                            <th>
                                <?php if ($_smarty_tpl->tpl_vars['participant_is']->value == 1) {
echo $_smarty_tpl->tpl_vars['participant']->value["TypeOfMember"];
}?>
                                <?php if ($_smarty_tpl->tpl_vars['participant_no_is']->value == 1) {?> Brak <?php }?>
                            </th>
                        </tr>
                        <tr>
                            <td>Zarejestrowany w systemie od: </td>
                            <th>
                                <?php if ($_smarty_tpl->tpl_vars['participant_is']->value == 1) {
echo $_smarty_tpl->tpl_vars['participant']->value["ParticipeDate"];
}?>
                                <?php if ($_smarty_tpl->tpl_vars['participant_no_is']->value == 1) {?> Brak <?php }?>  
                            </th>
                        </tr>
                        
                        
                    </thead>
                </table>
            </div>
            <div class="col-lg-4">
                <h3 class="post-title">Dokumenty: </h3>
                <table class="pure-table">
                    <thead>
                        <tr>
                            <td>Adres zamieszkania: </td>
                            <th>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addresShow">Dodaj adres!<a>
                            </th>
                        </tr>
                        <tr>
                            <td>Ankieta członkostwa: </td>
                            <th>
                                <?php if ($_smarty_tpl->tpl_vars['participant_is']->value == 1) {?>Ankieta uzupełniona<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['participant_no_is']->value == 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
questView"> Uzupełnij ankietę!<a><?php }?>  
                            </th>
                        </tr>
                          <tr>
                            <td>Ankieta strat: </td>
                            <th>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addresShow">Wyceń straty!<a>
                            </th>
                        </tr>
                    
                    </thead>
                </table>
                <br>
            </div>
        <?php $_smarty_tpl->_subTemplateRender("file:news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
<?php
}
}
/* {/block 'about'} */
}
