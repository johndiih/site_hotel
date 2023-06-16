<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Escolha de Quarto</title>
    <link rel="stylesheet" href="css/estilo.css">
	<link rel="icon" href="img/logo.png">
</head>
<body class="quarto">
<nav class="nav container">
        <h1 id="logo">Hoteis</h1>
        
        <ul><!--Links-->
            <li><a href="index.php" class="links">Inicio</a></li>
            <li><a href="quartos.php" class="links">Hoteis</a></li>
            <li><a href="login.php" class="links">Login</a></li>
            
        </ul>
    </nav>
    <h2 id="destinos-mais">Escolha de Quarto</h2>

    <section class="content">
		
    <div class="card"><a href="confirmar/confirmar1.php">
			<img src="img/quarto1.png">
			<h2>Terraço</h2>
			<p>Nossos quartos superiores com terraço são ideais para aqueles que desejam aproveitar o ar livre durante a estadia. Com um espaçoso terraço privativo, você pode desfrutar do clima ensolarado enquanto aprecia a vista da cidade ou do jardim do hotel.</p>
		</a></div>
        <div class="card"><a href="confirmar/confirmar2.php">
			<img src="img/quarto2.png">
			<h2>Quarto Classico</h2>
			<p>Nosso quarto clássico oferece uma estadia confortável e acolhedora. Com uma decoração tradicional e aconchegante, você encontrará uma cama de casal ou duas camas de solteiro, banheiro privativo e uma área de trabalho funcional. </p>
		</a></div>
        <div class="card"><a href="confirmar/confirmar3.php">
			<img src="img/quarto3.png">
			<h2>Quarto Deluxe</h2>
			<p>Nossa acomodação deluxe com vista para o mar oferece uma experiência única e relaxante. Desperte todas as manhãs com vistas deslumbrantes do oceano azul cristalino.</p>
		</a></div>
        <div class="card"><a href="confirmar/confirmar4.php">
			<img src="img/quarto4.png">
			<h2>Suíte Familiar</h2>
			<p>Nossa suíte familiar é ideal para famílias que desejam aproveitar ao máximo sua estadia. Com dois quartos separados, oferecemos uma combinação duas camas de solteiro, garantindo espaço e conforto para todos</p>
        </a></div>
        <div class="card"><a href="confirmar/confirmar5.php">
			<img src="img/quarto5.png">
			<h2>Suíte Presidencial</h2>
			<p>Nossa suíte presidencial é o ápice do luxo e do conforto. Projetada para oferecer uma experiência exclusiva, esta suíte espaçosa apresenta uma decoração elegante e mobiliário de alta qualidade. </p>
		</a></div>
        <div class="card"><a href="confirmar/confirmar6.php">
			<img src="img/quarto6.png">
			<h2>Quarto Executivo</h2>
			<p>Desfrute de uma estadia luxuosa em nosso espaçoso quarto executivo. Com uma decoração elegante e contemporânea, oferecemos uma cama king-size confortável, banheiro privativo com amenities de alta qualidade e uma vista deslumbrante da cidade. </p>
		</a></div>
        <?php
    // Arquivo de conexão com o banco de dados
    require_once 'conexao.php';

    // Consulta os quartos existentes no banco de dados
    $sql = "SELECT * FROM hoteis";
    $result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			// Exibe os quartos na página
			echo "<div class='card'>";
			echo "<img src='" . $row["imagem"] . "' alt='" . $row["nome"] . "'>";
			echo "<h2>" . $row["nome"] . "</h2>";
			echo "<p>" . $row["descricao"] . "</p>";
			echo "</div>";
		}
	}
	

    ?>
    </section>
</body>
</html>

