<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Granos - EcoAlimento</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        body {
            background-image: url('../img/granos.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            margin: 0;
            padding: 0;
            overflow-y: scroll;
        }

        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            color: black;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card:hover {
            transform: scale(1.02);
        }

        .product-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 0 auto 10px;
        }

        #notificacion {
            display: none;
            position: fixed;
            top: 4%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            z-index: 1000;
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
#logo {
            margin-left: 0;
            width: 75px;
            height: auto;
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

.social-media {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social-media a img {
    width: 30px;
    filter: invert(1);
}
#s{
    width:80px;
    border-radius: 8px;
}
  #gr{
font-size: 60px;
color: #000;
text-shadow: 1px 1px 0 #4e0505, 2px 2px 0 #fff8f8, 3px 3px 0 #570606;
}

    </style>
</head>
<body>
<header class="w-full h-24 bg-black flex justify-between items-center px-4 md:px-6">
    <div class="flex items-center">
        <a href="../index.php" class="flex items-center">
            <img src="../img/logo.jpg" alt="Logo de la empresa" id="logo">
            <h1 id="ss">Ecorganic</h1>
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
<main class="mt-12">
    <h1 class="text-4xl font-bold mb-6 text-center" id="gr">Granos en Descomposición</h1>
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="product-card">
                <h3>Arroz Integral en Descomposición</h3>
                <a href="#">
                    <img src="../img/arroz_descomposicion.jpg" alt="Arroz Integral en Descomposición">
                </a>
                <p class="mt-4">Saco de arroz integral en estado de descomposición. Ideal para compostaje o proyectos sostenibles. $0.50 por saco.</p>
                <div class="col-md-4">
                    <button class="btn btn-buy-now" onclick="addToCart('Arroz Integral en Descomposición', 0.50, '../img/arroz_descomposicion.jpg')">Añadir</button>
                </div>
            </div>
            <div class="product-card">
                <h3>Frijoles Pinto en Descomposición</h3>
                <a href="#">
                    <img src="../img/frijol_descomposicion.jpg" alt="Frijoles Pinto en Descomposición">
                </a>
                <p class="mt-4">Frijoles pinto en estado de descomposición. Recomendado para reciclaje orgánico. $0.40 por saco de 500g.</p>
                <div class="col-md-4">
                    <button class="btn btn-buy-now" onclick="addToCart('Frijoles Pinto en Descomposición', 0.40, '../img/frijol_descomposicion.jpg')">Añadir</button>
                </div>
            </div>
            <div class="product-card">
                <h3>Garbanzos en Descomposición</h3>
                <a href="#">
                    <img src="../img/garbanzos_descomposicion.jpg" alt="Garbanzos en Descomposición">
                </a>
                <p class="mt-4">Saco de garbanzos en descomposición. Perfecto para abono natural. $0.60 por saco de 1 kg.</p>
                <div class="col-md-4">
                    <button class="btn btn-buy-now" onclick="addToCart('Garbanzos en Descomposición', 0.60, '../img/garbanzos_descomposicion.jpg')">Añadir</button>
                </div>
            </div>
            <div class="product-card">
                <h3>Quinoa en Descomposición</h3>
                <a href="#">
                    <img src="../img/quinoa_descomposicion.jpg" alt="Quinoa en Descomposición">
                </a>
                <p class="mt-4">Envase de quinoa en estado de descomposición. Útil para proyectos de compost. $0.70 por envase de 500g.</p>
                <div class="col-md-4">
                    <button class="btn btn-buy-now" onclick="addToCart('Quinoa en Descomposición', 0.70, '../img/quinoa_descomposicion.jpg')">Añadir</button>
                </div>
            </div>
        </div>
    </div>
</main>



    <div class="notificacion" id="notificacion">Producto añadido al carrito</div>
    <footer>
        <p>&copy; derechos reservados 2024</p>
        <div class="social-media">
            <a href="#"><img src="../img/facebook.png" alt="Facebook" id="s"></a>
            <a href="#"><img src="../img/ins.png" alt="Twitter" id="s"></a>  
        </div>
    </footer>

    <script>
        document.getElementById('carrito-icon').addEventListener('click', function() {
            let carritoMenu = document.getElementById('carrito-menu');
            carritoMenu.style.display = carritoMenu.style.display === 'none' || carritoMenu.style.display === '' ? 'block' : 'none';
        });

        function addToCart(productName, price, image) {
            // Almacenar en localStorage
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const productoExistente = carrito.find(item => item.nombre === productName);

            if (productoExistente) {
                productoExistente.cantidad += 1;
            } else {
                carrito.push({ nombre: productName, precio: price, cantidad: 1, imagen: image });
            }

            localStorage.setItem('carrito', JSON.stringify(carrito));

            // Mostrar notificación
            let notificacion = document.getElementById('notificacion');
            notificacion.textContent = `${productName} añadido al carrito a $${price}`;
            notificacion.style.display = 'block';
            setTimeout(() => {
                notificacion.style.display = 'none';
            }, 3000);
        }

        document.getElementById('menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('open');
    });

    document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.remove('open');
    });
    </script>
</body>
</html>
