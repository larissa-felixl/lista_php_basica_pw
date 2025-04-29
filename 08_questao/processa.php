<?php 
    $valor_cotacao = $_POST["valor_cotacao"];
    $quantidade_dolares = $_POST["quantidade_dolares"];
    $valor_real = $valor_cotacao * $quantidade_dolares;
    echo "Se você têm $quantidade_dolares dólares e a cotação do dólar tiver de $valor_cotacao, então você têm $valor_real reais.";
    ?>