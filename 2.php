<?php

    // EJERCICIO 2.- Programa que tras leer un número entre 1 y 10, muestre su equivalente en número romano. 
    // Debes utilizar una función numRomano que reciba el número en formato decimal 
    // y lo devuelva en formato romano.

    function numRomano($num){
        $numRomanos=[

            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
            10 => 'X'
        ];

        if ($num >= 1 && $num <= 10) {
            return $numRomanos[$num];
        } else {
            echo "El número tiene que estar entre 1 y 10. <br>";
        }
                     
        
    }

    $num= $_GET['num'];
    echo "El número en romano es " . numRomano($num) . ".";


?>