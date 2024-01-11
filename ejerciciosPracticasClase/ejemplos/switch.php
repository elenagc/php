<?php

//SWITCH se suele utilizar en los menus (cada opción es un número) o donde las comparaciones son sencillas (palabras, números, etc.) 
//¿se pueden poner operadores lógicos en el case?, si que se puede pero es menos común en estos casos se suele usar if-else

//Determinar el día de la semana según el número
$numeroDia = 3;

switch ($numeroDia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Número de día no válido";
}
// Resultado: Miércoles

// Determinar el tipo de animal según su nombre
$animal = "Gato";

switch ($animal) {
    case "Perro":
        echo "Es un mamífero doméstico.";
        break;
    case "Gato":
        echo "Es un felino doméstico.";
        break;
    case "Pez":
        echo "Es un animal acuático.";
        break;
    default:
        echo "No reconocemos este tipo de animal.";
}
// Resultado: Es un felino doméstico.

// Convertir número de mes a nombre de mes
$numeroMes = 9;

switch ($numeroMes) {
    case 1:
        $nombreMes = "Enero";
        break;
    case 2:
        $nombreMes = "Febrero";
        break;
    case 3:
        $nombreMes = "Marzo";
        break;
    // ... y así sucesivamente
    default:
        $nombreMes = "Número de mes no válido";
}

echo "El número $numeroMes corresponde a $nombreMes.";


// Determinar la calificación de un examen
$calificacion = 82;

switch (true) {
    case $calificacion >= 90:
        echo "A";
        break;
    case $calificacion >= 80:
        echo "B";
        break;
    case $calificacion >= 70:
        echo "C";
        break;
    case $calificacion >= 60:
        echo "D";
        break;
    default:
        echo "F";
}
// Resultado: B
?>