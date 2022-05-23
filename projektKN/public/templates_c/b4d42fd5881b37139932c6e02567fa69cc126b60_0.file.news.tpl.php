<?php
/* Smarty version 4.1.0, created on 2022-05-22 16:33:39
  from 'C:\xampp\htdocs\projektKN\app\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628a49c31ad5b0_54559455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d42fd5881b37139932c6e02567fa69cc126b60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\news.tpl',
      1 => 1653230017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628a49c31ad5b0_54559455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_390445110628a49c31a5f74_24487399', 'about');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'about'} */
class Block_390445110628a49c31a5f74_24487399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_390445110628a49c31a5f74_24487399',
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
          <article class="entry">

            <div class="entry-img">
              <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/blog/spotkanieUrzad.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a>Spotkanie w UM z przedstawicielami miasta!</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i><a>Kacper Nowak</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> Niedziela 10 Maj, 2022</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
              Ulica Senatorska w Zawierciu przybiera regularnie rdzawy kolor. Znajduje się w bezpośrednim sąsiedztwie Odlewni Żeliwa. Mieszkańcy narzekają na pył wydobywający się z terenu odlewni, który niszczy ich domy, samochody, ogrody, a możliwe, że nawet zdrowie. Zorganizowano spotkanie w tej sprawie. Mieszkańcy są zmobilizowani do tego, by walczyć z zanieczyszczeniem. 
              <br>W piątek, 18 marca, w Urzędzie Miejskim w Zawierciu zorganizowano spotkanie w tej sprawie. Zaproszono także przedstawicieli odlewni, którzy jednak odmówili wzięcia udziału w wydarzeniu. Odesłano jednak pismo, w którym prezes Odlewni twierdzi, że z zakładu robi się "kozła ofiarnego".
              <br><i> "Nie zachodzi tu sytuacja, w której jednocześnie można by zarzucić Odlewni bezprawne działanie i zanieczyszczenie terenu, szkodzenie ludziom, czy innego rodzaju nadmierne immisje lub naruszanie prawa. Protestujemy więc przeciwko przypisaniu z góry Odlewni Zawiercie S.A. pełnej odpowiedzialności, wbrew dowodom i faktom i uczynienie z niej kozła ofiarnego" - pisze Sebastian Kliciński, prezes zarządu.</i>
              </p>
            </div>

          </article><!-- End blog entry -->
<?php
}
}
/* {/block 'about'} */
}
