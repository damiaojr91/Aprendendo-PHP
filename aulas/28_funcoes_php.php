<?php

//functions nativas do php

    $dominio = "www.academy.especializati.com.br";

    echo ($dominio);
    echo '<br>';
    echo '<hr>';

    //o str_replace serve para substituir alguma parte da string por outra string
    echo str_replace('www.', 'https://www.', $dominio);
    //no nosso exemplo ele irá procurar onde tiver 'www.' e subistituir por 'https://www.'
    echo '<br>';
    echo '<hr>';

    echo str_replace('www.', '', $dominio);
    echo '<br>';
    echo '<hr>';

    //a funcao substr serve para especificar até qual caracter deve ser exibido
    echo substr($dominio, 0, 4); 
    //no caso deste exemplo ele está começando a contar a string na posição 0 e exibindo até a posição 4
    echo '<br>';
    echo '<hr>';

    echo substr($dominio, -7); 
    //no caso deste exemplo ele está começando a contar a partir da ultima string e contando em ordem inversa para exibir o final da string
    echo '<br>';
    echo '<hr>';

    $protocolo = substr($dominio, 0, 8); 
    //no caso deste exemplo ele está verificando se existe protocolo https no dominio e exibindo uma mensagem
    if($protocolo == 'https://')
        echo 'É seguro!';
    else
        echo 'Não é seguro!';
    echo '<br>';
    echo '<hr>';

    var_dump(substr($dominio, 12, -7)); //aqui estamos dizendo para ignorar os 12 caracteres do inicio e os 7 do fim da string
    echo '<br>';
    echo '<hr>';

    echo strlen($dominio); //conta a quantidade de caracteres presentes na string