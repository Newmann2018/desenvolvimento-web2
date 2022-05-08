<?php
session_start();

// Deleta histórico
unset($_SESSION['calcula']);
// Salva mensagem de sucesso
$_SESSION['sucesso'] = 'Histórico deletado!';
// Manda de volta para o index
$_SESSION['calculadora']=[];
header('location:index.php');