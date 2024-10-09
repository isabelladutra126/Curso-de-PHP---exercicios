<?php
require_once 'user.php';

$usuario = new Usuario("Isabella", "12345678901", "rua ABDCD");


echo $usuario->nome;
echo "<br>";
echo $usuario->cpf;
echo "<br>";
echo $usuario->endereco;
echo "<br>";

?>