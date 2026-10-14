<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>
    <form method="post">
        Nome: <input type="text" name="nome" required>
        <br><br>
        Idade: <input type="number" name="idade" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST["nome"]) && isset($_POST["idade"])) {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        echo "<br>Seu nome é " . htmlspecialchars($nome) . "<br>";
        echo "Sua idade é " . htmlspecialchars($idade) . " anos.";
    }
    ?>
</body>
</html>