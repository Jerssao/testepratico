<?php

session_start();

$id_tarefa = $_GET['id'] ?? null;

if ($id_tarefa === null) {
    header('Location: index.php');
    exit;
}

foreach ($_SESSION['tarefas'] as $index => $tarefa) {
    if ($tarefa['id'] === $id_tarefa) {
        $tarefa['concluida'] = true;
        $_SESSION['tarefas'][$index] = $tarefa;
        break;
    }
}
//tentar reorganizar os indices ao excluir depois
header('Location: index.php');
exit;