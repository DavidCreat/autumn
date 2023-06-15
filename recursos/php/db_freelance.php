<?php
// Conectar a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "db_freelancer";

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar si la conexión fue exitosa
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
?>