<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Hotel</title>
    <link rel="icon" href="img/logo.png">
    <script>
        function exibirAlertaSucesso() {
            alert("Hotel atualizado com sucesso.");
            window.location.href = "hoteis.php";
        }
    </script>
</head>
<body>
    <?php
    // Arquivo de conexão com o banco de dados
    require_once 'conexao.php';

    // Verifica se o formulário de atualização foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['atualizar'])) {
        // Obtém os dados do formulário
        $hotelId = $_POST['hotel_id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $descricao = $_POST['descricao'];

        // Atualiza os dados do hotel no banco de dados
        $sql = "UPDATE hoteis SET nome = '$nome', endereco = '$endereco', descricao = '$descricao' WHERE id = $hotelId";
        if ($conn->query($sql) === TRUE) {
            echo "<script>exibirAlertaSucesso();</script>";
        } else {
            echo "Erro ao atualizar hotel: " . $conn->error;
        }
    }
    ?>
</body>
</html>