<?php

session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

function listarTarefas() {

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
    };
    //tentar deixar em uma linha só depois ex: "tarefa x - concluida"