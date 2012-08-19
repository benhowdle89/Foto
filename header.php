<?php
	// a page by page dynamic <title>
	$page = basename($_SERVER['SCRIPT_FILENAME']);
	$page = str_replace('_',' ',$page);
	$page = str_replace('.php','',$page);
	$page = ucfirst($page);
	// cleans up the homepage title, ie. we don't want "Index | Foto", just "Foto"
	$page = ($page == 'Index') ? 'Foto' : $page . ' | Foto';
?>
<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="s/main.css" />
		<title> <?php echo $page; ?></title>
		
		<!-- Set your base page link here, helps with relative paths for CSS etc... -->
		<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/foto/" />
	</head>
<body>

<!-- remove as required -->
<div class="promo">
	<a href="">download &rarr;</a>
	<a href="http://twitter.com/benhowdle">@benhowdle</a>
</div>
<!-- -->

<header>
	<div class="wrap">
		<h1><a href="/foto">Foto</a></h1>
		<ul id="menu">
			<li class="highlight"><a href="about">about</a></li>
			<li class="highlight"><a href="contact">contact</a></li>
		</ul>
	</div>
</header>
<div id="content">
	<div class="wrap">