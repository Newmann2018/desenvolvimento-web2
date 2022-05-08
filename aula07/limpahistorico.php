<?php
session_start();

// Deleta histórico
unset($_SESSION['alunos']);
// Salva mensagem de sucesso
$_SESSION['sucesso'] = 'Histórico deletado!';
// Manda de volta para o index
header('location:index.php');