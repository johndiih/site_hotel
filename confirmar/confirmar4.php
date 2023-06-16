<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmar Escolha do Quarto</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" href="../img/logo.png">
    <script>
        function confirmarReserva() {
            var quantidadePessoas = document.getElementById("quantidadePessoas").value;
            var dataEntrada = document.getElementById("dataEntrada").value;
            var dataSaida = document.getElementById("dataSaida").value;

            // Aqui você pode adicionar a lógica para enviar os dados para o servidor ou realizar outras ações desejadas

            alert("Reserva confirmada! Detalhes da reserva:\n\nQuantidade de pessoas: " + quantidadePessoas + "\nData de entrada: " + dataEntrada + "\nData de saída: " + dataSaida);
        }
    </script>
</head>
<body class="quarto">
    <nav class="nav container">
        <h1 id="logo">Hoteis</h1>
        <ul><!--Links-->
            <li><a href="../index.php" class="links">Inicio</a></li>
            <li><a href="../quartos.php" class="links">Hoteis</a></li>
            <li><a href="../login.php" class="links">Login</a></li>
        </ul>
    </nav>
    <h2 id="destinos-mais">Confirmar Escolha do Quarto</h2>

    <section class="content">
        <div class="card">
            <img src="../img/quarto4.png">
            <h2>Suíte Familiar</h2>
            <p>Nossa suíte familiar é ideal para famílias que desejam aproveitar ao máximo sua estadia. Com dois quartos separados, oferecemos uma combinação de duas camas de solteiro, garantindo espaço e conforto para todos.</p>
            <form onsubmit="event.preventDefault(); confirmarReserva();">
                <label for="quantidadePessoas">Quantidade de pessoas:</label>
                <input type="number" id="quantidadePessoas" required><br><br>
                <label for="dataEntrada">Data de entrada:</label>
                <input type="date" id="dataEntrada" required><br><br>
                <label for="dataSaida">Data de saída:</label>
                <input type="date" id="dataSaida" required><br><br>
                <input type="submit" value="Confirmar Reserva">
            </form>
        </div>
    </section>
</body>
</html>
