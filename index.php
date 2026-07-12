<?php

session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tarefas</h1>
    <form action="salvar.php" method="POST">
        <label for="tarefa">Nova tarefa:</label>
        <br>
        <input type="text" name="titulo" id="titulo" placeholder="informe a tarefa" required>

        <button type="submit">Salvar</button>
    </form>

    <hr>
    <h2>Lista de tarefas</h2>

</body>
</html>