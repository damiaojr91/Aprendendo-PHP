<?php

//functions nativas do php

    $nome = 'damiao da silva Junior <br>';

    echo strtoupper($nome); //strtoupper converte todos os caracteres para maiúsculo
    echo strtolower($nome); //strtolower converte todos os caracteres para minúsculo
    echo ucfirst($nome); //ucfirst converte a primeira letra de cada palavra para maiúsculo
    echo ucfirst(strtolower($nome)); //aqui estamos transformando a variavel $nome para minúsculo e depois deixando apenas o primeiro caracter em maiusculo
    echo ucwords(strtolower($nome)); //aqui estamos transformando todos os primeiros caracteres da variavel $nome para maiúsculo