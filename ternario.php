<?php

    $media = 7; 
    $media_recuperacao = 5;
    $frequancia = 70;

    $media_aluno = 4.9;
    $frequancia_aluno = 70;

    $reprovado_por_faltas = $frequancia_aluno < $frequancia ? true : false;

    if (!$reprovado_por_faltas) {
        
        if ($media_aluno < $media_recuperacao) {
            echo "Reprovado!";
        } elseif ($media_aluno < $media) {
            echo " Recuperação!";
        }
        else {
            echo "Aprovado!";
        }
        
    } else {
        echo " Reprovado por faltas!";
    }
    
?>