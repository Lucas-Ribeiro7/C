<?php
            //Conexão com o Banco
            $con = mysqli_connect('localhost', 'root', '', 'cadastro');
            //Verificando se o $con tá zerado (Não tem)
            if(!$con){
                die("[ERRO] Não foi possivel conectar ao MySQL"); //Die finaliza o Script, caso seja verdadeiro do if() acima
            }
            $escolha = $_POST['escolha'];
            
            

            switch($escolha){
                case 'nome_pes' :
                    $nome_pes = $_POST['escolha'];
                    $sql_pesquisa = "SELECT * FROM pessoa WHERE nome LIKE '%$nome_pes%'";
                break;
                case 'sobrenome_pes' :
                    $sobrenome_pes = $_POST['escolha'];
                    $sql_pesquisa = "SELECT * FROM pessoa WHERE nome LIKE '%$sobrenome_pes%'";
                break;                    
            }
            mysqli_query($con, $sql_pesquisa) or die ("[ERRO] Não foi possivel efetuar a pesquisa."); //or die é uma instrução caso tenha um erro na sintaxe do $sql
            mysqli_close($con);

        ?>