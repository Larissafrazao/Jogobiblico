<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "Jogobiblico";

// Criando conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Checando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão com o banco de dados funcionando!";
}

$conn->close();
?>
