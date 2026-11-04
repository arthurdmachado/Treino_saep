<?php

include "../infra/conexao.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino</title>
</head>
<body>


<h1>Treino</h1>

<hr>

<h2>Cadastre os Usuários:</h2>

<form action="treino.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br><br>
    <button type=submit>Cadastrar</button>
</form>

<hr>

<form action="treino.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    <br><br>
    <label for="preco">Preço:</label>
    <input type="number" name="preco" id="preco" required>
    <br><br>
    <button type=submit>Cadastrar</button>
</form>



</body>
</html>