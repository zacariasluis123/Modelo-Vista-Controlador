<?php 

/* Recibir Parametros*/

$usuario=$_POST['usuario_perso'];
$email=$_POST['email_perso'];


/*Agregar archivo de conexion*/
 include ("conecta.phtml");
 $con=conecta();

$sql="insert into persona values (default, '$usuario', '$email')";
mysqli_query($con,$sql);
echo"Usuario Guardado";

?>
<br>
<a href = "agregar.html"> Nuevo Usuario </a>


