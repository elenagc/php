<?php
print " <br>Imprimir los números pares del 2 al 20";
for ($i = 2; $i <= 20; $i += 2) {
    print $i . " ";
}
// Resultado: 2 4 6 8 10 12 14 16 18 20


// Calcular el factorial de un número (por ejemplo, 5!)
print " <br>Calcular el factorial de un número (por ejemplo, 5!)";
$n = 5;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

print "El factorial de $n es: $factorial";
// Resultado: El factorial de 5 es: 120


// Imprimir la tabla de multiplicar del 7
print " <br>Imprimir la tabla de multiplicar del 7";
$numero = 7;
for ($i = 1; $i <= 10; $i++) {
    print "$numero x $i = " . ($numero * $i) . "<br>";
}

print " <br>Calcular la suma de los primeros 50 números naturales";
// Calcular la suma de los primeros 50 números naturales
$suma = 0;
for ($i = 1; $i <= 50; $i++) {
    $suma += $i;
}

print "La suma de los primeros 50 números naturales es: $suma";
// Resultado: La suma de los primeros 50 números naturales es: 1275
print " <br>Imprimir un patrón de estrellas";
$filas = 5;

for ($i = 1; $i <= $filas; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        print "* ";
    }
    print "<br>";
}
/*
Resultado:
*
* *
* * *
* * * *
* * * * *
*/
?>