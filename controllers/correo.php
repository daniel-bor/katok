<?php

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['msg'];
$asunto = $_POST['asunto'];

// Datos para el correo
$destinatario = "katokrestaurant@gmail.com";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header("Location: /views/contacto.php");
