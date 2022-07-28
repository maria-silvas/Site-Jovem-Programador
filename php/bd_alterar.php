<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('bd_conexao.php');
            if (isset($_GET['id_usuario'])){
                $id = $_GET['id_usuario'];
                
                if (isset($_POST['submit'])){
                    $nome =$_POST['nome'];
                    $data =$_POST['data'];
                    $sql = "Update usuario set nome='$nome', dt_visualizacao='$data' where id_usuario='$id'";
                    
                    $query = mysqli_query($conexao, $sql);
                    if ($query){
                        header('location:bd_listar.php');
                    } else {
                        echo "Erro: Os Dados não foram alterados.<br/>";
                        echo "Comando: ".$sql."<br/>";
                    }
                }
                $sql = "Select * from usuario where id_usuario='$id'";
                $query1 = mysqli_query($conexao, $sql);
                $query2 = mysqli_fetch_array($query1);
        ?>
                <form method="post" action="">
                    Nome:<input type="text" name="nome" value="<?php echo $query2['nome']; ?>"/><br/>
                    Data de visualização:<input type="date" name="data" value="<?php echo $query2['dt_visualizacao']; ?>"/><br/> 
                    <br/>
                    <input type="submit" name="submit" value="Alterar">
                </form>
        <?php
            }
        ?>
    </body>
</html>