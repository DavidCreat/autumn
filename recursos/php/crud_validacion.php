<?php
if (isset($_SESSION['rol'])) {
} else {
  // Si no hay sesión iniciada o no se ha establecido un rol, redirecciona al formulario de inicio de sesión
  header("Location: ../../subpaginas/crud.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtén los valores actualizados del formulario
  $idFreelancer = $_POST['rol'];
  $idrol = $_POST['idrol'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $categoria = $_POST['categoria'];
  $cobro = $_POST['cobro'];
  $top = $_POST['top'];

  // Consulta SQL para actualizar los datos del freelancer
  $sqlUpdate = "UPDATE freelancers
                SET descripcion = '$descripcion', categoria = '$categoria', cobro = $cobro, top = $top, id_rol = $idrol
                WHERE id_freelancer = $idFreelancer";

  if ($conn->query($sqlUpdate) === true) {
    echo "Actualización exitosa";
  } else {
    echo "Error al actualizar los datos del freelancer: " . $conn->error;
  }
}
?>
