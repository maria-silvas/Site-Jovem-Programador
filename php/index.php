<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
        <style type="text/css">
            td, th{padding: 5px; border:1px solid #ccc;}
        </style>
    </head>
    <body>
        <?php
            include('bd_conexao.php');
            $sql = "Select id_usuario, nome, dt_visualizacao from usuario";
            $query = mysqli_query($conexao, $sql);
            
            echo "<table>
                    <tr>
                        <th>Nome</th>
                        <th>Data de visualização</th>
                        <th>Alterar</th>
                        <th>Deletar</th>";
            echo "<tbody>";
            if ($query){
                while ($registro= mysqli_fetch_array($query)){
                    
                    echo "<tr><td>".$registro['nome']."</td>";
                    echo "<td>".$registro['dt_visualizacao']."</td>";
                    echo "<td><center><a href='bd_alterar.php?id_usuario=".$registro['id_usuario']."'>(+)</a></center></td>";
                    echo "<td><center><a href='bd_deletar.php?id_usuario=".$registro['id_usuario']."'>(-)</a></center></td></tr>";
                }
            }    
            echo "</tbody>";
            echo "</table>"
        ?>
        <input type="button" name="cadastro" value="Novo Cadastro" onclick="parent.location='bd_adicionar.php'">
        <input type="button" name="voltar" value="Voltar ao menu principal" onclick="parent.location='../index.html'">
    </body>
</html>
