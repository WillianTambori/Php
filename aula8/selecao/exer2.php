<?php

    $np1 = 8.5;
    $np2 = 9.5;

    $mf = ($np1 + $np2) / 2;
    echo "Sua média final: " . $mf;

    if($mf >= 5.0){
        echo "<br>Aprovado!";
    }
    else{
        echo "<br>Reprovado!";
    }

?>