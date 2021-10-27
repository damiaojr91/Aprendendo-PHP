<?php

//functions nativas do php

    echo date('Y'); //retorna o ano atual completo
    echo '<br>';
    echo '<hr>';

    echo date('y'); //retorna apenas os dois ultimos digitos do ano atual
    echo '<br>';
    echo '<hr>';
    
    echo 'O ano atual: ' . date('Y') . '<br>';
    echo '<hr>';

    echo 'O mês atual: ' . date('m') . '<br>';
    echo '<hr>';

    echo 'O dia de hoje é: ' . date('d') . '<br>';
    echo '<hr>';

    echo 'O data de hoje é: ' . date('d/m/Y') . '<br>';
    echo '<hr>';

    echo 'O data de hoje é: ' . date('Y-m-d') . '<br>';
    echo '<hr>';

    echo 'A hora atual é: ' . date('H') . '<br>';
    echo '<hr>';

    echo 'O minuto atual é: ' . date('i') . '<br>';
    echo '<hr>';

    echo 'O segundo atual é: ' . date('s') . '<br>';
    echo '<hr>';

    echo 'A hora atual sem timezone configurado é: ' . date('H:i:s') . '<br>';
    echo '<hr>';

    echo 'A timezone trabalhada é: ' . date_default_timezone_get() . '<br>';
    echo '<hr>';

    date_default_timezone_set('America/Sao_Paulo');

    echo 'A hora atual com timezone configurado é: ' . date('H:i:s') . '<br>';
    echo '<hr>';