<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Squared-Logistics | Servicio al Cliente</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <img src="assets/img/Mensajero2.png" alt="Squared-Logistics Logo">
    <h1>Servicio al Cliente</h1>
    <ul class="opciones-contacto">
      <li><a href="tel:1234567890"><i class="fas fa-phone"></i></a></li>
      <li><a href="mailto:info@squaredlogistics.com"><i class="fas fa-envelope"></i></a></li>
      <li><a href="chat.html"><i class="fas fa-comments"></i></a></li>
    </ul>
  </header>

  <section class="preguntas-frecuentes">
    <h2>Preguntas Frecuentes</h2>
    <div class="accordion">
      <div class="accordion-item">
        <h3 class="accordion-header">¿Cómo puedo rastrear mi envío?</h3>
        <div class="accordion-body">
          <p>Para rastrear su envío, ingrese el número de guía en la siguiente página:</p>
          <a href="index.php?ruta=envios/seguimiento/seguimiento">Rastrear envío</a>
        </div>
      </div>
      </div>
  </section>

  <section class="formulario-contacto">
    <h2>Contáctanos</h2>
    <form action="enviar-consulta.php" method="post">
      <input type="text" name="nombre" placeholder="Nombre" required>
      <input type="email" name="email" placeholder="Correo electrónico" required>
      <input type="tel" name="telefono" placeholder="Teléfono" required>
      <textarea name="consulta" placeholder="Escriba su consulta" required></textarea>
      <button type="submit">Enviar consulta</button>
    </form>
  </section>

  <section class="recursos">
    <h2>Recursos útiles</h2>
    <ul>
      <li><a href="guia-envios.pdf">Guía de envíos</a></li>
      <li><a href="tutoriales.html">Tutoriales</a></li>
      <li><a href="preguntas-frecuentes.html">Preguntas frecuentes</a></li>
    </ul>
  </section>

  <footer>
    <p>Copyright &copy; 2024 Squared-Logistics. Todos los derechos reservados.</p>
  </footer>
</body>
</html>
