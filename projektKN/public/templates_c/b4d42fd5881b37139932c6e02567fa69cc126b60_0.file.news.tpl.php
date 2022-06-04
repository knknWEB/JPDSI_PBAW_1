<?php
/* Smarty version 4.1.0, created on 2022-06-04 15:46:27
  from 'C:\xampp\htdocs\projektKN\app\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b6233dd8f52_82530137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d42fd5881b37139932c6e02567fa69cc126b60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\news.tpl',
      1 => 1654350386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b6233dd8f52_82530137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_988776448629b6233da5202_82891951', 'about');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'about'} */
class Block_988776448629b6233da5202_82891951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_988776448629b6233da5202_82891951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <!-- ======= Breadcrumbs ======= -->
     <section class="breadcrumbs">
     <div class="container">

       <ol>
         <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
">Strona główna</a></li>
         <li>Aktualności</li>
       </ol>
       <h2>Aktualności</h2>

     </div>
   </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'n');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>
          <article class="entry"><div class="entry-img"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/blog/<?php echo $_smarty_tpl->tpl_vars['n']->value["Photo"];?>
" alt="" class="img-fluid"></div><h2 class="entry-title"><a><?php echo $_smarty_tpl->tpl_vars['n']->value["Title"];?>
</a></h2><div class="entry-meta"><ul><li class="d-flex align-items-center"><i class="bi bi-person"></i><a><?php echo $_smarty_tpl->tpl_vars['n']->value["Author"];?>
</a></li><li class="d-flex align-items-center"><i class="bi bi-clock"></i> <?php echo $_smarty_tpl->tpl_vars['n']->value["Date"];?>
</a></li></ul></div><div class="entry-content"><p><?php echo $_smarty_tpl->tpl_vars['n']->value["Description"];?>
</p></div></article><!-- End blog entry -->
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div class="container">

       <ol>
         <a>Strona <b><?php echo $_smarty_tpl->tpl_vars['pageNumber']->value;?>
</b> </a>z <b><?php echo $_smarty_tpl->tpl_vars['pagesNumber']->value;?>
</b><br>
         <a>Nawigacja: </a>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
news/<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
">[strona <?php echo $_smarty_tpl->tpl_vars['t']->value;?>
]</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </ol>
     </div>
<?php
}
}
/* {/block 'about'} */
}
