<?php
    $nomes = array('Damião', 'Yahp', 'Companhia'); //Função de manipulação de array
    $nomes = ['Damião', 'Yahp', 'Companhia'];

    /*===============================================
        Definindo conteudo do array
    ===============================================*/

    $nome = 'Damião';
    $companhia = 'Yahp';
    $ano = 2021;

    /*===============================================
        Definindo o array com base no conteudo criado anteriormente
    ===============================================*/

    $infoCompanhia = [
        $nome,
        $companhia,
        $ano,
    ];

    /*===============================================
        Definindo o array utilizando o campact
    ===============================================*/

    $infoCompanhia = compact('nome', 'companhia', 'ano'); //O compact já puxa o nome das variáveis e as define como sendo o nome da posição no array

    var_dump($infoCompanhia);
    echo '<br>';
    echo '<br>';

    var_dump(is_array($infoCompanhia)); //is_array verifica se o conteúdo é ou não um array com True ou False
    echo '<br>';
    echo '<br>';

    var_dump(in_array('Damião', $infoCompanhia)); //in_array verifica se o conteudo informado existe dentro do array indicado 