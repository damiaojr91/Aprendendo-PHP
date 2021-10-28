<?php

    // var_dump($_POST); //Mostra o retorno do método POST do formulário da página HTML
    // var_dump($_POST['nome']); //Como o retorno é em array, dessa forma é possível visualizar o conteúdo de uma posição

    /*
    //EXEMPLO DE VALIDAÇÕES SIMPLES:
    if ($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) <= 3){
        echo 'O campo nome está vazio ou contém dados inválidos';
        return;
    } else {
        echo "Nome: {$_REQUEST['nome']}";
        echo '<hr>';
        echo "Senha: {$_REQUEST['senha']}";
        echo '<hr>';
        echo "E-mail: {$_REQUEST['email']}";
        echo '<hr>';
        echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não';
        echo '<hr>';
        echo "Sexo: {$_REQUEST['sexo']}";
        echo '<hr>';
        echo "Estado: {$_REQUEST['estado']}";
        echo '<hr>';
        echo "Descrição: {$_REQUEST['descricao']}";
        echo '<hr>';
    }
    */

    /*
    echo "Nome: {$_POST['nome']}";
    echo '<hr>';
    echo "Senha: {$_POST['senha']}";
    echo '<hr>';
    echo "E-mail: {$_POST['email']}";
    echo '<hr>';
    echo "Concordou? " . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não';
    echo '<hr>';
    echo "Sexo: {$_POST['sexo']}";
    echo '<hr>';
    echo "Estado: {$_POST['estado']}";
    echo '<hr>';
    echo "Descrição: {$_POST['descricao']}";
    echo '<hr>';
    */

    //REQUEST consegue trabalhar com todo tipo de valor, porém ele é um pouco mais lento que os outros métodos
    echo "Nome: {$_REQUEST['nome']}";
    echo '<hr>';
    echo "Senha: {$_REQUEST['senha']}";
    echo '<hr>';
    echo "E-mail: {$_REQUEST['email']}";
    echo '<hr>';
    echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não';
    echo '<hr>';
    echo "Sexo: {$_REQUEST['sexo']}";
    echo '<hr>';
    echo "Estado: {$_REQUEST['estado']}";
    echo '<hr>';
    echo "Descrição: {$_REQUEST['descricao']}";
    echo '<hr>';

