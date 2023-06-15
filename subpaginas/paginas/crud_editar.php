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
        <td class="px-4 py-3 text-sm">
          <?php echo $row['cobro']; ?>
        </td>
        <td class="px-4 py-3 text-xs">
          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
            <?php echo $row['activo']; ?>
          </span>
        </td>
        <td class="px-4 py-3 text-sm">
          <?php echo $row['top']; ?>
        </td>
        <td class="px-4 py-3">
          <div class="flex items-center space-x-4 text-sm">
            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-orange-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Editar">
              <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
              </svg>
            </button>
            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-orange-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Eliminar">
              <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
              </svg>
            </button>
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