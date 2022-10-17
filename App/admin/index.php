<?php

include("../conection/conn.php");

session_start();

$idSession = $_SESSION["Logueado"];

$sqlSession = "SELECT * FROM admin WHERE id='$idSession';";

$resultSession = mysqli_query($con, $sqlSession);

while ($mostrarUser = mysqli_fetch_assoc($resultSession)) {

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADMINISTRADORES</title>
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/sweetalert2.css">
        <link rel="stylesheet" href="../../css/material.min.css">
        <link rel="stylesheet" href="../../css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="../../css/main.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="../../js/jquery-1.11.2.min.js"><\/script>')
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
                            <?php echo $mostrarUser['nombres']; ?> <?php echo $mostrarUser['apellidos']; ?><br>
                            <small>ADMINISTRADOR</small>
                            <BR>
                            <small><?php echo $mostrarUser['direccion']; ?></small>
                        </span>
                    </figcaption>
                </figure>
                <nav class="full-width">
                    <ul class="full-width list-unstyle menu-principal">
                        <li class="full-width">
                            <a href="../index.php" class="full-width">
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
                                    <a href="admin/index.php" class="full-width">
                                        <div class="navLateral-body-cl">
                                            <i class="zmdi zmdi-account"></i>
                                        </div>
                                        <div class="navLateral-body-cr">
                                            ADMINISTRADORES
                                        </div>
                                    </a>
                                </li>
                                <li class="full-width">
                                    <a href="../offices/index.php" class="full-width">
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
                            <a href="../materials/index.php" class="full-width">
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
                            <li class="text-condensedLight noLink"><small><?php echo $mostrarUser['nombres']; ?> <?php echo $mostrarUser['apellidos']; ?></small></li>
                            <li class="noLink">
                                <figure>
                                    <img src="../../assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
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
                    <a href="#tabNewAdmin" class="mdl-tabs__tab is-active">Nuevo</a>
                    <a href="#tabListAdmin" class="mdl-tabs__tab">Listado</a>
                </div>
                <div class="mdl-tabs__panel is-active" id="tabNewAdmin">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">
                            <div class="full-width panel mdl-shadow--2dp">
                                <div class="full-width panel-tittle bg-primary text-center tittles">
                                    NUEVO ADMINISTRADOR
                                </div>
                                <div class="full-width panel-content">
                                    <form method="POST" action="create.php">
                                        <div class="mdl-grid">
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DEL ADMINISTRADOR</legend><br>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="text" id="DNIAdmin" name="rut">
                                                    <label class="mdl-textfield__label" for="DNIAdmin">RUT</label>
                                                    <span class="mdl-textfield__error">Invalid number</span>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="nombres">
                                                    <label class="mdl-textfield__label" for="NameAdmin">NOMBRES</label>
                                                    <span class="mdl-textfield__error">Nombres inválidos</span>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin" name="apellidos">
                                                    <label class="mdl-textfield__label" for="LastNameAdmin">APELLIDOS</label>
                                                    <span class="mdl-textfield__error">Apellidos inválidos</span>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneAdmin" name="telefono">
                                                    <label class="mdl-textfield__label" for="phoneAdmin">NUMERO DE TELEFONO</label>
                                                    <span class="mdl-textfield__error">Número de teléfono inválido</span>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="email" id="emailAdmin" name="correo">
                                                    <label class="mdl-textfield__label" for="emailAdmin">CORREO</label>
                                                    <span class="mdl-textfield__error">Correo inválido</span>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="text" id="addressAdmin" name="direccion">
                                                    <label class="mdl-textfield__label" for="addressAdmin">DIRECCION</label>
                                                    <span class="mdl-textfield__error">Dirección inválida</span>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DETALLES DE LA CUENTA</legend><br>
                                            </div>
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin" name="user">
                                                    <label class="mdl-textfield__label" for="UserNameAdmin">Nombre de usuario</label>
                                                    <span class="mdl-textfield__error">Nombre de usuario inválido</span>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="password" id="passwordAdmin" name="pass">
                                                    <label class="mdl-textfield__label" for="passwordAdmin">Contraseña</label>
                                                    <span class="mdl-textfield__error">Contraseña inválida</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-center">
                                            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin">
                                                <i class="zmdi zmdi-plus"></i>
                                            </button>
                                        <div class="mdl-tooltip" for="btn-addAdmin">Agregar administrador</div>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdl-tabs__panel" id="tabListAdmin">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                            <div class="full-width panel mdl-shadow--2dp">
                                <div class="full-width panel-tittle bg-success text-center tittles">
                                    Lista de administradores
                                </div>
                                <div class="full-width panel-content">
                                    <form action="#">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                            <label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">
                                                <i class="zmdi zmdi-search"></i>
                                            </label>
                                            <div class="mdl-textfield__expandable-holder">
                                                <input class="mdl-textfield__input" type="text" id="searchAdmin">
                                                <label class="mdl-textfield__label"></label>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="mdl-list">
                                        <?php
                                        $sql = "SELECT * from admin";
                                        $result = mysqli_query($con, $sql);
                                        while ($mostrar = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <div class="mdl-list__item mdl-list__item--two-line">
                                                <span class="mdl-list__item-primary-content">
                                                    <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                                    <span><?php echo $mostrar['id']; ?>.- <?php echo $mostrar['nombres']; ?> <?php echo $mostrar['apellidos']; ?></span>
                                                    <span class="mdl-list__item-sub-title">Usuario:<?php echo $mostrar['username']; ?></span></span>
                                                <a class="mdl-list__item-secondary-action" href="edit.php?id=<?php echo $mostrar['id']; ?>"><i class="zmdi zmdi-more"></i></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
<?php } ?>

    </html>