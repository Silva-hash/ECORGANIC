<?php
$conexion = mysqli_connect("localhost", "root", "", "ecorganic_db");

if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
?>
