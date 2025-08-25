<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Positivo ou Negativo</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_p_n">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_p_n'])) {
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                if ($numero > 0) {
                    echo "O número $numero é <strong>positivo</strong>.";
                } elseif ($numero < 0) {
                    echo "O número $numero é <strong>negativo</strong>.";
                } else {
                    echo "O número $numero é <strong>zero</strong>.";
                }
            }
        }
    }
    ?>
</body>

</html>