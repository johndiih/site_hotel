<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <Title>Hoteis</Title>
    <link rel="stylesheet" href="css/estilo.css">
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

    <form class="form-busca" method="get" action="quartos.php">
        <h1 id="procurar-hotel">Procurar Hotel</h1>
    <div class="busca-hotel">
        <input type="text" name="local" class="local" placeholder="Digite o local">
        <input type="date" name="check-in" class="check-in" placeholder="Data de check-in">
        <input type="date" name="check-out" class="check-out" placeholder="Data de check-out">
        <input type="number" name="hospedes" class="hospedes" placeholder="Número de hóspedes">
    
        <button type="submit" class="botao-busca">Buscar</button>
    </div>
    </form>
    <h1 id="destinos-mais">Destinos mais procurados</h1>
    
	<section class="content">
		<div class="card"><a href="quartos.php">
			<img src="img/bahia.png">
			<h2>Bahia</h2>
			<p>A Bahia é um estado localizado no nordeste do Brasil, conhecido por sua rica cultura, belas praias, gastronomia saborosa e influências africanas. Com uma história profunda e diversa, a Bahia é um verdadeiro tesouro cultural do país.</p>
		</a></div>
		<div class="card"><a href="quartos.php">
			<img src="img/manaus.png">
			<h2>Manaus</h2>
			<p>Manaus é a capital do estado do Amazonas, localizada na região norte do Brasil. Conhecida como a "Cidade da Amazônia" e "Porta de entrada para a Floresta Amazônica", Manaus é uma metrópole vibrante e exuberante, rica em cultura, natureza e história.</p>
		</a></div>
		<div class="card"><a href="quartos.php">
			<img src="img/brasilia.png">
			<h2>Brasilia</h2>
			<p>Brasília é a capital do Brasil e uma cidade única em sua concepção e arquitetura. Localizada no Planalto Central, no coração do país, Brasília foi planejada e construída com o objetivo de ser a sede do governo federal e um símbolo de modernidade e progresso.</p>
		</a></div>
		<div class="card"><a href="quartos.php">
			<img src="img/rio.png">
			<h2>Rio de Janeiro</h2>
			<p>O Rio de Janeiro é uma cidade icônica e deslumbrante, localizada na região sudeste do Brasil. Conhecida como a "Cidade Maravilhosa", o Rio é famoso por suas belas praias, paisagens deslumbrantes, festas animadas, cultura vibrante e seu estilo de vida descontraído.</p>
		</a></div>
		<div class="card"><a href="quartos.php">
			<img src="img/Gramado.png">
			<h2>Gramado</h2>
			<p>Gramado é uma encantadora cidade localizada no estado do Rio Grande do Sul, na região sul do Brasil. Conhecida por sua arquitetura europeia, clima ameno, paisagens exuberantes e eventos culturais, Gramado é um destino turístico popular e encanta visitantes de todo o país.</p>
		</a></div>
		<div class="card"><a href="quartos.php">
			<img src="img/fortaleza.png">
			<h2>Fortaleza</h2>
			<p>A cidade de Fortaleza é conhecida por suas belas praias de águas cristalinas e clima tropical. A praia de Iracema, a praia do Futuro e a praia de Meireles são algumas das mais populares e atraem tanto moradores locais quanto turistas. As praias oferecem uma ampla variedade de atividades, como passeios de barco, prática de esportes aquáticos e uma animada vida noturna à beira-mar.</p>
		</a></div>
	</section>

  </div>
</body>