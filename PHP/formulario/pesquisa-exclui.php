<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa de usuários do sistema</title>
</head>
<body>
	<table border="1" width="50%">
	<tr>
	<th>NOME</th>
	<th>ENDERECO</th>
	<th>CIDADE</th>
	</tr>

<?php
	include_once("conectar.php");
	$sql = "SELECT * FROM usuarios";

	//envia a conexao pro banco efetivamente
	$resultado = mysqli_query($conexao2, $sql);

	//enquanto forem feitos registros a tabela vai continuar adicionando dados
	while ($registro = mysqli_fetch_array($resultado)) {
		$nome = $registro['nome'];
		$endereco = $registro['endereco'];
		$cidade = $registro['cidade'];
		echo "<tr>";
		echo "<td>" . $nome . "</td>";
		echo "<td>" . $endereco . "</td>";
		echo "<td>" . $cidade . "</td>";
		echo "</tr>";
	}
	

	echo "</table>";
	mysqli_close($conexao2);
?>
	<form name="excluir" action="excluir.php" method="post">
		<p>Digite o nome que deseja excluir:
		<input type="text" name="nome"></p>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>