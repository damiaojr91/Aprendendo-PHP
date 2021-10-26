<?php

    /*===============================================
        Arrays simples
    ===============================================*/

    $array = array( //Todo array é dividido em posições começando pela posição zero.
        1, //Posição 0
        'Texto', //Posição 1
        12.2 //Posição 2
    );

    $carros = ['Uno', 'Gol', 'Fusion', 'Civic']; //esta é a forma mais comum de construir um array. Desta forma também cada item pertence a uma posição.

    var_dump($array); //Desta forma estamos exibindo todos os valores contidos no array $carros
    echo '<br>';
    echo '<br>';
    var_dump($carros[2]); //Desta forma estamos exibindo apenas o valor contido na posição 1 do array $carros
    echo '<br>';
    echo '<br>';


    /*===============================================
        Arrays Compostos ou Associativos
    ===============================================*/

    $carroAtributos = [ //este é um exemplo de array associativo (ou composto), onde cada posição recebe um nome e um valor
        'cor' => 'Branco',
        'portas' => 4,
        'ano' => 2018,
    ];

    $carroAtributos['som'] = 'Caixas de som'; //este é um exemplo de inclusão de item dentro do array.
    echo $carroAtributos['som'];
    echo '<br>';
    echo '<br>';
    
    $carroAtributos['airbag'] = true; //Se for verdadeiro o PHP exibe "1", se for falso não exibe nada
    echo $carroAtributos['airbag'];
    echo '<br>';
    echo '<br>';
    
    echo $carroAtributos['portas'];
    echo '<br>';
    echo '<br>';

    $carroAtributos['cor'] = 'Preto'; //Aqui estamos definindo que o atributo cor receberá um novo valor, agora sendo Preto
    echo $carroAtributos['cor']; //Exibindo o novo valor do atributo cor.
    echo '<br>';
    echo '<br>';

    /*===============================================
        Arrays multidimensionais
    ===============================================*/

    $carroModelo = [ //Um array multidimensional é um array que contém outros arrays
        'Mercedes' => [
            'cor' => 'Preto',
            'motor' => 5.2,
            'nome' => 'Nome do carro da Mercedes',
        ],

        'Ford' => [
            'cor' => 'Azul',
            'motor' => 2.1,
            'nome' => 'Nome do carro da Ford',
        ],

        'Ferrari' => [
            'cor' => 'Vermelho',
            'motor' => 10,
            'nome' => 'Nome do carro da Ferrari',
        ],
    ];

    echo $carroModelo['Ford']['nome']; //Aqui estamos exibindo na tela a posição "nome" contida dentro do array 'Ford'
    echo '<br>';
    echo '<br>';

    $carroModelo['Ford']['nome'] = 'Novo nome para o carro da Ford'; //Aqui estamos definindo um novo valor para a posição "nome" no array "Ford"
    echo $carroModelo['Ford']['nome'];
    echo '<br>';