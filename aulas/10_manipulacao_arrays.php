<?php

    $carrinho = [
        0 => 'Macarrão',
        1 => 'Feijão',
        2 => 'Arroz',
        3 => 'Batata',
    ];

    echo '<br>';
    echo 'Array ordenado usando ARSORT';
    echo '<pre>';
    arsort($carrinho); //arsort ordena os itens do array em ordem alfanumérica decrescente

    var_dump($carrinho);
    echo '<hr>';

    echo '<br>';
    echo 'Array ordenado usando ASORT';
    echo '<pre>';
    asort($carrinho); //asort ordena os itens do array em ordem alfanumérica crescente

    var_dump($carrinho);
    echo '<hr>';

    echo '<br>';
    echo 'Array ordenado usando SORT';
    echo '<pre>';
    sort($carrinho); //asort ordena os itens do array em ordem alfanumérica crescente e também ordena as posições do array

    var_dump($carrinho);
    echo '<hr>';