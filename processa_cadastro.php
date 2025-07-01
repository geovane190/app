<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_cadastro";

// Conexão com o banco
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Pega os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

// Prepara e executa o INSERT
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    // Redireciona para a página de login ou sucesso
    header("Location: login.html");
    exit();
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
