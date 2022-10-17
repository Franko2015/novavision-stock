<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("../conection/conn.php");

$rut=$_POST['rut'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$tel=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];

$u=$_POST['user'];
$p=$_POST['pass'];

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
