<?php

include("conection/conn.php");

session_start();

$idSession = $_SESSION["Logueado"];

$sqlSession = "SELECT * FROM admin WHERE id='$idSession';";

$resultSession=mysqli_query($con,$sqlSession);

while($mostrarUser=mysqli_fetch_assoc($resultSession)) {

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIO</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/sweetalert2.css">
    <link rel="stylesheet" href="../css/material.min.css">
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="../js/material.min.js"></script>
    <script src="../js/sweetalert2.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/main.js"></script>
</head>

<body>
    <!-- navLateral -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i> INVENTARIO
            </div>
            <figure class="full-width navLateral-body-tittle-menu">
                <div>
                    <img src="../assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                </div>
                <figcaption>
                    <span>
						<?php echo $mostrarUser['nombres'];?> <?php echo $mostrarUser['apellidos'];?><br>
						<small>ADMINISTRADOR</small>
						<BR>
						<small><?php echo $mostrarUser['direccion'];?></small>
					</span>
                </figcaption>
            </figure>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="index.php?idSession=<?php echo $mostrarUser['id']; ?>" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-view-dashboard"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                INICIO
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>



                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-face"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                USUARIOS
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="admin/index.php?idSession=<?php echo $mostrarUser['id']; ?>" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        ADMINISTRADORES
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="offices/index.php?idSession=<?php echo $mostrarUser['id']; ?>" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-accounts"></i>
                                    </div>
                                    <div class="navLateral-body-cr">
                                        OFICINAS
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="materials/index.php?idSession=<?php echo $mostrarUser['id']; ?>" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-washing-machine"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                MATERIALES
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="materials/index.php?idSession=<?php echo $mostrarUser['id']; ?>" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-store"></i>
                            </div>
                            <div class="navLateral-body-cr">
                                INVENTARIO
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    
    <!-- pageContent -->
    <section class="full-width pageContent">
        <!-- navBar -->
        <div class="full-width navBar">
            <div class="full-width navBar-options">
                <i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>
                <div class="mdl-tooltip" for="btn-menu">OCULTAR / MOSTRAR MENU</div>
                <nav class="navBar-options-list">
                    <ul class="list-unstyle">
                        <li class="btn-exit" id="btn-exit">
                            <i class="zmdi zmdi-power"></i>
                            <div class="mdl-tooltip" for="btn-exit">SALIR</div>
                        </li>
                        <li class="text-condensedLight noLink"><small><?php echo $mostrarUser['nombres'];?> <?php echo $mostrarUser['apellidos'];?></small></li>
                        <li class="noLink">
                            <figure>
                                <img src="../assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                            </figure>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="full-width text-center" style="padding: 40px 0;">
            <h3 class="text-center tittles">INFORMACION GENERAL</h3>
            <!-- Tiles -->
            <a href="admin/index.php">
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                      <?php
                      $sqlA = "SELECT MAX(id) as MaxidAdmin FROM admin";
                      $resultA =  mysqli_query($con, $sqlA);
                      $maxAdmin = mysqli_fetch_assoc($resultA);
                      $maxidadmin=$maxAdmin['MaxidAdmin'];
                      echo $maxidadmin;
                      ?>
                      <br>
						<small>ADMINISTRADORES</small>
					</span>
                </div>
                <i class="zmdi zmdi-account tile-icon"></i>
            </article></a>
            <a href="offices/index.php">
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                      <?php
                      $sqlO = "SELECT MAX(id) as MaxidOficina FROM oficina";
                      $resultO =  mysqli_query($con, $sqlO);
                      $maxOf = mysqli_fetch_assoc($resultO);
                      $maxidof=$maxOf['MaxidOficina'];
                      echo $maxidof;
                      ?>
                    <br>
						<small>OFICINAS</small>
					</span>
                </div>
                <i class="zmdi zmdi-accounts tile-icon"></i>
            </article>
            </a>
        <a href="materials/index.php">
        <article class="full-width tile">
            <div class="tile-text">
                <span class="text-condensedLight">
                  <?php
                  $sqlM = "SELECT MAX(id) as MaxidMateriales FROM material";
                  $resultM =  mysqli_query($con, $sqlM);
                  $maxM = mysqli_fetch_assoc($resultM);
                  $maxidM=$maxM['MaxidMateriales'];
                  echo $maxidM;
                  ?>
                <br>
                <small>MATERIALES</small>
      </span>
            </div>
            <i class="zmdi zmdi-accounts tile-icon"></i>
        </article>
        </a>
        </section>
      </section>
</body>
<?php } ?>
</html>
