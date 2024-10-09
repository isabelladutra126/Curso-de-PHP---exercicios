<?php
include_once("conectar.php");
$nome = $_POST['nome'];

$sql = "DELETE FROM usuarios WHERE nome = '$nome' ";

$resultado = mysqli_query($conexao2, $sql);

echo "<br> Exclusão realizada.";

mysqli_close($conexao2);
?>
