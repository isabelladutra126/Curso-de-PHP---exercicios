<?php
$hostname = "localhost";
$bancodedados = "sistemafic";
$usuario = "root";
$senha = "";
$pesquisa = $_POST['cidade'];

$conexao2 = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

if (!$conexao2) {
	die("Erro de conexão com o banco de dados" . mysqli_connect_error());
}
echo "Sucesso na conexão";

/////////////////////////////////////////////////////////////////////////////////////



?>