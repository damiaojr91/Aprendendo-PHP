<?php

    $taxa = 2;

    // function soma(int $n1, int $n2):int{
    //     return ($n1 + $n2) * $taxa; //A variável $taxa não funciona aqui porque ela não está dentro do escopo da função
    // }

    function soma(int $n1, int $n2):int{
    //Aqui estamos definindo a variável $taxa como global, e isso permite que ela seja utilizada dentro das funções mesmo não sendo declarada dentro desta
        global $taxa; 
        return ($n1 + $n2) * $taxa;
    }

    echo soma(2,2);

    //Em casos onde precisar retornar mais de uma variável é necessário jogar as variáveis para dentro de um array

    function sum(int $n1, int $n2):Array{
        global $taxa;

        $teste = 12;
        $soma = ($n1 + $n2) * $taxa;

        return [ //depois de definidas as variáveis, colocamos elas no array
            'teste' => $teste,
            'soma' => $soma,
        ];
    }

    $result = sum(1,2); //armazenar o resultado da function com array é a melhor forma para imprimir o resultado desses casos
    var_dump($result['soma']);
    echo sum(2,2);
    echo sum(2,2)['soma'];