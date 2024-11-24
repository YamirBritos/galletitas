<?php
$transaccionID = $_GET['transaccionID']; // Suponiendo que el ID de la transacción se pasa por GET

// Simulando una verificación de pago
$pagosValidos = ['12345', '67890', '11223'];

if (in_array($transaccionID, $pagosValidos)) {
    echo "Pago verificado correctamente.";
} else {
    echo "Pago no encontrado.";
}
?>
