<?php

// EJERCICIO 1.- Programa que pida la edad de 2 hermanos e informe de la diferencia de edad existente entre ambos. 
// Debes utilizar una función diferenciaEdad, que reciba las dos edades y 
// retorne en valor positivo la diferencia entre ambos.

    function diferenciaEdad($edad1, $edad2){
        return abs($edad1 -$edad2);
    }

    if (isset($_GET['edad1']) && isset($_GET['edad2'])) {
        $edad1= $_GET['edad1'];
        $edad2= $_GET['edad2'];
        echo "Edades pasadas. <br>";
    } else {
        echo "Faltan datos de las edades.";
    }

    $diferencia= diferenciaEdad($edad1, $edad2);

    echo"La diferencia de edad es de " . $diferencia . " años.";


?>