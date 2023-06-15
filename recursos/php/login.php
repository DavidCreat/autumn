<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Validar los datos (puedes agregar más validaciones según tus requisitos)
    if (empty($correo) || empty($contrasena)) {
        echo "Por favor, complete todos los campos.";
    } else {
        // Incluir el archivo de conexión a la base de datos
        require_once 'db_freelance.php';

        // Verificar las credenciales del usuario en la base de datos
        $sql = "SELECT * FROM usuarios WHERE email = '$correo' AND contrasena = '$contrasena'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Inicio de sesión exitoso, redirigir al archivo index.php en la carpeta "subpaginas"
            header("Location: ../../subpaginas/index.php");

            // Obtener el rol del usuario desde la base de datos
            $rolSql = "SELECT id_rol FROM usuarios WHERE email = '$correo'";
            $rolResult = $conn->query($rolSql);

            if ($rolResult->num_rows == 1) {
                // Obtener el resultado de la consulta
                $row = $rolResult->fetch_assoc();
                $rol = $row['id_rol'];

                // Establecer el rol en la sesión
                session_start();
                $_SESSION['rol'] = $rol;
            } else {
                // Si no se puede obtener el rol, puedes asignar un valor predeterminado o mostrar un mensaje de error
                session_start();
                $_SESSION['rol'] = 'usuario';
            }

            // Cerrar la conexión
            $conn->close();
            exit();
        } else {
            echo "Correo electrónico o contraseña incorrectos.";
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>
