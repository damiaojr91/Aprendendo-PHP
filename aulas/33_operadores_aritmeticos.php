<?php

    $a =6;
    $b = 10;

    $resultado = $a + $b;
    echo "O resultado da soma entre {$a} e {$b} é {$resultado} <br>";

    $resultado = $b - $a;
    echo "O resultado da subtração entre {$b} e {$a} é {$resultado} <br>";

    $resultado = $b * $a;
    echo "O resultado da multiplicação entre {$b} e {$a} é {$resultado} <br>";

    $resultado = $b / $a;
    echo "O resultado da divisão entre {$b} e {$a} é {$resultado} <br>";

    $resultado = $b % $a;
    echo "O resto da divisão entre {$b} e {$a} é {$resultado} <br>";

    if($b % 2 == 0)
        echo "O número {$b} é Par <br>";
    else
        echo "O número {$b} é Impar <br>";

    
    $result = 2 + 6 - 8 / 4 * 2;
    echo "O resultado da operação cadastrada é {$result} <br>";
    // Primeiro Multiplicação
    // Segundo Divisão
    // Terceiro Soma
    // Quarto Subtração

    //Para fazer as operções em ordem utilize parenteses:
    $result = (((2 + 6) - 8) / 4) * 2;
    echo "O resultado da operação cadastrada é {$result} <br>";