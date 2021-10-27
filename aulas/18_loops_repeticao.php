<?php
    echo '<hr>';
    echo '<br>';
    for ($i = 0; $i<10; $i++){ //O loop inicia com $i sendo igual a zero e soma +1 até chegar a 10, onde o código vai parar
        echo "{$i}<br>";
    }
    
    echo '<br>';
    echo '<hr>';
    echo '<br>';

    for ($i = 10; $i>0; $i--){ //O loop inicia com $i sendo igual a dez e subtrai 1 até chegar a 0, onde o código vai parar
        echo "{$i}<br>";
    }

    echo '<br>';
    echo '<hr>';
    echo '<br>';

    //Exemplo 01 utilizando arrays para o loop
    $nomes = ['a', 'b', 'c', 'd', 'e',];

    for ($i = 0; $i<5; $i++){
        echo $nomes[$i]; //Nesse caso estamos dizendo ao código que o array $nomes recebe as posições de acordo com a contade da variável $i
    }

    echo '<br>';
    echo '<hr>';
    echo '<br>';

    //Exemplo 02 utilizando arrays e count para o loop
    $nomes = ['a', 'b', 'c', 'd', 'e',];

    for ($i = 0; $i<count($nomes); $i++){
        echo $nomes[$i]; //Nesse caso estamos dizendo ao código que o array $nomes recebe as posições de acordo com a contade da variável $i
    }

    echo '<br>';
    echo '<hr>';
    echo '<br>';