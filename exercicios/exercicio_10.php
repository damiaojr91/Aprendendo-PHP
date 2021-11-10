<?php

    //Receber uma matriz quadrada
    //Checar se a matriz é realmente uma matriz quadrada
    //Colocar zeros na diagonal primária
    //Colocar -1 na diagonal secundária

    function insereEntrada(){
        echo "Insira PRIMEIRO numero entre 1 e 10: ";
        $entrada1 = fgets(STDIN);
        echo "{$entrada1}";
        verificaEntrada($entrada1);
        echo "Insira o SEGUNDO numero entre 1 e 10: ";
        $entrada2 = fgets(STDIN);
        echo "{$entrada2}";
        verificaEntrada($entrada2);
    }

    function verificaEntrada($entrada){
        $n = $entrada;

        if($n > 0 && $n <= 10 ){
            
        } else {
            echo "O valor não corresponde aos critérios. Por favor insira novos valores." . PHP_EOL;
            insereEntrada();
        }
    }

    function verificaMatriz($matriz){

        $resultado = true;
        $qtde_linhas = count($matriz);
        $i = 0;

        // while ($i < $qtde_linhas && $resultado != false){
        // while ($i < $qtde_linhas && !$resultado){ //"!" é sinal de negação, e inverte a resposta
        
        while ($i < $qtde_linhas && $resultado){

            $qtde_colunas = count($matriz[$i]);

            if ($qtde_linhas == $qtde_colunas){
                $resultado = true;
            } else {
                $resultado = false;
                }
            $i++;
        }

        for ($linha=0; $linha < $qtde_linhas; $linha++){
            $qtde_colunas = count($matriz[$linha]);

            if ($qtde_linhas != $qtde_colunas){
                $resultado = false;
            }
        }

        var_dump($resultado);
        echo "Linhas: {$qtde_linhas} " . PHP_EOL;
        echo "Cada linha possui {$qtde_colunas} itens." . PHP_EOL;
        echo " " . PHP_EOL;

        if ($resultado == true){            
            echo "====== A matriz É quadrada ======" . PHP_EOL;
            echo " " . PHP_EOL;
        } else {
            echo "====== A matriz NÃO É quadrada. Por favor verifique os dados... ======" . PHP_EOL;
            echo " " . PHP_EOL;
        }
    }

    function diagonalPrimaria($matriz){

        $qtde_linhas = count($matriz);

        for ($linha=0; $linha < $qtde_linhas; $linha++){
            $qtde_colunas = count($matriz[$linha]);

            //Percorrendo colunas
            for ($coluna=0; $coluna < $qtde_colunas; $coluna++){
                //Se a linha e a coluna se cruzarem, trocará o valor do item
                if ($linha == $coluna){
                    $matriz[$linha][$coluna] = 0;
                }
            }
        }

        return imprimeMatriz($matriz);
    }

    function diagonalSecundaria($matriz){

        $qtde_linhas = count($matriz);

        //Percorrendo linhas
        for ($linha=0; $linha < $qtde_linhas; $linha++){
            $qtde_colunas = count($matriz[$linha]);

            //Percorrendo colunas
            for ($coluna=0; $coluna < $qtde_linhas; $coluna++){
                if ($linha == ($qtde_colunas - $coluna -1)){
                    //A linha a seguir irá correr as colunas em ordem inversa, fazendo a substituição
                    //É necessário adicionar o -1 no valor do array para que o programa entenda que deve ignorar a ultima casa
                    //O valor [$qtde_colunas - $coluna -1] está realizando a rodada de colunas de forma inversa
                    $matriz[$linha][$coluna] = -1;
                }
            }
        }

        return imprimeMatriz($matriz);
    }
    
    function imprimeMatriz($matriz){

        $qtde_linhas = count($matriz);

        for ($linha=0; $linha < $qtde_linhas; $linha++){
            $qtde_colunas = count($matriz[$linha]);

            for ($coluna=0; $coluna < $qtde_colunas; $coluna++){
                $vetor = $matriz[$linha][$coluna];

                echo "| " . $vetor . " |";
            }

            echo '' . PHP_EOL;
        }
    }

    // insereEntrada();

    $matriz_entrada = [
        [7,8,9],
        [4,5,6],
        [1,2,3],
        // [1,2,3,4],
        // [1,2,3,4,5],
    ];

    echo " " . PHP_EOL;
    echo "Matriz de entrada: " . PHP_EOL;
    echo " " . PHP_EOL;

    imprimeMatriz($matriz_entrada);
    echo " " . PHP_EOL;
    verificaMatriz($matriz_entrada);

    echo " " . PHP_EOL;
    echo "Diagonal principal substituída por 0 (zeros): " . PHP_EOL;
    echo " " . PHP_EOL;

    diagonalPrimaria($matriz_entrada);

    echo " " . PHP_EOL;
    echo "Diagonal secundária substituída por -1: " . PHP_EOL;
    echo " " . PHP_EOL;

    diagonalSecundaria($matriz_entrada);


    // if (($n1 % 2) == 0)

    //while
    //qtde colunas deve ser = qtde linhas
    //criar flag
    //separar print