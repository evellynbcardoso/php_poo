<?php

$peso = 60;
$altura = 1.60;

$imc = $peso / ($altura * $altura);

echo "<h3> Seu IMC é : ". number_format($imc,2) . "</h3>";

if($imc < 18.5){
    echo "Clasifique peso: Abaixo do peso";
} elseif($imc < 24.9){
    echo"Clasifique peso: Normal";
} elseif($imc < 29.9){
    echo"Clasifique peso: Sobrepeso";
} elseif($imc < 34.9){
    echo"Clasifique peso: Obesidade grau 1";
}elseif($imc < 30.9){
    echo"Clasifique peso: Obesidade grau 2 ";
}else{
    echo "Clasifique peso : Obesidade grau 3 ";
}

