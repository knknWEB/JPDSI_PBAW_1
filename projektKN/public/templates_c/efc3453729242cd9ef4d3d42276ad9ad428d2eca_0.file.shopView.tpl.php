<?php
/* Smarty version 4.1.0, created on 2022-06-04 16:36:04
  from 'C:\xampp\htdocs\projektKN\app\views\shopView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b6dd4876eb3_00164073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc3453729242cd9ef4d3d42276ad9ad428d2eca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\shopView.tpl',
      1 => 1654353362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b6dd4876eb3_00164073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1652650417629b6dd481e0e6_25679231', 'hero');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1347781638629b6dd482b641_54075866', "about");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'hero'} */
class Block_1652650417629b6dd481e0e6_25679231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_1652650417629b6dd481e0e6_25679231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <section class="breadcrumbs">
        <div class="container">
        <ol>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
">Strona główna</a></li>
        <li>Sklep</li>
      </ol>
      <h2>Sklep materiałów reklamowych</h2>
        </div>
    </section>
<?php
}
}
/* {/block 'hero'} */
/* {block "about"} */
class Block_1347781638629b6dd482b641_54075866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_1347781638629b6dd482b641_54075866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="pricing" class="pricing">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Materiały reklamowe</h2>
    <p><?php if ($_smarty_tpl->tpl_vars['isRole']->value == 1) {?>Jesteś członkiem wpłacającym. Materiały są darmowe! <?php } else { ?>Zapoznaj się z ofertą!<?php }?></p>
  </header>

  <div class="row gy-4" data-aos="fade-left">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100"><div class="box"><h3 ><?php echo $_smarty_tpl->tpl_vars['p']->value["ProductName"];?>
</h3><div class="price"><sup>PLN</sup><?php if ($_smarty_tpl->tpl_vars['isRole']->value == 1) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['p']->value["Price"];
}?><span> / 00</span></div><img width="99%" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/shop/<?php echo $_smarty_tpl->tpl_vars['p']->value["ProductId"];?>
.png" /><ul><li>stopdlaodlewni.pl</li><li>Rozmiar: <b><?php echo $_smarty_tpl->tpl_vars['p']->value["Type"];?>
</b></li><li>Ilość w opakowaniu: <?php echo $_smarty_tpl->tpl_vars['p']->value["QuantityInPackage"];?>
</li></ul><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shopBuy/<?php echo $_smarty_tpl->tpl_vars['p']->value["ProductId"];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value["Price"];?>
" class="btn-buy" onclick="return confirm(' Czy na pewno chcesz złożyć zamówienie na <?php echo $_smarty_tpl->tpl_vars['p']->value["ProductName"];?>
? ')">Zamów teraz</a></div></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<section>
    <header class="section-header">
        <h2>Dla członków wpłacających</h2>
        <p>WSZYSTKIE MATERIAŁY SĄ ZA DARMO!</p>
    </header>
    
</section>
</section>
<?php
}
}
/* {/block "about"} */
}
