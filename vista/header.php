<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/gestor/web/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/gestor/web/css/default.css" />
	<link href="/gestor/web/images/favicon.ico" rel="icon" type="image/x-icon" />
	<script type="text/javascript" src="/gestor/web/js/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="/gestor/web/js/js.js"></script>
	<title>Gestor de Proyectos Cigny</title>
</head>
<body>
<header>
	<div class="headerContent">
		<div class="enLinea">
			<img src='/gestor/web/css/images/isotipo2.png' height='50px' style='margin-top: -18px;' class='enLinea' />
			<span class='enLinea'>Gestor de Proyectos Cigny</span>";
		</div>
		<div class="enLinea">
			<?php 
				if(!isset($_SESSION['login']) || !$_SESSION['login'])
				{
					
				}
				else
				{ ?>
					<a href="/gestor/controlador/logout.php">Cerrar Sesión</a>
				<?php } ?>
		</div>
	</div>
</header>