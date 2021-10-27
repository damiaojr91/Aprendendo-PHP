<?php
    
    $numero = 18;

    //Exemplo de IF, ELSEIF e ELSE
    if ($numero == 16){
        echo 'Dezesseis';
        echo '<br>';
    } elseif ($numero == 17){
        echo 'Dezessete';
        echo '<br>';
    } elseif ($numero == 18){
        echo 'Dezoito';
        echo '<br>';
    } else {
        echo 'Não foi possível encontrar o número na base de dados utilizando IF.';
        echo '<br>';
        echo '<hr>';
    };

    //Exemplo de SWITCH da mesma situação
    /*
        O Switch é utilizado para verificações extensas onde as condições são sempre parecidas.
    */
    switch ($numero){
        case $numero == 12;
            echo 'Doze';
            echo '<br>';
        break;

        case $numero == 13;
            echo 'Treze';
            echo '<br>';
        break;

        case $numero == 14;
            echo 'Quatorze';
            echo '<br>';
        break;

        case $numero == 15;
            echo 'Quinze';
            echo '<br>';
        break;
        default:
            echo '<br>';
            echo 'Não foi possível encontrar o número na base de dados utilizando SWITCH.';
    }
