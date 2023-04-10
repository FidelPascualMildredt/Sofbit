<!DOCTYPE html>
<html>
  <head>
    <title>Mi Sitio Web</title>
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="ruta/de/la/imagen/logo.png" alt="Logo">
      </div>
      <nav>
        <ul>
          {{--  <li><a href="#">Inicio</a></li>  --}}
          <li><a href="#">Registro</a></li>
          <li><a href="#">Iniciar Sesión</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="main-image">
        <img src="ruta/de/la/imagen/main-image.png" alt="Imagen principal">
        <div class="main-text">
          <h1>Adquiere innovaciones tecnológicas en salud</h1>
          <h2>La industria 4.0</h2>
        </div>
      </div>
      <div class="about-us">
        <div class="about-us-text">
          <h3>¿Quiénes somos?</h3>
          <p>Somos una página que se encarga de mejorar la salud y facilitar la vida de las personas.</p>
        </div>
        <div class="about-us-image">
          <img src="ruta/de/la/imagen/about-us-image.png" alt="Imagen de quienes somos">
        </div>
      </div>
    </main>
    <footer>
      <div class="footer-logo">
        <img src="ruta/de/la/imagen/footer-logo.png" alt="Logo del footer">
      </div>
      <div class="contact-info">
        <p>Número: 555-123-4567</p>
        <p>Correo: info@misitioweb.com</p>
        <p>WhatsApp: 555-123-4567</p>
        <p>Contacto</p>
        <img src="ruta/de/la/imagen/map-image.png" alt="Imagen del mapa">
      </div>
    </footer>
  </body>
</html>
