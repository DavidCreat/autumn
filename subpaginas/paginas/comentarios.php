<?php
if (isset($_SESSION['rol'])) {
} else {
    // Si no hay sesión iniciada o no se ha establecido un rol, redirecciona al formulario de inicio de sesión
    header("Location: ../../login.php");
    exit();
}

?>

<main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            REALIZA TU COMENTARIO
          </h2>

          <!-- Big section cards -->
          <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            ¿Que es esta sección?.
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <p class="text-sm text-gray-600 dark:text-gray-400">
            Hola 👋🏼, Aqui podras realizar tu cómentario según tu experiencia usando nuestra plataforma.
            </p>
          </div>

          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
          <!--ZONA DE COMENTARIO PRIVADO-->
          <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Realiza tu sigerencia:
          </h4></label>
          <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
              Realiza tu sugerencia, nosotros la tendremos encuenta:
              </h4>
              <form method="POST" action="procesar_comentario.php">
                    <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nombre:</span>
                    <input type="text" id="nombre" name="nombre" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Puedes poner un nombre anonimo si quieres" />
                  </label>

                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Correo:</span>
                    <input type="email" id="email" name="email" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Tu correo para poder contactarnos luego" />
                  </label>

                  <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Message</span>
                  <textarea id="comentario" name="comentario" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                </label>
                  
                <div class="px-6 my-6">
                  <button type="submit" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                    <span>Enviar</span>
                    <span class="ml-2" aria-hidden="true">📤</span>
                  </button>
                </div>
                  
                  
              </form>
            </div>
          </div>
            <!--ZONA DE COMENTARIO PUBLICO-->
            <div class="min-w-0 p-4 text-white bg-orange-600 rounded-lg shadow-xs">
              <h4 class="mb-4 font-semibold">
                Realiza un comentario, para que los demas vean:
              </h4>
              <form method="POST" action="procesar_comentario_publico.php">
              <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nombre:</span>
                    <input type="text" id="nombre" name="nombre" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Puedes poner un nombre anonimo si quieres" />
                  </label>

                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Correo:</span>
                    <input type="email" id="email" name="email" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Tu correo para poder contactarnos luego" />
                  </label>

                  <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Message</span>
                  <textarea id="comentario" name="comentario" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                </label>
                  
                <div class="px-6 my-6">
                  <button type="submit" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                    <span>Enviar</span>
                    <span class="ml-2" aria-hidden="true">📤</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>