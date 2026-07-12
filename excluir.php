<?php

session_start();


$id_tarefa = $_GET['id'] ?? null;
if ($id_tarefa === null) {
    header('Location: index.php');
    exit;
}


foreach ($_SESSION['tarefas'] as $index => $tarefa) {
    if ($tarefa['id'] == $id_tarefa) {
        unset($_SESSION['tarefas'][$index]);
        break;
    }
}
header('Location: index.php');
exit;