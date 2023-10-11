<?php

    include_once("conexao.php");

    if(!isset($_POST["nome"]))
        header("location: index.php");

    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $sql = "INSERT INTO pessoa(nome, nascimento, sexo, peso, altura) VALUES('$nome', '$nascimento', '$sexo', $peso, $altura)";
    mysqli_query($conn, $sql);
    if(mysqli_error($conn)=="")
        header("location: index.php");

?>