<?php

    $a = 2; //atribui o valor 2 para $a
    $b = 3;
    $c = 2;

    echo "Valor inicial A: {$a} <br>";
    echo "Valor inicial B: {$b} <br>";

    $a++; //pós-incremento

    $a--; //pós-decremento

    ++$a; //pré-incremento

    --$a; //pré-decremento

    $pos_incremento = $c + $b++;
    $pos_decremento = $c + $b--;
    $pre_incremento = $c + ++$b;
    $pre_decremento = $c + --$b;

    echo "<br>";
    echo "Soma de A + B, sendo B em PÓS incremento = {$pos_incremento} <br>";
    echo "Soma de A + B, sendo B em PÓS decremento = {$pos_decremento} <br>";
    echo "<br>";
    echo "Soma de A + B, sendo B em pré incremento = {$pre_incremento} <br>";
    echo "Soma de A + B, sendo B em pré decremento = {$pre_decremento} <br>";