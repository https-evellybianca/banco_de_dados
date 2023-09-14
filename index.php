<?php

//*aqui vamos conectar com o banco de dados*/
$servername = "localhost";
//voce deu nome ao banc de dados 
$database = "banco2c";
$username = "root";
$password = "";

$conexao = mysqli_conect(
    $severname, $username<
    $password,$database

);

if (!$conn){
    die("Falha na conexão").mysqli_connect_error());
}
echo "conectado com sucesso";
?>