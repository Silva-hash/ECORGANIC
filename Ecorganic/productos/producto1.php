<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas y Verduras - EcoAlimento</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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

        body {
            background-image: url('../img/frutas_verduras.jpg');
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

        
        .btn-buy-now {
            background: linear-gradient(90deg, #5468ff, #483dff);
            border: none;
            border-radius: 20px; 
            font-weight: bold;
            padding: 12px 40px; 
            margin: 15px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-buy-now:hover {
            background: linear-gradient(90deg, #483dff, #5468ff);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-buy-now:before {
            content: '\1F6D2'; 
            font-size: 20px;
            margin-right: 10px;
            color: white;
        }
      
  .btn-home {
    background: linear-gradient(90deg, #32CD32, #2F4F4F); /* Gradiente de verde lima a gris oscuro */
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

  .btn-home:after {
      content: '🏠';
      margin-left: 10px;
      color: white; 
  }

  .btn-home:hover {
      transform: scale(1.05); 
  }
 
  .btn-buy {
      background: linear-gradient(90deg, #32CD32, #2F4F4F); /* Gradiente de verde lima a gris oscuro */
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

  .btn-buy:after {
      content: '🛒';
      margin-left: 10px;
      color: white;
  }

  .btn-buy:hover {
      transform: scale(1.05);
  }

  .btn-register {
      background: linear-gradient(90deg, #32CD32, #2F4F4F); /* Gradiente de verde lima a gris oscuro */
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

  .btn-register:after {
      content: '✚';
      margin-left: 10px;
      color: white;
  }

  .btn-register:hover {
      transform: scale(1.05);
  }
  .btn-products {
      background: linear-gradient(90deg, #32CD32, #2F4F4F); /* Gradiente de verde lima a gris oscuro */
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

  .btn-products:after {
      content: '📦';
      margin-left: 10px;
      color: white;
  }

  .btn-products:hover {
      transform: scale(1.05);
  }

 
  .btn-about {
      background: linear-gradient(90deg, #32CD32, #2F4F4F); /* Gradiente de verde lima a gris oscuro */
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

  .btn-about:after {
      content: 'ℹ️';
      margin-left: 10px;
      color: white;
  }

  .btn-about:hover {
      transform: scale(1.05);
  }
    </style>
</head>
<body>

<header class="w-full h-24 bg-black flex justify-between items-center px-4 md:px-6">
  <div class="flex items-center">
    <a href="../index.php" class="flex items-center">
      <img src="../img/log.jpg" alt="Logo de la empresa" class="logo" id="logo">
      <h1 class="text-white text-xl md:text-2xl lg:text-3xl font-bold ml-2 whitespace-nowrap" id="ss">Ecorganic</h1>
    </a>
  </div>
  
  <div class="flex items-center space-x-4 md:space-x-6">
    <ul class="flex space-x-4 md:space-x-6">
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
        <button class="btn btn-register"  onclick="location.href='../login.php'">Registro</button>
      </li>
      <li>
        <button class="btn btn-buy" onclick="location.href='../carrito.php'">Carrito</button>
      </li>
    </ul>
  </div>
</header>

    <<main class="mt-12">
    <h1 class="text-4xl font-bold mb-6 text-center">Frutas y Verduras en Descomposición</h1>
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          
            <div class="product-card">
                <h3 class="text-xl font-semibold mb-2">Manzanas en Descomposición</h3>
                <img src="../img/manzanas_descomposicion.jpg" alt="Manzanas en descomposición">
                <p class="mt-2">Manzanas en estado de descomposición, ideales para compostaje o proyectos de biofertilizantes.</p>
                <p class="mt-4">Precio: $0.50 por kg.</p>
                <div class="col-md-4">
                    <button class="btn btn-buy-now" onclick="addToCart('Manzanas en Descomposición', 0.50, '../img/manzanas_descomposicion.jpg')">Añadir</button>
                </div>
            </div>

            <div class="product-card">
                <h3 class="text-xl font-semibold mb-2">Zanahorias en Descomposición</h3>
                <img src="../img/zanahorias_descomposicion.jpg" alt="Zanahorias en descomposición">
                <p class="mt-2">Zanahorias en proceso de descomposición, adecuadas para uso en compost o alimentación animal.</p>
                <p class="mt-4">Precio: $0.40 por kg.</p>
                <div class="col-md-4">
                    <button class="btn btn-buy-now" onclick="addToCart('Zanahorias en Descomposición', 0.40, '../img/zanahorias_descomposicion.jpg')">Añadir</button>
                </div>
            </div>

            <div class="product-card">
                <h3 class="text-xl font-semibold mb-2">Naranjas en Descomposición</h3>
                <img src="../img/naranjas_descomposicion.jpg" alt="Naranjas en descomposición">
                <p class="mt-2">Naranjas en descomposición, perfectas para la producción de abono orgánico o reciclaje de desechos.</p>
                <p class="mt-4">Precio: $0.60 por kg.</p>
                <div class="col-md-4">
                    <button class="btn btn-buy-now" onclick="addToCart('Naranjas en Descomposición', 0.60, '../img/naranjas_descomposicion.jpg')">Añadir</button>
                </div>
            </div>

            <div class="product-card">
                <h3 class="text-xl font-semibold mb-2">Tomates en Descomposición</h3>
                <img src="../img/tomates_descomposicion.jpg" alt="Tomates en descomposición">
                <p class="mt-2">Tomates en proceso de descomposición, perfectos para iniciativas de reciclaje o compostaje.</p>
                <p class="mt-4">Precio: $0.45 por kg.</p>
                <div class="col-md-4">
                    <button class="btn btn-buy-now" onclick="addToCart('Tomates en Descomposición', 0.45, '../img/tomates_descomposicion.jpg')">Añadir</button>
                </div>
            </div>
        </div>
    </div>
</main>

    
    <div id="notificacion">Producto añadido al carrito</div>

    <?php include "../footer.php"; ?>

    <script>
        function addToCart(nombre, precio, imagen) {
            // Almacenar en localStorage
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const productoExistente = carrito.find(item => item.nombre === nombre);

            if (productoExistente) {
                productoExistente.cantidad += 1;
            } else {
                carrito.push({ nombre, precio, cantidad: 1, imagen });
            }

            localStorage.setItem('carrito', JSON.stringify(carrito));

            // Mostrar notificación
            const notificacion = document.getElementById('notificacion');
            notificacion.innerText = `${nombre} añadido al carrito`;
            notificacion.style.display = 'block';

            setTimeout(() => {
                notificacion.style.display = 'none';
            }, 2000);

        }
    </script>
</body>
</html>
