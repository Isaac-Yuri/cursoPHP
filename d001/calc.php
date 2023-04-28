<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php 
            $numero = $_POST["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<p>O número escolhido é $numero<br>O seu antecessor é $antecessor<br>O seu sucessor é $sucessor</p>"
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </main>
</body>
</html>