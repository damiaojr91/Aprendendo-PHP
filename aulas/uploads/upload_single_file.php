<?php
    // echo '<pre>';
    // var_dump($_FILES['imagem']['name']); //$_FILES é usado para a captura de arquivos vindos do formulário

    //Aqui recebemos o arquivo "imagem" vindo do formulário
    $foto = $_FILES['imagem'];
    // echo '<pre>';
    // var_dump($foto);

    //Aqui estamos definindo o caminho onde a imagem será salva
    $path = 'imgs/';

    //Aqui estamos movendo o arquivo que inicialmente ficará numa pasta temporária do PHP
    // para a pasta que definimos na varíavel $path.
    //Também estamos concatenando o nome do arquivo com o caminho para que este receba o mesmo nome no momento de salvar.
    if (move_uploaded_file($foto['tmp_name'], $path . $foto['name']))
        echo "Arquivo salvo na pasta {$path}";
    else
        echo 'Ocorreu alguma falha no processo.';