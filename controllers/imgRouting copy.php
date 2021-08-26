/**

if (isset($_GET['rout']))
$add = $_GET['rout'];

switch ($add) {
case 02:
echo "menu principal";

break;
case 03:

echo "menu dia";
break;
default:
}


*/

<?php
if (isset($_POST['uploading'])) {
    include("../models/db.php");
    $nameImage = $_FILES['image']['name'];
    $temporaryName = $_FILES["image"]["tmp_name"];
    $typeImage = $_FILES['image']['type'];
    $sizeImage = $_FILES['image']['size'];
    $description = $_POST['desc'];

    $folder = '/slider/images/' . $nameImage;
    $target = $_SERVER['DOCUMENT_ROOT'] . $folder;

    $query = "INSERT INTO images(name,src,description) VALUES('$nameImage','$folder','$description')";
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
?>