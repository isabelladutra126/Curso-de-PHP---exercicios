
<!DOCTYPE html>
<html>
<head>
	<title>Programa PHP</title>
</head>
<body>
	<?php 
	$dadosPessoa = array('nome' => "Bruno", 
	                     'idade' => 19 ,
		                 'sexo'  => "Masculino",
		                 'email' => "brunobiletsky@gmail.com");
	print_r($dadosPessoa);
	echo "<br>" . $dadosPessoa["email"];
	$dadosPessoa[] = "info";
	$dadosPessoa[] = "pessoa";
	$dadosPessoa["endereço"] = "rua slaoq";
	print_r($dadosPessoa);
	?>
                                                           
</body>
</html> 