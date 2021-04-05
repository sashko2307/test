<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title><?php echo $pTitle ?></title>
	<meta name="description" content='<?php echo $pDes ?>'>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- Open Graph data -->
    <meta property="og:title" content='<?=$pTitle;?>' />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$pUrl;?>" />
    <meta property="og:image" content="<?=$pImage;?>" />
    <meta property="og:description" content='<?=$pDes;?>' />
    <meta property="og:site_name" content='<?=$siteName?>' />
    <meta property="og:locale" content="ru_RU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content='<?=$pTitle;?>'/>
    <meta name="twitter:description" content='<?=$pDes;?>' />
    <meta name="twitter:image:src" content="<?=$pImage;?>" />
    <meta name="twitter:site" content="<?=$pUrl;?>"/>

    <!-- Google Plus -->
    <!-- <meta itemprop="name" content="" />
    <meta itemprop="description" content="<?=$pDes;?>"/>
    <meta itemprop="image" content="<?=$pImage;?>"/> -->

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link rel="preload" href="libs/slick_work/fonts/slick.woff" as="font" crossorigin="anonymous">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">


	<style>body {overflow-x: hidden; } html { background-color: #fff; }</style>
	<link rel="stylesheet" type="text/css" href="css/header.min.css">
</head>




<body class="<?php echo $bodyClass; ?>">

	<header  class="header">
		
		<div class="container">
			<div class="row">
				<div class="mobil-mnu">
					<a href="#" class="toggle-mnu "><span></span></a>
				</div>
				<div class="logo col">
					<a href="/">
						<div class="img-logo">
							<picture>
								<source srcset="img/logo.webp" type="image/webp">
								<img src="img/logo.png" alt="logo">
							</picture>
						</div>
						<span class="text">Натяжные потолки <br> нового поколения в Тюмени</span>
					</a>
				</div>

				<div class="navigation col">
					<nav>
						<ul>
							<li><a href="#">Программное</a></li>
							<li><a href="#">Контрольно</a></li>
							<li><a href="#">Бухгалтерские</a></li>
						</ul>
					</nav>
					<p class="close">&#215;</p>
				</div>

				<div class="left-part col">
					<div class="left-wrap flex">
						<div class="phone">
							<a href="tel:+78125652417">+7 (812) 565-24-17</a>
						</div>
						<div class="button-block">
							<a href="#form-1" data-title="Заказать бесплатный выезд замерщика" class="button popup">Вызов замерщика</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		

	</header>