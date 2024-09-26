<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante de Compra - EcoAlimento</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            height: 100%;
            background-color: #f0f0f0;
            background-image: url('img/mesa.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
        }

        #logo {
            margin-left: 0;
            width: 75px;
            height: auto;
        }

        .container {
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 12px;
            margin: 0 auto;
            margin-top: 50px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: translateY(-10px);
        }

        table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            border-radius: 8px;
        }

        th, td {
            padding: 16px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        button {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            transform: translateY(-2px);
        }

        .btn-imprimir {
            background-color: #3b82f6;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-imprimir:hover {
            background-color: #2563eb;
        }

        .btn-principal {
            background-color: #10b981;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
        }

        .btn-principal:hover {
            background-color: #059669;
        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 16px;
            margin-top: 20px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
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
    </style>
</head>
<body>
<header class="w-full h-24 bg-black flex justify-between items-center px-4 md:px-6">
    <div class="flex items-center">
        <a href="index.php" class="flex items-center">
            <img src="img/logo.jpg" alt="Logo de la empresa" id="logo">
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
                <button class="btn btn-home" onclick="location.href='index.php'">Inicio</button>
            </li>
            <li>
                <button class="btn btn-about" onclick="location.href='productos/nosotros.php'">Nosotros</button>
            </li>
            <li>
                <button class="btn btn-products" onclick="location.href='productos/productos.php'">Productos</button>
            </li>
            <li>
                <button class="btn btn-register" onclick="location.href='login.php'">Registro</button>
            </li>
            <li>
                <button class="btn btn-buy" onclick="location.href='carrito.php'">Carrito</button>
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
            <button class="btn btn-home w-full" onclick="location.href='index.php'">Inicio</button>
        </li>
        <li class="mb-4">
            <button class="btn btn-about w-full" onclick="location.href='productos/nosotros.php'">Nosotros</button>
        </li>
        <li class="mb-4">
            <button class="btn btn-products w-full" onclick="location.href='productos/productos.php'">Productos</button>
        </li>
        <li class="mb-4">
            <button class="btn btn-register w-full" onclick="location.href='login.php'">Registro</button>
        </li>
        <li class="mb-4">
            <button class="btn btn-buy w-full" onclick="location.href='carrito.php'">Carrito</button>
        </li>
    </ul>
</div>

<main class="flex-grow">
    <div class="container mx-auto px-6 mt-10">
        <h1 class="text-4xl font-bold mb-6 text-center">Comprobante de Compra</h1>
        <table id="comprobante-table" class="w-full table-auto border-collapse">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Precio Total</th>
                </tr>
            </thead>
            <tbody>
             
            
            </tbody>
        </table>

        <div class="mt-6 text-center">
            <button onclick="window.print()" class="btn-imprimir">Imprimir Comprobante</button>
            <button onclick="location.href='index.php'" class="btn-principal">Volver a la Página Principal</button>
        </div>
    </div>
</main>

<footer>
        <p>&copy; derechos reservados 2024</p>
        <div class="social-media">
            <a href="#"><img src="img/facebook.png" alt="Facebook" id="s"></a>
            <a href="#"><img src="img/ins.png" alt="Twitter" id="s"></a>  
        </div>
  </footer>


<script>
    function cargarComprobante() {
        const carrito = JSON.parse(localStorage.getItem('comprobante')) || [];
        const comprobanteTable = document.getElementById('comprobante-table').querySelector('tbody');
        comprobanteTable.innerHTML = '';

        if (carrito.length === 0) {
            comprobanteTable.innerHTML = `<tr><td colspan="4" class="text-center">No hay productos en el comprobante</td></tr>`;
        } else {
            carrito.forEach(producto => {
                const fila = `
                    <tr>
                        <td>${producto.nombre}</td>
                        <td>${producto.cantidad}</td>
                        <td>$${producto.precio.toFixed(2)}</td>
                        <td>$${(producto.cantidad * producto.precio).toFixed(2)}</td>
                    </tr>
                `;
                comprobanteTable.innerHTML += fila;
            });
        }
    }

    window.onload = cargarComprobante;

    document.getElementById('menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('open');
    });

    document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.remove('open');
    });
</script>

</body>
</html>
