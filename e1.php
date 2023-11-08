<?php

    //Este es un script desarrollado con el lenguaje de programación php
    //Esto es un comentario
    /** Este es un comentario de varias líneas */
    /**La \n significa salto de línea, el texto debe indicarse entre comillas y siempre se termina con ; */
    // La instrucción print y echo imprimen en pantalla
    print "Hola mundo\n";
    print "\n";
    echo "Hola mundo desde echo";

    // Para definir variables se utiliza el símbolo $ y el nombre de la variable $nombreDeLaVariable
    $variable1="hola";
    //Para utilizar una variable se debe realizar una asignación, es decir, en ese registro añadimos un dato

    // Se pueden incrustrar las etiquetas de HTML dentro del script de php, no perderían su significado
    print "<h1> Vamos a mostrar la variable1 </h1>";
    print $variable1;
    $entero=345;
    $decimal=2.5;
    $booleano=true;

    print "<br>";
    //Con el punto concatenamos string o cadenas de textos
    //var_dump($variable) nos muestra el tipo de la variable
    /** Podemos tener variables de tipo entero, decimal, texto, booleano, arrays.. */
    print "el tipo del numero es:".var_dump($entero);
    print "el tipo del numero es:".var_dump($variable1);

?>