<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $pedido = htmlspecialchars($_POST['pedido']);

    // Configuración del correo
    $to = "adrian.silva.reyes@gmail.com";
    $subject = "Nuevo Pedido de Asafram Orgánicos";
    $message = "Nombre: $nombre\nDirección: $direccion\nTeléfono: $telefono\nPedido:\n$pedido";
    $headers = "From: noreply@asaframorganicos.com";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Pedido enviado correctamente.'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Error al enviar el pedido. Intente nuevamente.'); window.history.back();</script>";
    }
}

