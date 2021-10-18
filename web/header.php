<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Bert van Stam &#8211; Organist en Componist</title>
	<link rel='stylesheet' href='/style.css' media='all' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,700;1,400&family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
	<header id="menu">
		<div class="site-identity">
<?php $request = $_SERVER['REQUEST_URI']; if ($request !== '' && $request !== '/') { ?>
			<a href="/" rel="home">
<?php } ?>
				<h2>Bert van Stam</h2>
<?php if ($request !== '' && $request !== '/') { ?>
			</a>
<?php } ?>
			<h3>Organist en componist</h3>
		</div>
		<nav>
			<ul>
				<?php if ($request == '/agenda') { ?><li class="active">Agenda</li><?php } else { ?><li><a href="/agenda">Agenda</a></li><?php } ?>
				<?php if ($request == '/albums') { ?><li class="active">Albums</li><?php } else { ?><li><a href="/albums">Albums</a></li><?php } ?>
				<?php if ($request == '/composities') { ?><li class="active">Composities</li><?php } else { ?><li><a href="/composities">Composities</a></li><?php } ?>
				<?php if ($request == '/biografie') { ?><li class="active">Biografie</li><?php } else { ?><li><a href="/biografie">Biografie</a></li><?php } ?>
				<hr>
				<li><a href="http://en.bertvanstam.org">English</a></li>
			</ul>
		</nav>
		<div class="nav-buttons"><a href="#menu"><div class="open-main-nav">&#9776;</div></a>
		<a href="#"><div class="close-main-nav" style="font-weight: bold">&#x2715;</div></a></div>
	</header>
	<main>