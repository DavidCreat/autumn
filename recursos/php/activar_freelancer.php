<?php

// Aquí se envían los datos a la base de datos
        require_once 'db_freelance.php';
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario

    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $dinero = $_POST['dinero'];
    $cobro = $_POST['cobro'];
    $imagen = $_POST['imagen'];
    $top = $_POST['top'];
    $idusuario = $_POST['rol'];

    // Validar los datos (puedes agregar más validaciones según tus requisitos)
    if (empty($idusuario) || empty($descripcion) || empty( $categoria) || empty($dinero) || empty($cobro) || empty($imagen) || empty($top)) {
        echo "Por favor, complete todos los campos.";
    } else {

$sqlFreelancer = "INSERT INTO freelancers (id_usuario, descripcion, categoria, dinero, cobro, imagen, top) VALUES ($idusuario, '$descripcion', '$categoria', $dinero, $cobro, '$imagen', $top)";

        if ($conn->query($sqlFreelancer) === true) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
            header("Location: ../../subpaginas/crearfree.php ");
            exit();
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
            header("Location: ../../subpaginas/crearfree.php");
            exit();
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>