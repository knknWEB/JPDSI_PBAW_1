<?php
/* Smarty version 4.1.0, created on 2022-05-22 16:28:20
  from 'C:\xampp\htdocs\projektKN\app\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628a4884d21e86_55266486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd276c6b123b83f95ea1d3108d47e19d366ae2179' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\home.tpl',
      1 => 1653229698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_628a4884d21e86_55266486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212102386628a4884d13f89_42711731', 'hero');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111936575628a4884d1d257_91596082', 'about');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1012048551628a4884d20d49_07243157', 'values');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'hero'} */
class Block_1212102386628a4884d13f89_42711731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_1212102386628a4884d13f89_42711731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
  <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <section id="hero" class="hero d-flex align-items-center">
  <div class="container"> 
  <div class="row">
  <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Chrońmy nasze zdrowie!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Nie pozwólmy niszczyć naszego zdrowia i mienia! Przerwijmy ten proceder!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Więcej o nas!</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/logoWWW.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

</section>

<?php
}
}
/* {/block 'hero'} */
/* {block 'about'} */
class Block_111936575628a4884d1d257_91596082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_111936575628a4884d1d257_91596082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
  
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                <h3>Kim jesteśmy?</h3>
                <h2>Stowarzyszenie STOP DLA ODLEWNI powstało po to, aby chronić nasze zdrowie i środowisko. Nie mamy na celu zatrzymania odlewni!</h2>
                <p>
                    Jednym z głównych celów stowarzyszenia jest powstrzymanie emisyjności pyłów – opiłków żelaza, które zanieczyszczają nasze miasto w znaczącym stopniu.
                    Wielu z mieszkańców Zawiercia ma problem z opiłkami, które osiadają na wszystkich powierzchniach i tworzą szorstką powłokę, której nie można zmyć w domowych warunkach. Zniszczone dachy, panele fotowoltaiczne, okna, ogrodzenia, samochody, ulice, chodniki, kosze na śmieci… tych rzeczy jest znacznie więcej!
                </p>
                <div class="text-center text-lg-start">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
news" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Czytaj więcej</span>
                    <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/dron/sen1.jpg" class="img-fluid" alt="">
            </div>

            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'about'} */
/* {block 'values'} */
class Block_1012048551628a4884d20d49_07243157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'values' => 
  array (
    0 => 'Block_1012048551628a4884d20d49_07243157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<section id="values" class="values">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>„Samotni możemy zrobić niewiele; razem możemy zrobić tak wiele.”</p>
          <h2>Helen Keller</h2>
        </header>
    </div>
</section>
<?php
}
}
/* {/block 'values'} */
}
