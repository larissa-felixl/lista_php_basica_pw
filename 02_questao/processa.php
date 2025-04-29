<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $divi = $n1 / $n2;
    echo "A soma de $n1 + $n2 é igual a $soma";
    echo "<br>";
    echo "A soma de $n1 - $n2 é igual a $sub";
    echo "<br>";
    echo "A soma de $n1 x $n2 é igual a $mult";
    echo "<br>";
    echo "A soma de $n1 / $n2 é igual a $divi";
?>