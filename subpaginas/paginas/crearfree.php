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
            REGISTRA UN FREELANCER
          </h2>
          <div class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
  <!-- Página de registro -->
  <section class="register">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="register-form">
            <h2 class="section-title">Crear una cuenta</h2>
            <form action="../recursos/php/registro_freelancer.php" method="POST">
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
              <div>
              <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
              Open Modal
              </div>
            </button>
            </form>

            <p class="text-gray-600 dark:text-gray-400">
              Recuerda registrar los datos de manera correcta,
              ya que no podrás cambiarlos más adelante.
            </p>
          </div>

        </div>
      </main>
    </div>
  </div>
  <!-- Modal backdrop. This what you want to place close to the closing body tag -->
  <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal"
      @keydown.escape="closeModal"
      class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
      role="dialog" id="modal">
      <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
      <header class="flex justify-end">
        <button
          class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
          aria-label="close" @click="closeModal">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
            <path
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
        </button>
      </header>

<!-- Modal body -->
      <div class="mt-4 mb-6">
        <!-- Modal title -->
        <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
          Modal header
        </p>
        <!-- Modal description -->
        <p class="text-sm text-gray-700 dark:text-gray-400">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum et
          eligendi repudiandae voluptatem tempore!
        </p>
      </div>
      <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
        <button @click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
          Cancel
        </button>
        <button class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
          Accept
        </button>
      </footer>
    </div>
  </div>
  <!-- End of modal backdrop -->
</body>

</html>