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
        <form action="" method="post">
            <label>Escolha o que será pesquisado:</label>
            <br>
            <select name="escolha">
                <option value="nome_pes">Nome</option>
                <option value="sobrenome_pes">Sobrenome</option>
            </select>
            <input type="text"name="pesquisa">
            <input type="submit" value="Pesquisar">
        </form>
        
        
        
        <?php
            $nome_pes = $_POST['nome_pes'];
            $sobrenome_pes = $_POST['sobrenome_pes'];
            $escolha = $_POST['escolha'];

            switch($escolha){
                case 'nome_pes' :
                    $sql = "SELECT nome FROM pessoa WHERE nome LIKE '%$nome_pes%'";
                    
            }
            mysqli_query($con, $sql) or die ("[ERRO] Não foi possivel efetuar a pesquisa."); //or die é uma instrução caso tenha um erro na sintaxe do $sql
            mysqli_close($con);
        ?>
    </div>
    
</body>
</html>