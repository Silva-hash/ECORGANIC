<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url(img/login.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
        /* Estilos para inputs y selects */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            font-family: 'Roboto', sans-serif;
        }
        /* Botones personalizados */
        .btn-login, .btn-signup {
            background: linear-gradient(90deg, #32CD32, #2F4F4F);
            color: white;
            font-size: 16px;
            font-weight: bold;
            width: 150px;
            height: 50px;
            border-radius: 10px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, background-color 0.2s;
        }
        .btn-login:after {
            content: '🔑';
            margin-left: 10px;
            color: white;
        }
        .btn-signup:after {
            content: '✚';
            margin-left: 10px;
            color: white;
        }
        .btn-login:hover, .btn-signup:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion" class="btn-login">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse" class="btn-signup">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button type="submit" class="btn-login">Entrar</button>
                </form>

                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    
                    <!-- Campo para el rol -->
                    <select name="tipo_usuario" required>
                        <option value="" disabled selected>Tipo de Usuario</option>
                        <option value="hogar">Hogar</option>
                        <option value="empresa">Empresa</option>
                        <option value="comunidad">Comunidad</option>
                    </select>
                    <button type="submit" class="btn-signup">Registrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
