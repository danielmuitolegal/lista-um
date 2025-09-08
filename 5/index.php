<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Exercício 04 - Fatorial</title>
=======
    <title>Exercício 05 - Número Amigo</title>
>>>>>>> 5c7b4927bb58a1c6387cd8f776c4e4675ded269e
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
<<<<<<< HEAD
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="fatorial">Fatoriar</button>
=======
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

>>>>>>> 5c7b4927bb58a1c6387cd8f776c4e4675ded269e
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
<<<<<<< HEAD
        if (isset($_POST['fatorial'])) {
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                
                }

            }
        }
=======
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

>>>>>>> 5c7b4927bb58a1c6387cd8f776c4e4675ded269e
    }
    ?>
</body>

</html>