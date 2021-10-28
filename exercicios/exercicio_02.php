<?php

    /*  ==========================================================
        Encontrar a string "achei" dentro de um array e retornar qual a posição do array que ela se encontra

        OBS: Utilizar while, fazer uma função que retorne o índice caso encontrado, se não encontrado retornar -1 (int).
        DICAS: Passar o array como parâmetro da função.

        ENTRADA 1: ['DJR', 'maria', 'evandro', 'pedro', 'achei', 'jonas', 'tereza']
        ENTRADA 2: ['DJR', 'maria', 'evandro', 'pedro', 'paulo', 'jonas', 'tereza']
        ENTRADA 3: ['achei', 'maria', 'evandro', 'pedro', 'DJR', 'jonas', 'tereza']
        ENTRADA 4: ['raul', 'maria', 'evandro', 'pedro', 'DJR', 'jonas', 'achei']
        ENTRADA 5: ['DJR', 'achei', 'evandro', 'pedro', 'achei', 'jonas', 'tereza'] 
        ========================================================== */

        echo 'Buscador de "ACHEI" <br><hr>';
        
        //===================VARIAVEIS=================================//
        $lista_nomes = [
            ['DJR', 'maria', 'evandro', 'pedro', 'achei', 'jonas', 'tereza'],
            ['DJR', 'maria', 'evandro', 'pedro', 'paulo', 'jonas', 'tereza'],
            ['achei', 'maria', 'evandro', 'pedro', 'DJR', 'jonas', 'tereza'],
            ['raul', 'maria', 'evandro', 'pedro', 'DJR', 'jonas', 'achei'],
            ['DJR', 'achei', 'evandro', 'pedro', 'achei', 'jonas', 'tereza'],
        ];
        
        // echo '<pre>';
        // var_dump($lista_nomes);

        $nomes = ['DJR', 'maria', 'evandro', 'pedro', 'achei', 'jonas', 'tereza'];

        $conta_nomes = 0;
        // $conta_nomes = count($lista_nomes);
        $i = 0;

        foreach ($nomes as $nome){
            $conta_nomes = $nome++;
        }

        while ($i < $conta_nomes){
            $i++;
        }

        var_dump($i);

        //======================TENTATIVA 1==============================//
        // for ($i = 0; $i < $conta_nomes; $i++){
        //     echo "{$nomes[$i]} <br>";
        // }
      
        //======================TENTATIVA 2==============================//

        // foreach ($lista_nomes as $key => $nome){
        //     echo "{$key} => {$nome} ,";
        // }

        //======================TENTATIVA 3==============================//
        // function buscaIndice($lista_nomes){
        //     foreach ($lista_nomes as $key => $nome){

        //         if ($lista_nomes['$nome']=='achei'){
        //             return "Achei está na posição: {$key}," .PHP_EOL;
        //         } else {
        //             return -1;
        //         }
        //     }
        // }

        // return buscaIndice($lista_nomes);
        // var_dump(buscaIndice($lista_nomes));

        //======================TENTATIVA 4==============================//
        // while($i < $conta_nomes){
        //     if ($nomes['i'] == 'achei'){
        //         echo "{$nomes[4]} <br>";
        //     } else {
        //         echo 'Não achei =/ <br>';
        //     }

        //     $i++;
        // }

        //======================TENTATIVA 5==============================//
        // $key = array_search('achei', array_column($lista_nomes, '[]'));

        // echo ("Achei está na posição: ".$key);




        //=======================TENTATIVA 6=============================//


        echo '<hr>';