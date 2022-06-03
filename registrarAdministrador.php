<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("conexion.php");

$rut=$_GET['rut'];
$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];
$tel=$_GET['telefono'];
$correo=$_GET['correo'];
$direccion=$_GET['direccion'];

$u=$_GET['user'];
$p=$_GET['pass'];

$insertarAdmin="INSERT INTO admin (correo,direccion,nombres,apellidos,password,rut,tel,username) VALUES ('$correo','$direccion','$nombres', '$apellidos','$p','$rut','$tel','$u')";

$resultado=mysqli_query($con,$insertarAdmin);

if($resultado){
  header("Location: inicio.php");
  	echo "<script>alert('Registro exitoso'); windows.history.go(-1);</script>";
mysqli_close($con);


}else{
	echo "<script>alert('No ha sido registrado'); windows.history.go(-1);</script>";
	header("Location: inicio.php");
}

?>
