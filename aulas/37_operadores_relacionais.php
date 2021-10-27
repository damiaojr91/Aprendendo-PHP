<?php

    $a = 2;
    $b = '2';

    if($a === $b){ // O === serve para identificar se o valor e o tipo são exatamente iguais
        echo 'A é igual a B';
    } else {
        echo 'A é diferente de B';
    }

    if($a <> $b){ // O <> e o != servem para identificar se os valores são diferentes
        echo 'A é igual a B';
    } else {
        echo 'A é diferente de B';
    }

    if($a !== $b){ // O !== serve para identificar se os valores e os tipos são diferentes
        echo 'A é igual a B';
    } else {
        echo 'A é diferente de B';
    }

    if($a > $b){ // O > serve para identificar se o valor de $a é maior que o valor de $b
        echo 'A é maior que B';
    } else {
        echo 'A é menor ou igual a B';
    }

    if($a >= $b){ // O >= serve para identificar se o valor de $a é maior ou igual ao valor de $b
        echo 'A é maior ou igual a B';
    } else {
        echo 'A é menor que B';
    }

    if($a < $b){ // O < serve para identificar se o valor de $a é menor que o valor de $b
        echo 'A é menor que B';
    } else {
        echo 'A é maior ou igual a B';
    }

    if($a <= $b){ // O <= serve para identificar se o valor de $a é menor ou igual ao valor de $b
        echo 'A é menor ou igual a B';
    } else {
        echo 'A é maior que B';
    }

