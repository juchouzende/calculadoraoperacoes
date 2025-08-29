<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <h1>Calculadora Simples</h1>
    <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method="post">
        <label for="num1">Num1: </label>
        <input type="text" name="num1" required>
        <label for="num2">Num2: </label>
        <input type="text" name="num2" required>
        <label for="operation">Operação: </label>
        <select name="operation" required>
            <option value="add">Adição (+)</option>
            <option value="subtract">Subtração (-)</option>
        </select>
        <input type="submit" value="Calcular">
        <input type="reset" value="Reset">
    </form>

    <?php
        // Variáveis
        $num1 = 0;
        $num2 = 0;
        $total = 0;
        $operator = '';

        if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operation"])) {
            // Entradas
            $num1 = floatval($_POST["num1"]);
            $num2 = floatval($_POST["num2"]);
            $operation = $_POST["operation"];

            // Processamento
            if ($operation == "add") {
                $total = $num1 + $num2;
                $operator = "+";
            } elseif ($operation == "subtract") {
                $total = $num1 - $num2;
                $operator = "-";
            }

            // Saída
            echo "<br><br><br>";
            echo "<h2>" . $num1 . " " . $operator . " " . $num2 . " = " . $total . "</h2>";
        }
    ?>
    
</body>
</html>