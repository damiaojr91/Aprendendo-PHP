<?php

    $carrinho = [
        'Arroz',
        'Sabão',
        'Feijão',
        'Balinhas',
    ];

    echo 'Array sem executar o "array_pop"';
    echo '<br>';
    var_dump($carrinho);
    echo '<br>';
    echo '<br>';

    echo 'Array depois de executar o "array_pop"';
    echo '<br>';
    array_pop($carrinho); //Exclui o último elemento do array
    var_dump($carrinho);
    echo '<br>';
    echo '<br>';

    echo 'Array depois de executar o "array_shift"';
    echo '<br>';
    array_shift($carrinho); //Remove o primeiro elemento do array
    var_dump($carrinho);
    echo '<br>';
    echo '<br>';

    echo 'Array depois de executar o "unset"';
    echo '<br>';
    unset($carrinho[0]); //Remove um item do array especificando qual posição deve ser excluída
    var_dump($carrinho);
    echo '<br>';
    echo '<br>';

    echo 'Array depois de executar o "array_push"';
    echo '<br>';
    array_push($carrinho,'Tapete'); //Adiciona um elemento ao final do array, basicamente é o inverso do array_pop
    var_dump($carrinho);
    echo '<br>';
    echo '<br>';

    echo 'Array depois de executar o "array_unshift"';
    echo '<br>';
    array_unshift($carrinho, 'Microondas'); //Adiciona um elemento ao inicio do array
    var_dump($carrinho);
    echo '<br>';
    echo '<br>';

    echo 'Array antes de executar o "array_unique"';
    echo '<br>';
    array_unshift($carrinho, 'Tapete'); //Adiciona um elemento ao inicio do array
    var_dump($carrinho);
    echo '<br>';
    echo '<br>';

    echo 'Array depois de executar o "array_unique"';
    echo '<br>';
    $carrinho = array_unique($carrinho); //Impede que o array tenha elementos duplicados
    var_dump($carrinho);
    echo '<br>';
    echo '<br>';