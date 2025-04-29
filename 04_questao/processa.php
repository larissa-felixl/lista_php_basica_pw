<?php 
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $total_vendas = $_POST["total_vendas"];
    $porcentagem = 0.15 * $total_vendas;
    $salario_total = $salario + $porcentagem;
    echo "O funcionário(a) $nome, recebe $salario de salário fixo, que juntando com o percentual que ele ganha por venda gera um montate de $salario_total!";
?>