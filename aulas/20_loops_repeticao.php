<?php

    /*
        WHILE é usado para definir um loop que será executado enquanto a condição for VERDADEIRA
    */

    $i = 1;

    //Exemplo 01 utilização simples
    echo 'Exemplo simples de contagem <br>';
    while($i <= 10){
        echo $i;

        $i++;
    }

    echo '<hr>';

    //Exemplo 02 utilização com array
    echo 'Exemplo de utilização com array <br>';

    $i = 0;
    $nomes = ['a', 'b', 'c', 'd',];

    while($i < count($nomes)){
        echo $nomes[$i];

        $i++;
    }

    echo '<hr>';

    //Exemplo 03 utilização de DO WHILE
    //O DO WHILE é utilizado quando a verificação do valor precisa ocorrer no fim do processo
    echo 'Exemplo de utilização com array <br>';

    $a = 11;

    do{
        echo $a;
        $a++;
    } while ($a <=10);

    echo '<hr>';