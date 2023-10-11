<?php

    include_once("conexao.php");

    if(!isset($_POST["id"]))
        header("location: index.php");

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $sql = "UPDATE pessoa SET nome = '$nome', nascimento = '$nascimento', sexo = '$sexo', peso ='$peso', altura = '$altura' WHERE pk_pessoa = $id";

    mysqli_query($conn, $sql);

    if(mysqli_error($conn)=="")
        header("location: index.php");

?>