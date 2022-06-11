<?php
session_start();

$name = $_POST['name'];
$age = $_POST['age'];


// ERROR CHECK START
if (is_null($name)) {
    $_SESSION['error'] = 'Seu nome corretamente!';
    header("location:index.php?");
} else
if (is_numeric($name)) {
    $_SESSION['error'] = 'Seu nome corretamente!';
    header("location:index.php?");
} else
//
if (is_null($age)) {
    $_SESSION['error'] = 'Digite sua idade corretamente!';
    header("location:index.php?");
} else
if (!is_numeric($age)) {
    $_SESSION['error'] = 'Digite sua idade corretamente!';
    header("location:index.php?");
} else 
if ($age > 120) {
    $_SESSION['error'] = 'Digite sua idade corretamente!';
    header("location:index.php?");
} else
if ($age <= 0) {
    $_SESSION['error'] = 'Digite sua idade corretamente!';
    header("location:index.php?");
} else
// ERROR CHECK END

$name = ucwords(strtolower($name));

if ($age < 18) {
    $_SESSION['msg'] = "$name é menor de idade e tem $age anos."; 
    header("location:index.php?");
} else
    $_SESSION['msg'] = "$name é maior de idade e tem $age anos."; 
    header("location:index.php?");
   


?>