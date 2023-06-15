<?php
  if (isset($_SESSION['rol'])) {
  } else {
    // Si no hay sesión iniciada o no se ha establecido un rol, redirecciona al formulario de inicio de sesión
    header("Location: ../../login.php");
    exit();
  }

  // Obtener el ID del freelancer seleccionado de la URL
  if (isset($_GET['id'])) {
    $freelancerId = $_GET['id'];

    // Consulta SQL para obtener la información del freelancer seleccionado
    $freelancerQuery = "SELECT *
                     FROM usuarios
                     LEFT JOIN freelancers ON usuarios.id_usuario = freelancers.id_usuario
                     WHERE freelancers.id_freelancer = $freelancerId";

    $freelancerResult = mysqli_query($conn, $freelancerQuery);
    $freelancerData = mysqli_fetch_assoc($freelancerResult);
  } else {
    // Si no se proporciona un ID válido, redirecciona a la página de selección de freelancers
    header("Location: ../subpaginas/index.php");
    exit();
  }
?>
<main class="h-full overflow-y-auto">
    <div class="container grid px-6 mx-auto">
      <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        ZONA DE PAGO
      </h2>
<body>

  <!-- PAGO -->
  <div class="model">
    <div class="room">
      <div class="text-cover">
        <h1><?php echo $freelancerData["nombre"]; ?></h1>
        <p class="price"><span><?php echo $freelancerData["cobro"]; ?> USD</span></p>
        <hr>
        <p>Sobre mi:</p>
        <p><?php echo $freelancerData["descripcion"]; ?></p>
      </div>
    </div><div class="payment">
      <div class="receipt-box">
        <h3>INFORMACION DE COBRO</h3>
        <table class="table">
          <tr>
            <td>DESCUENTO: </td>
            <td>0 USD</td>
          </tr>
          <tr>
            <td>TOTAL A PAGAR: </td>
            <td><?php echo $freelancerData["cobro"]; ?> USD</td>
          </tr>
          <tr>
            <td>IVA: </td>
            <td>NO APLICA</td>
          </tr>
          <tfoot>
            <tr>
              <td>TOTAL VALOR + IVA:</td>
              <td><?php echo $freelancerData["cobro"]; ?>  USD</td>
            </tr>
            <td><a href="../subpaginas/index.php">CANCELAR PAGO ❎</a></td>
          </tfoot>
        </table>
      </div>
      <div class="payment-info">
        <h3>METODO DE PAGO PAYPAL</h3>
        <?php include "../recursos/php/paypal.php";?>
      </div>
    </div>
  </div>
</div>
</main>
</body>