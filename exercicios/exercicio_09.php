<?php
    // Matriz transposta
    


    function calculaTransposta($matriz){

        $conta_matriz = count($matriz);

        for ($i=0; $i < $conta_matriz; $i++){
            for ($j=0; $j < count($matriz[$i]); $j++){
                // $auxiliar = $matriz[$i+1][$j+1];
                // $matriz[$i+1][$j+1] = $matriz[$j][$i];
                // $matriz[$j][$i] = $auxiliar;
                $transposta[$j][$i] = $matriz[$i][$j];
            }
        }

        return $transposta;
    }

    function exibeMatriz($matriz){

        $qtde_linhas = count($matriz);

        for ($i=0; $i < $qtde_linhas; $i++){

            $qtde_colunas = count($matriz[$i]);

            for ($j=0; $j < $qtde_colunas; $j++){

                $numero = $matriz[$i][$j];
                echo "| " . $numero . " |";
            }

            echo '' . PHP_EOL;
        }
    }

    $m = [
        [7,8,9],
        [4,5,6],
        [1,2,3],
    ];

    $resultado = calculaTransposta($m);

    echo '----------------' . PHP_EOL;
    echo 'Matriz Original:' . PHP_EOL;
    exibeMatriz($m);
    echo '----------------' . PHP_EOL;
    echo 'Resultado:' . PHP_EOL;

    exibeMatriz($resultado);

