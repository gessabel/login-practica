<?php

// Detalles de la conexión a la base de datos
$servername = "localhost"; // Cambiar según el servidor de tu base de datos
$username = "root"; // Cambiar por tu nombre de usuario de MySQL
$password = ""; // Cambiar por tu contraseña de MySQL
$database = "bdusuario"; // Cambiar si el nombre de tu base de datos es diferente

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";

// Ahora puedes ejecutar consultas SQL y trabajar con la base de datos
?>