<?php
    //Criar um bubble sort dinamico

    $lista = [10,9,8,7,6,5,4,3,2,1,0];
    $qtde_lista = count($lista);

    // function inversao($posicao_um, $posicao_dois){
    //     $troca = $posicao_um; //Variavel auxiliar para segurar a informação de $i
    //     $posicao_um = $posicao_dois;
    //     $posicao_dois = $troca;
    // }

    // for ($i=0; $i < $qtde_lista; $i++){ //Primeiro indice
    //     for ($j=0; $j < $qtde_lista; $j++){ //Segundo indice como variavel auxiliar para que aconteça a comparação
    //         if ($i > $j){
    //             $posicao_um = $lista[$i];
    //             $posicao_dois = $lista[$j];
    //             inversao($posicao_um, $posicao_dois);
   
    //             echo $lista[$j] . ">" . $lista[$i] . PHP_EOL;
    //         }
    //     }
    // }


    for ($j=0; $j < $qtde_lista; $j++){
        for ($i=0; $i < ($qtde_lista -$j -1); $i++){
            if ($lista[$i] > $lista[$i+1]){
                $auxiliar = $lista[$i];
                $lista[$i] = $lista[$i+1];
                $lista[$i+1] = $auxiliar;
            }

            echo json_encode($lista) . PHP_EOL;
        }

        echo '--------------' . PHP_EOL;
    }

    // print_r($lista);
    // var_dump($lista);