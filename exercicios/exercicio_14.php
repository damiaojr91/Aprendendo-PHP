<?php
    //Criar um jogo da velha
    //Os jogadores precisam escolher suas peças 1 ou -1
    //Posições vazias serão preenchidas com 0
    //O jogo termina caso algum jogador complete uma linha, coluna ou diagonal
    //O jogo também termina caso dê "velha"


    function boasVindas(){
        echo "BEM VINDO AO JOGO DA VELHA!" . PHP_EOL;
        echo "=======================================" . PHP_EOL;
        echo "Jogador 1, sua peça é a letra 'X' " . PHP_EOL;
        echo "=======================================" . PHP_EOL;
        echo "Jogador 2, sua peça é a letra 'O'" . PHP_EOL;
        $jogador1 = 'x';
        $jogador2 = 'o';

        echo "Jogador 2, sua peça é a letra 'O'" . PHP_EOL;

        // return $jogador1,$jogador2;
    }

    function jogada(){
        //1-Deve exibir o array no estado atual
        //2-Deve pedir para o jogador escolher a coluna e a linha onde jogar
        //3-Deve verificar se foi feita uma jogada nessa posição, caso sim, deve dar mensagem de erro, caso não, deve preencher a posição
        //4-Deve verificar se o jogador venceu
        //5-Deve retornar ao item 1
        //6-

        // if()
        echo "BEM VINDO AO JOGO DA VELHA!" . PHP_EOL;
        echo "=======================================" . PHP_EOL;
        echo "Jogador 1, sua peça é a letra 'X' " . PHP_EOL;
        echo "=======================================" . PHP_EOL;
        echo "Jogador 2, sua peça é a letra 'O'" . PHP_EOL;

        // return $jogador1,$jogador2;
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

            $qtde_colunas = count($entrada[$i]);

            for ($j=0; $j < $qtde_colunas; $j++){

                if ($i == $j){
                    $entrada[$i][$j] = 1;
                } else if ($i == ($qtde_colunas - $j -1)) {
                    $entrada[$i][$j] = 2;
                } else {
                    $entrada[$i][$j] = 3;
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
                // $vetor = $matriz[$linha][$coluna];

                // echo "| " . $vetor . " |";
                echo "| " . $matriz[$linha][$coluna];
            }

            echo '' . PHP_EOL;
        }
    }

    $tabuleiro = [
        ['--','--','--',],
        ['--','--','--',],
        ['--','--','--',],
    ];

    // var_dump($tabuleiro);

    // $entrada = insereEntrada();
    // verificaEntrada($entrada);
    geraMatriz($tabuleiro);