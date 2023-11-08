<html>
    <head>
        <title>Intercambio de variables </title>
    </head>
    <body>
            <h1>Intercambio de variables </h1>

                <?php
                /* Primero declaramos las variables */
                $variable1 = "Maria";
                $variable2 = "Juan";
                $variable3 = "Pedro";
                    print "<p>La variable1 contiene a: $variable1 </p>";
                    print "<p>La variable2 contiene a: $variable2</p>";
                    print "<p>La variable3 contiene a: $variable3 </p>";
                    print "Intercambiamos las variables";
                    $variable1=$variable2;
                    $variable2=$variable3;
                    echo "el valor de la $variable1";
                    print "<p>La variable1 contiene a: ".$variable1."</p>";
                    print "<p>La variable2 contiene a: ".$variable2."</p>";
                    print "<p>La variable3 contiene a: ".$variable3."</p>";

                ?>
    </body>
</html> 