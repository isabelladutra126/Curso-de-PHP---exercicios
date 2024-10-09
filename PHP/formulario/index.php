
<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>

	<!-- No GET, envia-se o formulario e os dados aparecem na URL
	ex.: cadastro.php?nome=Andreia&endereco=Rua+das+Flores -->


	<form name="login" action="cadastro.php" method="post">

		Nome:	 <input type="text" name="nome" id="nome"> <br>
		<br> Endereço: 	<input type="text" name="endereco" id="endereco"/> <br> 
		<br> Cidade: 	<input type="text" name="cidade" id="cidade"/> <br> 

		<br> <input type="submit" name="botao" value="enviar"/>
		<input type="reset" name="botao" value="limpar"/>

	</form>


	<!-- se a requisiçao for via post : $_POST['nome'];
										$_GET['nome'];-->


                                                           
</body>
</html> 