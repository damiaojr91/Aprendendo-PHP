<?php

    $idades = [12, 14, 18, 20, 44, 50, 98, 78, 56, 90,];

    /*
        Quando não sabemos a quantidade de posições no array, devemos contar todas as posições
         e subtrair "1" do resultado, assim conseguimos trabalhar com a ultima posição do array.
        Isso acontece porque existem, no exemplo, 10 itens mas as posições do array começam em zero.
    */

    //solicitar explicação
    echo '<br>';
    echo 'Exibindo última posição do array usando o COUNT';
    echo '<br>';
    echo $idades[count($idades) -1];
    echo '<br>';

    echo '<hr>';
    echo '<br>';
    echo 'Exibindo última posição do array usando o END';
    echo '<br>';
    echo end($idades); //Retorna o ultimo elemento do array sem a necessidade de calculos

    /*
        A seguir estamos utilizando o array_filter para filtrar as idades acima de 18.
        Para tal precisamos criar uma função que receba o array $idades declarado anteriormente e
         dentro dessa function declaramos que deve retornar apenas os itens que forem igual ou maior que 18.
    */
    echo '<hr>';
    echo '<br>';
    echo 'Exibindo idades acima de 18 utilizando ARRAY_FILTER';
    echo '<br>';
    $idadesFiltradas = array_filter($idades, function($idade){ //array_filter serve para a filtragem dos dados dentro do array
        return $idade >= 18;
    });

    var_dump($idadesFiltradas);


    echo '<hr>';
    echo '<br>';
    echo 'Convertendo strings em letras maiúsculas com STRTOUPPER';
    echo '<br>';

    $nomes = ['Damiao', 'Silva', 'Junior',];

    //Transforma os itens das posições 0,1 e 2 em maiusculos
    $nomes [0] = strtoupper($nomes[0]);
    $nomes [1] = strtoupper($nomes[1]);
    $nomes [2] = strtoupper($nomes[2]);
    var_dump($nomes);

    //
    echo '<hr>';
    echo '<br>';
    echo 'Convertendo strings em letras maiúsculas utilizando ARRAY_MAP';
    echo '<br>';
    $nomesConvertidos = array_map(function ($nome){ //o array_map é uma função que vai passar por todos os itens do array, assim sendo possivel uma formatação mais especifica dos dados
        return strtoupper($nome);
    }, $nomes);


    var_dump($nomes);