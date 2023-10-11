<?php

$server_name = 'localhost';
$data_base = 'projeto';
$user_name = 'root';
$password = '';

$conn = mysqli_connect($server_name, $user_name, $password, $data_base);

if(!$conn){
    die('falha na conexão: ' . mysqli_connect_error());
}

// echo 'conexão realizada com sucesso!';
// mysqli_close($conn);

?>