<?php

    //Funções recursivas
    //Fatoriais:
    // 4 => 4*3*2*1 = 24
    // 2 => 2*1 = 2
    // 3 => 3*2*1 = 6

    function fatorial(int $valor):int{

        //Aqui estamos definindo o loop para ocorrer dentro da função
        //esse loop irá utilizar o proprio resultado da função para sua execução
        //por isso se chama função recursiva

        if ($valor <= 1)
            $valor = $valor;
        else
            $valor = $valor * fatorial($valor -1);

        return $valor;
    }

    echo fatorial(3);