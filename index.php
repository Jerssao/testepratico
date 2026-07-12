<?php

session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

require_once 'funcoes.php';
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
        <input type="text" name="titulo" id="titulo" placeholder="descreva a tarefa" required>

        <button type="submit">Salvar</button>
    </form>

    <hr>
    <h2>Lista de tarefas cadastradas</h2>

<pre>
<?php
listarTarefas();
?>
</pre>
<h2>Resumo</h2>

 <?php
    $resumo = resumo($_SESSION['tarefas']);

    echo "Total: " . $resumo['total'] . "\n";
    echo "Pendentes: " . $resumo['pendentes'] . "\n";
    echo "Concluídas: " . $resumo['concluidas'] . "\n";
?>


</body>
</html>