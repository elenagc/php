<?php
// Juego simple de adivinar un número aleatorio
$numeroSecreto = rand(1, 10);
$intentos = 0;
$adivinanzaCorrecta = false;

while (!$adivinanzaCorrecta) {
    $intentoUsuario = rand(1, 10);
    //$intentos++;
    $intentos=$intentos+1;

    if ($intentoUsuario == $numeroSecreto) {
        $adivinanzaCorrecta = true;
    }
}

echo "¡Adivinaste el número en $intentos intentos!";
?>