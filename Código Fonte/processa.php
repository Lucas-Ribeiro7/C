   <!DOCTYPE html>
   <html lang="pt-br">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="estilo.css">
       <title>Cadastro</title>
   </head>
   <body>
       <div class="borda">
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
            echo "<h2 class='sucesso'>Cliente Cadastrado com Sucesso!!!</h2>";
            ?>
            <button>
                <a href="index.html">Novo Cadastro</a>
            </button>
        </div>
   </body>
   </html>
   
