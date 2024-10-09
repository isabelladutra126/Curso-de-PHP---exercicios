
<!DOCTYPE html>
<html>
<head>
	<title>Resultado da Pesquisa por Cidade</title>
</head>
<body>


	<table border="1" style="width: 50%">
	<tr>
		<th>NOME</th>
		<th>ENDEREÇO</th>
		<th>CIDADE</th>
	</tr>



<?php

//conecta ao php onde tem o usuario e senha, feito por motivos de organizacao
include_once("conectar.php");

//pega a cidade que foi selecionada no html pesquisa
$pesquisa = $_POST ['cidade'];


//seleciona os usuarios que estao na cidade escolhida
$sql = "SELECT * from usuarios WHERE cidade = '$pesquisa' ";

//recebe os usuarios e envia pra tabela
$resultado = mysqli_query($conexao2, $sql);


//adiciona itens na tabela
while ($registro = mysqli_fetch_array($resultado)) { // enquanto colocarem registros a tabela continua funcionando
	$nome = $registro['nome'];
	$endereco = $registro['endereco'];
	$cidade = $registro['cidade'];
	echo "<tr>";
	echo "<td>" . $nome . "</td>";
	echo "<td>" . $endereco . "</td>";
	echo "<td>" . $cidade . "</td>";
	echo "</tr>";
}


//fecha a conexao e a tabela.
mysqli_close($conexao2);
echo "</table>";

?>

</body>
</html>









