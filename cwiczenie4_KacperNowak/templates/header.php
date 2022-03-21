<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/cwiczenie3_KacperNowak/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="/cwiczenie3_KacperNowak/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="/cwiczenie3_KacperNowak/index.php">Kalkulator kredytowy rat równych</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="/cwiczenie3_KacperNowak/index.php">Główna</a></li>
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
							<li><a href="/cwiczenie3_KacperNowak/app/security/logout.php" class="button primary"><?php if(isset($_SESSION['role']) ? $_SESSION['role']: '' ) echo "Wyloguj"; else echo "Zaloguj";?></a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Projektowanie aplikacji webowych</h2>
							<p>Specjalizacja na kierunku "Informatyka inżynierska"<br />
							Uniwersytetu Śląskiego w Katowicach.</p>
						</header>
						<span class="image"><img src="images/paw.png" alt="BRAK" /></span>
					</div>
				</section>

                <section id="five" class="wrapper style2 special fade">
				
				
