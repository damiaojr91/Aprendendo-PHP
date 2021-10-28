<?php
    /*  ==========================================================
        Calcular a média de 10 números. 
        ========================================================== */

    $numeros = [8,6,4,10,11];

    $soma=0;
    $quantidade_numeros = count($numeros);    
    
    for ($i=0; $i < $quantidade_numeros; $i++){
        $soma = $soma + $numeros[$i];
    }

    $media = ($soma / $quantidade_numeros);

    echo "A média dos números registrados é: {$media} <br>" .PHP_EOL;

    var_dump($media);