<?php
//Define que a resposta será em formato json header('Content-Type: application/json');
//Configurações do banco de dados(MySQL)
$severname= "localhost";
$username= "root";
$password= "";
$dbname= "Jogobiblico";

//cria a conexão com o banco de dados
$conn = new mysqli($severname,$username,$password,$dbname);

//checa se a conexão falhou
if ($conn->connect_error) {
    die(json_encode(["error"=> "Falha na conexão: " .$conn->connect_error]));
}

?>
