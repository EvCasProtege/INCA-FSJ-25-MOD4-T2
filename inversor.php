<?php 

function invertirLista($array) {
    return array_reverse($array);
}

$numeros = [1, 2, 3, 4, 5];
$invertidos = invertirLista($numeros);
print_r($invertidos);

?>