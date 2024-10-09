
<!DOCTYPE html>
<html>
<head>
	<title>Programa PHP</title>
</head>
<body>
	<?php 
	$prova1 = 2;
	$prova2 = 8;
	$prova3 = 3;
	$media = ($prova1 + $prova2 + $prova3) / 3; 
	if ($media < 8 ) {
		echo "estude mais";
	}
	elseif ($media < 9) {
		echo "quase lá";
	}
		elseif ($media = 10) {
			echo "boaaaa";
		}
			else{
				echo "estude mais";
			}
	?>

</body>
</html>