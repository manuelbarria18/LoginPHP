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
	          <input style='width:200px; height:30px' class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >

			 </div>
		 	</div>
		</div>
				<br>
				<br>
				<br>
			<div class="columns">
		  	<div class="column">
		    	<div class="control">
						<FONT SIZE=6 COLOR="white"><label>Codigo Compra</label></FONT>

				  	<input style='width:200px; height:30px' class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
		</div>
		  </div>
		    </div>
		<br>
		<br>
		<br>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
						<FONT SIZE=6 COLOR="white"><label>Producto ID</label></FONT>

						<select  style='width:200px; height:30px' name="insumos_id" >
							<option value="" selected="" >Seleccione una opción</option>
						</select>
			</div>
		  	</div>
					</div>
				<br>
				<br>
				<br>
				<div class="columns">
		  	 <div class="column">
		    	<div class="control">
					<FONT SIZE=6 COLOR="white"><label>Insumo ID</label></FONT>

				<select  style='width:200px; height:30px' name="insumos_id" >
          <option value="" selected="" >Seleccione una opción</option>
         </select>

				</div>
		  </div>
		</div>
<br>
<br>
<br>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
				<FONT SIZE=6 COLOR="white"><label>Proveedor ID</label></FONT>

						  	<select  style='width:200px; height:30px' name="proveedor_id" >
						    	<option value="" selected="" >Seleccione una opción</option>
                 </select>

									 </div>
	             </div>
				 </div>
		<br>
		<br>
		<br>
		<p class="has-text-centered">
			<button style='width:200px; height:50px' type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>



</body>
</html>
