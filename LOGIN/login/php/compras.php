<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menù Lateral con Css</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Compras Madista</h1>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="home.php">Home</a>
			<a href="inventarioproductos.php">Inventario de Productos</a>
			<a href="inventariodesuministros.php">Inventario de Suministro</a>
			<a href="compras.php">compras</a>
			<a href="ventas.php">ventas</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>
