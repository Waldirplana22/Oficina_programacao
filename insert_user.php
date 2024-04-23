<?php
include 'conexao.php';

//receber os dados do formulario

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

//inserindo dados no banco

$insert = "INSERT INTO user VALUES(null, '$nome','$login','$senha')";

$sql = mysqli_query($conexao,$insert);


?>
