<?php
/* Smarty version 4.1.0, created on 2022-04-19 20:05:10
  from 'C:\xampp\htdocs\cwiczenie7_KacperNowak\app\views\templates\website.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ef9d64201e0_71872882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa706f4a5efed035423158e2cc93641bc14f15f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cwiczenie7_KacperNowak\\app\\views\\templates\\website.html',
      1 => 1650391508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625ef9d64201e0_71872882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/index.php"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/index.php">Główna</a></li>
							<li>
								<a href="#">Przykłady</a>
								<ul>
									<li>niekatywne</li>
									<li>niekatywne2</li>
									<li>niekatywne3</li>
                                    <!-- 
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option 1</a></li>
											<li><a href="#">Option 2</a></li>
											<li><a href="#">Option 3</a></li>
											<li><a href="#">Option 4</a></li>
										</ul>
									</li>
                                     -->
								</ul>
							</li>
							<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="button primary">Logowanie</a>
							</li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h2>
							<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
						</header>
						<span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/paw.png" alt="BRAK" /></span>
					</div>
				</section>

                <section id="five" class="wrapper style2 special fade">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1587333158625ef9d64120a3_47728405', 'content');
?>

				</section>
                <!-- Footer -->
                <footer id="footer">
					<div class="content">
						<header>
							<h3><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1660063052625ef9d64141d9_22586611', 'info');
?>
</h3>
						</header>
					</div>
					<ul class="icons">
						<li><a href="https://github.com/knknWEB/JPDSI_PBAW_1" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="mailto: kacper.nowak1029@gmail.com" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236646932625ef9d64155f8_93466155', 'footer');
?>
</li><li>Szablon: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
               </footer>
                
        </div>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
                
    </body>
</html>
<?php }
/* {block 'content'} */
class Block_1587333158625ef9d64120a3_47728405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1587333158625ef9d64120a3_47728405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Zawartość... <?php
}
}
/* {/block 'content'} */
/* {block 'info'} */
class Block_1660063052625ef9d64141d9_22586611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'info' => 
  array (
    0 => 'Block_1660063052625ef9d64141d9_22586611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Informacje o autorze... <?php
}
}
/* {/block 'info'} */
/* {block 'footer'} */
class Block_236646932625ef9d64155f8_93466155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_236646932625ef9d64155f8_93466155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Treść stopki... <?php
}
}
/* {/block 'footer'} */
}
