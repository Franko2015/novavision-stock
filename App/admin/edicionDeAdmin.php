<?php

include("../conection/conn.php");

session_start();

$idSession = $_SESSION["Logueado"];

$id=$_GET['id'];

$rut=$_POST['rut'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$tel=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];

$pass=$_POST['pass'];
$user=$_POST['user'];

$actualizarAdmin="UPDATE admin SET rut='$rut',nombres='$nombres',apellidos='$apellidos',correo='$correo',tel='$tel',direccion='$direccion', password='$pass', username='$user' WHERE id=$id";

$resultado=mysqli_query($con,$actualizarAdmin);

if($resultado){
	echo "<script>alert('Edicion exitosa');</script>";
	header("Location: index.php?idSession=".$idSession."");

}else{
	header("Location: index.php?idSession=".$idSession."");
}

mysqli_close($con);
