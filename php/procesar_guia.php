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

$camionID = $_POST['camionID'];
$ruta = $_POST['ruta'];
$horaSalida = $_POST['horaSalida'];
$confirmacionLlegada = isset($_POST['confirmacionLlegada']) ? 1 : 0;
$transaccionPago = $_POST['transaccionPago'];

$sql = "INSERT INTO guias_camiones (camionID, ruta, horaSalida, confirmacionLlegada, transaccionPago) 
        VALUES ('$camionID', '$ruta', '$horaSalida', '$confirmacionLlegada', '$transaccionPago')";

if ($conn->query($sql) === TRUE) {
    echo "Guía registrada con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
