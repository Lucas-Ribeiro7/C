<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dt_nasc = $_POST['dt_nasc'];

include_once 'conexao.php';

//echo "Nome: $nome <br>Sobrenome: $sobrenome <br>Data de Nascimento: $dt_nasc";


/*
$sql = "INSERT INTO cadastro (nome, sobrenome, datacriacao) VALUES ('$nome', '$sobrenome', date()";
$resultado = mysqli_query($con, $sql);
*/
