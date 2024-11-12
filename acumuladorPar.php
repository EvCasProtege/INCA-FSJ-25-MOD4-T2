<?php 

function acumuladorPar($array) {
    $suma = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

$numeros = [1, 2, 3, 4, 5, 6];
$sumaPares = acumuladorPar($numeros);
echo "La suma de los números pares es: $sumaPares";


?>