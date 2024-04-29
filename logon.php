<?php
//recebendo dados do formulário
$login2 = $_POST['login'];
$senha = $_POST['senha'];

//puxando dados de conexão

include 'conexao.php';

$select = "SELECT * FROM user WHERE login = '$login2'";

$pesquisa = mysqli_query($conexao,$select);

$array = mysqli_fetch_array($pesquisa);

//dados vindos do banco
$nome = array['login'];
$password_db = $array['senha'];

if ($login2 == $nome && $senha == $password_db) {
    location('cadastro_livraria.php');
}else {
    echo "'<script>alert('Usuário Inválido'); </script>'";
}

?>