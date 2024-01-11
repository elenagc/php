<?php

// Obtener el día de la semana y la hora actual
$diaSemana = date("N"); // 1 (lunes) a 7 (domingo)
$horaActual = date("G"); // 0 a 23 horas
print "Este es el día de la semana :".$diaSemana."<br>";
print "Este es la hora actual :".$horaActual."<br>";

// Determinar si es probable que haya tráfico
//1. Comprueba si el día es laboral
//2. Si la hora se encuentra entre las 7-9 de la mañana y las 17-19 de la tarde 
if (($diaSemana >= 1 && $diaSemana <= 5) && (($horaActual >= 7 && $horaActual < 9) || ($horaActual >= 17 && $horaActual < 19))) {
    $mensaje = "Es probable que haya tráfico ahora.";
} else {
    $mensaje = "No es probable que haya tráfico en este momento.";
}

// Mostrar el resultado
print $mensaje;

?>