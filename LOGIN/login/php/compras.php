<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Madista Compras</title>
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
<!--	--------------->
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container is-fluid mb-6">
	<FONT SIZE=6 COLOR="white"><h1 class="title"><h2 class="subtitle">Registrar Nueva Orden de Compra</h2></h1></FONT>

</div>
<br>
<br>
<br>
<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/usuario_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<FONT SIZE=6 COLOR="white"><label>Compra ID</label></FONT>

				  	<input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
				</div>
		  	</div>
				<br>
		  	<div class="column">
		    	<div class="control">
						<FONT SIZE=6 COLOR="white"><label>Codigo Compra</label></FONT>

				  	<input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
				</div>
		  	</div>
		</div>
		<br>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
						<FONT SIZE=6 COLOR="white"><label>Producto ID</label></FONT>

				  	<input class="input" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
				</div>
		  	</div>
				<br>
		  	<div class="column">
		    	<div class="control">
					<FONT SIZE=6 COLOR="white"><label>Insumo ID</label></FONT>
				  	<input class="input" type="email" name="usuario_email" maxlength="70" >
				</div>
		  	</div>
		</div>
		<br>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
				<FONT SIZE=6 COLOR="white"><label>Proveedor ID</label></FONT>
				  	<input class="input" type="text" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
				<br>
		  	<div class="column">
		    	<div class="control">
					<FONT SIZE=6 COLOR="white"><label>Cantidad</label></FONT>
				  	<input class="input" type="text" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<br>
		<p class="has-text-centered">
			<button style='width:200px; height:50px' type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>

</body>
</html>
