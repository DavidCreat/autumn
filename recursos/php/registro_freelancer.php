<?php

// Aquí se envían los datos a la base de datos
        require_once 'db_freelance.php';
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    // Validar los datos (puedes agregar más validaciones según tus requisitos)
    if (empty($nombre) || empty($email) || empty($contrasena) || empty($confirmar_contrasena)) {
        echo "Por favor, complete todos los campos.";
    } elseif ($contrasena !== $confirmar_contrasena) {
        echo "Las contraseñas no coinciden.";
    } else {

        // Insertar los datos en la tabla usuarios
        $sql = "INSERT INTO usuarios (nombre, email, contrasena, activo, id_rol) VALUES ('$nombre', '$email', '$contrasena', 1, 3)";

        if ($conn->query($sql) === true) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
            header("Location: ../../subpaginas/paginas/modals.php ");
            exit();
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
            header("Location: ../../subpaginas/paginas/modals.php");
            exit();
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>
