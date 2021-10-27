
<?php
    echo 'Hello World <br>';

    $path = "/home/damiao/Documentos/20 - Projetos/public";
    $diretorio = dir($path);

    echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
    while($arquivo = $diretorio -> read()){
    echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
    }
    $diretorio -> close();
?>