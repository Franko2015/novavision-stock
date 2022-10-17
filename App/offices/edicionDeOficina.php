<?php

include("../conection/conn.php");

session_start();

$idSession = $_SESSION["Logueado"];

$id=$_GET['id'];

$rut=$_POST['txtRut'];
$nombres=$_POST['txtNombres'];
$apellidos=$_POST['txtApellidos'];
$tel=$_POST['txtTelefono'];
$correo=$_POST['txtCorreo'];
$direccionOficinista=$_POST['txtOficinista'];
$direccionOficina=$_POST['txtOficina'];

$actualizarOficina="UPDATE oficina SET rut='$rut',nombres='$nombres',apellidos='$apellidos',correo='$correo',telefono='$tel',direccionOficinista='$direccionOficinista',direccionOficina='$direccionOficina' WHERE id=$id";

$resultado=mysqli_query($con,$actualizarOficina);

if($resultado){

  echo "<script>alert('Registro exitoso');
  </script>";
  header("Location: inicio.php?idSession=".$idSession."");

}else{
	header("Location: oficinas.php?idSession=".$idSession."");
}

mysqli_close($con);
?>
