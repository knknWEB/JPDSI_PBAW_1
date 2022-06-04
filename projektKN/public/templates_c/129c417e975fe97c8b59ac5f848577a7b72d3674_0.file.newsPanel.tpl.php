<?php
/* Smarty version 4.1.0, created on 2022-06-04 16:04:39
  from 'C:\xampp\htdocs\projektKN\app\views\templates\newsPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b6677c9c4d2_40885630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '129c417e975fe97c8b59ac5f848577a7b72d3674' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\templates\\newsPanel.tpl',
      1 => 1654351420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b6677c9c4d2_40885630 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="col-lg-12">
        <br /><h3 class="post-title">Aktualności: </h3>
    </div>
    
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/blog/okno.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Niedziela, Maj 15</span>
              <h3 class="post-title">Opiłki na tworzywach sztucznych - ramach okiennych!</h3>
              <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
news" class="readmore stretched-link mt-auto"><span>Zobacz inne!</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/blog/lisc.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Piątek, Maj 13</span>
              <h3 class="post-title">Zanieczyszczenia na roślinności! Skandal!</h3>
              <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
news" class="readmore stretched-link mt-auto"><span>Zobacz inne!</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/blog/ulica.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Wtorek, Maj 10</span>
              <h3 class="post-title">Rdzawa ulica Senatorska. Tak wyglądają nasze ulice!</h3>
              <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
news" class="readmore stretched-link mt-auto"><span>Zobacz inne!</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>
    </div><?php }
}
