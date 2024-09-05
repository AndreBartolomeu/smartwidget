<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";  // Nome do servidor (normalmente localhost)
$username = "Host";  // Usuário do MySQL (substitua por seu usuário)
$password = "130822";    // Senha do MySQL (substitua pela sua senha)
$dbname = "smartwidget_db"; // Nome do banco de dados que criamos

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão falhou
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Preparar a consulta SQL para inserir os dados na tabela leads
    $sql = "INSERT INTO leads (nome, email) VALUES ('$nome', '$email')";

    // Executar a consulta e verificar se funcionou
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
