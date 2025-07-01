<?php
session_start();

$conn = new mysqli("localhost", "root", "", "sistema_cadastro");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

// Procura o usuário pelo email
$stmt = $conn->prepare("SELECT nome, senha FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    // Verifica a senha
    if (password_verify($senha, $user['senha'])) {
        // Login bem sucedido
        $_SESSION['logado'] = true;
        $_SESSION['usuario_nome'] = $user['nome'];
        header("Location: pagina-protegida.php");
        exit;
    } else {
        // Senha incorreta
        header("Location: login.html?erro=senha");
        exit;
    }
} else {
    // Usuário (email) não encontrado
    header("Location: login.html?erro=usuario");
    exit;
}

$stmt->close();
$conn->close();
?>
