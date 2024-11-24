document.getElementById('verificacionPagoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var transaccionID = document.getElementById('transaccionID').value;

    // Simulación de verificación (para fines de demostración)
    var transaccionesValidas = ['12345', '67890', '11223']; // Transacciones simuladas válidas

    if (transaccionesValidas.includes(transaccionID)) {
        document.getElementById('resultado').textContent = 'Transacción verificada con éxito.';
        document.getElementById('resultado').style.color = 'green';
    } else {
        document.getElementById('resultado').textContent = 'Número de transacción no válido.';
        document.getElementById('resultado').style.color = 'red';
    }
});
