<?php 
    $valor_custo = $_POST["valor_custo"];
    $porcentagem_lucro = $_POST["porcentagem_lucro"]/ 100;
    $lucro = $porcentagem_lucro * $valor_custo;
    $valor_venda = $valor_custo + $lucro;
    echo "O valor de venda do produto é $valor_venda"; 
?>