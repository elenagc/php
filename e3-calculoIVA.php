<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo del IVA</title>
</head>
<body>

<?php
    $precio=100;
    $iva=0.21;
    $precioiva= $precio * $iva;
    $preciofinal = $precioiva + $precio;
    
    print "<p> Este es el precio del producto $precio </p>";
    print "<p> Este es el precio del producto multiplicado por el iva $precioiva </p>";
    print "<p> Este es el precio final del producto $preciofinal </p>";

?>

</body>
</html>