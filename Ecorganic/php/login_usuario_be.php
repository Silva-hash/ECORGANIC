<?php
// Conexión a la base de datos
include 'conexion_be.php'; // Asegúrate de que la conexión esté bien configurada

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consulta para verificar el usuario
$sql = "SELECT * FROM usuarios WHERE correo = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    
    // Verificar la contraseña
    if (password_verify($contrasena, $usuario['contrasena'])) {
        // Autenticación exitosa
        session_start();
        $_SESSION['usuario'] = $usuario['correo'];  // Guardar el correo del usuario en la sesión
        $_SESSION['nombre_completo'] = $usuario['nombre_completo'];
        $_SESSION['tipo_usuario'] = $usuario['tipo_usuario']; // Guardar el tipo de usuario si lo necesitas

        // Redirigir a index.php
        header("Location: ../index.php");
        exit();
    } else {
        echo '<script>
                alert("Contraseña incorrecta.");
                window.location = "../Login.php";
              </script>';
    }
} else {
    echo '<script>
            alert("No se encontró un usuario con ese correo.");
            window.location = "../Login.php";
          </script>';
}

$stmt->close();
$conexion->close();
?>
