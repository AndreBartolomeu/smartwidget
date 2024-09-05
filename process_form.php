<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root"; // substitua pelo seu nome de usuário do MySQL
$password = ""; // substitua pela sua senha do MySQL
$dbname = "smartwidget_db";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém o e-mail do formulário
$email = $_POST['email'];

// Prepara e executa a inserção no banco de dados
$stmt = $conn->prepare("INSERT INTO leads (email) VALUES (?)");
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    echo "Obrigado por se inscrever!";
} else {
    echo "Erro ao enviar. Por favor, tente novamente.";
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>
