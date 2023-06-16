<!DOCTYPE html>
<html>
<head>
    <title>Editar Hotel</title>
    <link rel="icon" href="img/logo.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
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
    </style>
</head>
<body>
    <?php
    // Arquivo de conexão com o banco de dados
    require('conexao.php');

    // Verifica se o ID do hotel foi fornecido
    if (isset($_GET['id'])) {
        $hotelId = $_GET['id'];

        // Obtém os dados do hotel com base no ID
        $sql = "SELECT * FROM hoteis WHERE id = $hotelId";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            // Exibe o formulário de edição do hotel
            echo "<h1>Editar Hotel</h1>";
            echo "<form method='POST' action='atualizar_hotel.php'>";
            echo "<input type='hidden' name='hotel_id' value='" . $row['id'] . "'>";
            echo "<label for='nome'>Nome:</label>";
            echo "<input type='text' id='nome' name='nome' value='" . $row['nome'] . "' required><br><br>";
            echo "<label for='endereco'>Endereço:</label>";
            echo "<input type='text' id='endereco' name='endereco' value='" . $row['endereco'] . "' required><br><br>";
            echo "<label for='descricao'>Descrição:</label>";
            echo "<textarea id='descricao' name='descricao' required>" . $row['descricao'] . "</textarea><br><br>";
            echo "<input type='submit' name='atualizar' value='Atualizar'>";
            echo "</form>";
        } else {
            echo "Hotel não encontrado.";
        }
    } else {
        echo "ID do hotel não fornecido.";
    }
    ?>
</body>
</html>
