<?php
/* Smarty version 4.1.0, created on 2022-05-29 18:08:39
  from 'C:\xampp\htdocs\projektKN\app\views\addressView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62939a879c65e0_91015853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1dda068acc8ab3e8d185811b2d7f6c8e883ef58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\addressView.tpl',
      1 => 1653836677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messagesForm.tpl' => 1,
  ),
),false)) {
function content_62939a879c65e0_91015853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117617567062939a879b76b2_99500245', 'hero');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'hero'} */
class Block_117617567062939a879b76b2_99500245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_117617567062939a879b76b2_99500245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <section class="breadcrumbs">
        <div class="container">
            <h1 >Uzupełnij adres: </h1>
        </div>
    </section><!-- End Breadcrumbs -->
    <section id="hero" class="hero d-flex ">
        <div class="container" data-aos="fade-up">
         <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
address" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-6 ">
                    <label for="id_post">Podaj kod pocztowy: *</label>
                    <input type="text" id="id_post" class="form-control" name="postcode" placeholder="Kod pocztowy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->postcode;?>
" required>
                </div>
                <div class="col-lg-6 ">
                    <label for="id_city">Podaj miasto: *</label>
                    <input type="text" id="id_city" class="form-control" name="city" placeholder="Miasto" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->city;?>
" required>
                </div>
                <div class="col-lg-6">
                    <label for="id_street">Podaj ulicę: *</label>
                    <input type="text" id="id_street" name="street" class="form-control" placeholder="Ulica" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->street;?>
" required>
                </div>
                <div class="col-lg-6">
                    <label for="id_login">Numer domu: *</label>
                    <input type="text" id="id_nofHouse" name="nofHouse" class="form-control" placeholder="Numer domu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nofHouse;?>
" required>
                </div>
                <div class="col-lg-6 ">
                    <label for="id_nofFlat">Numer mieszkania </label>
                    <input type="nofFlat" id="id_nofFlat" class="form-control" name="nofFlat" placeholder="Numer mieszkania"><br>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">Zatwierdź<i class="bi bi-arrow-right"></i></button>
                </div>
            <?php $_smarty_tpl->_subTemplateRender("file:messagesForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </fieldset>
        </form>	

      </div>
</section>

<?php
}
}
/* {/block 'hero'} */
}
