<?php

include("../conection/conn.php");

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
    <title>Editar Oficina</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/sweetalert2.css">
    <link rel="stylesheet" href="../../css/material.min.css">
    <link rel="stylesheet" href="../../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="../../js/material.min.js"></script>
    <script src="../../js/sweetalert2.min.js"></script>
    <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../js/main.js"></script>
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
                <img src="../../assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
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
                    <a href="../index.php?idSession=<?php echo $mostrarUser['id']; ?>" class="full-width">
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
                            <a href="../offices/index.php?idSession=<?php echo $mostrarUser['id']; ?>" class="full-width">
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
                    <a href="../materials/index.php?idSession=<?php echo $mostrarUser['id']; ?>" class="full-width">
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
                                <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                            </figure>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="zmdi zmdi-account"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
                </p>
            </div>
        </section>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#tabNewAdmin" class="mdl-tabs__tab is-active">EDITAR OFICINA</a>
            </div>
            <div class="mdl-tabs__panel is-active" id="tabNewAdmin">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-primary text-center tittles">
                                EDITAR OFICINA
                            </div>
                            <?php
                            $id=$_GET['id'];
                            $sqlOf = "SELECT * FROM oficina WHERE id='$id';";

                            $resultOf=mysqli_query($con,$sqlOf);

                            while($mostrar=mysqli_fetch_assoc($resultOf)) {
                            ?>
                            <div class="full-width panel-content">
                              <form method="POST" action="edicionDeOficina.php?id=<?php echo $mostrar['id']; ?>&idSession=<?php echo $idSession ?>">
                                  <div class="mdl-grid">
                                      <div class="mdl-cell mdl-cell--12-col">
                                          <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DEL OFICINISTA</legend><br>
                                      </div>
                                      <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ" id="rut" name="txtRut" value="<?php echo $mostrar['rut']; ?>">
                                            <label class="mdl-textfield__label" for="rut">RUT</label>
                                            <span class="mdl-textfield__error">Rut inválido</span>
                                        </div>
                                      </div>
                                      <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                              <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" value="<?php echo $mostrar['nombres']; ?>" id="nombres" name="txtNombres">
                                              <label class="mdl-textfield__label" for="nombres">NOMBRES</label>
                                              <span class="mdl-textfield__error">Nombre inválido</span>
                                          </div>
                                      </div>
                                      <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                              <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" value="<?php echo $mostrar['apellidos']; ?>"  id="apellidos" name="txtApellidos">
                                              <label class="mdl-textfield__label" for="apellidos">APELLIDOS</label>
                                              <span class="mdl-textfield__error">Apellido inválido</span>
                                          </div>
                                      </div>
                                      <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                              <input class="mdl-textfield__input" type="text" id="direccionOficinista" value="<?php echo $mostrar['direccionOficinista']; ?>" name="txtOficinista">
                                              <label class="mdl-textfield__label" for="direccionOficinista">DIRECCIÓN OFICINISTA</label>
                                              <span class="mdl-textfield__error">Dirección inválida</span>
                                          </div>
                                      </div>
                                      <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                              <input class="mdl-textfield__input" type="text" id="addressClient2" name="txtOficina" value="<?php echo $mostrar['direccionOficina']; ?>">
                                              <label class="mdl-textfield__label" for="addressClient2">DIRECCIÓN OFICINA</label>
                                              <span class="mdl-textfield__error">Dirección inválida</span>
                                          </div>
                                      </div>
                                      <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                              <input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneClient" name="txtTelefono" value="<?php echo $mostrar['telefono'];?>">
                                              <label class="mdl-textfield__label" for="phoneClient">TELÉFONO</label>
                                              <span class="mdl-textfield__error">Número de teléfono inválido</span>
                                          </div>
                                      </div>
                                      <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                              <input class="mdl-textfield__input" type="email" id="emailClient" name="txtCorreo" value="<?php echo $mostrar['correo']; ?>">
                                              <label class="mdl-textfield__label" for="emailClient">CORREO</label>
                                              <span class="mdl-textfield__error">Correo inválido</span>
                                          </div>
                                      </div>
                                  </div>
                                <?php } ?>
                                  <p class="text-center">
                                      <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addClient">
                    <i class="zmdi zmdi-plus"></i>
                  </button>
                                      <div class="mdl-tooltip" for="btn-addClient">Editar oficina</div>
                                  </p>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php } ?>
</body>
</html>
