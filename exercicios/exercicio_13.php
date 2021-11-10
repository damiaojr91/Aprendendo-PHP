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
            imprimeMatriz($n);
        } else {
            echo "O valor não corresponde aos critérios. Por favor insira novos valores." . PHP_EOL;
            insereEntrada();
        }
    }

    function imprimeMatriz($entrada){

        //Devo receber um valor que representará quantas linhas e colunas serão criadas
        //Com esse valor como base a matriz deve ser construida e preenchida com o numero 3
        //criar as linhas e adicionar 3 de acordo com o valor recebido

        $i = 0;
        $matriz = array();

        while($i < $entrada){
            for($j=0; $j < $i; $j++){
                $valor[$i][$j] = array_push($matriz, 3);
                // echo "{$valor[$i][$j]}" . PHP_EOL;
                echo "| " . $valor[$i][$j] . PHP_EOL;
            }
            $i++;
            // echo "{$valor[$i][$j]}" . PHP_EOL;
        }

        // $qtde_itens = count($matriz);

        // for ($i=0; $i < $qtde_itens; $i++){

        //         echo "| " . $matriz[$i][$j];
        // }
    }

    $entrada = insereEntrada();
    verificaEntrada($entrada);