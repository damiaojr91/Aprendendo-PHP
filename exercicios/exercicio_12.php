<?php
    //Crie um programa que lê 6 valores inteiros e, em seguida, mostre na tela os valores lidos

    function insereEntrada(){
        
        $array = [];
        $i = 0;

        while ($i < 6){

            echo "Entrada {$i} - Insira um numero entre 1 e 100: ";
            $entrada = fgets(STDIN);

            if ($entrada > 0 && $entrada <= 100){

                array_push($array, $entrada);
                echo 'Valor armazenado com sucesso.' . PHP_EOL;
                $i++;
                
            } else {
                echo 'Valor inválido, por favor insira um número entre 1 e 100...' . PHP_EOL;
            }
        }
        
        return $array;
    }

    function imprimeVetor($vetor){

        $qtde_itens = count($vetor);

        for ($i=0; $i < $qtde_itens; $i++){

                echo "| " . $vetor[$i];
        }
    }

    $vetor = insereEntrada();
    imprimeVetor($vetor);

