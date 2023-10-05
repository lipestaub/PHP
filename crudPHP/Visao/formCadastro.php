<?php
	include("../modelo/conexaoBD.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src="../JS/cliente.js"></script>
</head>
	
<body>
	<form action="" method="POST">
		Nome: <input type="text" id="Nome" name="Nome"><br>
		Idade: <input type="text" id="Idade" name="Idade">
		
		<input type="button" id="Inserir" onclick="inserirCadastro()" value="gravar">

	</form>
	
	<br>
	<input type="button" onclick="telaListar()" value="Lista">
</body>
</html>
