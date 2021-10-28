<?php
    /*  ==========================================================
        Inserir várias idades.
        Exibir quantas pessoas são maior de idade (18 anos)
        Exibir quantas são menores.
        ========================================================== */

        $idades = [15,35,10,18,19,22,05,70,11];

        $quantidade_idades = count($idades);
        $menor = min($idades);
        $maior = max($idades);
        
        // for ($i=0; $i < $quantidade_idades; $i++){
        //     if ($idades['$i']){

        //     }
        // }

        echo "A pessoa mais velha tem: {$maior} anos!" .PHP_EOL;
        echo "A pessoa mais nova tem: {$menor} anos!" .PHP_EOL;