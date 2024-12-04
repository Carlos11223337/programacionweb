<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario
    $voltaje = floatval($_POST['voltaje']);
    $carga = floatval($_POST['carga']);
    $masa = floatval($_POST['masa']);

    // Calcular la energía adquirida (E_k = q * V)
    $energia = $carga * $voltaje;

    // Calcular la velocidad (v = sqrt(2 * E_k / m))
    $velocidad = sqrt((2 * $energia) / $masa);

    // Redirigir a index.php con los resultados
    header("Location: index.php?energia=" . urlencode($energia) . "&velocidad=" . urlencode($velocidad));
    exit();
} else {
    // Redirigir si alguien accede directamente al archivo calcula.php
    header("Location: index.php");
    exit();
}
