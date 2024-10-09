
<!DOCTYPE html>
<html>
<head>
	<title>Programa PHP</title>
</head>
<body>
	
	<?php 
	$arrayMulti = array('arrayNumerico' => array ("item1", 
												 "item2", 
												 "item3" ), 

						'associativeArray' => array
						('nome' =>'zabela', 
						 'idade' => '21', 
						 'sexo' => 'muier')
	); 

	//testes//

	print_r($arrayMulti);
	///////////////////////////////////////////////
	echo "<br>" . $arrayMulti['arrayNumerico'][0]; 
	echo "<br>" . $arrayMulti['arrayNumerico'][1];  
	echo "<br>" . $arrayMulti['arrayNumerico'][2];  
	///////////////////////////////////////////////
	echo "<br>" . $arrayMulti['associativeArray']['nome'];      
	echo "<br>" . $arrayMulti['associativeArray']['idade'];  
	echo "<br>" . $arrayMulti['associativeArray']['sexo'];     
	?>

                                                           
</body>
</html> 