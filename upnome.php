<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $imc = $_POST['imc'];
    $classif = $_POST['classif'];
    $peso2 = floatval($peso);
    $altura2 = floatval($altura);

    function calcularIMC($peso, $altura){
        $imc = $peso / ($altura * $altura);
        return $imc;
    }
    $imc = calcularIMC($peso2, $altura2);
    $resul = round($imc, 2);
    if ($resul<=18) {
        $classif = "1";
    }
    elseif (18<$resul && $resul<=24) {
        $classif = "2";
    }
    elseif (25<=$resul && $resul<=29) {
        $classif = "3";
    }
    elseif (30<=$resul && $resul<=34) {
        $classif = "4";
    }
    elseif (35<=$resul && $resul<=39) {
        $classif = "5";
    }
    else {
        $classif = "6";
    }

    $sql = "UPDATE saude SET nome='$nome', idade='$idade', altura='$altura', peso='$peso', imc='$resul', classif='$clasif' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
    }
    
?>