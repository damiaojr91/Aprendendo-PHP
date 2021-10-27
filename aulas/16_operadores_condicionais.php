<?php
    
    $numero = 2021;

    //Exemplo 01 de IF, ELSEIF e ELSE
    if ($numero == 20){
        echo 'Vinte';
        echo '<br>';
    } elseif ($numero == 21){
        echo 'Vinte e um';
        echo '<br>';
    } elseif ($numero == 202){
        echo 'Duzentos e dois';
        echo '<br>';
    } else {
        echo 'Não foi possível encontrar o número na base de dados.';
    };