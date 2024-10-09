<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	function exibir_mensagem()
	{
		echo "Olá  <br>";
		echo "Mundo! <br>";
	}
	exibir_mensagem();

	////////////////////////////////////////////////////////

	function exibir_nome($nome)
	{
		echo "Olá $nome";
	}
	exibir_nome("Isabella <br>");

	////////////////////////////////////////////////////////

	function dia_atual() 
	{
		$hoje = getdate();
		switch ($hoje["wday"]) {
			case 0:
			return "domingo";
			case 1: 
			return "segunda";
			case 2:
			return "terça";
			case 3:
			return "quarta";
			case 4:
			return "quinta";
			case 5:
			return "sexta";
			case 6:
			return "sábado";

		}
	}
	$dia = dia_atual();
	echo "$dia <br>";

	///////////////////////////////////////////////////////////

	function soma($a, $b){
		return $a + $b;
	}
	$resultado = soma(3,4);
	echo "$resultado <br>";

	/////////////////////////////////////////////////////////////

	$saldo = 1000;

	function sacar($valor){
		global $saldo;
		$saldo = $saldo - $valor;
	}
	function depositar($valor){
		global $saldo;
		$saldo = $saldo + $valor;

	}

	depositar(500);
	sacar(200);
	echo "novo saldo: " . $saldo . "<br>";

	///////////////////////////////////////////////////////////
	function calculaFatorial($numfatorial)
	{
		if($numfatorial <= 1){
			$numfatorial - $numfatorial;
		} else {
			$numfatorial *= calculaFatorial($numfatorial-1);
		}
		return $numfatorial;
	}

	$num = 5;
	echo calculaFatorial($num);
	/////////////////////////////////////////////////////////////

	?>




</body>
</html>


                                                           
