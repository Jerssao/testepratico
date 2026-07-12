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
    <pre>
<?php
print_r($_SESSION['tarefas']);
?>
</pre>
    <?php 
    
    if (empty($_SESSION['tarefas']))
        echo "<p>Nenhuma tarefa cadastrada</p>";
    else {
        foreach ($_SESSION['tarefas'] as $tarefa) {
            echo "<p>" . $tarefa['titulo'] . "</p>";
            if ($tarefa['concluida']) {
                echo "<p>Concluída</p>";
            } else {
                echo "<p>pendente</p>";
            }
        }
    }
    //tentar deixar em uma linha só depois ex: "tarefa x - concluida"

    ?>


</body>
</html>