<?php
/* Smarty version 4.1.0, created on 2022-05-28 19:12:16
  from 'C:\xampp\htdocs\projektKN\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629257f0663497_10769074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6c1afb8dc941a5d492d2a40736bdbf7522ae27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektKN\\app\\views\\templates\\main.tpl',
      1 => 1653757934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629257f0663497_10769074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Stowarzyszenie STOP dla odlewni</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/favicon.png" rel="icon">
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
" class="logo d-flex align-items-center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/logoWWW.png" alt="stopdlaodlewni.pl" >
          </a>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
">Główna</a></li>
              <li><a class="nav-link scrollto" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
news">Aktualności</a></li>  
              <li><a href="#footer">Kontakt</a></li>
              <li class="dropdown"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shop"><span>Sklep</span></a>
                <ul>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
orders">Zamówienia</a></li>
                                  </ul>
              </li>
              <li>
              <li>
                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                 <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
panel" class="getstarted">Panel</a>
                <?php }?>
              </li>
              </li>
              <li>
                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                 <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="getstarted">Wyloguj</a>
                <?php } else { ?>	
	                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="getstarted">Zaloguj</a>
                <?php }?>
              </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
  </header><!-- End Header -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1485124875629257f064e0b5_27223506', 'hero');
?>


 <main id="main">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1116327259629257f064fc53_34511025', 'about');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1719377729629257f0651196_06431118', 'values');
?>

 </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-12 footer-info">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
" class="logo d-flex align-items-center">
               <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/logoWWW.png" alt="stopdlaodlewni.pl" >
            </a>
            <p>Zarejestrowane Stowarzyszenie STOP DLA ODLEWNI. Celem działań jest powstrzymanie emisyjności pyłów, mających wydobwać się z Odlewni Zawiercie S.A.</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/stopdlaodlewni" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://github.com/knknWEB/JPDSI_PBAW_1" class="github"><i class="bi bi-github"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6 footer-links text-center text-md-start">
            <h4>Menu</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
">Strona główna</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
news">Aktualności</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Logowanie</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Rejestracja</a></li>
            </ul>
          </div>

          
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Dane kontaktowe</h4>
            <p>
              Stowarzyszenie <strong>STOP DLA ODLEWNI</strong> <br>
              ul. Senatorska 8<br>
              Zawiercie, 42-400<br>
              <strong>REGON:</strong> 521843465<br><br>
              <strong>Telefon:</strong> +48 732 313 398<br>
              <strong>Email:</strong> kontakt@stopdlaodlewni.pl<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>stopdlaodlewni.pl</span></strong>. All Rights Reserved<br>
        Projekt zaliczeniowy <strong><span>Kacper Nowak PAW2</span></strong>

      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/purecounter/purecounter.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/aos/aos.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/glightbox/js/glightbox.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/isotope-layout/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/swiper/swiper-bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/php-email-form/validate.js"><?php echo '</script'; ?>
>

  <!-- Template Main JS File -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'hero'} */
class Block_1485124875629257f064e0b5_27223506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hero' => 
  array (
    0 => 'Block_1485124875629257f064e0b5_27223506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'hero'} */
/* {block 'about'} */
class Block_1116327259629257f064fc53_34511025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'about' => 
  array (
    0 => 'Block_1116327259629257f064fc53_34511025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'about'} */
/* {block 'values'} */
class Block_1719377729629257f0651196_06431118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'values' => 
  array (
    0 => 'Block_1719377729629257f0651196_06431118',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'values'} */
}
