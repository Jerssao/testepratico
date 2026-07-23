<?php

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
            echo "|";

            if($tarefa['concluida'] == false) {
                echo "<a href='concluir.php?id=" . $tarefa['id'] . "'>Concluir</a>";
            }
            
            echo "<a href='excluir.php?id=" . $tarefa['id'] . "'>Excluir</a>";
            }
            echo "</p>";
    }
    };

function resumo(){
    $resumo = [
        'total' => count($_SESSION['tarefas']),
        'pendentes' => 0,
        'concluidas' => 0
    ];
    foreach ($_SESSION['tarefas'] as $tarefa) {
        if ($tarefa['concluida']) {
            $resumo['concluidas']++;
        } else {
            $resumo['pendentes']++;
        }
    }
    return $resumo;
}
    //tentar deixar em uma linha só depois ex: "tarefa x - concluida" não sei se compensa separar as chamadas para exclusão e conclusão da listagem