<?php
    $distancia_percorrida = $_POST["distancia_percorrida"];
    $combustivel_gasto = $_POST["combustivel_gasto"];
    $consumo_medio = $distancia_percorrida / $combustivel_gasto;
    echo "Se um automóvel percorre a distância de $distancia_percorrida e gasta $combustivel_gasto litros de combustível, então esse automovel tem o consumo médio de $consumo_medio litros por km. ";
?>