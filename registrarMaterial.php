<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("conexion.php");

$idSession=$_GET['idSession'];

$NombreMaterial=$_POST['txtNombreMaterial'];
$CantidadMaterial=$_POST['txtCantidadMaterial'];

$insertarMaterial="INSERT INTO material (nombreMaterial,unidades) VALUES ('$NombreMaterial', '$CantidadMaterial');";

$resultado=mysqli_query($con,$insertarMaterial);

if($resultado){

  echo "<script>alert('Registro exitoso');
  </script>";
  header("Location: inicio.php?idSession=".$idSession."");

}else{
	echo "<script>alert('No ha sido registrado');
	</script>";
	header("Location: material.php?idSession=".$idSession."");
}

mysqli_close($con);

?>
