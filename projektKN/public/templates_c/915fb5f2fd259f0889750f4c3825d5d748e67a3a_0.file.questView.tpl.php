<?php
/* Smarty version 4.1.0, created on 2022-05-22 16:17:36
  from 'C:\xampp\htdocs\projektKN\app\views\questView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628a460026b6c8_60193882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '915fb5f2fd259f0889750f4c3825d5d748e67a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\questView.tpl',
      1 => 1653229055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_628a460026b6c8_60193882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_460168841628a46002630e5_86161846', 'hero');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'hero'} */
class Block_460168841628a46002630e5_86161846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_460168841628a46002630e5_86161846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <section class="breadcrumbs">
        <div class="container">
            <h1 >Uzupełnij ankietę członkostwa: </h1>
        </div>
    </section>
    <section id="hero" class="hero d-flex ">
        <div class="container" data-aos="fade-up">
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
                <div class="col-lg-12">
                    <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"/>Dołącz do nas!<i class="bi bi-arrow-right"></i></button>
                </div>
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
