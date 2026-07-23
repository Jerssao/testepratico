<?php

session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

require_once 'funcoes.php';
#require_once '/./style.css';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <form class="form" action="salvar.php" method="POST">
        <div class="flex"></div>
        <h1>
            <p class="title">Tarefas</p>
        </h1>
        <label class="message" for="tarefa">Nova tarefa:</label>

        <br>
        
        <label>
            <input class="input" type="text" name="titulo" id="titulo" placeholder="" required="">
            <span>Informe a tarefa</span>
        </label>
        <button type="submit" class="submit">Salvar</button>
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