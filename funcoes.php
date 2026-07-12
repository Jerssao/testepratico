<?php

session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}