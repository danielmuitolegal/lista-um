<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 - Divisores</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="divisores">Exibir divisores</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['divisores'])) {
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                $array = range($numero, 1);
                $fatorial = 1;
                foreach ($array as $i) {
                    $varnome = "numero$i";
                    $$varnome = $i;
                    $fatorial *= $$varnome;
                    echo $fatorial . "<br>";
                }

            }
        }
    }
    ?>
</body>

</html>