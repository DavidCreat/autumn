<?php
require_once 'recursos/php/db_freelance.php';
// Consultar todos los usuarios con el rol "3"
$consulta = "SELECT *
             FROM usuarios
             LEFT JOIN freelancers ON usuarios.id_usuario = freelancers.id_usuario
             WHERE usuarios.id_rol = '3'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contratación de Servicios de Freelancers</title>
  <link rel="shortcut icon" href="recursos/img/icon.png" />
  <!-- Enlaces a los archivos CSS de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Enlaces a tus propios archivos CSS personalizados -->
  <link rel="stylesheet" href="recursos/css/index.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="recursos/img/logo.png" alt="Logo de la empresa">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
        </ul>
        <span class="navbar-text">
          La transicion a una nueva forma de contratar servicios
        </span>
      </div>
    </div>
  </nav>

  <!-- Hero section -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="hero-title">Encuentra el Freelancer perfecto para tu proyecto</h1>
          <p class="hero-description">Explora nuestra comunidad de talentosos freelancers y contrata servicios de alta calidad.</p>
          <a href="registro.php" class="btn btn-primary">Regístrate</a>
        </div>
        <div class="col-lg-6">
          <div id="videoPlayer"></div>
          <script src="recursos/js/video.js"></script>
        </div>
      </div>
    </div>
  </section>

  <!-- Otros elementos y secciones de la página -->

  <!-- Sección de servicios -->
<section id="servicios" class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Descubre nuestros servicios</h2>
          <p class="section-description">Explora una amplia gama de servicios ofrecidos por nuestros talentosos freelancers.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item">
            <img src="recursos/img/diseñador.png" alt="Servicio 1" class="img-fluid">
            <h4 class="service-title">Diseño gráfico</h4>
            <p class="service-description">Servicios profesionales de diseño gráfico para crear logotipos, banners, y más.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item">
            <img src="recursos/img/webdev.png" alt="Servicio 2" class="img-fluid">
            <h4 class="service-title">Desarrollo web</h4>
            <p class="service-description">Desarrollo de sitios web personalizados y optimizados utilizando las últimas tecnologías.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item">
            <img src="recursos/img/team.png" alt="Servicio 3" class="img-fluid">
            <h4 class="service-title">Redacción de contenido</h4>
            <p class="service-description">Creación de contenido original y atractivo para blogs, páginas web y redes sociales.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--FRELANCERS DESTACADOS-->
    <!-- Sección de freelancers destacados -->
<section class="freelancers">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Nuestro talentoso equipo de freelancers</h2>
          <p class="section-description">Conoce a algunos de nuestros freelancers destacados que están listos para ayudarte con tus proyectos.</p>
        </div>
      </div>

      <?php
      $viewDatauser = mysqli_query($conn, $consulta);
      while ($row = mysqli_fetch_assoc($viewDatauser)) {
        if ($row['top'] == 1) {
      ?>
      <div class="row">
        <div class="col-lg-4">
          <div class="freelancer-item">
          <?php
          if ($row['imagen'] !== null) {
            // Si hay una URL de imagen en la base de datos, muestra la imagen
            ?>
            <img src="<?php echo $row['imagen']; ?>" alt="<?php echo $row['nombre']; ?>" class="img-fluid">
            <?php
          } else {
            // Si no hay una URL de imagen, muestra un marcador de posición o un mensaje de imagen no disponible
            ?>
            <p>Imagen no disponible</p>
            <?php
          }
          ?>
            <h3 class="freelancer-name"><?php echo $row["nombre"]; ?></h3>
            <h4 class="freelancer-name"><?php echo $row["categoria"]; ?></h4>
            <p class="freelancer-description"><?php echo $row["descripcion"]; ?></p>
          </div>
        </div><?php } }?>

      </div>
    </div>
  </section>

  <!--Ultimos proyectos realizador por los freelancers-->
    <!-- Sección de últimos proyectos -->
<section class="latest-projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Últimos proyectos realizados</h2>
          <p class="section-description">Echa un vistazo a algunos de los proyectos recientes completados por nuestros talentosos freelancers.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="project-item">
            <img src="recursos/img/project1.jpg" alt="Proyecto 1" class="img-fluid">
            <h4 class="project-title">Diseño de logotipo para empresa de tecnología</h4>
            <p class="project-description">Cliente: Empresa ABC</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="project-item">
            <img src="recursos/img/project2.jpg" alt="Proyecto 2" class="img-fluid">
            <h4 class="project-title">Desarrollo de sitio web para tienda online</h4>
            <p class="project-description">Cliente: Tienda XYZ</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="project-item">
            <img src="recursos/img/project3.jpg" alt="Proyecto 3" class="img-fluid">
            <h4 class="project-title">Creación de contenido para blog de viajes</h4>
            <p class="project-description">Cliente: Blog</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Sección de testimonios -->
<section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Testimonios de nuestros clientes</h2>
        <p class="section-description">Lee lo que nuestros clientes tienen que decir sobre sus experiencias trabajando con nuestros freelancers.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="testimonial-slider">
          <div class="testimonial-item">
            <div class="testimonial-content">
              <p>"¡Increíble experiencia! El freelancer que contraté superó mis expectativas y entregó un trabajo de alta calidad en tiempo récord."</p>
            </div>
            <div class="testimonial-author">
              <h5>John Doe</h5>
              <p>CEO, Empresa XYZ</p>
            </div>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-content">
              <p>"Recomiendo altamente los servicios de esta plataforma. Encontré al freelancer perfecto para mi proyecto y la comunicación fue excelente desde el principio."</p>
            </div>
            <div class="testimonial-author">
              <h5>Jane Smith</h5>
              <p>Propietaria de un negocio</p>
            </div>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-content">
              <p>"Gracias a esta plataforma, pude encontrar a un experto en marketing digital que me ayudó a impulsar mi negocio. ¡Estoy muy satisfecho con los resultados!"</p>
            </div>
            <div class="testimonial-author">
              <h5>Robert Johnson</h5>
              <p>Emprendedor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!--SECCION DE CONTACTO-->
    <!-- Sección de contacto -->
<section id="contacto" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Contáctanos</h2>
          <p class="section-description">Si tienes alguna pregunta o deseas contratar nuestros servicios, no dudes en contactarnos.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Correo electrónico">
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Pie de página -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>Información de contacto</h4>
          <ul>
            <li><i class="fa fa-phone"></i> +1 123 456 7890</li>
            <li><i class="fa fa-envelope"></i> info@example.com</li>
            <li><i class="fa fa-map-marker"></i> 123 Calle Principal, Ciudad, País</li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4>Enlaces útiles</h4>
          <ul>
            <li><a href="#">Acerca de nosotros</a></li>
            <li><a href="#">Términos y condiciones</a></li>
            <li><a href="#">Política de privacidad</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4>Síguenos en las redes sociales</h4>
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <p>&copy; By David Fonseca</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts de Bootstrap y archivos JavaScript personalizados -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>