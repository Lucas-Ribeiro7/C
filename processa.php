<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

//echo "Nome: $nome <br>Sobrenome: $sobrenome";

$sql = "INSERT INTO cadastro (nome, sobrenome, datacriacao) VALUES ('$nome', '$sobrenome', date()";
$resultado = mysqli_query($mysqli, $sql);

mysqli_close($mysqli);
