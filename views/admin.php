<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administracion Katok</title>
    <link href="/libs/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="/libs/basic.css" rel="stylesheet" />
    <link href="/libs/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-collapse " role="navigation" style="margin-bottom: 0">
            <div style="background-color: green !important;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="..//index.php">Restaurante Katok Administracion</a>
            </div>

            <div class="header-right">

                <a href="login.html" class="btn btn-danger" title="Cerrar Sesion"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div" style="background-color: #202020;">
                            <img src="../images/logo.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Admin
                                <br />
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href="#" style="cursor: default;background-color:#2c5282;"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Editar Inicio<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../components/admin/popup.php"><i class="fa fa-toggle-on"></i>Pop-up Inicial</a>
                            </li>
                            <li>
                                <a href="../components/admin/galeriaInicial.php"><i class="fa fa-bell "></i>Galeria Inicial</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Editar Menu's <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../components/admin/menuPrincipal.php"><i class="fa fa-coffee"></i>Menu Principal</a>
                            </li>
                            <li>
                                <a href="../components/admin/menuDia.php"><i class="fa fa-flash "></i>Menu del Dia</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="background-color: rgb(236, 236, 236);">
            <div style="font-size:2rem;">
                <h2>Bienvenido a Administracion.</h2>
                <ul>
                    <li>Navegue entre las pestañas de Administracion para editar componentes del sitio.</li>
                    <li>El boton rojo de la parte superior derecha cerrará la sesion.</li>
                    <li>Los elementos editables se agregaran como contenido central.</li>
                </ul>
                <h2>Que puedo hacer desde este Dashboard?</h2>
                <ul>
                    <li>Agregue nuevos menus.</li>
                    <li>Cambie los mensajes de bienvenida.</li>
                    <li>Edite el precio, descripcion e imagen.</li>
                    <li>Agregue o remueva imagenes de la galeria principal.</li>
                </ul>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2021 Somascos Mamadisimos | Diseñado por : <a href="#" target="_blank">SomascosMamados.com</a>
    </div>

    <script src="../libs/jquery-1.10.2.js"></script>

    <script src="../libs/bootstrap.js"></script>

    <script src="../libs/jquery.metisMenu.js"></script>

    <script src="../libs/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>