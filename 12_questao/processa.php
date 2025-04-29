<?php 
    $custo_fabrica = $_POST["custo_fabrica"];
    $imposto = $custo_fabrica * 0.45;
    $porcentagem_distribuidor = $custo_fabrica * 0.28;
    $custo_consumidor = $custo_fabrica + $imposto + $porcentagem_distribuidor;
    echo "O custo final do carro para o consumidor é $custo_consumidor";
?>