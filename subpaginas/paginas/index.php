<!--Zona de información del dashboard--->
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      BIENVENIDO A 🍂AUTUMN🍂
    </h2>
  </div>
  <div class="cards-freelancer">
    <?php
    $viewDatauser = mysqli_query($conn, $consulta);
    while ($row = mysqli_fetch_assoc($viewDatauser)) {
      ?>
      <div class="card">
        <div class="card-border-top"></div>
        <div class="img">
          <?php
          if ($row['imagen'] !== null) {
            // Si hay una URL de imagen en la base de datos, muestra la imagen
            ?>
            <img src="<?php echo $row['imagen']; ?>" alt="<?php echo $row['nombre']; ?>">
            <?php
          } else {
            // Si no hay una URL de imagen, muestra un marcador de posición o un mensaje de imagen no disponible
            ?>
            <p>Imagen no disponible</p>
            <?php
          }
          ?>
        </div>
        <span><?php echo $row["nombre"]; ?></span>
        <p class="job"><?php echo $row["categoria"]; ?></p>
        <button>
          <a href="../subpaginas/pago.php?id=<?php echo $row["id_freelancer"]; ?>">Contratar 📒</a>
        </button>
      </div>
    <?php } ?>
  </div>
  <!--ZONA BAJA-->
</main>
</div>
</div>
</body>
</html>
