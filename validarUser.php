<?php

include("conexion.php");

ini_set("display_errors", 1);
error_reporting(E_ALL);

include("conexion.php");

$usuario=$_POST['user'];

$contraseña=$_POST['pass'];

$consulta = "SELECT * FROM admin WHERE username ='$usuario' and password='$contraseña';";

$resultado = mysqli_query($con,$consulta);

while ( $mostrar = mysqli_fetch_assoc ( $resultado ) ) {

$id = $mostrar['id'];

}


$filas = mysqli_num_rows($resultado);

$consultaID = "SELECT * FROM admin WHERE id='$id';";

$resultadoID = mysqli_query($con,$consultaID);

if ( $filas > 0 ) {

?>

   <script type='text/javascript'>
<?php 
while ( $mostrarUser = mysqli_fetch_assoc ( $resultadoID ) ) {

$id = $mostrarUser['id'];

?>
   window.location.replace("inicio.php?idSession=<?php echo $id; } ?>")

   alert('Ingreso exitoso')

   </script>

   <?php

}else{

   ?>

    <script type='text/javascript'>

     alert('Usuario no encontrado')

     window.location.replace('index.html')

     </script>

<?php

  }

mysqli_free_result($resultado);

mysqli_close($con);

?>
