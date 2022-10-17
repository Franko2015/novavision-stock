<?php

ini_set("display_errors", 1);

error_reporting(E_ALL);

include("../conection/conn.php");

$NombreMaterial=$_POST['txtNombreMaterial'];
$CantidadMaterial=$_POST['txtCantidadMaterial'];

$insertarMaterial="INSERT INTO material (nombreMaterial,unidades) VALUES ('$NombreMaterial', '$CantidadMaterial');";

$resultado=mysqli_query($con,$insertarMaterial);

if($resultado){

  echo "<script>alert('Registro exitoso');
  </script>";
  header("Location: index.php");

}else{
	echo "<script>alert('No ha sido registrado');
	</script>";
	header("Location: index.php");
}

mysqli_close($con);
