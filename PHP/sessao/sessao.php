<?php
session_start();
$_SESSION['nome'] = "Isabella";
$_SESSION['sobrenome'] = "Dutra";
$_SESSION['data'] = date('d/m/y', time());

echo "<h2> As variaveis de sessão foram criadas. </h2>";
echo "<a href='mostrasessao.php'>Dados da sessão</a>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sessão 1</title>
</head>
<body>


</body>
</html>