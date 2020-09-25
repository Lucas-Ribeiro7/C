<?php

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    

    //Conexão com o Banco
    $con = mysqli_connect('localhost', 'root', '', 'cadastro');

    //Verificando se o $con tá zerado (Não tem)
    if(!$con){
        die("Não foi possivel conectar ao MySQL"); //Die finaliza o Script, caso seja verdadeiro do if() acima
    }

    $sql = "INSERT INTO `pessoa` (`id_pessoa`, `nome`, `sobrenome`) VALUES (NULL, '$nome', '$sobrenome');";

    mysqli_query($con, $sql) or die ("ERRO ao tentar cadastrar o Registro"); //or die é uma instrução caso tenha um erro na sintaxe do $sql
    mysqli_close($con);
    echo "<p>Cliente Cadastrado com Sucesso</p>";
    
