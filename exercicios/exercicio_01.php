<?php

    /*  ==========================================================
        PRATICANDO ARRAYS E CONTAGEM DE FORMA MANUAL
        ========================================================== */

    $idades = [
        'teste 00' => 12,
        'teste 01' => 16,
        'teste 02' => 15,
        'teste 03' => 22,
        'teste 04' => 31,
        'teste 05' => 54,
        'teste 06' => 43,
        'teste 00' => 22,
    ];

    $idade[0];
    $count_idade = count($idade);
    // $djunior = "O mestre";
    // echo "<br> $djunior <br>" .PHP_EOL;

    // for ($i=0; $i < $count_idade; $i++){
    //     echo "<br> {$idade[$i]} <br>" .PHP_EOL;
    // }

    // echo "<hr>";

    // for ($i=$count_idade -1; $i >= 0; $i--){
    //     echo "<br> {$idade[$i]} <br>" .PHP_EOL;
    // }

    echo "<hr>";

    foreach ($idades as $posicao => $idade) {
        echo "<br> {$posicao} => {$idade} <br>" .PHP_EOL;
    }