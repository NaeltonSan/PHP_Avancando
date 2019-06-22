<?php

    // echo $_GET['planeta'];
    // echo "<br>";
    // echo $_GET['cor'];

    // ?planeta=Terra&cor=azul   Query String


    // validando o GET
    $planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

    if ($planeta != false) {
        
        echo $planeta;
    }
    else {
        echo " Planeta não informado";
    }

    echo "<br>";
    // outra forma de validação do GET (php 7.0+)
    $cor = $_GET['cor'] ?? "Cor não informada!";

    echo $cor;
    //coalesce
?>