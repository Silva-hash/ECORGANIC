<?php
include 'conexion_be.php'; // Asegúrate de que la conexión esté configurada correctamente

// Sanitizar y validar los datos recibidos
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$tipo_usuario = $_POST['tipo_usuario'];
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT); // Encriptar la contraseña

// Verifica la conexión antes de realizar cualquier consulta
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Verificar si el correo ya está registrado
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location="../login.php";
          </script>';
    exit();
}

// Insertar el nuevo usuario en la base de datos
$query = "INSERT INTO usuarios (nombre_completo, correo, contrasena, tipo_usuario) 
          VALUES ('$nombre_completo', '$correo', '$contrasena', '$tipo_usuario')";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
            alert("Usuario registrado con éxito");
            window.location="../login.php";
          </script>';
} else {
    echo '<script>
            alert("Hubo un error, por favor intenta nuevamente");
            window.location="../login.php";
          </script>';
}

// Cerrar la conexión
mysqli_close($conexion);
?>
