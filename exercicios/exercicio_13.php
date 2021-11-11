<?php
    // Leia um valor inteiro N que é o tamanho da matriz que deve ser impressa conforme o modelo fornecido.
    // Entrada:
    // A entrada contém vários casos de teste e termina com EOF. Cada caso de teste é composto por um único inteiro N (3 ≤ N < 70),
    //que determina o tamanho (linhas e colunas) de uma matriz que deve ser impressa.
    // Saída:
    // Para cada N lido, apresente a saída conforme o exemplo fornecido no exercicio 1534 do Beecrowd.

    function insereEntrada(){
        echo "Insira um numero entre 2 e 5: ";
        $entrada = fgets(STDIN);
        echo "{$entrada}";

        return $entrada;
    }

    function verificaEntrada($entrada){
        $n = $entrada;

        if($n >= 2 && $n <= 5 ){
            geraMatriz($n);
        } else {
            echo "O valor não corresponde aos critérios. Por favor insira novos valores." . PHP_EOL;
            insereEntrada();
        }
    }

    function geraMatriz($entrada){

        //Devo receber um valor que representará quantas linhas e colunas serão criadas
        //Com esse valor como base a matriz deve ser construida e preenchida com o numero 3
        //criar as linhas e adicionar 3 de acordo com o valor recebido

        $matriz = array($entrada);

        // var_dump($matriz);

        $qtde_linhas = count($entrada);

        for ($i=0; $i < $qtde_linhas; $i++){

            $qtde_colunas = count($matriz[$i]);

            for ($j=0; $j < $qtde_colunas; $j++){

                if ($i == $j){
                    $matriz[$i][$j] = 1;
                } else if ($i == ($qtde_colunas - $j -1)) {
                    $matriz[$i][$j] = 2;
                } else {
                    $matriz[$i][$j] = 3;
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

    $entrada = insereEntrada();
    verificaEntrada($entrada);