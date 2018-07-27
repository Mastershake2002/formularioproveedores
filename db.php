<?php 
include("conexion.php");
if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['telefonoC']) && !empty($_POST['telefonoC']) && isset($_POST['telefonoF']) && !empty($_POST['telefonoF']) && isset($_POST['direccion']) && !empty($_POST['direccion']) && isset($_POST['nit']) && !empty($_POST['nit']) && isset($_POST['razonSocial']) && !empty($_POST['razonSocial']))
{
	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conetar");
	mysqli_select_db($con,$db) or die( "Problemas al conectar la base de datos");
	mysqli_query($con,"INSERT INTO datos (nombre,telefonofijo,telefonocelular,direccion,nit,razonsocial) VALUES ('$_POST[nombre]','$_POST[telefonoF]','$_POST[telefonoC]','$_POST[direccion]','$_POST[nit]','$_POST[razonSocial]')",MYSQLI_STORE_RESULT);
	echo "datos insertados";
}else
{
echo "problemas al insertar datos";
} 
?>