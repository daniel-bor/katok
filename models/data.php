<?php
$query = "SELECT * FROM inicio";
$result = mysqli_query($conexion, $query);
while ($row = mysqli_fetch_array($result)) {
    $fila[] = $row['Ruta'];
}
$querypop = "SELECT * FROM inicio WHERE Titulo='popup'";
$resultpop = mysqli_query($conexion, $querypop);
$pop = mysqli_fetch_array($resultpop);
global $fila, $resultpop;
