<?php
if (isset($_SESSION['rol'])) {
} else {
  // Si no hay sesión iniciada o no se ha establecido un rol, redirecciona al formulario de inicio de sesión
  header("Location: ../../login.php");
  exit();
}

?>
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Tables
</h2>

      <!-- With actions -->
      <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Table with actions
      </h4>
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
  <thead>
    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
      <th>ID</th>
      <th class="px-4 py-3">IMG</th>
      <th class="px-4 py-3">Nombre</th>
      <th class="px-4 py-3">Descripción</th>
      <th class="px-4 py-3">Categoria</th>
      <th class="px-4 py-3">Cobro</th>
      <th class="px-4 py-3">Estado</th>
      <th class="px-4 py-3">top</th>
      <th class="px-4 py-3">rol</th>
      <th class="px-4 py-3">Acciones</th>
    </tr>
  </thead>
  <?php
  $viewDatauser = mysqli_query($conn, $consulta);
  while ($row = mysqli_fetch_assoc($viewDatauser)) {
  ?>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      <tr class="text-gray-700 dark:text-gray-400">
        <td><?php echo $row['id_freelancer']; ?></td>
        <td class="px-4 py-3">
          <div class="flex items-center text-sm">
            <!-- Avatar with inset shadow -->
            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <?php
                if ($row['imagen'] !== null) {
                  // Si hay una URL de imagen en la base de datos, muestra la imagen
                ?>
                  <img src="<?php echo $row['imagen']; ?>" alt="Imagen de la tienda">
                <?php
                } else {
                  // Si no hay una URL de imagen, muestra un marcador de posición o un mensaje de imagen no disponible
                ?>
                  <p>Imagen no disponible</p>
                <?php
                }
                ?>
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
            </div>
          </div>
        </td>
        <td>
          <div>
            <input type="text" value="<?php echo $row['nombre']; ?>" name="nombre" required="">
          </div>
        </td>
        <td>
          <div>
            <input type="text" value="<?php echo $row['descripcion']; ?>" name="descripcion" required="">
          </div>
        </td>
        <td>
          <div>
            <input type="text" value="<?php echo $row['categoria']; ?>" name="categoria" required="">
          </div>
        </td>
        <td>
          <div>
            <input type="text" value="<?php echo $row['cobro']; ?>" name="cobro" required="">
          </div>
        </td>
        <td class="px-4 py-3 text-xs">
          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
            <?php echo $row['activo']; ?>
          </span>
        </td>
        <td>
          <div>
            <input type="text" value="<?php echo $row['top']; ?>" name="top" required="">
          </div>
        </td>

        <td>
          <div>
            <input type="text" value="<?php echo $row['id_rol']; ?>" name="rol" required="">
          </div>
        </td>
        <td class="px-4 py-3">
          <div class="flex items-center space-x-4 text-sm">
            <div class="flex items-center space-x-4 text-sm">
            <a class="badge bg-warning text-dark" href="../recursos/php/crud_validacion.php">Confirmar</a>-
            <a class="badge bg-danger text-dark" href="../paginas/crud.php">Cancelar</a>
          </div>
          </div>
        </td>
      </tr>
    </tbody>
  <?php
  }
  ?>
</table>


      </ul>
      </nav>
      </span>
      </div>
    </div>
  </div>
</main>
</div>
</div>
</body>

</html>