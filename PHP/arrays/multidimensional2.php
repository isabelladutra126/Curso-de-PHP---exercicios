
<!DOCTYPE html>
<html>
<head>
	<title>Programa PHP</title>
</head>
<body>

	<?php 
	//criar uma array vazia
	$languages = array();
 	//inserir dados na array 
	$languages['PHP'] = array('primeira_versao' => '1995',
							'ultima_versao' => '7.4.7',
							'desenvolvida_by' => 'Rasmus Lerdof',
			   'descrição' => array('extensão' => '.php', 
			   				        'license' => 'PHP License')
						   );

	$languages['Python'] = array('primeira_versao' => '1991',
	 							 'ultima_versao' => '3.8.0',
	 							 'desenvolvida_by' => 'Guido van Rossum',
	 			'descrição' => array('extensão' => '.py', 
	 								 'license' => 'Python Software Foudation License')
	 						);

	//testes//

	///////////////////////////////////////////////
	print_r($languages['Python']['descrição'])
	?>

                                                           
</body>
</html> 