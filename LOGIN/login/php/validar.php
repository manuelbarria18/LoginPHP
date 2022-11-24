<?php
$nombre=$_POST['Usuario'];
$contrasena=$_POST['Password'];
session_start();

$_SESSION['nombre_usuario']=$nombre;

$conexion=mysqli_connect("localhost","root","","madista");

$consulta="SELECT* FROM  usuarios where nombre_usuario='$nombre' and contrasena_usuario='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);