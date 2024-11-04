<?php

//configuraçoes para conexao com o banco de dados
$server = "localhost";
$user = "root";
$password = "";
$database = "happy_tail_adoption";

//criar conexao
$conn = new mysqli($server, $user, $password, $database);

//verificar a conexao

if ($conn->connect_error){
    die ("Erro de conexao:" . $conn->connect_error);
}

?>