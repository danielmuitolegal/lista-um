<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Tabuada</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_tabuada">Tabuada</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_tabuada'])) {
            $numero = $_POST['numero'];
            $multiplicador = 0;
            while ($multiplicador < 11) {
                $resultado = $multiplicador * $numero;
                echo "$numero vezes $multiplicador é igual a $resultado";
                $multiplicador++;
                echo "<br>";
            }
        }
    }
    ?>
</body>

</html>