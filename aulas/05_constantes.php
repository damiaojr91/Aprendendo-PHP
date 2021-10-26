<?php
    // define('NOME_CONSTANTE', 123); //É importante, como boas práticas, sempre deixar o nome das constantes em MAIÚSCULO.
    define('NOME_CONSTANTE', 'NovoValor'); //Uma constante NÃO consegue receber um novo valor depois que ela já foi definida.
    // define('NOME_CONSTANTE2', 123); //O correto é criar uma nova constante contendo o novo valor.
    const TESTE_CONSTANTE = 321; //Outra forma de definir uma constante é utilizando a palavra reservada "const"
    
    var_dump(NOME_CONSTANTE); //Imprime na tela o debug da variável NOME_CONSTANTE
    var_dump(TESTE_CONSTANTE); //Imprime na tela o debug da variável TESTE_CONSTANTE