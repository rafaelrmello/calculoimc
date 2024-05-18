<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        if ($peso > 0 && $altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";

            // Classificação do IMC
            if ($imc < 18.5) {
                echo "<p>Classificação: Abaixo do peso</p>";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo "<p>Classificação: Peso normal</p>";
            } elseif ($imc >= 25 && $imc < 29.9) {
                echo "<p>Classificação: Sobrepeso</p>";
            } else {
                echo "<p>Classificação: Obesidade</p>";
            }
        } else {
            echo "<p>Por favor, insira valores válidos para peso e altura.</p>";
        }
    } else {
        echo "<p>Método de requisição inválido.</p>";
    }
    ?>
</body>
</html>
