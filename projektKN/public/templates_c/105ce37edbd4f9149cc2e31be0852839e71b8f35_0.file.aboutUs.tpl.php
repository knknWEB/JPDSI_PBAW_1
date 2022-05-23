<?php
/* Smarty version 4.1.0, created on 2022-05-22 15:44:19
  from 'C:\xampp\htdocs\projektKN\app\views\aboutUs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628a3e338e96a1_90214101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '105ce37edbd4f9149cc2e31be0852839e71b8f35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\aboutUs.tpl',
      1 => 1653227058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628a3e338e96a1_90214101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_359629333628a3e338e31b4_87815814', 'about');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'about'} */
class Block_359629333628a3e338e31b4_87815814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_359629333628a3e338e31b4_87815814',
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
         <li>O nas</li>
       </ol>
       <h2>O nas</h2>

     </div>
   </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry">

            <div class="entry-img">
              <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/blog/spotkanieStowarzyszenie.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a>Pierwsze oficjalne spotkanie stowarzyszenia z mieszkańcami!</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i><a>Kacper Nowak</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> Niedziela 22 Maj, 2022</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
              Dokładnie 21 kwietnia założone zostało stowarzyszenie "Stop dla Odlewni". To na razie niewielka, lecz powiększająca się grupa mieszkańców Zawiercia, która chce, by działalność Odlewni Żeliwa SA przestała negatywnie wpływać na jakość ich życia i zdrowia. Mobilizacja mieszkańców w tej sprawie trwa, dlatego w piątek, 6 maja 2022 roku, odbyło się pierwsze oficjalnie spotkanie stowarzyszenia i mieszkańców, którzy do stowarzyszenia mogą dołączyć.
              Zapraszamy do rejestracji w ramach naszego portalu!
              </p>
            </div>

          </article><!-- End blog entry -->
<?php
}
}
/* {/block 'about'} */
}
