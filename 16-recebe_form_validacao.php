<?php

    $nome = trim($_POST['nome']);  //trim -retira os espaços
    $interesses = $_POST['interesse'] ?? null;
    $mensagem = strip_tags($_POST['mensagem']);  //escaping

    if (empty($nome)) {
       echo "Informe o nome!<br>";
    }
    // empty($nome) -> "", 0, null, false, array()

    if (is_null($interesses)) {
        echo "Selecione pelo menos um item de interesse!<br>";
    }

    echo $mensagem;