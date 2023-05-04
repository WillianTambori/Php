<?php
    function adicao($num1, $num2){
        $result = $num1 + $num2;
        return($result);
    }

    function subtracao($num1, $num2){
        $result = $num1 - $num2;
        return($result);
    }

    function multiplicacao($num1, $num2){
        $result = $num1 * $num2;
        return($result);
    }

    function divisao($num1, $num2){
        $result = $num1 / $num2;
        return($result);
    }
    function convertCelsius($fahrenheit){
        $celsius = ($fahrenheit - 32) * (5/9);
        return($celsius);
    }
    function convertFahrenheit($celsius){
        $fahrenheit = ($celsius * (9/5)) + 32;
        return($fahrenheit);
    }
    function metros($v){
        $result = $v / 100;
        return($result);
    }
    function centimetros($v){
        $result = $v * 100;
        return($result);
    }
?>
