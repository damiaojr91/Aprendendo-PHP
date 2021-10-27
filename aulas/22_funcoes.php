<?php

    /*
        Functions com parametros servem para que o desenvolvedor possa criar blocos de códigos que serão reutilizados no futuro.
    */
    $parametro = 123;

    function imprime($parametro){
        echo "{$parametro} <br>";
    }

    imprime($parametro);

    //É possível colocar regras para tipos de dados que a function irá receber
    //Caso o valor recebido na variável não seja igual ao especificado dará erro
    $parametro = "Teste";
    
    function imprimeEspecifico(String $parametro){
        echo "{$parametro} <br>";
    }

    imprimeEspecifico($parametro);

    //Exemplo de como definir os tipos de dados que a function deve receber e como executar
    function soma(int $n1, int $n2){
        return $n1 + $n2;
    }

    echo soma(10, 30); //Definindo os valores que serão recebidos na função

    function somaDois(int $n1, int $n2, int $taxa = 12){ //Neste caso estamos definindo um valor padrão para o caso de a variável $taxa não receber valores
        echo '<br>';
        return ($n1 + $n2) * $taxa;
        // return "({$n1} + {$n2}) * {$taxa} <br>";
    }

    echo somaDois(10, 30);
    echo somaDois(10, 30, 2);