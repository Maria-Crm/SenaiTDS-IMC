<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>IMC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="margin: 20px">
        <center><h1>CADASTRAR FUNCIONÁRIO</h1></center>
        <hr/>
        <br/>
        <form action="cadnome.php" method="post">
            <label>NOME</label><br/>
            <input type="tetx" name="nome" placeholder="Insira o nome" required>
            <br/>
            <label>IDADE</label><br/>
            <input type="number" name="idade" placeholder="Insira a idade" required>
            <br/>
            <label>ALTURA</label><br/>
            <input type="text" inputmode="numeric" name="altura" placeholder="Insira a altura" required>
            <br/>
            <label>PESO</label><br/>
            <input type="text" inputmode="numeric" name="peso" placeholder="Insira o peso" required>
            <br/><br/>
            <button type="submit" class="btn btn-outline-secondary">INSERIR</button>
        </form>
    </body>
</html>