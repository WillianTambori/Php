<?php
    $idade = 18; //Exemplo de idade digitada
    //Entrada válida: Idade minima 1 e máxima maiores de 60
    if($idade >= 1 && $idade <= 9){
        echo "Criança";
    }
    else if($idade >= 10 && $idade <= 12){
        echo "Pré-adolescente";
    }
    else if($idade >= 13 && $idade <= 17){
        echo "Adolescente";
    }    
    else if($idade >= 18 && $idade <= 59){
        echo "Adulto";
    }
    else if($idade >= 60){
        echo "Idoso";
    }
?>

