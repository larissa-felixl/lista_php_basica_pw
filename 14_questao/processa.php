<?php 
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    if ($numero1 > $numero2){
        echo "O maior número digitado foi $numero1";
    }elseif ($numero2 > $numero1){
        echo "O maior número digitado foi $numero2";
    }else {
        echo "Os dois números digitados são iguais";
    };
?>