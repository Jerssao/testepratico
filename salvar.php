<?php

session_start();
if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

$titulo = trim($_POST['titulo']);

if ($titulo === '') {
    header('Location: index.php');
    exit;
}

$novatarefa = [
    'id' => uniqid(),
    'titulo' => $titulo,
    'concluida' => false
];
$_SESSION['tarefas'][] = $novatarefa;
header('Location: index.php');
exit;
?>
