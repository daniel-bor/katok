<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../libs/estilo.css">
    <title>Login</title>
</head>

<body>
    <div class="container-login">
        <form action="../controllers/validar.php" method="POST" style="background-color:black; margin-top:100px; border-radius:20px;">
            <h1 class="animate__animated animate__backInLeft" style="color: white;">Sistema de login</h1>
            <p class="tutulo" style="color:white;">Usuario:</p>
            <input type="text" name="usuario" placeholder="ingresa tu usuario" required style="color:white;"><br>
            <p class="tutulo" style="color:white;">Contraseña:</p>
            <input type="password" name="contraseña" placeholder="ingresa tu email" required style="color:white;"><br>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
            <input type="submit" value="Ingresar">
        </form>
    </div>

</body>

</html>