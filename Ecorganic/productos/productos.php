<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - EcoAlimento</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
            .logo {
        width: 75px; 
        height: auto;
    }
    #ss {
                text-align: left;
                font-family: "Engravers MT";
                font-weight: bold;
                font-size: 40px;
                color: #fff;
                text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
            
            }
    #logo {
        margin-left: 0;
    }

    @media (max-width: 640px) {
        h1 {
        font-size: 1.25rem; 
        }
    }
       /* Estilos generales */
body {
    background-image: url('../img/productos.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: white;
}
#logo {
            margin-left: 0;
            width: 75px;
            height: auto;
        }

h2 {
    text-align: center;
    font-size: 3.5rem;
    font-style: italic;
    font-weight: bold;
    color: #000;
    margin-top: 3rem;
    margin-bottom: 2rem;
    text-shadow: -1px 0 #fff, 0 1px #fff, 1px 0 #fff, 0 -1px #fff;
    font-family: 'Engravers MT', serif; /* Aplicar fuente Engravers MT */
}

.product-card {
    background-color: rgba(0, 0, 0, 0.6);
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    max-width: 320px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.product-card img {
    width: 100%;
    height: 200px;
    border-radius: 10px;
    object-fit: cover;
}

.product-card h3 {
    font-family: 'Times New Roman', serif; /* Aplicar fuente Times New Roman */
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.product-card button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin-top: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
}

.product-card button:hover {
    background-color: #45a049;
}

.container {
    padding: 0 1rem;
}


#ss {
            text-align: left;
            font-family: "Engravers MT";
            font-weight: bold;
            font-size: 50px;
            color: #fff;
            text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
        }

        .btn {
            background: #494949;
            color: rgb(255, 255, 255);
            font-size: 16px;
            font-weight: bold;
            width: 150px;
            height: 50px;
            border-radius: 5px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, background-color 0.2s;
        }

        .btn:hover {
            background: #007BFF;
            transform: scale(1.05);
        }

        .btn-home:after { content: '🏠'; }
        .btn-about:after { content: 'ℹ️'; }
        .btn-products:after { content: '📦'; }
        .btn-register:after { content: '✚'; }
        .btn-buy:after { content: '🛒'; }

    
        #mobile-menu {
            position: fixed;
            top: 0;
            right: 0;
            width: 75%;
            height: 100%;
            background-color: black; 
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
        }

        #mobile-menu.open {
            transform: translateX(0);
        }

        #mobile-menu ul {
            list-style: none;
            padding: 20px;
        }

        #mobile-menu ul li {
            margin: 20px 0;
        }

        #mobile-menu button {
            width: 100%;
            padding: 10px;
            text-align: left;
            background: none;
            color: white;
            border: none;
            font-size: 18px;
        }

        #mobile-menu button:hover {
            background-color: #333;
        }
        footer {
    background-color: #000;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: relative;
    margin-top: 40px; 
}

footer p {
    margin: 10px 0;
}
  .pr{
    position: center;
    color: #000;
    font-size: 48px;
  }
  

    </style>
</head>
<body>
<header class="w-full h-24 bg-black flex justify-between items-center px-4 md:px-6">
    <div class="flex items-center">
        <a href="../index.php" class="flex items-center">
            <img src="../img/log.jpg" alt="Logo de la empresa" id="logo">
            <h1 id="ss">EcoAlimento</h1>
        </a>
    </div>
    
    <div class="flex items-center space-x-4 md:space-x-6">
        <button id="menu-button" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <ul id="menu" class="hidden md:flex space-x-4 md:space-x-6">
            <li>
                <button class="btn btn-home" onclick="location.href='../index.php'">Inicio</button>
            </li>
            <li>
                <button class="btn btn-about" onclick="location.href='nosotros.php'">Nosotros</button>
            </li>
            <li>
                <button class="btn btn-products" onclick="location.href='productos.php'">Productos</button>
            </li>
            <li>
                <button class="btn btn-register" onclick="location.href='../login.php'">Registro</button>
            </li>
            <li>
                <button class="btn btn-buy" onclick="location.href='../carrito.php'">Carrito</button>
            </li>
        </ul>
    </div>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed top-0 right-0 w-3/4 h-full bg-black shadow-lg transition-transform transform translate-x-full">
    <button id="close-menu" class="p-4 text-right w-full">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
    <ul class="p-4">
        <li class="mb-4">
            <button class="btn btn-home w-full" onclick="location.href='../index.php'">Inicio</button>
        </li>
        <li class="mb-4">
            <button class="btn btn-about w-full" onclick="location.href='productos/nosotros.php'">Nosotros</button>
        </li>
        <li class="mb-4">
            <button class="btn btn-products w-full" onclick="location.href='productos/productos.php'">Productos</button>
        </li>
        <li class="mb-4">
            <button class="btn btn-register w-full" onclick="location.href='../login.php'">Registro</button>
        </li>
        <li class="mb-4">
            <button class="btn btn-buy w-full" onclick="location.href='carrito.php'">Carrito</button>
        </li>
    </ul>
</div>

    <h2 class="pr">Productos</h2>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-12">
    <div class="product-card">
    <h3>Verduras en Descomposición</h3>
    <a href="producto1.php">
        <img src="../img/verduras_descomposicion.jpg" alt="Verduras en descomposición">
    </a>
    <p class="mt-4">Verduras en proceso de descomposición, perfectas para compostaje o reutilización.</p>
    <button class="btn-more" onclick="window.location.href='producto1.php'">Ver más</button>
</div>

<div class="product-card">
    <h3>Enlatados Expirados</h3>
    <a href="producto2.php">
        <img src="../img/enlatados_expirados.jpg" alt="Enlatados expirados">
    </a>
    <p class="mt-4">Enlatados cercanos a su fecha de vencimiento, ideal para aprovechar sus nutrientes.</p>
    <button class="btn-more" onclick="window.location.href='producto2.php'">Ver más</button>
</div>

<div class="product-card">
    <h3>Lácteos Caducados</h3>
    <a href="producto3.php">
        <img src="../img/lacteos_caducados.jpg" alt="Lácteos caducados">
    </a>
    <p class="mt-4">Lácteos cercanos a su fecha de caducidad, ideales para recetas de reutilización.</p>
    <button class="btn-more" onclick="window.location.href='producto3.php'">Ver más</button>
</div>

<div class="product-card">
    <h3>Granos en Descomposición</h3>
    <a href="producto4.php">
        <img src="../img/granos_descomposicion.jpg" alt="Granos en descomposición">
    </a>
    <p class="mt-4">Granos que han iniciado el proceso de descomposición, útiles para compostaje o abono.</p>
    <button class="btn-more" onclick="window.location.href='producto4.php'">Ver más</button>
</div>


    <br>
    <?php include "../footer.php"; ?>
</body>
<script>    

document.getElementById('menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('open');
    });

    document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.remove('open');
    });</script>
</html>
