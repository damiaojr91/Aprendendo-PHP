<?php

//functions nativas do php

    $nome = 'Damiao';

    if (isset($nome)) //verifica se a variavel possui algum valor
        echo "{$nome} <br>";
    else
        echo 'Não existem dados cadastrados. <br>';

    unset($nome); //deleta uma variável

    if (isset($nome))
        echo "{$nome} <br>";
    else
        echo 'Não existem dados cadastrados. <br>';
