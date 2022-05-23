<?php
/* Smarty version 4.1.0, created on 2022-05-23 12:43:06
  from 'C:\xampp\htdocs\projektKN\app\views\shopView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628b653a9b9fd5_74457639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc3453729242cd9ef4d3d42276ad9ad428d2eca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\shopView.tpl',
      1 => 1653302526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628b653a9b9fd5_74457639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129427938628b653a99fb79_31839881', 'hero');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1540892723628b653a9a1868_87895863', "about");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'hero'} */
class Block_129427938628b653a99fb79_31839881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_129427938628b653a99fb79_31839881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <section class="breadcrumbs">
        <div class="container">
            <h1 >Sklep materiałów reklamowych </h1>
        </div>
    </section>
<?php
}
}
/* {/block 'hero'} */
/* {block "about"} */
class Block_1540892723628b653a9a1868_87895863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_1540892723628b653a9a1868_87895863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Materiały reklamowe</h2>
    <p>Zapoznaj się z ofertą!</p>
  </header>

  <div class="row gy-4" data-aos="fade-left">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100"><div class="box"><h3 ><?php echo $_smarty_tpl->tpl_vars['p']->value["ProductName"];?>
</h3><div class="price"><sup>PLN</sup><?php echo $_smarty_tpl->tpl_vars['p']->value["Price"];?>
<span> / 00</span></div><img width="99%" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/shop/<?php echo $_smarty_tpl->tpl_vars['p']->value["ProductId"];?>
.png" /><ul><li>stopdlaodlewni.pl</li><li>Rozmiar: <b><?php echo $_smarty_tpl->tpl_vars['p']->value["Type"];?>
</b></li><li>Ilość w opakowaniu: <?php echo $_smarty_tpl->tpl_vars['p']->value["QuantityInPackage"];?>
</li></ul><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shopBuy" method="post" class="pure-form bottom-margin"><div class="col-lg-12"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["Price"];?>
" name="price"><button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['p']->value["ProductId"];?>
" name="produktid" class="btn-buy">Zamów teraz!<i class="bi bi-arrow-right"></i></button></div></form></div></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<section>
    <header class="section-header">
        <h2>Dla członków Wspierających</h2>
        <p>WSZYSTKIE MATERIAŁY SĄ ZA DARMO!</p>
    </header>
    
</section>

</section><!-- End Pricing Section -->
<?php
}
}
/* {/block "about"} */
}
