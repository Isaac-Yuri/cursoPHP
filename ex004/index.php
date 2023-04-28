<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Hello World!</h1>
    <?php 
        // As strings em php tem suas diferenças
        // São um total de 4 tipos de string, sendo elas:
        // double quoted -> "string normal com aspas duplas"
        // single quoted -> 'string normal com aspas simples'
        // heredoc
        // nowdoc
        // o operador de concatenação do php é o . ou seja = "curso" . " php" => "curso php"
        $nome = "Isaac";
        echo "Hello $nome <br>"; // Nas double quoted existe a interpretação do conteúdo
        echo 'Hello $nome'; // Nas simple quoted não existe
        echo "<br>PHP \u{1F596}\n";

        const ESTADO = "PB";
        echo "Eu moro na " . ESTADO;
        echo "Estamos no ano de " . date('Y');
    ?>
</body>
</html>