<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	//repeticao indeterminada
	$x = 1;
	do{
		echo "O numero é: $x <br>";
		$x++;
	} while ( $x <= 100);

	//repeticao determinada (util para imprimir arrays ou todos os registros de uma consulta de um Banco de Dados)
	for ($cont = 0 ; $cont <10 ; $cont++) { 
		echo "a variavel vale $cont <br>";
	};

	echo "contagem regressiva";
	for ($regressiva = 20 ; $regressiva >= 0; $regressiva--) {
		echo $regressiva ." , ";
	}
	echo "fim <br>";

	$arrayName = array('1' , '2', '3', '4' );
	foreach ($arrayName as $numeros) {
		echo"$numeros <br>";
	}

	foreach ($variable as $key => $value) {
		# code...
	}
	?>



</body>
</html>


                                                           
