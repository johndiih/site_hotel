<?php
$servername = 'us-cdbr-east-06.cleardb.net';
$username = 'b05c89ff285667';
$password = 'ae5f7329';
$dbname = 'heroku_dbb949778fa0ef6';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}
?>
