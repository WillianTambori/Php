<?php

require 'funcoesCalculo.php';
$resultado = "";
session_start(); //Iniciando a session

if(!empty($_POST['inputNum1']) && !empty($_POST['inputNum2'])){

    $numero1 = $_POST['inputNum1'];
    $numero2 = $_POST['inputNum2'];

    if($_POST['selectOperacoes'] == "adicao"){
        $resultado = $numero1 . " + " . $numero2 . " = " . adicao($numero1,$numero2);
    }
    else if($_POST['selectOperacoes'] == "subtracao"){
        $resultado = $numero1 . " - " . $numero2 . " = " . subtracao($numero1,$numero2);
    }
    else if($_POST['selectOperacoes'] == "multiplicacao"){
        $resultado = $numero1 . " x " . $numero2 . " = " . multiplicacao($numero1,$numero2);
    }
    else if($_POST['selectOperacoes'] == "divisao"){
        $resultado = $numero1 . " / " . $numero2 . " = " . divisao($numero1,$numero2);
    }

    $_SESSION['resultado'] = $resultado;
    header('location:../index.php');    
    die();
}
if(!empty($_POST['inputTemp'])){
    
    
    $temperatura = $_POST['inputTemp'];
    
    if($_POST['selectOperacoes'] == "CParaF"){
        $resultado = "Resultado de Celsius para Fahrenheit é ". convertFahrenheit($temperatura);
        
    }
    else if($_POST['selectOperacoes'] == "FParaC"){
        $resultado = "Resultado de Fahrenheit para Celsius é ".convertCelsius($temperatura);
        
    }
    $_SESSION['resultado'] = $resultado;
    header('location:../temperatura.php');
    die();
}
if(!empty($_POST['inputMedida'])){
    
    
    $medida = $_POST['inputMedida'];
    
    if($_POST['selectOperacoes'] == "CmParaM"){
        $resultado = "Resultado de centimetros para metros é ". metros($medida);
        
    }
    else if($_POST['selectOperacoes'] == "MParaCm"){
        $resultado = "Resultado de metros para centimetros é ".centimetros($medida);
        
    }
    $_SESSION['resultado'] = $resultado;
    header('location:../conversor.php');
    die();
   
}



?>
