<?php
    
    $var1 = 'Algo';
    $var2 = 'Outro';

    //A concatenação básica é feita utilizando pontos (.)
    //Exemplo 01
    $var3 = $var1 .' '. $var2 . ' ' . 12;
    echo $var3;
    echo '<br>';
    echo '<br>';

    //Exemplo 02
    $nome = 'Damião';
    $empresa = 'Yahp';
    echo 'O '.$nome.' é funcionário na empresa '.$empresa;
    echo '<br>';
    echo '<br>';

    //Exemplo 03
    echo "O {$nome} é funcionário na empresa {$empresa}";
    echo '<br>';
    echo '<br>';

    /*
        Aspas simples devem ser utilizadas sempre que for necessário exibir algo sem a necessidade
         de realizar cálculos pois seu processamento é mais rápido que aspas duplas.
        No caso de situações onde é necessário algum tipo de concatenação o ideal é utilizar
         aspas duplas pois essa é realmente sua função.
    */