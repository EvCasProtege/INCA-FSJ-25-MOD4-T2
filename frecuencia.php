<?php 

function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    $longitud = strlen($cadena);
    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}

$texto = "hola mundo";
$frecuencia = frecuenciaCaracteres($texto);
print_r($frecuencia);


?>