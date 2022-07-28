<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
    </head>
    <body>
        <?php
            include('bd_conexao.php');
            if (isset($_POST['submit'])){
                $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
                $data = mysqli_real_escape_string($conexao, $_POST['data']);
                $sql = "Insert into usuario values('','$nome','$data')";
                
                $query = mysqli_query($conexao, $sql);
                if ($query){
                    header("location:bd_listar.php");
                } else {
                    echo "Erro: Os dados não foram inseridos.<br/>";
                    echo "Comando: ".$sql."<br/>";
                }
            }
        ?>
        <fieldset style="width:300px;">
            <form method="post" action="">
                Nome: <input type="text" name="nome"><br/>
                Data de visualização: <input type="date" name="data"><br/>
                <br/>
                <input type="submit" name="submit" value="Adicionar">
            </form>
        </fieldset>
    </body>
</html>