<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="img/logo.png">
</head>
<body class="body-login">
<form class="form-cadastro" method="post" action="validacadastro.php">
    <h2>Cadastro</h2>
    <div class="nome">
        <input type="text" name="nome" placeholder="Nome" required/>
        <input type="text" name="sobrenome" placeholder="Sobrenome" required/>
    </div>

    <input type="email" name="email" placeholder="E-mail" required/>
    <input type="password" name="senha" placeholder="Senha" required/>
    <input type="password" name="confirma_senha" placeholder="Confirme sua senha" required/>

    <button type="submit" class="botao-login">Cadastrar</button>
</form>

</body>
