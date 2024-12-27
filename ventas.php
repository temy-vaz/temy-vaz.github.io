<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/slider.css">
    <title>BIOMEDIC</title>
</head>
<body>
    <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#" class="logo">BIOMEDIC</a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="#catalogo">Venta</a></li>
          <li><a href="../PHP/alliances.php">Renta</a></li>
          <li><a href="../PHP/us.php">Nosotros</a></li>
          <li><a href="../PHP/contacts.php">Contactanos</a></li>
        </ul>
        <div class="nav__btns">
          <button class="btn">Traducir</button>
        </div>
    </nav>
  
      <header id="home">
        <div class="header__container">
          <div class="header__content">
            <h1>Confia en BIOMEDIC</h1>
            <p>Mejora la experiencia y resultados de los pacientes, traduciendo la inversión en bienestar y avance tecnológico sanitario.</p>
            
            <div class="header__btns">
              <button class="btn" id="contact">Contactar ahora</button>
            </div>
          </div>
          <div class="header__image">
             <img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/staybridge.png?alt=media&token=ab02400e-123f-4be8-8c5f-a36bd698d68b" alt="header"/> 
          </div>
        </div>
      </header>






      <h1 class="titulo">Catalogo de Productos</h1>

      <div class="center" id="catalogo">
    <div class="carousel-wrapper">
      <div class="carousel">
        <ul id="carousel-items">
          <!-- Add your images dynamically -->
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto1.png?alt=media&token=44335563-60b8-4766-a683-6d3f163944b3" alt="Image 1"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto2.png?alt=media&token=00002559-5938-4d39-9742-5c4dce64556d" alt="Image 2"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto3.png?alt=media&token=420e6ae3-9abc-4b5b-97bf-2fb33e781956" alt="Image 3"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto4.png?alt=media&token=f85c6e00-3367-44f9-be0b-15c92a363e8d" alt="Image 4"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto5.png?alt=media&token=72b31bb0-b3a8-4a43-bd9a-3805806271a0" alt="Image 5"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto6.png?alt=media&token=a06b93a9-9c2a-4621-a318-2e21f448c532" alt="Image 6"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto7.png?alt=media&token=2f119c14-24d3-48af-8399-ec22d9ee0be2" alt="Image 7"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto8.png?alt=media&token=db7fcade-3924-4112-b9c1-78191311f1d3" alt="Image 8"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto9.png?alt=media&token=5bc69b6f-e2dd-4e68-b4da-3e33b959c38b" alt="Image 9"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto10.png?alt=media&token=10c3f7dd-2621-4b75-a19f-8d390b75438c" alt="Image 10"></li>
          <li><img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Producto11.png?alt=media&token=03788a2e-a034-4d39-a73b-1deb27c9b226" alt="Image 11"></li>
        </ul>
      </div>

      <!-- Navigation Buttons -->
      <button id="prev" class="arrow left-arrow">‹</button>
      <button id="next" class="arrow right-arrow">›</button>
    </div>
  </div>

    <footer id="contact"></footer>
      <div class="section__container footer__container">


      </div>
      <div class="footer__bar">
        Derechos Reservados © <span id="year"></span> BIOMEDIC.
      </div>      
    </footer>

  


      <script src="JS/main.js"></script>
      <script src="JS/slider.js"></script>
      <script src="JS/date.js"></script>
      <script src="JS/productos.js"></script>
</body>
</html>