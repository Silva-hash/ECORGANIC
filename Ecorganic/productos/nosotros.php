<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¿Quiénes Somos?</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/nosotros.css">
  <link rel="stylesheet" type="text/css" href="../css/footer.css">
  <style>
    .logo {
      width: 88px;
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

    /* Botón Home */
    .btn-home,
    .btn-buy,
    .btn-register,
    .btn-products,
    .btn-about {
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

    .btn-home:after {
      content: '🏠';
    }

    .btn-buy:after {
      content: '🛒';
    }

    .btn-register:after {
      content: '✚';
    }

    .btn-products:after {
      content: '📦';
    }

    .btn-about:after {
      content: 'ℹ️';
    }

    .btn-home:hover,
    .btn-buy:hover,
    .btn-register:hover,
    .btn-products:hover,
    .btn-about:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-black text-white">

<header class="w-full h-24 bg-black flex justify-between items-center px-4 md:px-6">
  <div class="flex items-center">
    <a href="../index.php" class="flex items-center">
      <img src="../img/log.jpg" alt="Logo de la empresa" class="logo" id="logo">
      <h1 class="text-white text-xl md:text-2xl lg:text-3xl font-bold ml-2 whitespace-nowrap" id="ss">Ecorganic</h1>
    </a>
  </div>

  <div class="flex items-center space-x-4 md:space-x-6">
    <select id="language-selector" class="bg-black text-white border border-white rounded-md p-2">
      <option value="es">Español</option>
      <option value="en">English</option>
    </select>
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
        <button class="btn btn-about" onclick="location.href='productos/nosotros.php'">Nosotros</button>
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
      <button class="btn btn-products w-full" onclick="location.href='productos.php'">Productos</button>
    </li>
    <li class="mb-4">
      <button class="btn btn-register w-full" onclick="location.href='../login.php'">Registro</button>
    </li>
    <li class="mb-4">
      <button class="btn btn-buy w-full" onclick="location.href='../carrito.php'">Carrito</button>
    </li>
  </ul>
</div>

<main>
  <section class="text-center my-8">
    <h2 class="texto-intro text-lg" id="about-text">Conoce un poco más de nosotros</h2>
  </section>

  <section class="hero">
    <img src="../img/somos.jpg" alt="Imagen destacada">
  </section>

  <section class="mission-vision">
    <div class="mission">
      <h2 class="text-black font-bold ss" id="mission-text">Misión</h2>
      <img src="../img/mision.jpg" alt="Imagen destacada" id="mv">
      <br>
      <p class="nn" id="mission-description">Proporcionar una plataforma accesible que facilite la
         gestión sostenible de residuos orgánicos, promoviendo la colaboración entre personas, empresas
          y comunidades para fomentar la economía circular y prácticas que beneficien al medio ambiente
           y la sociedad.</p>
    </div>
    <div class="vision">
      <h2 class="text-black font-bold ss" id="vision-text">Visión</h2>
      <img src="../img/vision.jpg" alt="Imagen destacada" id="mv">
      <br>
      <p class="nn" id="vision-description">Ser un referente global en la gestión de residuos orgánicos,
         inspirando a las comunidades a valorar los residuos como recursos y promoviendo la colaboración 
         y la innovación para un futuro sostenible y en armonía con el planeta.</p>
    </div>
  </section>
</main>

<?php 
include "../footer.php";
?>

<script>
  const languageSelector = document.getElementById('language-selector');
  const menuButton = document.getElementById('menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeMenuButton = document.getElementById('close-menu');

  // Objeto para las traducciones
  const translations = {
    es: {
      about: "Conoce un poco más de nosotros",
      mission: "Misión",
      missionDescription: "La misión de Ecorganic  es proporcionar una plataforma accesible y eficiente que permita la gestión sostenible de residuos orgánicos, fomentando la colaboración entre individuos, empresas y comunidades. A través de herramientas educativas, recursos innovadores y un enfoque centrado en la economía circular, EcoNet busca transformar la manera en que se perciben y gestionan los residuos, promoviendo prácticas que beneficien tanto al medio ambiente como a la sociedad en su conjunto.",
      vision: "Visión",
      visionDescription: "La visión de Ecorganic  es convertirse en un referente internacional en la gestión de residuos orgánicos, inspirando a comunidades de todo el mundo a adoptar un enfoque sostenible y consciente. Imaginamos un futuro en el que los residuos orgánicos se valoren como recursos, donde la colaboración y la innovación impulsan el desarrollo de productos sostenibles y se promueva un estilo de vida que priorice el cuidado del planeta. Con el tiempo, EcoNet aspira a crear un impacto duradero, contribuyendo a un mundo más limpio, saludable y en equilibrio con la naturaleza."
    },
    en: {
      about: "Get to know a little more about us",
      mission: "Mission",
      missionDescription: "To provide an accessible platform that facilitates sustainable organic waste management, promoting collaboration between individuals, businesses, and communities to foster a circular economy and practices that benefit both the environment and society.",
      vision: "Vision",
      visionDescription: "To become a global leader in organic waste management, inspiring communities to value waste as a resource and promoting collaboration and innovation for a sustainable future in harmony with the planet."
    }
  };

  // Cambiar idioma
  languageSelector.addEventListener('change', (event) => {
    const lang = event.target.value;
    document.getElementById('about-text').textContent = translations[lang].about;
    document.getElementById('mission-text').textContent = translations[lang].mission;
    document.getElementById('mission-description').textContent = translations[lang].missionDescription;
    document.getElementById('vision-text').textContent = translations[lang].vision;
    document.getElementById('vision-description').textContent = translations[lang].visionDescription;
  });

  // Mostrar menú móvil
  menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('translate-x-full');
  });

  // Cerrar menú móvil
  closeMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('translate-x-full');
  });
</script>
</body>
</html>
