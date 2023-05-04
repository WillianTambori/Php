<?php

function calcularMedia($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return($media);
}

function convertCelsius($fahrenheit){
    $celsius = ($fahrenheit - 32) * (5/9);
    return($celsius);
}

$n1 = 7.25;
$n2 = 8.5;
$n3 = 10.0;
$result = calcularMedia($n1, $n2, $n3);
echo "Resultado Média" . $result;

?>
