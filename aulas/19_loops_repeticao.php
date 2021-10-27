<?php
    echo '<hr>';
    echo '<br>';

    $nomes = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',];

    //Exemplo 01 exibindo apenas os valores de cada posição
    echo 'Exibindo apenas os valores de cada posição';
    foreach($nomes as $nome){
        echo "$nome <br>";
    }

    echo '<hr>';

    //Exemplo 02 exibindo os índices e valores de cada posição
    echo 'Exibindo os índices e valores de cada posição';
    foreach($nomes as $indice => $valor){
        echo "{$indice} => {$valor} <br>";
    }

    echo '<hr>';