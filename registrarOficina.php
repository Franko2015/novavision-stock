<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("conexion.php");

$idSession=$_GET['idSession'];

$rut=$_POST['txtRut'];
$nombres=$_POST['txtNombres'];
$apellidos=$_POST['txtApellidos'];
$tel=$_POST['txtTelefono'];
$correo=$_POST['txtCorreo'];
$direccionOficinista=$_POST['txtOficinista'];
$direccionOficina=$_POST['txtOficina'];

$insertarOficina="INSERT INTO oficina (rut,nombres,apellidos,correo,telefono,direccionOficinista,direccionOficina)VALUES ('$rut', '$nombres','$apellidos', '$correo', '$telefono', '$direccionOficinista', '$direccionOficina');";

$resultado=mysqli_query($con,$insertarOficina);

if($resultado){

  echo "<script>alert('Registro exitoso');
  </script>";
  header("Location: inicio.php?idSession=".$idSession."");

}else{
	echo "<script>alert('No ha sido registrado');
	</script>";
	header("Location: oficinas.php?idSession=".$idSession."");
}

mysqli_close($con);

?>
