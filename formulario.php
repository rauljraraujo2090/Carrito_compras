<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- INICIO MENU -->
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex align-items-left"></div>
                <div class="d-flex align-items-center">
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuario
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            Mi Perfil
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            Cerrar Sesion
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </header>

    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <div class="navbar-brand-box">
                <a href="" class="logo">
                    <!-- va el logo, puede ser imagen o texto -->
                    LOGO
                </a>
            </div>
            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">MENU</li>
                    <li>
                        <a href="" class="waves-effect"><i class="feather-home"></i>Inicio</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="feather-shopping-bag"></i>Productos</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="feather-users"></i>Usuarios</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="feather-truck"></i>Pedidos</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="feather-user-plus"></i>Clientes</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="dripicons-graph-line"></i>Reportes</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fas fa-users"></i>Proveedores</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="dripicons-gear"></i>Mantenimiento</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- FIN MENU -->

    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>