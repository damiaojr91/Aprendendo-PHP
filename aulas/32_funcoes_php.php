<?php

    //functions nativas do php
    //Criptografias

    $seguranca = 'segurancaextra';
    $senha = '123456' . $seguranca;

    echo md5($senha);
    echo '<br>';
    echo '<hr>';

    echo sha1($senha);
    echo '<br>';
    echo '<hr>';

    echo crypt($senha, $seguranca);
    echo '<br>';
    echo '<hr>';

    $senhaCriptografada = base64_encode($senha);

    echo $senhaCriptografada;
    echo '<br>';
    echo '<hr>';

    $senhaDescriptografada = base64_decode($senhaCriptografada);
    echo $senhaDescriptografada;
    echo '<br>';
    echo '<hr>';

    echo hash('sha512', $senha);
    echo '<br>';
    echo '<hr>';

    function criptografiaCustom(String $valor):String{
        $hash = crypt($valor, 'criptografiacustomizada');
        $hash = md5($valor);
        $hash = sha1($hash);
        $hash = hash('sha512',$hash);

        return $hash;
    }

    echo criptografiaCustom($senha);
    echo '<br>';
    echo '<hr>';

    //Esse exemplo executa a mesma tarefa que a function anterior, porém com menos linhas
    function criptografiaCustom2(String $valor):String{
        $hash = hash('sha512',sha1(md5(crypt($valor, 'criptografiacustomizada'))));
        return $hash;
    }

    echo criptografiaCustom2($senha);
    echo '<br>';
    echo '<hr>';
