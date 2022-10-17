<?php

include("../conection/conn.php");

session_start();

$idSession = $_SESSION["Logueado"];

$idMaterial=$_GET['idMaterial'];
$idOficina=$_GET['idOficina'];
$UNIDADES=$_GET['unidades'];
$cantidadMaterial=$_POST['txtCantidadMaterial'];

$total=$UNIDADES-$cantidadMaterial;

$consultaUpdate="UPDATE material SET unidades=$total WHERE id=$idMaterial";

$resultado2=mysqli_query($con,$consultaUpdate);

$enviarMaterial="INSERT INTO materialentrega (material_id,admin_entrega_id,oficina_recibe_id) values ('$idMaterial','$idSession','$idOficina');";

$resultado=mysqli_query($con,$enviarMaterial);

if($resultado){
header('Status: 301 Moved Permanently', false, 301);
header("Location: inicio.php?idSession=$idSession");

}else{
	echo "<script>alert('No ha sido registrado');
	</script>";
	header("Location: materiales.php?idSession=$idSession");
}

mysqli_close($con);
?>
