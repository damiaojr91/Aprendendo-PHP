<?php
    /*  ==========================================================
        Receber 5 números e verificar qual é o maior
        ========================================================== */

    $numeros = [10,20,35,8,6];
    $function_max = max($numeros);
    $count_numeros = count($numeros);
    $maior_numero = 0;
    $conta_numeros = 0;

    foreach ($numeros as $numero){
        $conta_numeros = $numero++;
    }

    var_dump($conta_numeros);

    for ($i=0; $i > $maior_numero; $i++){
        if($numeros['$i'] > $maior_numero){
            $maior_numero = $numeros['$i'];
        } else {
            echo "O maior número no array é: {$maior_numero}" .PHP_EOL;
        }
    }

    // [10,20,5,8,6]
    // --------------5
    // [10,20,20,8,6]
    // [10,5,20,8,6]

    // $auxiliar = $array[2];
    // $array[2] = $array[1];
    // $array[1] = $auxiliar;


    // for ($i=0; $i < 9; $i++){
    //     for ($j=0; $j < 9; $j++){

    //     }
    // }
    

    echo "O maior número no array é: {$function_max}" .PHP_EOL;