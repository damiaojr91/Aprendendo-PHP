<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu site em PHP</title>
    </head>
    <body>
        <!-- o include serve para inserir outra parte do código presente em outro arquivo dentro do corpo do código -->
        <?php
            include('includes/header.php');
        ?>

        <div>
            <?php
                echo 'Sou o conteúdo do site';
            ?>
        </div>

        <!-- o require serve para inserir OBRIGATÓRIAMENTE uma outra parte de código que está presente em outro arquivo -->
        <?php
            require('includes/footer.php');
        ?>

        <!-- existe também o INCLUDE_ONCE e o REQUIRE_ONCE que obriga ao código a buscar os arquivos apenas UMA vez para o projeto -->
    </body>
</html>