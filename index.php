<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>IMC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="margin: 20px">
        <center><h1>IMC</h1></center>
        <hr/>
        <br/>
        <center><a href="cadastro.php" class="btn btn-outline-secondary" tabindex="-1" role="button">Cadastrar um novo nome</a></center>
        <br/>
        <center>
            <table class="table table-success table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>IDADE</th>
                        <th>ALTURA</th>
                        <th>PESO</th>
                        <th>IMC</th>
                        <th>CLASSIFICAÇÃO</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conecta.php';
                        $nomes = mysqli_query($conn, "SELECT * FROM saude");
                        $row = mysqli_num_rows($nomes);
                        if ($row >0) {
                                while($registro = $nomes->fetch_array()){
                            $id = $registro['id'];
                    echo '<tr>';
                        echo '<td>'.$registro['id'].'</td>';
                        echo '<td>'.$registro['nome'].'</td>';
                        echo '<td>'.$registro['idade'].'</td>';
                        echo '<td>'.$registro['altura'].'</td>';
                        echo '<td>'.$registro['peso'].'</td>';
                        echo '<td>'.$registro['imc'].'</td>';
                        echo '<td>'.$registro['classif'].'</td>';
                        echo '<td><a href="editar.php?id='.$id.'">Editar</a> | <a href="excluir.php?id='.$id.'">Excluir</a></td>';
                    echo '</tr>';
                } 
                echo '</tbody>';
            echo '</table>';
        }
            else {
                echo "Não existem nomes cadastrados";
            }
            ?>
        </center>
        <a>TABELA DE CLASSIFICAÇÃO</a><br/>
        <a>1	Abaixo do peso</a><br/>
        <a>2	Peso normal</a><br/>
        <a>3	Sobrepeso</a><br/>
        <a>4    Obesidade grau I</a><br/>
        <a>5    Obesidade grau II</a><br/>
        <a>6    Obesidade grau III</a><br/>
    </body>
</html>