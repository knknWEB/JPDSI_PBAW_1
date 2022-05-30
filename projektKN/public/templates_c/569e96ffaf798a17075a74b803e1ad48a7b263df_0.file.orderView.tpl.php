<?php
/* Smarty version 4.1.0, created on 2022-05-29 15:39:13
  from 'C:\xampp\htdocs\projektKN\app\views\orderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62937781300db0_17102841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569e96ffaf798a17075a74b803e1ad48a7b263df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\orderView.tpl',
      1 => 1653831551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62937781300db0_17102841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1274578690629377812e9282_82582379', 'about');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'about'} */
class Block_1274578690629377812e9282_82582379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_1274578690629377812e9282_82582379',
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
          <p>Złożone zamówienia</p>
          <h3>przez użytkownika <?php echo $_smarty_tpl->tpl_vars['records']->value;?>
</h3>
        </header>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                <div class="col-lg-4"><div class="post-box"><h3 class="post-title">Zamówienie nr <?php echo $_smarty_tpl->tpl_vars['o']->value["OrderId"];?>
 </h3><div class="price">Status: <b><?php echo $_smarty_tpl->tpl_vars['o']->value["OrderStatus"];?>
</b></div><div class="price">Złożone dnia: <b><?php echo $_smarty_tpl->tpl_vars['o']->value["OrderDate"];?>
</b></div><ul><li>Kwota zamówienia: <b><?php echo $_smarty_tpl->tpl_vars['o']->value["Price"];?>
</b><sub> PLN</sub></li><li>Zamówiony produkt: <b><?php echo $_smarty_tpl->tpl_vars['o']->value["ProductName"];?>
</b></li><ul><li>wymiary: <b><?php echo $_smarty_tpl->tpl_vars['o']->value["Type"];?>
</b></li><li>w opakowaniu: <b><?php echo $_smarty_tpl->tpl_vars['o']->value["QuantityInPackage"];?>
</b></li></uL></ul></div></div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
            
    </section>
<?php
}
}
/* {/block 'about'} */
}
