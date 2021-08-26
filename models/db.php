<?php
define('host', '127.0.0.1', true);
define('user', 'admin', true);
define('passw', '!Bor060', true);
define('name', 'colegio', true);

try {
    $conexion = mysqli_connect(host, user, passw, name);
} catch (Exception $e) {
    echo "error al conectar con la base de datos $e";
}
