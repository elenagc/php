<?php
// Verificar si un número es par o impar
$numero = 7;

if ($numero % 2 == 0) {
    echo "$numero es un número par.";
} else {
    echo "$numero es un número impar.";
}
// Resultado: 7 es un número impar

// Determinar la calificación de un estudiante
$nota = 7;

if ($nota >= 9) {
    echo "Calificación: Sobresaliente";
} elseif ($nota >= 7) {
    echo "Calificación: Notable";
} elseif ($nota >= 6) {
    echo "Calificación: Bien";
} elseif ($nota >= 5) {
    echo "Calificación: Suficiente";
} else {
    echo "Calificación: Suspenso";
}
// Resultado: Calificación: C

// Validar una contraseña
$contrasena = "secreta123";

if (strlen($contrasena) >= 8 && preg_match('/[A-Za-z]/', $contrasena) && preg_match('/[0-9]/', $contrasena)) {
    echo "Contraseña válida.";
} else {
    echo "Contraseña inválida. Asegúrate de que tenga al menos 8 caracteres, letras y números.";
}


// Verificar la categoría de edad
$edad = 25;

if ($edad < 18) {
    echo "Eres menor de edad.";
} elseif ($edad >= 18 && $edad < 65) {
    echo "Eres adulto.";
} else {
    echo "Eres un adulto mayor.";
}
// Resultado: Eres adulto.


// Determinar el tipo de triángulo según sus lados
$lado1 = 3;
$lado2 = 4;
$lado3 = 5;

if ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "Triángulo equilátero: todos los lados son iguales.";
} elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    echo "Triángulo isósceles: dos lados son iguales.";
} else {
    echo "Triángulo escaleno: todos los lados son diferentes.";
}
// Resultado: Triángulo escaleno: todos los lados son diferentes.

?>