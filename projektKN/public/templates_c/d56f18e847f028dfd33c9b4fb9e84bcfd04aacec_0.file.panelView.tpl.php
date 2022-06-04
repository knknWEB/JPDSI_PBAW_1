<?php
/* Smarty version 4.1.0, created on 2022-06-04 16:32:55
  from 'C:\xampp\htdocs\projektKN\app\views\panelView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b6d171dd1d0_31384889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56f18e847f028dfd33c9b4fb9e84bcfd04aacec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\panelView.tpl',
      1 => 1654353134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
    'file:newsPanel.tpl' => 1,
  ),
),false)) {
function content_629b6d171dd1d0_31384889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_248649801629b6d1715e957_87573994', 'about');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'about'} */
class Block_248649801629b6d1715e957_87573994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_248649801629b6d1715e957_87573994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
        </header>
        <header class="section-header">
          <p>Panel użytkownika - członkostwa</p>
          <h3>Witaj <?php echo $_smarty_tpl->tpl_vars['users']->value["Name"];?>
!</h3>
        </header>

        <div class="row">
            <div class="col-lg-4">
                <div class="post-box">
                    <h3 class="post-title">Członek: </h3>
                    <table >
                        <thead>
                            <tr>
                                <td>Imię i nazwisko: </td>
                                <th><?php echo $_smarty_tpl->tpl_vars['users']->value["Name"];?>
 <?php echo $_smarty_tpl->tpl_vars['users']->value["Surname"];?>
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
                            <td>Adres: </td>
                                <th>
                                    <?php if ($_smarty_tpl->tpl_vars['address_is']->value == 1) {
echo $_smarty_tpl->tpl_vars['address']->value["city"];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value["postcode"];?>
 <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['address_no_is']->value == 1) {?> Nieuzupełniony! <?php }?>  
                                </th>
                            </tr>
                            <td>Ulica i numer: </td>
                                <th>
                                    <?php if ($_smarty_tpl->tpl_vars['address_is']->value == 1) {
echo $_smarty_tpl->tpl_vars['address']->value["street"];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value["nofHouse"];?>
 <?php if ($_smarty_tpl->tpl_vars['address']->value["nofFlat"] != null) {?> / <?php echo $_smarty_tpl->tpl_vars['address']->value["nofFlat"];
}
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['address_no_is']->value == 1) {?> Nieuzupełniony! <?php }?>  
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-box">
                    <h3 class="post-title">Status członkostwa: </h3>
                    <table>
                        <thead>
                            <tr>
                                <td>Typ członkostwa: </td>
                                <th>
                                    <?php if ($_smarty_tpl->tpl_vars['participant_is']->value == 1) {
echo $_smarty_tpl->tpl_vars['participant']->value["TypeOfMember"];
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['participant_no_is']->value == 1) {?> Brak <?php }?>
                                </th>
                            </tr>
                            <tr>
                                <td>Członek stowarzyszenia od: </td>
                                <th>
                                    <?php if ($_smarty_tpl->tpl_vars['participant_is']->value == 1) {
echo $_smarty_tpl->tpl_vars['participant']->value["ParticipeDate"];
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['participant_no_is']->value == 1) {?> Brak <?php }?>  
                                </th>
                            </tr>
                            <tr>
                            <td>Deklarowana kwota strat: </td>
                                <th>
                                    <?php if ($_smarty_tpl->tpl_vars['participant_is']->value == 1) {
echo $_smarty_tpl->tpl_vars['participant']->value["ValueLoss"];?>
 PLN<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['participant_no_is']->value == 1) {?> Brak <?php }?>  
                                </th>
                            </tr>
                            
                            
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-box">                                             
                    <h3 class="post-title">Dokumenty: </h3>
                    <table>
                        <thead>
                            <tr>
                                <td>Adres zamieszkania: </td>
                                <th>
                                    <?php if ($_smarty_tpl->tpl_vars['address_is']->value == 1) {?>Adres uzupełniony<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['address_no_is']->value == 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addressView"> Uzupełnij adres!<a><?php }?>  
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
                        </thead>
                    </table>
                    <br>
                    
                </div>
                
            </div>
        <?php $_smarty_tpl->_subTemplateRender("file:newsPanel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
<?php
}
}
/* {/block 'about'} */
}
