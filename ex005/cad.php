<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Resultado do processamento</h1>
    <main>
        <?php
            $nome = $_GET["nome"] ?? "sem nome"; // o operador de coeficiência nula coloca um valor padrão caso não receba nada no primeiro campo.
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>Então seu nome é <strong>$nome</strong> e seu sobrenome é <strong>$sobrenome</strong>?</p>"
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para pagina anterior</a>
        </p>
    </main>
</body>
</html>