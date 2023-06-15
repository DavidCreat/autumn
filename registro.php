<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="recursos/css/login.css">
  <link rel="stylesheet" href="recursos/css/registro.css">


  <title>Registrarse</title>
  <link rel="shortcut icon" href="recursos/img/icon.png" />

</head>

<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="recursos/img/logo.png" alt="Logo de la empresa">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Página de registro -->
  <section class="register">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="register-form">
            <h2 class="section-title">Crear una cuenta</h2>
            <form action="recursos/php/registro.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="correo" placeholder="Correo electrónico">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="confirmar_contrasena" placeholder="Confirmar contraseña">
              </div>
              <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
            <p class="login-link">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pie de página -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p>&copy; By David Fonseca</p>
        </div>
      </div>
    </div>
  </footer>

  <!--SCRIPTS-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>