<?php

    $media = 7;
    $frequencia = 75;

    $media_aluno = 6;
    $frequencia_aluno = 80;

    if ($media_aluno >= $media || $frequencia_aluno >= $frequencia) {
        echo " Aprovado!";
    } else {
        echo " Reprovado";
    }
    
    echo "<br>";

    $chovendo = true;

    if (!$chovendo) {
        echo "Vou ficar em casa";
    } else {
        echo "Vou para praia";
    }

?>