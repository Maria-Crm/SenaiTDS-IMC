<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $imc = $peso / ($altura * $altura);
    $classif;
    if ($imc<18.5) {
        $classif = 1;
    }
    elseif (18.5<$imc && $imc<24.9) {
        $classif = 2;
    }
    elseif (25<$imc && $imc<29.9) {
        $classif = 3;
    }
    elseif (30<$imc && $imc<34.9) {
        $classif = 4;
    }
    elseif (35<$imc && $imc<39.9) {
        $classif = 5;
    }
    else {
        $classif = 6;
    }

    $query = $conn->query("SELECT * FROM saude WHERE nome='$nome' AND idade='$idade' AND altura='$altura' AND peso='$peso' AND imc='$imc' AND classif='$classif'");

    if (mysqli_num_rows($query) > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Nome já existe em nossa base de dados!');
        window.location.href='cadastro.php';
        </script>";
        mysqli_close($conn);
    } else {
        $sql = "INSERT INTO saude(nome, idade, altura, peso, imc, classif) VALUES ('$nome', '$idade', '$altura', '$peso', '$imc', $classif)";
        if (mysqli_query($conn, $sql)) {
            echo "<script language='javascript' type='text/javascript'>
            alert('Dados gravados com sucesso!');
            window.location.href='index.php';
            </script>";
        }
    }
    mysqli_close($conn);
?>
