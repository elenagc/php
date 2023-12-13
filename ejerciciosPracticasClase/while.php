<?php
// Imprimir números del 1 al 10 usando un bucle while
$contador = 1;

while ($contador <= 10) {
    print $contador . " ";
    $contador++;
}
// Resultado: 1 2 3 4 5 6 7 8 9 10
print "<br>";


// Calcular la suma de los números naturales hasta que la suma sea mayor que 50
$suma = 0;
$numero = 1;

while ($suma <= 50) {
    $suma += $numero;
    $numero++;
}

print "La suma de los números es: $suma";
print "<br>";
// Resultado: La suma de los números es: 55

// Contador regresivo desde 10 hasta 1
$contador = 10;

while ($contador >= 1) {
   print $contador . " ";
    $contador--;
}
// Resultado: 10 9 8 7 6 5 4 3 2 1
?>