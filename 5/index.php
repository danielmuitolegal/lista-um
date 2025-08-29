<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Número Amigo</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="num1" required>
        <br>
        <br>
        <label for="numero">Digite outro número:</label>
        <input type="number" id="numero" name="num2" required>
    </form>
    <br>
    <button type="submit" name="verificar">Verificar</button>
    <br>
    <form method="POST" action="">

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            function somaDivisores($numero) {
                $soma = 0;

                for ($i = 1; $i < $numero; $i++) {
                    if ($numero % $i == 0) {
                        $soma = $soma + $i;
                    }
                }
                return $soma;
            }
        }

    }
    ?>
</body>

</html>