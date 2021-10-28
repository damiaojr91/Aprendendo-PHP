<?php
    // echo '<pre>';
    // var_dump($_FILES['imagens']);
    // var_dump($_FILES['imagens']['name']); //$_FILES é usado para a captura de arquivos vindos do formulário

    //Aqui recebemos o arquivo "imagem" vindo do formulário
    $fotos = $_FILES['imagens'];
    // echo '<pre>';
    // var_dump($fotos);

    //Aqui estamos definindo o caminho onde a imagem será salva
    $path = 'imgs/';

    //Aqui estamos movendo o arquivo que inicialmente ficará numa pasta temporária do PHP
    // para a pasta que definimos na varíavel $path.
    //Também estamos concatenando o nome do arquivo com o caminho para que este receba o mesmo nome no momento de salvar.
    for ($i = 0; $i < count($fotos['name']); $i++){
        if (move_uploaded_file($fotos['tmp_name'][$i], $path . $fotos['name'][$i]))
            echo "Sucesso ao armazenar o arquivo {$i} <br>";
        else
            echo "Falha ao armazenar o arquivo {$i} <br>";
    }