
<!DOCTYPE html>
<html>
<head>
	<title>Programa PHP</title>
</head>
<body>
	<?php 
	$opcao = "opa";
	switch ($opcao) {
	case 's':
		echo "sim";
	break;
	case 'n':
		echo "nao";
		break;
	default:
		echo "invalid";
		break;
	}
	?>

</body>
</html>