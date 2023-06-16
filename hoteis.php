<!DOCTYPE html>
<html>
<head>
    <title>Administração de Hotéis</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing:border-box;
        text-decoration: none;
        text-align: center;
    }
    body {
    font-family: Arial, sans-serif;
    background-color: lightblue;
    position: relative;
    height: 100vh;
    }
    nav { 
    background-color: #008080;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 50px;
    padding: 15px 50px;
    box-shadow: 10px 10px 10px
    rgba(128, 128, 128, 0.548);
    color :white;
    }
    nav ul{
    list-style-type: none;
    display: flex;
    align-items: center;
    gap: 20px;
    }
    li{
    width: 70px;
    }
    li a{
    font-size: 1.1rem;
    cursor: pointer;
    padding: 20px 15px;
    transition: 0.5s;
    color: white;
    }
    li a:hover{
    color: #f1c40f;
    border-bottom: 4px #f1c40f solid;
    transition: 0.5s;
    }
    .hide{
    top: 70px;
    }
    h1 {
    margin-bottom: 20px;
    }
    h2 {
    margin-bottom: 10px;
    }
    form {
    margin-bottom: 20px;
    }
    label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    }
    input[type="text"],
    textarea {
         width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        td:last-child {
            text-align: center;
        }

        .message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
</style>
<link rel="icon" href="img/logo.png">

</head>
<body>
<nav class="nav container">
        <h1 id="logo">Hoteis</h1>
        
        <ul><!--Links-->
            <li><a href="index.php" class="links">Inicio</a></li>
            <li><a href="quartos.php" class="links">Hoteis</a></li>
            <li><a href="login.php" class="links">Login</a></li>
            
        </ul>
    </nav>
    <h1>Administração de Hotéis</h1>

    <?php
    // Arquivo de conexão com o banco de dados
    require_once 'conexao.php';

    // Verifica se o formulário de adição foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adicionar'])) {
        // Obtém os dados do formulário
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $descricao = $_POST['descricao'];

        

            // Insere o hotel e a imagem no banco de dados
            $sql = "INSERT INTO hoteis (nome, endereco, descricao ) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssb", $nome, $endereco, $descricao,);

            if ($stmt->execute()) {
                echo "Hotel adicionado com sucesso.";
            } else {
                echo "Erro ao adicionar hotel: " . $stmt->error;
            }

            $stmt->close();
        
    }

    // Verifica se o formulário de edição/exclusão foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hotel_id'])) {
        $hotelId = $_POST['hotel_id'];

        // Verifica qual botão foi clicado
        if (isset($_POST['editar'])) {
            // Redireciona para a página de edição do hotel com base no ID
            header("Location: editar.php?id=$hotelId");
            exit();
        } elseif (isset($_POST['excluir'])) {
            // Exclui o hotel do banco de dados
            $sql = "DELETE FROM hoteis WHERE id = $hotelId";
            if ($conn->query($sql) === TRUE) {
                echo "Hotel excluído com sucesso.";
            } else {
                echo "Erro ao excluir hotel: " . $conn->error;
            }
        }
    }
    ?>

    <!-- Formulário para adicionar um hotel -->
    <h2>Adicionar Hotel</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea><br><br>

        

        <input type="submit" name="adicionar" value="Adicionar Hotel">
    </form>

    <!-- Lista de hotéis -->
    <h2>Lista de Hotéis</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
        <?php
        // Consulta os hotéis existentes no banco de dados
        $sql = "SELECT * FROM hoteis";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["endereco"] . "</td>";
                echo "<td>" . $row["descricao"] . "</td>";
                echo "<td>";
                echo "<form method='POST' action='" . $_SERVER["PHP_SELF"] . "'>";
                echo "<input type='hidden' name='hotel_id' value='" . $row["id"] . "'>";
                echo "<input type='submit' name='editar' value='Editar'>";
                echo "<input type='submit' name='excluir' value='Excluir'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum hotel encontrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
