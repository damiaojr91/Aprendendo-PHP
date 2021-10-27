<?php
    
    $primeiroNumero = 12;
    $segundoNumero = 13;
    $terceiroNumero = 12;

    //Exemplo 01 de IF
    if ($primeiroNumero == $segundoNumero){
        echo 'O N1 é igual ao N2';
        echo '<br>';
    };

    //Exemplo 02 de IF
    if ($primeiroNumero == $terceiroNumero):
        echo 'O N1 é igual ao N3';
        echo '<br>';
    endif;

    //Exemplo 03 de IF
    if ($segundoNumero != $terceiroNumero)
        echo 'O N2 é diferente do N3';
        echo '<br>';

    //Exemplo 04 de IF com duas condições
    if ($primeiroNumero == $terceiroNumero && $segundoNumero != $primeiroNumero):
        echo 'O N1 é igual ao N3 e o N2 é diferente do N1';
        echo '<br>';
    endif;