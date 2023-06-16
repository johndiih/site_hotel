<?php

require('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirma_senha'];

    // Realizar a validação dos dados e o processo de cadastro

    // Verificar se todos os campos foram preenchidos
    if (empty($nome) || empty($sobrenome) || empty($email) || empty($senha) || empty($confirmaSenha)) {
        echo 'Preencha todos os campos do formulário.';
    }
    // Verificar se as senhas coincidem
    elseif ($senha !== $confirmaSenha) {
        echo 'As senhas não coincidem.';
    }
    // Verificar se o email já está cadastrado
    else {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo 'Este email já está cadastrado.';
        } else {
            // Criar o hash da senha
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            // Inserir os dados no banco de dados
            $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senhaHash')";
            if ($conn->query($sql) === TRUE) {
                echo 'Cadastro realizado com sucesso.';
            } else {
                echo 'Erro ao cadastrar: ' . $conn->error;
                
            }
            header('Location: index.php');
        }
    }
}

$conn->close();
?>
