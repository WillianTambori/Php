<?php
    $codigo = 7; //Entrada código produto

    if($codigo == 5){
        echo "Categória Eletrônicos";
    }
    else if($codigo == 6 || $codigo == 7){
        echo "Categória Cama, mesa e banho";

    }
    else if($codigo == 8 || $codigo == 9){
        echo "Categória Vestuário";
    }
    else if($codigo == 10){
        echo "Categória Limpeza";
    }
    else{
        echo "Código Inválido";
    }
?>
