<?php
$nome_cookie = "usuario";
$valor_cookie = "Isabella Dutra";
setcookie($nome_cookie, $valor_cookie, (time() + 3600));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookie!</title>
</head>
<body>
<?php
	if (!isset($_COOKIE[$nome_cookie])) {
		echo "Cookie " . $nome_cookie . " não estava atribuido!";
	} else {
		echo "Cookie " . $nome_cookie .  " esta atribuido! <br>";
		echo "Usuário: " . $valor_cookie;	
	}
?>
</body>
</html>