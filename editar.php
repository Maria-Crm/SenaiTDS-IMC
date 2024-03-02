<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM saude WHERE id=$id";
    $query = $conn->query($sql);
    while ($dados = $query->fetch_array()) {
        $nome = $dados['nome'];
        $idade = $dados['idade'];
        $altura = $dados['altura'];
        $peso = $dados['peso'];
        $imc = $dados['imc'];
        $classif = $dados['classif'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>IMC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="margin: 20px">
        <center><h1>EDITAR DADOS</h1></center>
        <hr/>
        <br/>
        <form action="upnome.php?id=<?php echo $id;?>" method="post">
            <label>NOME</label><br/>
            <input type="tetx" name="nome" value="<?php echo $nome;?>" required>
            <br/>
            <label>IDADE</label><br/>
            <input type="number" name="idade" value="<?php echo $idade;?>" required>
            <br/>
            <label>ALTURA</label><br/>
            <input type="text" inputmode="numeric" name="altura" value="<?php echo $altura;?>" required>
            <br/>
            <label>PESO</label><br/>
            <input type="text" inputmode="numeric" name="peso" value="<?php echo $peso;?>" required>
            <br/><br/>
            <button type="submit" class="btn btn-outline-secondary">INSERIR</button>
        </form>
    </body>
</html>