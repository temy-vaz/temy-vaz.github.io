<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="CSS/styles.css">
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
          <li><a href="#certifications">Home</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="ventas.php">Venta</a></li>
          <li><a href="../PHP/alliances.php">Renta</a></li>
          <li><a href="../PHP/us.php">Nosotros</a></li>
          <li><a href="../PHP/contacts.php">Contactanos</a></li>
          <li><a href="publicaciones">Publicaciones</a></li>
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






      <section class="section__container certifications__container" id="certifications"></section>
      <div class="certifications_text">
        <h2 class="section__header">Nuestras certificaciones</h2>
        <p class="section__certifications">
          Nuestro grupo de desarrollo cuenta con certificaciones las cuales los avalan como expertos en las mas recientes tecnologias.
        </p>
     </div>
      <div class="certifications__grid">
        <div class="certifications__card">
          <img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/Hamilton.png?alt=media&token=9295212f-b62e-4c55-a881-f38a02908278" alt="services" />
          <div class="certifications__card__details">
            <div>
              <!--<h4>Hamilton Medical</h4>-->
               <p>La misión es que todas las tareas de los equipos médicos sean más sencillas y que su flujo de trabajo sea aún más eficiente.  Nuestra motivación reside en una auténtica pasión y entrega por la causa. Gracias a nuestros conocimientos y a nuestro poder de innovación somos capaces de contribuir marcando realmente la diferencia.
               </p>
            </div>
          </div>
        </div>
      </div>
    </section>

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
      <script src="../JS/contact.js"></script>
</body>
</html>