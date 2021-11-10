<?php
    //Criar um count "na mão"

    $vetor_qualquer = [1,2,3,4,5,6,7,8,9,10];

    // contaVetor1($vetor_qualquer);
    // contaVetor2($vetor_qualquer);
    contaVetor3($vetor_qualquer);

    function contaVetor1($vetor){

        $contagem = 0;
        $auxiliar = count($vetor);

        for ($i=0; $contagem < $auxiliar; $i++){
            $contagem++;
            echo "$contagem" . PHP_EOL;
        }

        return $contagem;
    }

    function contaVetor2($vetor){

        $i = 0;

        foreach ($vetor as $v){
            $i++;
        }
        
        return $i;
    }

    function contaVetor3($vetor){

        $i = 0;
        // $auxiliar = count($vetor);

        while ($i < $vetor[$i] ){
            $i++;
        }

        return $i;
    }



