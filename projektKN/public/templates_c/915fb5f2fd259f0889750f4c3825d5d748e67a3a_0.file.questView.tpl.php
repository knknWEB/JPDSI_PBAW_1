<?php
/* Smarty version 4.1.0, created on 2022-05-09 11:37:35
  from 'C:\xampp\htdocs\projektKN\app\views\questView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6278e0df92f244_67332835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '915fb5f2fd259f0889750f4c3825d5d748e67a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\questView.tpl',
      1 => 1652089053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6278e0df92f244_67332835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18890799256278e0df9171d2_95307687', 'about');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_13660421206278e0df91bd67_63514541 extends Smarty_Internal_Block
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
/* {block 'about'} */
class Block_18890799256278e0df9171d2_95307687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_18890799256278e0df9171d2_95307687',
  ),
  'messages' => 
  array (
    0 => 'Block_13660421206278e0df91bd67_63514541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br />
 <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
      <h3>Uzupełnij ankietę członkostwa:</h3>
         <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
quest" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-6 ">
                    <h5>Wybierz typ członkostwa: </h5>
                    <input type="radio" id="wspier" name="typeMember" value="Wspierający" required>
                    <label for="wspier">Wspierający </label><br />
                    <input type="radio" id="wplac" name="typeMember" value="Wpłacający" >
                    <label for="wplac">Wpłacający</label>
                </div>
                <div class="col-lg-6 ">
                   <label for="id_value"><h5>Podaj wartość szkody: </h5></label>
                    <input type="text" id="id_value" class="form-control" name="value" placeholder="Wartość w PLN"  required><br>
                </div>
                <div class="col-lg-6">
                    <label for="id_description"><h5>Opis szkody: </h5></label><br />
                    <textarea name="description" class="form-control" style="width:40em; height:20em;" required>
                     
                    </textarea>
                </div>
                <div class="pure-controls">
                    <input type="submit" value="Zatwierdź!" class="pure-button pure-button-primary"/>
                </div>
                <div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13660421206278e0df91bd67_63514541', 'messages', $this->tplIndex);
?>

                </div>
            </fieldset>
        </form>	

      </div>
</section>

<?php
}
}
/* {/block 'about'} */
}
