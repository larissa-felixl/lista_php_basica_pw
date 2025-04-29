<?php 
    $temperatura_celsius = $_POST["temperatura_celsius"];
    $temperatura_fahenrait = ($temperatura_celsius*9 + 160) / 5;
    echo "A temperatura no momento em fahenraits é $temperatura_fahenrait"; 
?>