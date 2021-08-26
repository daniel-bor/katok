<?php
include("../models/db.php");
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;


$consulta = "SELECT*FROM Usuarios where Usuario='$usuario' and Contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {

    header("location: /views/admin.php");
} else {
?>
    <?php
    include("login.php");

    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
