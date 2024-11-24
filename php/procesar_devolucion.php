<?php
$host = 'localhost';
$user = 'root'; // Reemplaza con tu usuario de MySQL
$password = ''; // Reemplaza con tu contraseña de MySQL
$dbname = 'galletitas_db'; // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$numeroSeguimiento = $_POST['numeroSeguimiento'];
$quienAbrio = $_POST['quienAbrio'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen']['name']; // Aquí puedes guardar la imagen si es necesario

$sql = "INSERT INTO devoluciones (numeroSeguimiento, quienAbrio, descripcion, imagen) 
        VALUES ('$numeroSeguimiento', '$quienAbrio', '$descripcion', '$imagen')";

if ($conn->query($sql) === TRUE) {
    echo "Devolución registrada con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
