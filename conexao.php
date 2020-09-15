<?php
    //Conexão com o Banco
    $con = mysqli_connect('localhost', 'root', '', 'cadastro');

    //Verificando se o $con tá zerado (Não tem)
    if(!$con){
        die("Não foi possivel conectar ao MySQL"); //Die finaliza o Script, caso seja verdadeiro do if() acima
    }
    echo "<p>Conexão com o Banco de Dados realizada com Sucesso!!!</p><br>"; 
    echo "<p>Nome do Indiviuo: $nome</p>";
    echo "<p>Sobrenome do Individuo: $sobrenome</p>";
    echo "<p>Data de Nascimento do Individuo: $dt_nasc</p>";
    mysqli_close($con); //Encerra a conexão com o Banco de Dados
