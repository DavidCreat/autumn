<?php
if (isset($_SESSION['rol'])) {
} else {
    // Si no hay sesión iniciada o no se ha establecido un rol, redirecciona al formulario de inicio de sesión
    header("Location: ../../login.php");
    exit();
}

// Conexión a la base de datos (código para establecer la conexión)

// Consulta para obtener los usuarios que son freelancers
$consulta = "SELECT usuarios.id_usuario, usuarios.nombre
             FROM usuarios
             LEFT JOIN freelancers ON usuarios.id_usuario = freelancers.id_usuario
             WHERE usuarios.id_rol = '3'";

$resultado = mysqli_query($conn, $consulta);

// Arreglo para almacenar los usuarios
$usuarios = array();
while ($row = mysqli_fetch_assoc($resultado)) {
    $usuarios[] = $row;
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
                                <form action="../recursos/php/activar_freelancer.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="descripcion" placeholder="descripcion">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="categoria" placeholder="categoria">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="dinero" placeholder="dinero">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cobro" placeholder="cobro">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="imagen" placeholder="img">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="top" placeholder="top">
                                    </div>
 <div class="form-group">
    <label for="rol">Selecciona el freelancer a activar:</label>
    <select class="form-control" name="rol" id="rol">
        <option value="3">Freelancer</option>
        <?php foreach ($usuarios as $usuario) { ?>
            <option value="<?php echo $usuario['id_usuario']; ?>"><?php echo $usuario['nombre']; ?></option>
        <?php } ?>
    </select>
</div>
                                    <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                                        Registra!
                                    </button>
                                </form>

                                <p class="text-gray-600 dark:text-gray-400">
                                    Recuerda registrar los datos de manera correcta,
                                    ya que no podrás cambiarlos más adelante.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
