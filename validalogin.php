<?php
session_start();
require('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email === 'adm@adm.com' && $senha === '123') {
        // Autenticação bem-sucedida para o administrador, definir variáveis de sessão ou redirecionar para a página de destino
        $_SESSION['usuario_email'] = $email;
        $_SESSION['usuario_nome'] = 'Administrador';
        header('Location: hoteis.php');
        exit();
    }

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            // Autenticação bem-sucedida para usuários comuns, definir variáveis de sessão ou redirecionar para a página de destino
            $_SESSION['usuario_id'] = $row['id'];
            $_SESSION['usuario_nome'] = $row['nome'];
            header('Location: index.php');
            exit();
        } else {
            echo 'Senha incorreta.';
        }
    } else {
        echo 'Usuário não encontrado.';
    }
}

$conn->close();
?>
