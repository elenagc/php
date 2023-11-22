<?php

const IVA=0.21;

print "Nos muestra un número random entre 3 y 9=".rand(3,9);
print "<br>";
print IVA;

$numero=rand(3,9);
if($numero == 4)
{

    print "Has ganado";
}

?>