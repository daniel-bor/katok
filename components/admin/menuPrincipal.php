<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administracion Katok</title>
    <link href="/proyecto_final/libs/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="/proyecto_final/libs/basic.css" rel="stylesheet" />
    <link href="/proyecto_final/libs/custom.css" rel="stylesheet" />
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
                            <img src="/proyecto_final/images/logo.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Admin
                                <br />
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href="../../views/admin.php" style="cursor: default;background-color:#2c5282;"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-home"></i>Editar Inicio<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="popup.php"><i class="far fa-comment-alt"></i></i>Pop-up Inicial</a>
                            </li>
                            <li>
                                <a href="galeriaInicial.php"><i class="fas fa-grip-horizontal"></i>Galeria Inicial</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-utensils"></i>Editar Menu's <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fas fa-drumstick-bite"></i>Menu Principal</a>
                            </li>
                            <li>
                                <a href="menuDia.php"><i class="far fa-calendar-alt"></i>Menu del Dia</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="background-color: rgb(236, 236, 236);">
            <?php
            include("../../models/db.php");
            ?>
            <?php
            include("../../components/admin/header.php");
            ?>
            <nav class="flex w-full h-12 text-2xl text-gray-100 bg-blue-800">
                <a href="./menuPrincipal.php" class="mx-auto my-auto hover:text-gray-500">Salir</a>
                <a href="./add.php?add=02" class="mx-auto my-auto hover:text-gray-500">Agregar Imagen</a>
            </nav>

            <div class="relative flex max-w-5xl p-10 mx-auto my-10 shadow-xl">
                <table class="">
                    <thead>
                        <tr>
                            <th class="mr-10">Imagen</th>
                            <th class="mr-10">Descripcion</th>
                            <th class="mr-10">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="p-16">
                        <?php
                        $query = "SELECT * FROM images";
                        $result_task = mysqli_query($conexion, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                            <tr class="p-48 my-16 hover:bg-blue-200">
                                <td class="max-w-xl p-4 zoom">
                                    <img src="<?php echo $row['src']; ?>" alt="no hay imagen">
                                </td>
                                <td class="m-12">
                                    <p><?php echo $row['description'] ?></p>
                                </td>
                                <td class="p-4 m-12">
                                    <div class="flex flex-col mx-auto text-center">
                                        <a href="../views/editImg.php?id=<?php echo $row['id'] ?>" class="p-4 my-2 text-xl bg-gray-600 rounded-md hover:bg-gray-300">
                                            <i class="fas fa-marker"></i>

                                        </a>
                                        <a href="../models/delete.php?id=<?php echo $row['id'] ?>" class="p-4 text-xl bg-red-600 rounded-md hover:bg-gray-300">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2021 Somascos Mamadisimos | Diseñado por : <a href="#" target="_blank">SomascosMamados.com</a>
    </div>

    <script src="/proyecto_final/libs/jquery-1.10.2.js"></script>

    <script src="/proyecto_final/libs/bootstrap.js"></script>

    <script src="/proyecto_final/libs/jquery.metisMenu.js"></script>

    <script src="/proyecto_final/libs/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>