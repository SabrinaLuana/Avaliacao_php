<?php

function calcular_area($comprimento, $largura){
    echo "comprimento: {$comprimento} ";
    echo "<br>";
    echo "Largura: {$largura} ";

    $a = $comprimento * $largura;

    return $a;


}



$b = calcular_area(15, 24);
echo "<br>";
echo "Area total: {$b}";

?>