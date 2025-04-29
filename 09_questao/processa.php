<?php 
    $valor_investido = $_POST["valor_investido"];
    $lucro_encima = $valor_investido * 0.007;
    $valor_final = $valor_investido + $lucro_encima;
    echo "Ao final do primeiro mês tendo investido esse valor, você iria obter $valor_final.";

?>