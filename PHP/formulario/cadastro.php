<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
</head>
<body>
	<h1> cadastro feito com sucesso </h1>
	<a href="pesquisa.html"><button>pesquise aqui os cadastros</button>

</body>
</html>
<?php
	//nome para connection_aborted()
	$hostname = "localhost";
	$bancodedados = "sistemafic";
	$usuario = "root";
	$senha = "";


	//conecta com a tabela criada no phpmyadmin:
	$conexao = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
	if (!$conexao) {
		die("Erro de conexão com o banco de dados");
	}

	//recebe os dados do html:
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];


	//insere os dados na tabela:
	$sql = "INSERT INTO usuarios (nome, endereco, cidade)
			VALUES ('$nome', '$endereco', '$cidade')";



	//estabelece conexao e envia comando para o banco de dados, executa a string SQL acima ^
	$resultado = mysqli_query($conexao, $sql);


	//encerra a conexao com banco de dados
	mysqli_close($conexao);

	?>