<?php
    // Leia um valor inteiro N que é o tamanho da matriz que deve ser impressa conforme o modelo fornecido.
    // Entrada:
    // A entrada contém vários casos de teste e termina com EOF. Cada caso de teste é composto por um único inteiro N (3 ≤ N < 70),
    //que determina o tamanho (linhas e colunas) de uma matriz que deve ser impressa.
    // Saída:
    // Para cada N lido, apresente a saída conforme o exemplo fornecido no exercicio 1534 do Beecrowd.

    function inseressEntrada(){
        echo "Insira um numero entre 2 e 5: ";
        $entrada = fgets(STDIN);
        echo "{$entrada}";

        return $entrada;
    }

    function insereEntrada(){

        echo "Insira um numero entre 2 e 5: ";
        $entrada = fgets(STDIN);
        $retorno = false;

        while ($retorno == false){

            if($entrada >= 2 && $entrada <= 5){

                $retorno == true;
                return $entrada;
            } else {
                echo "O valor inserido não corresponde aos critérios." . PHP_EOL;
                echo "Por favor insira algum valor entre 2 e 5." . PHP_EOL;
                $retorno = false;
                $entrada = fgets(STDIN);
            }

            // return $entrada;
        }
    }

    function geraMatriz($entrada){

        //Devo receber um valor que representará quantas linhas e colunas serão criadas
        //Com esse valor como base a matriz deve ser construida e preenchida com o numero 3
        //criar as linhas e adicionar 3 de acordo com o valor recebido

        $matriz = [];
        // $n = intval($entrada); //converte o valor de string para int
        $n = (int)$entrada; //converte o valor de string para int

        for ($i=0; $i < $n; $i++){ //linha
            for ($j=0; $j < $n; $j++){ //coluna
                if ($i == (($n -$j) -1)){ //insere valor
                    $matriz[$i][$j] = 2;
                } else if ($i == $j) {
                    $matriz[$i][$j] = 1; //insere valor
                } else {
                    $matriz[$i][$j] = 3; //insere valor
                }
            }
        }

        return $matriz;
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
    // verificaEntrada($entrada);
    $retorno = geraMatriz($entrada);
    imprimeMatriz($retorno);