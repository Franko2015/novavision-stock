const content = {};
content.nav = `
<section class="full-width navLateral">
    <div class="full-width navLateral-bg btn-menu"></div>
    <div class="full-width navLateral-body">
        <div class="full-width navLateral-body-logo text-center tittles">
            <i class="zmdi zmdi-close btn-menu"></i> INVENTARIO
        </div>
        <figure class="full-width navLateral-body-tittle-menu">
            <figcaption>
                <span>
                    <?php echo $mostrarUser['nombres'];?> <?php echo $mostrarUser['apellidos'];?><br>
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
`;
// Emulate a mini template engine:
document.addEventListener('DOMContentLoaded', () => {
    let html = document.body.innerHTML;
    Object.entries(content).forEach(([tag, data]) => {
      html = html.replaceAll(`{${tag}}`, data);
    });
    document.body.innerHTML = html;
  });