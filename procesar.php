<?php
// Capturar datos
$producto1 = $_POST['producto1'];
$precio1   = $_POST['precio1'];

$producto2 = $_POST['producto2'];
$precio2   = $_POST['precio2'];

$producto3 = $_POST['producto3'];
$precio3   = $_POST['precio3'];

// Calculos
$suma = $precio1 + $precio2 + $precio3;
$descuento = $suma * 0.16;
$total = $suma - $descuento;

// Mostrar resultados
echo "<h2>Resultados</h2>";
echo "Producto 1: $producto1 - $$precio1 <br>";
echo "Producto 2: $producto2 - $$precio2 <br>";
echo "Producto 3: $producto3 - $$precio3 <br>";

echo "Suma de precios: $$suma <br>";
echo "Descuento (16%): $$descuento <br>";
echo "<strong>Total a pagar: $$total</strong>";
?>
