<?php
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    //Conexão com o Banco
    $con = mysqli_connect('localhost', 'root', '', 'cadastro');
    //Verificando se o $con tá zerado (Não tem)
    if(!$con){
        die("[ERRO] Não foi possivel conectar ao MySQL"); //Die finaliza o Script, caso seja verdadeiro do if() acima
    }

    include_once 'cadastrar.php';