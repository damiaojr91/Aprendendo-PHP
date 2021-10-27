<?php

//functions nativas do php

    $info = 'São Paulo/SP/Brasil/Terra';

    //O explode serve para transformar todos os itens de uma string em array
    //No nosso exemplo estamos dizendo que o array deve contar um novo item no indice a cada "/"
    $infoArray = explode('/', $info);
    var_dump($infoArray);
    echo '<hr>';
    echo'<br>';

    var_dump($infoArray[3]);
    echo '<hr>';
    echo'<br>';

    echo implode($infoArray, ' # '); //O implode é o inverso do explode, ele pega itens de um array e concatena em forma de string
