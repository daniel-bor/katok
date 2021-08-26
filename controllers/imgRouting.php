
 <?php
    if (isset($_GET['rout'])) {
        if (isset($_POST['uploading'])) {
            $add = $_GET['rout'];
            include("../models/db.php");
            $nameImage = $_FILES['image']['name'];
            $temporaryName = $_FILES["image"]["tmp_name"];

            $typeImage = $_FILES['image']['type'];
            $sizeImage = $_FILES['image']['size'];

            $description = $_POST['description'];
            $precio = $_POST['price'];
            $titulo = $_POST['title'];

            switch ($add) {
                case 01:
                    $folder = '/resources/images/galeriaInicio' . $nameImage;
                    $query = "INSERT INTO inicio(titulo,ruta,descripcion) VALUES('$titulo','$folder','$description')";
                    break;
                case 02:
                    $folder = '/resources/images/menuPrincipal' . $nameImage;
                    $query = "INSERT INTO menu(titulo,ruta,descripcion,precio) VALUES('$titulo','$folder','$description','$precio')";
                    break;
                case 03:
                    $folder = '/resources/images/menuDia' . $nameImage;
                    $query = "INSERT INTO menudia(titulo,ruta,descripcion,precio) VALUES('$titulo','$folder','$description','$precio')";
                    break;
                default:
            }

            $target = $_SERVER['DOCUMENT_ROOT'] . $folder;
            if (move_uploaded_file($temporaryName, $target)) {
                $result = mysqli_query($conexion, $query);
                if ($result) {
                    header("Location:../views/admin.php");
                } else {
                    echo "Failed at save metadates.";
                }
            } else {
                echo "Failed at uploading image";
                echo $_FILES["image"]["error"];
                echo "<br>";
                echo $target;
                echo "<br>";
                echo $temporaryName;
            }
        } else {
            echo "No se envio una imagen.";
        }
    } else {
        echo "no enruto";
    }

    ?>
