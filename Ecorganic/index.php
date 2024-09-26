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
  <title>ecorganic</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  
</head>
<body>

  <header class="w-full h-24 bg-black flex justify-between items-center px-4 md:px-6">
    <div class="flex items-center">
      <a href="index.php" class="flex items-center">
        <img src="img/log.jpg" alt="Logo de la empresa" id="logo">
        <h1 id="ss">Ecorganic</h1>
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
          <button class="btn btn-home" onclick="location.href='index.php'">Inicio</button>
        </li>
        <li>
          <button class="btn btn-about" onclick="location.href='productos/nosotros.php'">Nosotros</button>
        </li>
        <li>
          <button class="btn btn-products" onclick="location.href='productos/productos.php'">Productos</button>
        </li>
        <li>
          <button class="btn btn-register" onclick="location.href='php/cerrar_sesion.php'">cerrar</button>
        </li>
        <li>
          <button class="btn btn-buy" onclick="location.href='carrito.php'">Carrito</button>
        </li>
      </ul>
    </div>
  </header>
  <br><br>
 
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

  <main>
  <section class="carrusel">
      <div class="carrusel-list" id="carrusel-list">
          <div class="carrusel-track" id="track">
              <div class="carrusel-item">
                  <picture>
                      <img src="img/img1.jpg" alt="image1">
                  </picture>
              </div>
              <div class="carrusel-item">
                  <picture>
                      <img src="img/img2.jfif" alt="image2">
                  </picture>
              </div>
              <div class="carrusel-item">
                  <picture>
                      <img src="img/img3.jfif" alt="image3">
                  </picture>
              </div>
          </div>
      </div>
  </section>

    <br><br>
    <footer>
      <p>&copy; 2024 ecorganic. Todos los derechos reservados.</p>
      <div class="social-media">
        <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
        <a href="#"><img src="img/twitter.png" alt="Twitter"></a>
        <a href="#"><img src="img/instagram.png" alt="Instagram"></a>
      </div>
    </footer>
  </main>
  <script src="js/carrusel.js"></script>
  <script>
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenuButton = document.getElementById('close-menu');
    const languageSelector = document.getElementById('language-selector');

    // Objeto para las traducciones
    const translations = {
      es: {
        welcome: "Bienvenidos a Ecorganic",
        subtitle: "Transformando residuos en productos sostenibles",
        home: "Inicio",
        about: "Nosotros",
        products: "Productos",
        register: "Registro",
        cart: "Carrito"
      },
      en: {
        welcome: "Welcome to Ecorganic",
        subtitle: "Transforming waste into sustainable products",
        home: "Home",
        about: "About Us",
        products: "Products",
        register: "Register",
        cart: "Cart"
      }
    };

    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('translate-x-full');
    });

    closeMenuButton.addEventListener('click', () => {
      mobileMenu.classList.add('translate-x-full');
    });

    languageSelector.addEventListener('change', (event) => {
      const selectedLanguage = event.target.value;
      document.getElementById('welcome-text').innerText = translations[selectedLanguage].welcome;
      document.getElementById('subtitle-text').innerText = translations[selectedLanguage].subtitle;

      const menuButtons = document.querySelectorAll('#menu .btn');
      const mobileMenuButtons = document.querySelectorAll('#mobile-menu .btn');

      menuButtons[0].innerText = translations[selectedLanguage].home;
      menuButtons[1].innerText = translations[selectedLanguage].about;
      menuButtons[2].innerText = translations[selectedLanguage].products;
      menuButtons[3].innerText = translations[selectedLanguage].register;
      menuButtons[4].innerText = translations[selectedLanguage].cart;

      mobileMenuButtons[0].innerText = translations[selectedLanguage].home;
      mobileMenuButtons[1].innerText = translations[selectedLanguage].about;
      mobileMenuButtons[2].innerText = translations[selectedLanguage].products;
      mobileMenuButtons[3].innerText = translations[selectedLanguage].register;
      mobileMenuButtons[4].innerText = translations[selectedLanguage].cart;
    });
  </script>
</body>
</html>
