<?php

    $infoCompanhia = [
        'nome' => 'Yahp',
        'fundador' => 'Xastre',
        'ano_atual' => 2021,
    ];

    echo 'Função "array_keys"';
    echo '<br>';
    var_dump(array_keys($infoCompanhia)); //Retorna o nome das posições contidas no array
    echo '<br>';
    echo '<br>';

    echo 'Função "array_values"';
    echo '<br>';
    var_dump(array_values($infoCompanhia)); //Retorna o conteudo das posições do array
    echo '<br>';
    echo '<br>';

    echo 'Função "count"';
    echo '<br>';
    var_dump(count($infoCompanhia)); //Conta quantas posições existem no array, muito útil para arrays grandes
    echo '<br>';
    echo '<br>';

    $infoCompanhiaDois = [
        'cursos' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
        'total_cursos' => 26,
    ];

    echo 'Função "array_merge"';
    echo '<br>';
    $infoCompanhiaJuncao = array_merge($infoCompanhia, $infoCompanhiaDois); //Unifica dois ou mais arrays
    echo '<pre>'; //Exibe em tela os resultados como eles realmente são
    var_dump($infoCompanhiaJuncao);
    echo '<br>';
    echo '<br>';