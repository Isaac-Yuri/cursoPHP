<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal
        // 0b = binário
        // 0 = octal 
        // $numero = 160;
        // echo "O valor da variável é $numero."

        // $v = "Isaac";
        // var_dump($v);
        $v = 2e2; // mesma coisa que: (2 * 10)² que é tipo float
        $v = (int) 3e2; // Podemos forçar a saída como inteiro desta forma
        var_dump($v);
        $numeros = [3, 6.5, 7, 3.14, 18];
        var_dump($numeros)
    ?>
</body>
</html>